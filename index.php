<?

require_once 'config.php';

$theme = 1;

if (isset($_REQUEST['t']) && is_numeric($_REQUEST['t'])) {
  $theme = $_REQUEST['t'];
}

?>

<!DOCTYPE html>
<html>

<head>
<title>kevin olson - resume</title>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

<link href="/img/favicon.ico" rel="icon" type="image/x-icon" />

<link rel="stylesheet" href="/css/styles.php?t=<?=$theme?>" type="text/css" media="all" />

<script type="text/javascript" src="/jst/lib.js"></script>
<script type="text/javascript" src="/jst/clock.js"></script>
<script type="text/javascript" src="/jst/script.js"></script>

</head>

<body>

<div class="outer_capsule">

  <div class="inner_capsule">

  <div class="contact">
    <div>kevin scott olson junior</div>
    <div>(949) 290 - 8989</div>
    <div class="email" data-input='<input readonly type="text" value="ke@vin.so.sh" />'>ke@vin.so</div>
  </div>

  <?require_once 'tpl/_config.php'; ?>
  <?require_once 'tpl/_clock.php'; ?>

  <div class="clear">&nbsp;</div>

</div>

  <div class="name">
    <div class="clear">&nbsp;</div>
    <div class="stitch">kevin olson</div>
    <div class="clear">&nbsp;</div>
  </div>
  <div class="corner right"></div>
  <div class="corner left"></div>

<div class="inner_capsule">

<div class="clear"></div>

<div class="header">work</div>
<div class="clear"></div>

<div class="section_outer">
  <div class="section work">

  <div class="item item_studio" data-item="studio"><div class="bg">
    <div class="clear">&nbsp;</div>
    <div class="title">Facebook Studio</div>
    <div class="detail">Community for agencies and marketers to share their work.</div>
  </div></div>

  <div class="item item_cards" data-item="cards"><div class="bg">
    <div class="clear">&nbsp;</div>
    <div class="title">Yahoo! Mail Crowd Cards</div>
    <div class="detail">Create, send, and tag your friends with custom online gift cards</div>
  </div></div>

  <div class="item item_dolby" data-item="dolby"><div class="bg">
    <div class="clear">&nbsp;</div>
    <div class="title">Dolby Update Theatre</div>
    <div class="detail">Adam west read off 80+ Facebook statuses live on dolby's page</div>
  </div></div>

  <div class="item item_game" data-item="game"><div class="bg">
    <div class="clear">&nbsp;</div>
    <div class="title">Adidas Game Face</div>
    <div class="detail">Show adidas your game face to be in a commercial during the MTV awards</div>
  </div></div>

  <div class="item item_coke" data-item="coke"><div class="bg">
    <div class="clear">&nbsp;</div>
    <div class="title">Coca-Cola Social Bubbler</div>
    <div class="detail">Social network comparison between brands for Coca Cola</div>
  </div></div>

  <div class="item item_gj" data-item="gj"><div class="bg">
    <div class="clear">&nbsp;</div>
    <div class="title">Yahoo! Grudge Judge</div>
    <div class="detail">Facebook app for Yahoo! sports to settle sport grudges</div>
  </div></div>

  <div class="item item_multi" data-item="multi"><div class="bg">
    <div class="clear">&nbsp;</div>
    <div class="title">Kohler Multi Flushers</div>
    <div class="detail">"Elf Yourself" type app with wizard-style interface creating custom videos</div>
  </div></div>


  <div class="clear"></div>
  </div>
</div>


<div class="header">timeline</div>
<div class="clear"></div>


<div class="section_outer">
  <div class="section timeline">
    under construction
  </div>
</div>


<div class="header">knowledge</div>
<div class="clear"></div>


<div class="section_outer">
  <div class="section knowledge">

    <div class="item frontend" data-item="frontend"><div class="bg">
      <div class="title">front end</div>
      <div class="detail">html5 / javascript / css</div>
    </div></div>
    <div class="item backend" data-item="backend"><div class="bg">
      <div class="title">back end</div>
      <div class="detail">php / mysql to nosql / mvc</div>
    </div></div>
    <div class="item ops" data-item="ops"><div class="bg">
      <div class="title">operations</div>
      <div class="detail">aws /  ec2 / deployment</div>
    </div></div>

  </div>
</div>

<div class="clear"></div>

<div class="overlay">&nbsp;</div>


<?require 'tpl/_code.php'; ?>

<?require 'tpl/_item_studio.php'; ?>
<?require 'tpl/_item_coke.php'; ?>
<?require 'tpl/_item_gj.php'; ?>
<?require 'tpl/_item_cards.php'; ?>
<?require 'tpl/_item_dolby.php'; ?>
<?require 'tpl/_item_game.php'; ?>
<?require 'tpl/_item_multi.php'; ?>

<?require 'tpl/_knowledge.php'; ?>

  </div>

  <div class="footer">
    <div class="badges">
      <a 
        href="http://validator.w3.org/check?uri=ke.vin.so&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0" 
        target="_blank"><div class="html5">&nbsp;</div></a>
      <a 
        href="http://jigsaw.w3.org/css-validator/validator?uri=ke.vin.so&amp;profile=css3&amp;usermedium=all&amp;warning=1&amp;vextwarning=&amp;lang=en" 
        target="_blank"><div class="css3">&nbsp;</div></a>
    </div>
    <div class="source"><span class="icon-zoom-in"></span></div>
  </div>

</div>


<div class="preload">
  <img alt="" src="/img/work_gj_bg.png" />
  <img alt="" src="/img/work_studio_bg.png" />
  <img alt="" src="/img/work_coke_bg.png" />
  <img alt="" src="/img/work_cards_bg.png" />
  <img alt="" src="/img/work_dolby_bg.png" />
  <img alt="" src="/img/work_game_bg.png" />

  <img alt="" src="/img/work_multi_bg.png" />

  <img alt="" src="/img/knowledge_frontend_bg.png" />
  <img alt="" src="/img/knowledge_backend_bg.png" />
  <img alt="" src="/img/knowledge_ops_bg.png" />
</div>


<div class="zoom">
  <div class="close"><span class="icon-cancel"></span></div>
  <div class="clear">&nbsp;</div>
  <img alt="" src="/img/zoom.png" />
</div>

<script type="text/javascript">

  $(document).ready(function() {
    k.i();
    clock.i();
  });

</script>



</body>
</html>
