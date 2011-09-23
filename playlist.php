<?php 
	require_once("head.php");
	$db = mysql_connect("playlist.colorfullimo.com",clpl,afewdots);
	$q = "USE `colorful_limo_playlist`";
	mysql_query($q);
	echo(mysql_error());
	
	function renderAlbums()
	{
		$q = "SELECT * FROM `Albums` ORDER BY `year` DESC";
		$result = mysql_query($q);
		echo(mysql_error());
		while($a = mysql_fetch_array($result))
		{
			echo(mysql_error());
			renderAlbum($a);
		}
	}
	
	function renderAlbum($a)
	{
		echo('<div class="album"> ' . $a['name'] . ' <span class="albumyear">'.$a['year'].'</span>');
		echo('<div style="float: right">'.$a['buylink']."</div>");
		$q = "SELECT * FROM `Songs` WHERE `album` = " . $a['id'] . " ORDER BY `track`";
		$result = mysql_query($q);
		echo(mysql_error());
		while($s = mysql_fetch_array($result))
		{
			echo('<a onClick="$(\'#player\').load(\'player.php?song=' . $s['id'] . '\');"><div class="song">' . $s['track']);
			echo(' ' . $s['title'] . '</div></a>');
		}
		echo("</div>");
	}
?> 
<?php makeHeader("Music | Colorful Limo", "Discover the music of Colorful Limo and listen for free. Buy CDs too!", "Colorful Limo, Owen Johnson, Discography, free, Wootalicious, Dreamfire, Techno, Indie, Experimental, Electronica, creative commons, remix, experimental"); ?>
	<!--<div id="player" class="album">
        <audio>If you can see this, you need to update your web browser. </audio>
    </div>-->
<?php 
		renderAlbums();
		echo(mysql_error());
		include("buytable.php");	
		include("foot.php");
	    
	    $q = "SELECT * FROM `Songs` WHERE `album` = 1 ORDER BY rand()";
	    $result = mysql_query($q);
		echo(mysql_error());
		$s = mysql_fetch_array($result);
		?><script type="text/javascript">$("#player").load("player.php?song=<?php echo($s['id']); ?>");</script><?php
		mysql_close($db);
?>
