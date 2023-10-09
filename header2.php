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
  .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover {
    color: #fff;
    background-color: #08080847;
}
.dropdown-menu li{
        border-bottom: 1px solid #0000006b;
}
.dropdown-menu>li>a {
    font-family: serif;
    font-weight: bold;
    line-height: 40px;
}


   .dropdown-menu {
    position: ;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 150px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #ffffff8f;
    background-clip: ;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
    box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
}
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
.navbar-nav li:hover > ul.dropdown-menu {
    display: block;
}
.dropdown-submenu {
    position:relative;
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
      <a class="navbar-brand" href="index.php"><img src="tkc.png" style="width: 130px; height: auto; margin-top: -35px;"></a>
    </div>
    <div class="collapse navbar-collapse  pull-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <!--<li><a href="projects.php">PROJECTS</a></li>-->
         <li class="dropdown"><a class="dropdown-toggle" href="projects.php">PROJECTS <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="interiors.php">INTERIORS</a></li>
          <li><a href="exteriors.php">RESIDENTIAL</a></li>
          <li><a href="commercial.php">COMMERCIAL</a></li>
        </ul>
      </li>
        <li><a href="blogs.php">BLOG</a></li>
        <li><a href="contactus.php">CONTACT US</a></li>
      </ul>
       <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul> -->
    </div>
  </div>
</nav>