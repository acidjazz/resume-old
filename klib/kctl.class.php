<?

/* kf controller class */

class kctl {

  private $_controller;
  private $_action;
  private $_arg;

  public function __construct($uri) {

    $params = explode('/', ($pos = strpos($uri, '?')) ?  substr($uri, 0, $pos) : $uri);

    $this->_controller = isset($params[1]) && !empty($params[1]) ? $params[1].'_ctl' : 'index_ctl';
    $this->_action = isset($params[2]) && !empty($params[2]) ? $params[2] : 'index';
    $this->_arg = isset($params[3]) && !empty($params[2]) ? $params[3] : false;

  }

  public function start() {

    if (!class_exists($this->_controller)) {
      trigger_error('controller not found');
      return false;
    }

    $ctrl = new $this->_controller();
    $ctrl->{$this->_action}($this->_arg);

  }

}
