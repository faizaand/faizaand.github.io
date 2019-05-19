<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Faizaan Datoo is a high school student and developer, and works on projects which are showcased on this website.">
  <meta name="author" content="Faizaan Datoo">
  <link rel="icon" href="favicon.ico">

  <title><?php if (isset($_GET['title'])) {
    echo $_GET['title'];
}?>Faizaan's Portfolio</title>

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome-->
  <link href="/css/font-awesome.min.css" rel="stylesheet">


  <link href="/css/prism.css" rel="stylesheet">
  <link href="/css/main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="/">Faizaan's Portfolio</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="social github">
              <a href="https://github.com/faizaand" target="blank">
                <i class="fa fa-github"></i>
                <span class="visible-xs visible-xs-inline">GitHub</span>
              </a>
            </li>
            <li class="social twitter">
              <a href="https://twitter.com/@SirFaizdat" target="blank">
                <i class="fa fa-twitter"></i>
                <span class="visible-xs visible-xs-inline">Twitter</span>
              </a>
            </li>
            <li class="social quora">
              <a href="https://www.quora.com/profile/Faizaan-Datoo" target="blank">
                <i class="fa fa-quora"></i>
                <span class="visible-xs visible-xs-inline">Quora</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
