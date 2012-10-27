<?

require_once '../config.php';

header('Content-type: text/css');

$theme = $_REQUEST['t'];

require_once 'main.css';
require_once 'clock.css';
require_once 'fonts.css';
require_once 'timeline.css';
echo palette::i('theme_'.$theme.'.css', $theme);

?>
