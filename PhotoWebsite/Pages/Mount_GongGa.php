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
    <h2 class="title">Mount GongGa:</h2>
    </div>

<!--Display all photos of gallery from database-->
    <?php Photo_Thumbnail();
    Photo_Original();?>

    
<!-- Contains the lightbox / modal of my product
The following script is partially taken from w3schools (https://www.w3schools.com/howto/howto_css_modals.asp) and modified to better suit my product -->

<script>
// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);


// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
</script>

<!--Footer-->
    <footer>
    <a>All photographs copyright &copy; Casper Wong 2019</a> 
    </footer>
</body>
</html>

<?php
Disconnect();
?>