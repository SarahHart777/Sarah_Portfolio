<!DOCTYPE html>
<html>
<!-- start with the php file that creates the top and bottom part of the
website on each page, just do the header, require_once("name of header.php");
make the header  -->
<head>
    <meta charset="utf-8"/>
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
      <link href="Styles/style.css" rel="stylesheet"/>
      <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
<?php require_once 'Header.php';?>
</head>
    

<body>
<div id="page-container">
   <div id="content-wrap">
            <nav>
                <ul>
            <li id = "TopButtons"><a href = "Work.php">My Work</a></li>
            <li id = "TopButtons"><a href = "AboutMe.php">About Me</a></li>
            <li id ="TopButtons"><a href = "Contact.php">Contact Me</a></li>
            
                </ul>
            </nav>
    <p>
        hey babe take a walk on the wild side    
    </p>

    </div>
        <?php require_once 'Footer.php';?>
 </div>

</body>
    
</html>