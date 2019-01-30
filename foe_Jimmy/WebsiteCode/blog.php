<!--php connection to database-->
<?php
require("config/connect.php");
$page = 'blog';

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
    <meta name="author" content="Yen Lung Chen 2971978">
    <!--This will set the viewport of your page,
    which will give the browser instructions on how to control the page's dimensions and scaling.-->
    <!--The width=device-width part sets the width of the page to follow the screen-width of the device
    (which will vary depending on the device).-->
    <!--The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser.-->
    <!--This is for response webpage design-->
    <meta name="viewport" content="width=device-width, initial-scale= 1">
    <!--The title element will appear in the browser tab-->
    <title>FOE_IE_Blog</title>
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
<div class="container">


    <?php require 'includes/header.php';?>

    <main class="main pt-3 pb-2">
        <h2 class="ml-3">Blog</h2>

        <?php

        if (isset($_GET['page_no']) && $_GET['page_no']!="") {

            $page_no = $_GET['page_no']; //get current page number and assign to$page_no
        }

        else{
            $page_no = 1; //if page_no is not set then assign 1.
        }

        $total_records_per_page = 6; //maximum number of post on each page
        $offset = ($page_no-1) * $total_records_per_page;
        $previous_page = $page_no - 1;
        $next_page = $page_no + 1;

        //the mysqli_num_rows function doesn't work with limit and offset, hence my reason
        //for not using $result as the argument for mysqli_num_rows
        $resultCount = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM blog"));
        $total_no_of_pages = ceil($resultCount / $total_records_per_page);
        $second_last = $total_no_of_pages - 1; // total pages minus 1

        $patt = 0;//use to track post blog arrangment pattern
        $onRow = 0;//track number of post on a row
        //Order blogId DESC was used because the latest blog would usually have the highest
        //id since it's the last record entered
        $query = "SELECT * FROM blog ORDER BY blogId DESC LIMIT $offset, $total_records_per_page";

        $result = mysqli_query($connection, $query);


        if(mysqli_error($connection)){
            echo "There was a problem querying the database";
        }else{
            while($row = mysqli_fetch_array($result)){
                //$row[image]=$row[alt]="";
                /*
                 * code in the while loop block is to populate the html elements properly to ensure
                 * each row has three columns
                 * each page would have two rows
                 *
                 */

                extract($row);

                //The extract() function imports variables into the local symbol table from an array
                if($onRow == 3 || $onRow == 0){
                    if($onRow == 3) {
                        echo "</div>";//close row div tag after 3 post on row
                        $onRow = 1;
                    }else{
                        $onRow = $onRow+1;
                    }
                    echo "<div class=\"row p-2 m-0\">";//open a row class div when onRow is 0
                    /*the pattern used for the blog page 6col 3col 3col and alternate
            on next row 3col 3col 6col. Which is 6col 3col 3col 3col 3col 6col on every 2 rows
            6cols at $patt = 0 and 6cols at $patt = 5*/
                    if($patt == 0 || $patt == 5){
                        if($patt == 5) {
                            $patt = 0;
                        }else{
                            $patt = $patt + 1;
                        }
                        echo "<div class=\"col-12 col-md-6 p-1\">";
                        echo "<article class=\"post blog_article h-100\">";

                        echo "<img class='img-fluid p-0' src=\"images/$row[image]\" alt=\"$row[alt]\" />";
                        //echo "<img class=\"img-fluid p-0\" src=\'images/\$image\' alt=\'\$alt\'>";
                        echo "<div class=\"p-2\">";
                        echo "<h4 class='text-center'><a class=\"blog_title\" href=\"singlepost.php?page=$page&id=$row[blogId]\">$row[title]</a></h4>";
                        echo "<p class='text-justify'>"; echo substr($row['post'], 0, 200); echo"</p>";
                        //echo "<a class=\"readmore btn\" href=\"singlepost.php?id=$row[blogId]\">Read more</a>";
                        echo "</div></article></div>";

                    }else{
                        $patt = $patt + 1;
                        echo "<div class=\"col-12 col-md-3 p-1\">";
                        echo "<article class=\"post blog_article h-100\">";
                        echo "<img class='img-fluid p-0' src=\"images/$row[image]\" alt=\"$row[alt]\" />";

                        //echo '<img class="img-fluid p-0" src="images/$row["image"]"/>';
                        echo "<div class=\"p-2\">";
                        echo "<h4 class='text-center'><a class=\"blog_title\" href=\"singlepost.php?page=$page&id=$row[blogId]\">$row[title]</a></h4>";
                        echo "<p class='text-justify'>"; echo substr($row['post'], 0, 200); echo"</p>";
                        //echo "<a class=\"readmore btn\" href=\"singlepost.php?id=$row[blogId]\">Read more</a>";
                        echo "</div></article></div>";

                    }
                }else{
                    $onRow = $onRow+1;
                    if($patt == 0 || $patt == 5){
                        if($patt == 5) {
                            $patt = 0;
                        }else{
                            $patt = $patt + 1;
                        }
                        echo "<div class=\"col-12 col-md-6 p-1\">";
                        echo "<article class=\"post blog_article h-100\">";
                        echo "<img class='img-fluid p-0' src=\"images/$row[image]\" alt=\"$row[alt]\" />";

                        //echo '<img class="img-fluid p-0" src="data:image/jpeg;base64,'.base64_encode( $row['thumbnail'] ).'"/>';
                        echo "<div class=\"p-2\">";
                        echo "<h4 class='text-center'><a class=\"blog_title\" href=\"singlepost.php?page=$page&id=$row[blogId]\">$row[title]</a></h4>";
                        echo "<p class='text-justify'>"; echo substr($row['post'], 0, 200); echo"</p>";
                        //echo "<a class=\"readmore btn\" href=\"singlepost.php?id=$row[blogId]\">Read more</a>";
                        echo "</div></article></div>";

                    }else{
                        $patt = $patt + 1;
                        echo "<div class=\"col-12 col-md-3 p-1\">";
                        echo "<article class=\"post blog_article h-100\">";
                        echo "<img class='img-fluid p-0' src=\"images/$row[image]\" alt=\"$row[alt]\" />";

                        // echo '<img class="img-fluid p-0" src="data:image/jpeg;base64,'.base64_encode( $row['thumbnail'] ).'"/>';
                        echo "<div class=\"p-2\">";
                        echo "<h4 class='text-center'><a class=\"blog_title\" href=\"singlepost.php?page=$page&id=$row[blogId]\">$row[title]</a></h4>";
                        echo "<p class='text-justify'>"; echo substr($row['post'], 0, 200); echo"</p>";
                        //echo "<a class=\"readmore btn\" href=\"singlepost.php?id=$row[blogId]\">Read more</a>";
                        echo "</div></article></div>";

                    }
                }
            }
            /*
        When the last set of post isn't up to three, this doesn't allow
        the closing div tag above (line 79) to echo, hence the reason for this if block
        */
            if($resultCount % 3 != 0){//total number of rows won't will cause last column to be either 1 or 2
                echo"</div>";
            }

        }
        ?>

    </main>
    <?php require 'app/pagination.php';?>

    <?php require 'includes/footer.php';?>


</div>
</body>
</html>
