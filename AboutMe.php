<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <link href="Styles/style.css" rel="stylesheet"/>
      <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
<?php require_once 'Header.php';?>
</head>

    <body>
    <div id="page-container">
   <div id="content-wrap">
    <h1 id = "TitleText">About me!</h1>
<break>
    <div id = "TopButtons"> 
        <a href ="index.php">Back home</a>
    </div>
    <div class = "row">
        <div class = "column" style = "float: left;">
    <img src="Images/HeadShotClose.jpg" alt="Headshot" width = "415" height = "400" id = "Headshot">
        </div>
    <div id="AboutMeBox" class = "column" style = "float: right;">
        <p id = "text">
        I am a Senior at Boise State University. My major is a Bachelors of Science in Games Information Media Mobile technologies (GIMM).
        I also have a Minor in Information Technology Management (ITM) and a Minor in Theater Arts. I started out my academic career with a
        Bachelors in Theater Arts but after spending time at the University I decided to focus on my growing interest in technology.
        <br>
        GIMM seemed to be the perfect degree for me, it was a perfect combination of my love of games and my interest in technology.
        I quickly took an interest in 3D modeling, HTML, and UX design. 3D modeling was similiar to how I use to create physical objects
        for the plays I worked on, such as clothing, props, or the sets themselves. I really enjoyed how the HTML language read, it
        made a lot of sense for me and I enjoy coding in it. I also really like how HTML easily encorporates other languages such as
        CSS, JavaScript, PHP, and so many more. In the GIMM program there is one class that is dedicated to UX design, it went over
        the importance of UX Design but I wanted to learn more. I learned about the UX Design Certificate that the College of Innovation
        and Design offered and took it. There I was able to learn so much more about UX and UI Design, how it can be applied to just about
        everything and how it's used everyday.
        <p>
    </div>
 </div>
</div>
<div style="clear:both">
<?php require_once 'Footer.php';?>
</div>
</div>
</body>
</html>