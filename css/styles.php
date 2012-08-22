<?

require_once '../config.php';

header('Content-type: text/css');

$theme = 1;

if (isset($_REQUEST['t']) && is_numeric($_REQUEST['t'])) {
  $theme = $_REQUEST['t'];
}

require_once 'main.css';
require_once 'clock.css';
require_once 'fonts.css';
echo palette::i('theme_'.$theme.'.css', $theme);

?>
