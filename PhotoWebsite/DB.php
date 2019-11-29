<!--This file stores all the PHP functions that are used multiple times in other pages - this simplifies the other pages a bit more as I do not need to write down the code for each page-->

<?php

#Connects Photo_Website database to Photo_Website Database 
function Connect(){
    $GLOBALS['db'] = mysqli_connect('localhost','root','','Photo_Website')
        or die('Error connecting to MySQL server.');}


#Obtains Page Tags, Page Description & Page Title for each page link 
function Page_Meta(){
    $db = $GLOBALS['db'];
    $PageQuery = "SELECT * from Pages";
    mysqli_query($db, $PageQuery) or die('Error querying database.');

    #Results from query has been stored in array $PageResult[]
    $PageResult = mysqli_query($db, $PageQuery);
    
    #Retrieves the data from $PageResult[] where the current page link matches the page link from the database
    while ($row = mysqli_fetch_array($PageResult)) {
        if (htmlspecialchars($_SERVER['PHP_SELF']) == $row['Page_Link']){
            $GLOBALS['Page_Description'] = $row['Page_Description'];
            $GLOBALS['Page_Tags'] = $row['Page_Tags'];
            $GLOBALS['Page_Title'] = $row['Page_Title'];}
    ;}
;}

#Displays the first photo from each subgallery as the main photo
                 
function Gallery_Photo($Page_Title){
    $db = $GLOBALS['db'];
    $PhotoQuery = "SELECT Original_Link from Photos WHERE Page_Title = '$Page_Title'";
    mysqli_query($db, $PhotoQuery) or die('Error querying database.');

    #Results from query has been stored in array $PhotoResult[]
    $PhotoResult = mysqli_query($db, $PhotoQuery);
    $row = mysqli_fetch_array($PhotoResult);
    echo $row['Original_Link'];
    }


#Displays the thumbnail photos for each gallery along with its' meta data
function Photo_Thumbnail(){
    $Page_Title = htmlspecialchars($_SERVER['PHP_SELF']);
    $i=0;
    $db = $GLOBALS['db'];
    $PhotoQuery = "SELECT * from Photos WHERE Page_Title = '$Page_Title'";
    mysqli_query($db, $PhotoQuery) or die('Error querying database.');
    
    #Results from query has been stored in array $PhotoResult[]
    $PhotoResult = mysqli_query($db, $PhotoQuery);
    
    #Displays all photos from the query
    while ($row = mysqli_fetch_array($PhotoResult)){
        ++$i;
        ?>
    <div class="column2">
        <a><img src="<?php echo $row['Thumbnail_Link'] ?>" alt="<?php echo $row['Photo_Tags'] ?>" 
                onclick="openModal();currentSlide(<?php echo $i; ?>)" class="subcolumn"/></a>
    </div>
    <?php
    ;}
    }

function Photo_Original(){
    $Page_Title = htmlspecialchars($_SERVER['PHP_SELF']);
    $db = $GLOBALS['db'];
    $PhotoQuery = "SELECT * from Photos WHERE Page_Title = '$Page_Title'";
    mysqli_query($db, $PhotoQuery) or die('Error querying database.');
    
    #Results from query has been stored in array $PhotoResult[]
    $PhotoResult = mysqli_query($db, $PhotoQuery);
?>
    <!--Upon clicking thumbnail, displays original image in a Lightbox-->
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">
    <?php
    while ($row = mysqli_fetch_array($PhotoResult)){
        ?>
        <div class="mySlides">
          <img src="<?php echo $row['Original_Link'] ?>" class="Original">
        </div>
    <?php
    ;}?>
      </div>
    </div>
<?php
;}
?>


<!--Disconnects Photo_Website database-->
<?php
function Disconnect(){
    mysqli_close($GLOBALS['db']);}
?>

