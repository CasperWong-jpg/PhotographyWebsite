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

<body>
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
    <h2 class="title">Hitcounter:</h2>
    </div>
    <div>
        <p>Pageviews</p>
        <a href="http://www.cutercounter.com/" target="_blank"><img src="http://www.cutercounter.com/hit.php?id=gvokfko&nd=4&style=51" border="0" alt="free counter"></a>
    </div>
    <div>
        <p>Unique Visitors</p>
        <a href="http://www.cutercounter.com/" target="_blank"><img src="http://www.cutercounter.com/hit.php?id=gvvokfkc&nd=4&style=51" border="0" alt="website counter"></a> 
    </div>
</body>
</html>

<?php
Disconnect();
?>

<!-- Another potential Hitcount
<a href='https://writingmasterthesis.com/'>template master's thesis</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=e41a543153528b7f9a698ebd5edd91c8d9455acc'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/501447/t/5"></script> 
-->