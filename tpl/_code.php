<pre class="code_clock code">
<div class="close">close</div>

<h2>css3/javascript imageless clock</h2>

<h3>javascript</h3>
<?=k::highlight(file_get_contents('jst/clock.js'), 'js')?>

<h3>CSS</h3>
<?=k::highlight(file_get_contents('css/clock.css'), 'css')?>

<h3>HTML</h3>
<?=k::highlight(file_get_contents('tpl/_clock.php'), 'html')?>

<div class="close">close</div>
</pre>

<pre class="code_theme code">
<div class="close">close</div>

<h2>css parsed themes</h2>

<h3>php</h3>
<?=k::highlight(file_get_contents('lib/palette.class.php'), 'php')?>

<h3>php (generated css)</h3>
<?=k::highlight(file_get_contents('css/styles.php'), 'php')?>

<h3>CSS (parsed theme)</h3>
<?=k::highlight(file_get_contents('css/theme_1.css'), 'css')?>

<h3>HTML/PHP (config bar)</h3>
<?=k::highlight(file_get_contents('tpl/_config.php'), 'php')?>

<div class="close">close</div>
</pre>


