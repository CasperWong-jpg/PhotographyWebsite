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

    
<body class="home">
    <!--Title of page-->
    <div>
    <h1 class="home">Casper Wong | Photographer</h1>
    </div>
    <!--"Enter" Button that leads to Gallery-->
    <div>
        <a href="Gallery.php"><h2 class="home">Enter</h2></a>
    </div>
    <!--"Login" Button that leads to admin Login-->
    <div>
        <a href="Login.php"><h3 class="home">Login</h3></a>
    </div>


</body>
</html>

<?php
Disconnect();
?>