<!DOCTYPE html>
<html lang="en">
<head>
  <title>TKC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
   
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
  
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    .navbar-inverse {
    background-color: #2220!important;
    border-color: #08080800!important;
}
.navbar-inverse .navbar-nav>li>a {
    color: #000;
    font-weight: bold;
    font-size: 20px;
    font-family: serif;
}
.navbar {
    margin-top: 40px;
    margin-bottom: 0;
    border-radius: 0;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="tkc_logo2.png" style="width: 90px; height: auto; margin-top: -20px;"></a>
    </div>
    <div class="collapse navbar-collapse pull-right" id="myNavbar">
      <ul class="nav navbar-nav">
       <!--  <li class="active"><a href="#">Home</a></li> -->
        <li><a href="index.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="projects.php">PROJECTS</a></li>
        <li><a href="#">BLOG</a></li>
        <li><a href="contactus.php">CONTCT US</a></li>
      </ul>
     <!--  <ul class="nav navbar-nav navbar-right">
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul> -->
    </div>
  </div>
</nav>