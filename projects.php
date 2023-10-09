<?php include 'header2.php'; ?>
<style type="text/css">
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
.container {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: 1s ease;
    background-color: #0f101080;
    border-radius: 15px;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.col-sm-4{
    margin-top:10px;
}

</style> 
<br><br>
<div class="container-fluid text-center"> 
<h3 class="head1">PROJECTS  </h3><br>   
  
<div class="row" style="margin-top: 20px;">
    <div class="col-sm-4">
      <a href="interiors.php">
      <div class="container">
        <img src="int/1.jpeg" class="img-responsive image" style="width: 100%;
    height: 250px; border-radius: 15px;" alt="Image">
        <div class="overlay">
          <div class="text">Interiors</div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-sm-4">
      <a href="exteriors.php">
      <div class="container">
        <img src="ext/1.jpeg" class="img-responsive image" style="width: 100%;
    height: 250px; border-radius: 15px;" alt="Image">
        <div class="overlay">
          <div class="text">Residential</div>
        </div>
      </div>
    </a>
    </div>
   <div class="col-sm-4">
      <a href="commercial.php">
      <div class="container">
        <img src="com/1.jpeg" class="img-responsive image" style="width: 100%;
    height: 250px; border-radius: 15px;" alt="Image">
        <div class="overlay">
          <div class="text">Commercial</div>
        </div>
      </div>
    </a>
    </div>
  
  </div>

</div>

<?php include 'footer.php'; ?>
</body>
</html>
