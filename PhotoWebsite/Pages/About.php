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
    
    <!--Relates CSS stylesheet file to page-->
    <link rel="stylesheet" href="/PhotoWebsite/Themes/Stylesheet.css"/>
    
    <!--Meta data-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    
    
<Body>
<!--Header-->
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
    <h2 class="title">About the Photographer:</h2>
    </div>
    
    <div class="paragraph">
    <p>I am a student from New Zealand that frequently travels to different places abroad.</p>
    <br>
    <p>Growing up in one of the most beautiful and natural places in the world, I have always had a keen eye and passion for nature and its' beauty.</p> 
    <p>I take all types of pictures in my travels, but they are predominantly landscape and nature photos. Many of them come from the adventures that I go on with my father to the remote, wild mountain ranges.</p>
    <br>
    <p>I created this website so that I can share the photos of the magnificent places that I visit, and I hope that you enjoy them!</p>
    </div>
    

<!--Footer-->
    <footer>
    <a>All photographs copyright &copy; Casper Wong 2019</a> 
    </footer>
</Body>
</html>

<?php
Disconnect();
?>