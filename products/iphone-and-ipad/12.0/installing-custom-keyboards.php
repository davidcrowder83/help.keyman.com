<?php
  $embedded = isset($_GET["embed"]) ? $_GET["embed"] == "true" : false;

  require_once('includes/template.php');
  
  head([
    'title' => 'Installing Custom Keyboards - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css'],

    'showMenu' => true,
    'embedded' => $embedded
  ]);
?>

<?php
  $titlePrefix = $embedded ? "" : "Keyman for iPhone and iPad:  ";
?>
<h2><?=$titlePrefix?>Installing Custom Keyboards</h2>

<p>
  Step 1) Click the link to your custom keyboard package file<br/>
  The link in this example is for GFF Amharic 7 keyboard.<br/>
  <img src="<?= cdn('img/app/12.0/dist-url-screen-i.png')?>">
  <br/>
  Safari will display an option to open the KMP file with Keyman<br/>
  <img src="<?= cdn('img/app/12.0/dist-kmp-open-i.png')?>">
  <br/><br/>
  Step 2) Click Open in "Keyman"<br/>
  Keyman for iPhone and iPad will parse the metadata in the package. Some packages include documentation that will be
  displayed at this time.<br/>
  <img src="<?= cdn('img/app/12.0/dist-welcome-i.png')?>">
  <br/><br/>
  Step 3) Click the top right "Install" button.</br/>
  The keyboard from the keyboard package is successfully installed!<br/>
  <img src="<?= cdn('img/app/12.0/dist-kmp-success-i.png')?>">
  <br/>
  All the keyboards in the package are installed as a group. In this example, the package only has the "GFF Amharic 7"
  keyboard, so it becomes the active keyboard<br/>
  <img src="<?= cdn('img/app/12.0/dist-install1-i.png')?>">
  <br/>

  To learn how to create a custom installable keyboard, <a href="http://help.keyman.com/developer/11.0/guides/distribute/">click here</a>.
</p>

<h2>Help Index</h2>

<?php
$embedQuery = $embedded == true ? "?embed=true" : "";
$indexName = $embedded ? "Getting Started" : "Keyman for iPhone and iPad help home";
?>

<ul>
  <li><a href='index.php<?=$embedQuery?>'><?=$indexName?></a></li>
  <li><a href='switching-between-keyboards.php<?=$embedQuery?>'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php<?=$embedQuery?>'>Uninstalling keyboards</a></li>
  <li><a href='installing-system-keyboard.php<?=$embedQuery?>'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php<?=$embedQuery?>'>Installing fonts</a></li>
  <li><a href='installing-custom-keyboards.php<?=$embedQuery?>'>Installing custom keyboards</a></li>
  <li><a href='using-keyman-browser.php<?=$embedQuery?>'>Using the Keyman Browser</a></li>
</ul>
