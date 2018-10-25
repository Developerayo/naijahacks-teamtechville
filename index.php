<!DOCTYPE html>
<html>
<head>
	<title>Course Land Homepage</title>
<meta charset="UTF-8">
<meta name="description" content="Course Land Homepage">
<meta name="keywords" content="Course Land Homepage">
<meta name="author" content="naijahacks">
</head>
<body>
  <?php include("navbar.php"); ?><br><br>
   <?php include("slider.php"); ?> <br>
    <div class="afterslide"  style="background-color: #f6f6f6; max-height: 650px; border-top:15px solid #f6f6f6; border-bottom:15px solid #f6f6f6; ">
    <div class="row">
      <div class="col-sm-6">
        <img src="img/book.jpg" width="100%" style="border:7px  solid #f6f6f6; border-radius: 10px solid #f6f6f6">
      </div>
      <div class="col-sm-6">
        
        <h1 style="text-align:justify-all; color: orange;">What is Course Land?</h1>
        <p style="text-align:justify-all; font-size:20px;">Course land is an e-learning platform where students get to read on the courses of their choice and make contributions to projects and help other students on the platform with challenges they face in their courses.Course land is centered on making study materials and resources for studies at every students finger tip.Course land has also come to eradicate the cost of buying text books and handouts in schools.Here at course land,we bring all you need for your course of study to you.    </p>
      </center>
      </div>
    </div>
  </div><br>
  <div class="comment" style="background-color: #f6f6f6; max-height: 750px;" >
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-xs-12" >
            <h1 style="font-size: 50px;">"..tired of searching for resources with no positive outcome? Use Course Land" <br><span class="commentright" style="color: orange; font-size: 30px; ; text-align:right;">by Oganizer Uchi</span></h1>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>
	<div class="container" id="courses">
		<center>
      <div >
			<span class="carouselheader"><h1>Our Courses</h1></span>
      <hr style=" width:70%; border:2px solid orange; border-radius:10px;">
		</center>
		<div class="row">
			<div class="col-md-6 col-lg-3 col-sm-6">
				<center><img src="img/sciece.png"></center>
				<center><h1><span class="carouselheader">Science</span></h1></center>
				<p>
					The word "science" probably brings to mind many different pictures: a fat textbook, white lab coats and microscopes, an astronomer peering through a telescope, a naturalist in the rainforest, Einstein's equations scribbled on a chalkboard, the launch of the space shuttle, bubbling beakers …. All of those images reflect some aspect of science, but none of them provides a full picture because science has so many facets: <span><a href="science.php" style="text-decoration: none;">View Course</a></span>
				</p>
			</div>
			<div class="col-md-6 col-lg-3 col-sm-6">
				<center><img src="img/technology.jpg"></center>
				<center><h1><span class="carouselheader">Technology</span></h1></center>
				<p>
					 a body of knowledge devoted to creating tools, processing actions and the extracting of materials. The term ‘Technology” is wide, and everyone has their way of understanding its meaning. We use technology to accomplish various tasks in our daily lives, in brief; we can describe technology as products and processes used to simplify our daily lives. We use technology to extend our abilities, <span><a href="technology.php" style="text-decoration: none;">View Course</a></span>
				</p>
			</div>
			<div class="col-md-6 col-lg-3 col-sm-6">
				<center><img src="img/engineering.jpg"></center>
				<center><h1><span class="carouselheader">Engineering</span></h1></center>
				<p>
					the creative application of science, mathematical methods, and empirical evidence to the innovation, design, construction, operation and maintenance of structures, machines, materials, devices, systems, processes, and organizations for the benefit of humankind. The discipline of engineering encompasses a broad range of more specialized fields of engineering as  <span><a href="engineering.php" style="text-decoration: none;">View Course</a></span>
				</p>
			</div>
			<div class="col-md-6 col-lg-3 col-sm-6">
				<center><img src="img/mathematics.jpg" ></center>
				<center><h1><span class="carouselheader">Mathematics</span></h1></center>
				<p>
					science that deals with the logic of shape, quantity and arrangement. Math is all around us, in everything we do. It is the building block for everything in our daily lives, including mobile devices, architecture (ancient and modern), art, money, engineering, and even sports.<span><a href="mathematics.php" style="text-decoration: none;">View Course</a></span>
				</p>
			</div>
		</div>
	</div><br><!-- end of container-->
  <div class="container">
    <center><h1><span class="carouselheader">Our Team</span></h1></center>
    <hr style="border-color:orange; width:70%; border:3px solid orange; border-radius:10px;">
       <div class="row">
        <div class="col-md-4">
          <center><img src="img/helen.jpg" style="max-width: 70%;"></center>
          <center><h1>Helen Ogbogu</h1></center>
          <center><p>Content Manager </p></center>
        </div>
        <div class="col-md-4">
          <center><img src="img/d.jpg" style="max-width: 70%;"></center>
          <center><h1>Enemchukwu Daniel</h1></center>
          <center><p>Front End Developer</p></center>
        </div>
        <div class="col-md-4">
          <center><img src="img/cisca.jpg"style="max-width: 70%;"></center>
          <center><h1>Adekanye Fransisca</h1></center>
          <center><p>Backend Developer</p></center>
        </div>
       </div> 
     </div>
   <?php include("footer.php"); ?>
</body>
</html>
