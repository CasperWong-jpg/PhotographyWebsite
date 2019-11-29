<?php 
#Copies all the code from DB.php from to this page
include '../DB.php';
#View DB.php for comments explaining functions
Connect();
Page_Meta();

//To prevent spamming and hacking
//Function test_input($data) is used for convenience and cleaner code. Each value does not need to be checked separately
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
  return $data;
}

//If an input is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect values from input field, this is all recorded as data in function test_input($data) as defined above
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    //Compares input from login form to accounts in login table in database
    $query = "SELECT * FROM Login WHERE Username='$username' and Password='$password'";

    $result = mysqli_query($db, $query);
    $true = mysqli_fetch_array($result);

//If login input is correct, redirects to admin page; otherwise retry login
    if ($true){
        header("location: /PhotoWebsite/Pages/Admin.php");}
    else{
        echo "the username or password you entered was incorrect";}
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
    <h2 class="title">Login:</h2>
    </div>
    
    <!--Form-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <br>
        <a>Username: </a><input type="text" name="username"><br><br>
        <a>Password: </a><input type="password" name="password"><br><br>
        <input type="submit">
    </form>
    
</body>
</html>

<?php
Disconnect();
?>