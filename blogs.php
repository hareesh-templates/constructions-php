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
* {
  box-sizing: border-box;
}


/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: #ffffff00;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: #0000009c;
   padding: 20px;
   margin-top: 20px;
}
.card h2{
    color: #fff;
}
.card h5{
    color: #fff;
}
.card h3{
    color: #fff;
}
.card p{
    color: #fff;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
<div class="container"> 
<div class="header">
  <!--<h2>Blog Name</h2>-->
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>BLOG TITLE</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div><br>
     
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
       <a href="blogdetails.php" class="btn btn-primary" style="    background-color: #8a949de8;
    border-color: #8a949de8;">Read More..</a>
    </div>
    <div class="card">
      <h2>BLOG TITLE</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div><br>
    
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <a href="blogdetails.php" class="btn btn-primary" style="    background-color: #8a949de8;
    border-color: #8a949de8;">Read More..</a>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Us</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>
</div>
<br><br><br><br><br><br>
<?php include 'footer.php'; ?>
