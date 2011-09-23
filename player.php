<?php
	$db = mysql_connect("playlist.colorfullimo.com",clpl,afewdots);
	$q = "USE `colorful_limo_playlist`";
	mysql_query($q);
	echo(mysql_error());
	$q = 'SELECT * FROM `Songs` LEFT JOIN `Albums` ON `Songs`.`Album`=`Albums`.`id` WHERE `Songs`.`id` = ' . $_REQUEST['song'];
	$result = mysql_query($q);
	$song = mysql_fetch_array($result);
?>

<?php //echo($song['name']); ?> <!--<br />-->
<audio controls="controls" autoplay="autoplay">
    <source src="samples/<?php echo($song['path']); ?>" type="audio/ogg" />
    <source src="samples/<?php echo($song['path']); ?>.mp3" type="audio/mpeg" />
<object type="application/x-shockwave-flash" 
data="http://flash-mp3-player.net/medias/player_mp3.swf" width="200" 
height="20">
    <param name="movie" 
value="http://flash-mp3-player.net/medias/player_mp3.swf" />
    <param name="bgcolor" value="#ffffff" />
    <param name="FlashVars" 
value="mp3=http%3A//colorfullimo.com/samples/<?php 
echo($song['path']);?>.mp3" />
There is a nifty music player here, but your user agent doesn't support 
html5 or flash or fun.
</object>
</audio>
<?php echo($song['title']);?>
<script type="text/javascript">
history.pushState(stateObj, "<?php echo($song['title']);?>", "http://colorfullimo.com/?song="<?php echo($song['id']); ?>");
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20126436-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
