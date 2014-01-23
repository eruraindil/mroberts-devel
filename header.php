<!DOCTYPE html>
<html>
  <head>
    <title><?php echo ucwords($title);?> - mroberts.me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> -->
    <link href="fonts/ffftusj_bold_macroman/stylesheet.css" rel="stylesheet" media="screen">
    <link href="css/mroberts.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <?php include_once('analytics.php');?>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./">mroberts.me</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <?php
                  $menu = array(
                    "home" => "./",
                    "bio" => "./bio",
                    "resum&eacute;" => "./resume",
                    "contact" => "./contact",
                    "blog" => "http://blog.mroberts.me/"
                  );
                  foreach($menu as $t => $url) {
                    echo "<li";
                    echo ($title == $t ? " class='active'" : "");
                    echo "><a href='$url'>$t</a></li>\n";
                  }?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">