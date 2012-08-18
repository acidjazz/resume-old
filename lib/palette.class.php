<?

class palette {


  private $_1 = array('655643','80bca3','f6f7bd','e6ac27','bf4d28');

  private $_2 = array('e8ddcb','cdb380','036564','033649','031634');

  private $_3 = array('e7e4d5','c84648','fff3db','d3c8b4','703e3b');

  private static $_t = false;

  public static function i($file, $theme=1) {

    $factory = new palette();
    $factory->_t = $factory->{'_'.$theme};

    return $factory->parse($file);

  }

  public function parse($file) {

    $css = file_get_contents($file);

    for ($i = 0, $max = count($this->_t); $i != $max; $i++) {
      $css = str_replace('$'.($i+1), '#'.$this->_t[$i], $css);
      $css = str_replace('!'.($i+1), $this->rgb($this->_t[$i]), $css);
    }

    return $css;

  }

  private function rgb($hex) {

    $rgb = array();
    for ($x = 0; $x < 3; $x++){
      $rgb[$x] = hexdec(substr($hex,(2*$x),2));
    }

    return implode(', ', $rgb);

  }

}
