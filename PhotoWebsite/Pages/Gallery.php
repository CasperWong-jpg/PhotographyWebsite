<?php 
#Copies all the code from DB.php from to this page
include '../DB.php';
#View DB.php for comments explaining functions
Connect();
Page_Meta();
?>

<html>
<head>
    <!--Displays Page Meta (ie. keywords, description) for SEO-->
    <meta name="keywords" content="<?php echo $Page_Tags ?>">
    <meta name="description" content="<?php echo $Page_Description ?>">
    <meta name="author" content="Casper Wong">
    
    <!--Title of page-->
    <title><?php echo $Page_Title ?></title>
    
    <!--Icon of page-->
    <link rel="icon" href="/PhotoWebsite/Images/Icon.jpg"/>
    
    <!--Hyperlink reference to CSS stylesheet file-->
    <link rel="stylesheet" href="/PhotoWebsite/Themes/Stylesheet.css"/>
    
    <!--Meta data-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    
    
<Body>
<!--Header & Logo-->
    <header>
    <div class="logo">
        <a href="Home.php"><img src="/PhotoWebsite/Images/Logo.png" class="logo" alt="Home Button"/></a>
    </div>
    <!--Navigation Bar-->
    <div class="navbar">
        <ul>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>
        </ul>
    </div>
    </header>

<!--Title-->
    <div class="title">
    <h2 class="title">Galleries:</h2>
    </div>
 
<!--Galleries-->
    <div>
    <div class="column1">
        <h3><a href="FourSisters.php" class="column">China: Four Sisters</a></h3>
            <a href="FourSisters.php"><img src="<?php Gallery_Photo("/PhotoWebsite/Pages/FourSisters.php"); ?>" class="column" alt="Click to Enter Four Sisters Gallery"/></a>
    </div>
    <div class="column1">
        <h3><a href="Mount_GongGa.php" class="column">China: GongGa Mountains</a></h3>
            <a href="Mount_GongGa.php"><img src="<?php Gallery_Photo("/PhotoWebsite/Pages/Mount_GongGa.php"); ?>" class="column" alt="Click to Enter Mount_GongGa Gallery"/></a>
    </div>
    </div>

    <div>
    <div class="column1">
        <h3><a href="Nepal.php" class="column">Nepal</a></h3>
            <a href="Nepal.php"><img src="<?php Gallery_Photo("/PhotoWebsite/Pages/Nepal.php"); ?>" class="column" alt="Click to Enter Nepal Gallery"/></a>
    </div>
    <div class="column1">
        <h3><a href="#Coming soon" class="column">Australia: Sydney - coming soon!</a></h3>
    </div>
    </div>
    
    <a href="http://www.cutercounter.com/" target="_blank"><img src="http://www.cutercounter.com/hit.php?id=gvokfko&nd=4&style=51" border="0" alt="free counter" class="invisible"></a>
    
<!--Footer-->
    <footer>
    <a>All photographs copyright &copy; Casper Wong 2019</a> 
    </footer>
</Body>
</html>

<?php
Disconnect();
?>