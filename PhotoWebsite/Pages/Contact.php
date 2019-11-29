<?php 
#Copies all the code from DB.php from to this page
include '../DB.php';
#View DB.php for comments explaining functions
Connect();
Page_Meta();

//PHP form to contact me through email
$messageErr="";
$name = $email = $message = "";

//If a message is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect values from input field, this is all recorded as data in function test_input($data)
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    if (empty($_POST["message"])) {
        $messageErr = "Please leave a message!";} 
    else {
        $message = test_input($_POST["message"]);}
    }

//To prevent spamming and hacking
//Function test_input($data) is used for convenience and cleaner code. Each value does not need to be checked separately
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
  return $data;
}
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
    <h2 class="title">Contact:</h2>
    </div>
    
    <div class="center">
            <a>Contact me on:</a>
        <br>
            <a href="https://www.facebook.com/Casperdeghostman"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Facebook_logo_%28square%29.png/240px-Facebook_logo_%28square%29.png" class="icon" alt="FBLogo"></a>
            <a href="https://www.instagram.com/casper_wongxd/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/240px-Instagram_logo_2016.svg.png" class="icon" alt="InstaLogo"/></a>
        <br>
        <br>
    </div>
    
<!--Form-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <a>Or contact me using this form:</a><br><br>
        <a>Name:</a> <input type="text" name="name"><br><br>
        <a>Email:</a> <input type="text" name="email"><br><br>
        <a>Message:</a><br><textarea name="message" rows="5" cols="50"></textarea><br>
        <span> <?php echo $messageErr;?></span><br>
        <input type="submit"><br>
    </form>
    
    
<?php
//Notifies form submitter that submission was successful
if (!empty($message)){
    echo "<p>Thank you for your message!</p>";}


//Email form to email address 
$to = "37441@kristin.school.nz";
$subject = "Message from $name";
$headers = "From: $email"; 
mail ($to, $subject, $message, $headers);
?>

<!--Footer-->
    <footer>
    <a>All photographs copyright &copy; Casper Wong 2019</a> 
    </footer>
</Body>
</html>

<?php
Disconnect();
?>