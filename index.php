<!doctype html>
<html>
  <head>
    <title>Colorful Limo</title>
    <link rel="stylesheet" type="text/css" href="css.css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet" type="text/css">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta name="description" content="Oddly epic electronic music by Owen Johnson" />
	<meta name="author" content="http://www.owenjohnson.info" />
	<script type="text/javascript" src="jquery-1.4.2.min.js" ></script>
  </head>

  <body>
    <br />
    <div class="title bubble">
      <h1>COLORFUL LIMO</h1>
	</div> 
    <div>
        <div class="stackleft">
            <?php include("playlist.php"); ?>
        </div>
        <div class="stackright">
            <div id="player" class="album bubble">
                <audio>Owen Johnson makes really cool music, and it's loading right here! </audio>
            </div>
            <div id="about" class="album bubble">
                <?php include("about.html"); loadRandomSong(); ?>
            </div>
        </div>
    </div>
    <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2Fcolorful.limo&amp;layout=standard&amp;show_faces=true&amp;width=800&amp;action=recommend&amp;colorscheme=light&amp;height=80" style="frameborder:0; border:0; scolling: no; overflow:hidden; width:800px; height:80px; allowTransparency: true;"></iframe>
    <hr />
    <div class="footer"> 
	    Music and website created from scratch by <a href="http://owenjohnson.info" target="_blank">Owen Johnson</a> - &copy; 2011 Owen Johnson 
    </div>
    
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
    </body>
</html>
