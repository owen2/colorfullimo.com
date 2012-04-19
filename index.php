<!doctype html>
<html>
  <head>
    <!-- Add the following three tags inside head -->
    <meta itemprop="name" content="Colorful Limo">
    <meta itemprop="description" content="Oddly Epic Techno by Owen Johnson">
    <meta itemprop="image" content="http://colorfullimo.com/pixels/inside.jpg">
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
            <div class="bubble">
                <p class="album">Some Fans</p>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) {return;}
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>

                <div class="fb-facepile" data-href="http://facebook.com/colorful.limo" data-size="large" data-width="400" data-max-rows="3" data-colorscheme="dark"></div>
            </div>
        </div>
    </div>
    <div class="g-plusone" data-annotation="inline"></div>
    
    <!--<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2Fcolorful.limo&amp;layout=standard&amp;show_faces=true&amp;width=800&amp;action=recommend&amp;colorscheme=light&amp;height=80" style="frameborder:0; border:0; scolling: no; overflow:hidden; width:800px; height:80px; allowTransparency: true;"></iframe>-->
    <hr style="clear:both" />
    <div class="footer"> 
	    Music and website created from scratch by <a href="http://owenjohnson.info" target="_blank">Owen Johnson</a> - &copy; 2011 Owen Johnson 
    </div>
    
    <!-- Place this render call where appropriate -->
    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
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
    </body>
</html>
