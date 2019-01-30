<?php
//php connection to database
require("config/connect.php");
//Check connection
if($connection->connect_error){

    die(mysqli_connect_error());

}

else {

    //echo "Connected successfully";
    //set up a query
    $query = "SELECT * FROM news ";
    //runs the query and puts the resulting data into a variable called $result
    $result = mysqli_query($connection,$query);
    //returns the last error description for the most recent function call, if any.
    if(mysqli_error($connection)){
        echo "There was a problem querying the database";
    }

}

?>
<!--Declares that the file in an HTML5 document, always at the top of the document-->
<!DOCTYPE html>
<!--Root element, everything will be inside this element-->
<!--lang attribute can be used to declare the language of a Web page or a portion of a Web page.
This is meant to assist search engines and browsers.-->
<html lang="en">
  <!--head element represents a collection of metadata-->
  <head>
    <!--Specify the character encoding for the HTML document-->
    <meta charset="utf-8">
    <meta name="author" content="Yen Lung Chen 2971978 Uche">
    <!--This will set the viewport of your page,
    which will give the browser instructions on how to control the page's dimensions and scaling.-->
    <!--The width=device-width part sets the width of the page to follow the screen-width of the device
    (which will vary depending on the device).-->
    <!--The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser.-->
    <!--This is for response webpage design-->
    <meta name="viewport" content="width=device-width, initial-scale= 1">
    <!--The title element will appear in the browser tab-->
    <title>FOE_IE_News</title>
    <!--code for basic Bootstrap 4 page-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!--To link a CSS file-->
    <link rel="stylesheet" href="css/style.css"/>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <!--Bootstrap 4 also requires a containing element to wrap site contents.-->
  <!--The .container class provides a responsive fixed width container-->
    <div class="container">
        <!-- The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement. -->
        <!--require will produce a fatal error (E_COMPILE_ERROR) and stop the script-->
        <?php require 'includes/header.php';?>
<!--main news contents-->
      <main class="pt-3 pb-2 main" >
        <h2 class="ml-3">News</h2>
        <?php
        $i = 0; //this variable is created to count for populating data into three column in one row
        //Fetch a result row as a numeric array and as an associative array
        //The while() loop loops through the result set and outputs the data
        while($row = mysqli_fetch_array($result)){
            //this if statement is for admin to decide which data should be on latest news by changing the news_id from database
            if($row["news_id"] == 1){?>
<!--latest news section -->
        <article class="latest_news mt-2 ml-3 mr-3">
          <!-- create jumbotron to contain latest news -->
          <div class="jumbotron jumbotron-fluid p-0 mb-0">
            <div class="container">
              <!--divide jumbotron into two column for responsive purpose -->
              <div class="row">
                <div class="col-md-6 p-0">
                  <!--fetch the reference of image from database -->
                  <img class="img-fluid" src="images/<?php echo $row["image"] ?>" alt="<?php echo $row["alt"]?>">
                </div>
                <div class="col-md-6  align-self-center pb-3">
                  <!--fetch data from news_heading column and news_sParagraph-->
                  <?php echo $row["news_heading"]?>
                  <?php echo $row["news_sParagraph"]?>
                  <!--use collapse to hide amount of information-->
                  <div id="latest" class="collapse">
                    <?php echo $row["news_fParagraph"]?>
                  </div>
                  <button type="button" class="btn readmore" data-toggle="collapse" data-target="#latest">Read more</button>
                </div>
              </div>
            </div>
          </div>
        </article>
             <?php } //end if
                //populate data into three columns in else block
             else {

             ?>
<!-- three columns news -->
<!-- use modulo to decide if this block of code should be executed-->
            <?php if($i % 3 === 0) { ?>
          <section class="news mt-3">
              <div class="row ml-0 mr-0 mt-2 mb-2">
            <?php } ?>
                  <article class="col-md-4 mb-3">
                      <div class="jumbotron jumbotron-fluid p-0 mb-0 h-100 news_article">
                          <div class="container pb-3 pt-3">
                              <p><?php echo $row["news_year"]?></p>
                              <img class="img-fluid" src="images/<?php echo $row["image"] ?>" alt="<?php echo $row["alt"]?>">
                              <?php echo $row["news_heading"]?>
                              <?php echo $row["news_sParagraph"]?>
                              <div id="colNews<?php echo$row["news_id"]?>" class="collapse pb-3">
                                  <?php echo $row["news_fParagraph"]?>
                              </div>
                              <button type="button" class="btn readmore" data-toggle="collapse" data-target="#colNews<?php echo$row["news_id"]?>">Read more</button>
                          </div>
                      </div>
                  </article>
             <?php
                 $i ++;
                 if($i % 3 ===0) {
             ?>
              </div>
          </section>
             <?php }  //end if?>
            <?php } //end else ?>
        <?php } //end of while loop ?>
      </main>
<!--require footer-->
      <?php require 'includes/footer.php';?>
    </div>
  </body>
</html>
