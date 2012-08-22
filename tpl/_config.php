
    <div class=<?=isset($_REQUEST['t']) ? '"config config_open"' : '"config"'?>>

    <div class="logo_config">
      <div>&nbsp;</div>
      <div>&nbsp;</div>
      <div>&nbsp;</div>
    </div>

    <div class="code_view code_view_theme" data-data="theme"></div>
    <div class="config_theme">
    <?foreach (palette::$_themes as $_num=>$_theme): ?>
      <a href="/?t=<?=$_num?>">
      <div class="theme <?=$theme == $_num ? 'theme_active' : ''?>">
      <?for ($i = 0; $i != 5; $i++): ?>
      <div class="color" style="background-color: #<?=$_theme[$i]?>"></div>
      <?endfor?>
      <div class="clear">&nbsp;</div>
      </div>
    </a>
    <?endforeach?>

    <div class="clear">&nbsp;</div>
    </div>

  </div>

