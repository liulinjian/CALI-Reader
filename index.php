<?php 
    require("config.php");
    session_start();
    require("lib/login.inc")
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CALI Reader Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body>
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://reader.cali.org/">CALI Reader</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://reader.cali.org/">Home</a></li>
              <li><a href="http://elangdell.cali.org/">eLangdell</a></li>
              <li><a href="http://www.cali.org/">CALI</a></li>
            </ul>
          <?php if (!$_SESSION['user']['id']) : ?>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="register.php">Register</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="#">
            <div class="form-group">
              <input type="text" placeholder="Username" class="form-control" name="username">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          <?php endif; ?>
          <?php if ($_SESSION['user']['id']) : ?>
          <ul class="nav navbar-nav navbar-right">
          <li class="username">Hello <?php echo $_SESSION['user']['username'] ?>.</li>  
          <li><a href="logout.php">Logout</a></li>
          </ul>
          <?php endif; ?>
        </div><!--/.nav-collapse --> 
      </div>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Welcome to CALI Reader</h1>
        </div>
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Thank you for previewing the CALI Reader!</h3>
            </div>
            <p class="text-warning">This is the CALI Reader and it is brand new and not completely
            finished yet. You will find that some things don't work as expected or are missing
            altogether. </p>
            <p class="text-warning">The primary feature of the CALI Reader right now is that it lets
            you read eLangdell EPUB files without having to download them to your PC or mobile device.
            This allows faculty and others to preview eLangdell titles more easily.</p>
        </div>
        <p class="lead">Select a CALI eLangdell title below and read the book online.</p>
        <p>
            <ul>
                <li><a href="reader.php?epub=EthicsofTaxLawyering07292013">The Ethics of Tax Lawyering, Second Edition</a></li>
                <li><a href="reader.php?epub=Property1Turner07292013">Property Volume 1</a></li>
            </ul>
        </p>
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted credit"><a href="http://www.cali.org"><img alt="" src="http://www.cali.org/sites/default/files/CALI_Logo_White-footer.png" /></a>
            <a href="http://www.cali.org"> The Center for Computer-Assisted Legal Instruction</a>
            All Contents Copyright The Center for Computer-Assisted Legal Instruction</p>
      </div>
    </div>


    <!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    
  </body>
</html>
