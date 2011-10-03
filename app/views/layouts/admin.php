<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php echo $this->html->charsetTag("UTF-8"); ?>
    <title><?php echo $title_for_layout; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="flavorPHP" />
		<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>
	</head> 
	<body> 

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">Codice CMS</a>
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><?php echo $this->html->linkTo("Posts","admin");?></li>
            <li><?php echo $this->html->linkTo("Comments","comments"); ?></li>
            <li><?php echo $this->html->linkTo("Configuration","admin/config"); ?></li>
            <li><?php echo $this->html->linkTo("Logout","admin/logout"); ?></li>
          </ul>
           <p class="pull-right">Logged in as <a href="#">username</a></p>
        </div>
      </div>
    </div>

  <div class="container">
    <div class="content">
      <?php echo $content_for_layout ?>
    </div>
  </div>


	</body>
</html>