<?php
	function makeHeader($title, $description, $keywords)
	{?>
<!doctype html>
<html>
  <head>
    <title><?php echo($title);?></title>
    <link rel="stylesheet" type="text/css" href="css.css" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta name="description" content="<?php echo($description);?>" />
	<meta name="keywords" content="<?php echo($keywords);?>" />
	<meta name="author" content="http://www.owenjohnson.info" />
	<script type="text/javascript" src="jquery-1.4.2.min.js" ></script>
	<!--<script type="text/javascript" src="dsp.js"></script>
	<script type="text/javascript" src="pocket.js"></script>
	<script type="text/javascript" src="pocket.api.js"></script>
	<script type="text/javascript" src="pocket.audio.js"></script>-->
  </head>

  <body>
    <br />
    <div id="player" class="center album">
        <audio>If you can see this, you need to update your web browser. </audio>
    </div>
    <div class="title">
      <p>Colorful Limo</p>
	</div> 
    <!--<table class="album">
      <tr>
      	<td class="center"><a href="playlist.php">Music</a></td>
      	<td class="center"><a href="http://owenjohnson.info/cat/music" target="_blank">News</a></td>
        <td class="center"><a href="contact.php">Contact</a></td>
        <td class="center"><a href="bio.php">Biography</a></td>
        <td class="center"><a href="about.php">More</a></td>
      </tr>
    </table>-->
<?php }?>
