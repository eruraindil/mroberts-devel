          <hr>
          <?php if($title != "home"):?>
          <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
              <ul class="nav nav-justified">
                <?php foreach($menu as $t => $url) {
                  echo "<li";
                  echo ($title == $t ? " class='active'" : "");
                  echo "><a href='$url'>$t</a></li>\n";
                }?>
              </ul>
            </div>
          </div>
          <?php endif;?>
          <p id="footer"><small>&copy;<?php echo date("Y",strtotime("now"));?> Matthew Roberts<abbr title="I found out that you can trademark anything that you claim ownership of! Of course it is meaningless to put a trademark on a name because it is implicitly yours but it is fun.">&trade;</abbr></small></p>
				</div>
      </div>
      <div class="row" id="sm-icons">
        <div class="col-md-10 col-md-offset-1" id="sm-icons">
          <a href="http://twitter.com/eruraindil"><img src="img/twitter_16x16.png" /></a> <a href="http://www.facebook.com/eruraindil"><img src="img/facebook_16x16.png" /></a> <a href="http://www.linkedin.com/pub/matthew-roberts-rhb/28/b55/115"><img src="img/linkedin_16x16.png" /></a> <a href="https://plus.google.com/105453048569831500209"><img src="img/gplus_16x16.png" /></a> <a href="https://github.com/eruraindil"><img src="img/github_16x16.png" /></a>
          
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>