
<?

/* mongoDB simple active record layer */

class kcol {

  private static $_col = array();
  private static $_db = false;
  private static $_grid = false;
  private $_data = array();

  public function __construct($id=null) {

    // model matching data passed in
    if (is_array($id) && count($id) > 0) {
      $this->_data = $id;
    }

    // mongoid has been passed in
    if (is_object($id) && ($id instanceof MongoId)) {
      $this->_data = self::col()->findOne(array('_id' => $id));
    }

    // non-mongo mongoid has been passed in
    if (is_string($id) && strlen($id) == 24) {
      $this->_data = self::col()->findOne(array('_id' => new MongoId($id)));
    }

  }

  public static function i($data) {
    $class = get_called_class();
    $that = new $class;
    $that->_data = $data;
    return $that;
  }

  public static function db() {

    if (!self::$_db) {
      if (defined('MONGO_REPLICA_SET')) {
        $mongo = new Mongo(MONGO_HOST, array('replicaSet' => MONGO_REPLICA_SET));
      } else {
        $mongo = new Mongo(MONGO_HOST);
      }
      self::$_db = $mongo->{MONGO_DB};
    }

    return self::$_db;
  }

  public static function grid() {
    if (!self::$_grid) {
      self::$_grid = new MongoGridFS(self::db());
    }
    return self::$_grid;
  }

  public static function col() {

    if (!isset(self::$_col[get_called_class()])) {
      self::$_col[get_called_class()] = self::db()->{get_called_class()};
    }

    return self::$_col[get_called_class()];
  }

  public function __get($name) {

    if (isset($this->_data[$name])) {
      return $this->_data[$name];
    }
  }

  public function __isset($name) {
    return isset($this->_data[$name]);
  }

  public function __unset($name) {

    if (isset($this->_data[$name])) {
      unset($this->_data[$name]);
      return true;
    }

    return false;
  }

  public function __set($name, $value) {

    if (isset($this->_types) && in_array($name, array_keys($this->_types))) {

      switch ($this->_types[$name]) {

        case 'id' :
          if (is_object($value) && ($value instanceof MongoId)) {
            return $this->_data[$name] = $value;
          } else {
            return $this->_data[$name] = new MongoID($value);
          }

        case 'date' :
          if (is_object($value) && ($value instanceof MongoDate)) {
            return $this->_data[$name] = $value;
          } else {
            return $this->_data[$name] = new MongoDate($value);
          }

        case 'binary' :
          if (is_object($value) && ($value instanceof MongoDate)) {
            return $this->_data[$name] = new MongoBinData($value);
          } else {
            return $this->_data[$name] = $value;
          }

      }
    }

    return $this->_data[$name] = $value;
  }

  public static function __callStatic($name, $args) {
    return call_user_func_array(array(self::col(), $name), $args);
  }

  public function save($data=false, $options=array()) {

    if ($data != false) {
      foreach ($data as $key=>$value) {
        $this->$key = $value;
      }
    }

    return self::col()->save($this->_data,$options);

  }

  public function remove($data=false, $options=array()) {

    if ($data != false) {
      if (self::col()->remove($data, $options)) {
        unset($this->_data);
        return true;
      }
    }


    if (isset($this->_data) && self::col()->remove($this->_data, $options)) {
      unset($this->_data);
      return true;
    }

    return self::col()->remove();

  }

  public function data() {

    $data = $this->_data;

    if (isset($this->_ols) && is_array($this->_ols)) {
      foreach ($this->_ols as $ol) {
        $data[$ol] = $this->$ol;
      }
    }

    return $data;

  }

  public function id($raw=false) {

   if (!isset( $this->_data['_id'])) {
     return false;
   }

   if ($raw) {
     return $this->_data['_id']->{'$id'};
   }

   return $this->_data['_id'];
  }

  public function exists() {
   return isset($this->_data['_id']);
  }

}
