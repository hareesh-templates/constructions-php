<?php include 'header2.php'; ?>
<?php
    $url.= $_SERVER['REQUEST_URI'];   
    $strpos = strpos("$url","?project=");
    $project = str_replace("%20"," ",substr("$url",38));
 ?>
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
<style type="text/css">
.navbar-inverse .navbar-nav>li>a {
    color: #000;
}
/*.dropdown-menu {*/
/*    position: ;*/
/*    top: 100%;*/
/*    left: 0;*/
/*    z-index: 1000;*/
/*    display: none;*/
/*    float: left;*/
/*    min-width: 200px;*/
/*    padding: 5px 0;*/
/*    margin: 2px 0 0;*/
/*    font-size: 14px;*/
/*    text-align: left;*/
/*    list-style: none;*/
/*    background-color: #ffffff87;*/
/*    background-clip: ;*/
/*    border: 1px solid #ccc;*/
/*    border: 1px solid rgba(0,0,0,.15);*/
/*    border-radius: 4px;*/
/*    -webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);*/
/*    box-shadow: 0 6px 12px rgb(0 0 0 / 18%);*/
/*}*/
   body {
    background-image: url(2.jpeg);
   /* background-position: center center;*/
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #464646;
}
.head1{
  font-weight: bold;
    font-size: 50px;
}
.b1{
      color: #fff;
    letter-spacing: 2px;
        font-size: x-large;
}
.sp1{
  color: #ffffffa8;
    letter-spacing: 2px;
        font-size: x-large;
}
.panel {
    margin-bottom: 20px;
    background-color: #fff0;
    border: 0px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    color: #000;
}
.panel-footer {
    padding: 10px 15px;
    background-color: #f5f5f500;
    border-top: 0px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    color: #000;
}


.container.gallery-container {
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row > div {
    padding: 2px;
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 15px;
    position: relative;
    height:250px;
}

.tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\e003';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}


.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
}

.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}

</style>  

  
  
  
  <div class="container-fluid gallery-container">

    <h1><?php echo $project ; ?></h1>


    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="https://asetechnologies.in/projects/tkc2/int/1.jpeg">
                    <img src="int/1.jpeg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://asetechnologies.in/projects/tkc2/int/2.jpeg">
                    <img src="int/2.jpeg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://asetechnologies.in/projects/tkc2/int/3.jpeg">
                    <img src="int/3.jpeg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
               <a class="lightbox" href="https://asetechnologies.in/projects/tkc2/int/4.jpeg">
                    <img src="int/4.jpeg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
               <a class="lightbox" href="https://asetechnologies.in/projects/tkc2/int/5.jpeg">
                    <img src="int/5.jpeg" alt="Bridge">
                </a>
            </div> 
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://asetechnologies.in/projects/tkc2/int/6.jpeg">
                    <img src="int/6.jpeg" alt="Bridge">
                </a>
            </div>

        </div>

    </div>

</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
<?php include 'footer.php'; ?>
</html>
