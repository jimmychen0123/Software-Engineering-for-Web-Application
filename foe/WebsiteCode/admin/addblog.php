<?php
require ("../app/src/session.php");
/*create a function to do the following:
 *pass all variables through htmlspecialchars() function
 *Strip unnecessary characters
 * Remove backslashes
 * */
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$title = $post = $thumbnail = $titlErr = $postErr = $succMsg = "";


//start validate each form
if($_SERVER['REQUEST_METHOD']==='POST'){


    //validation for title
    if(isset($_POST["title"])){

        if(empty($_POST["title"])){

            $titlErr = "*Title is required";

        }else{

            $title = test_input($_POST["title"]);

        }//end else

    }//end if

    else{

        $titlErr = "*Title is required";

    }//end else

    if(empty($_POST["thumbnail"])){
      $thumbnail = "default-image.jpg";
    }else{
      $thumbnail = test_input($_POST["thumbnail"]);
    }

    if(empty($_POST["editor"])){
      $postErr = "*Post is required";
    }else{
      $post = $_POST["editor"];
    }
//after validation, fetch the data in to database
    if(!empty($title)&&!empty($post)){

        $query = "INSERT INTO blog (title, post,  postedBy, thumbnail, alt)
                VALUES ('$title', '$post', '$row[ID]', '$thumbnail' ,'$title')";

        if ($connection->multi_query($query) === TRUE) {

            $succMsg = "blog post added";

            //echo "New records created successfully";

        } else {

            echo "Error: " . $query . "<br>" . $connection->error;

        }

        $connection->close();

    }

    else{

        echo "Validation failed";

    }

}
?>

<!--specify to web browser that html version 5 used-->
<!DOCTYPE html>
<!-- contents language set to English -->
<html lang="en">
<?php require("includes/head.php") ?>
<body>
  <?php require("includes/admin_header.php") ?>
  <main class="main">
    <div class="admin_main inner_container d-flex flex-column mx-auto">
      <section>
        <h2 class="text-center p-2">New Blog Post</h2>
<!-- input form from user -->
          <form class="m-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<!--form title-->
              <div class="form-group">
                <label for="title">Title </label>
                <input class="form-control" type="text" name="title" value="" id="title" placeholder="Blog title">
                <span class="error"><?php echo $titlErr;?></span>
              </div>
<!--form editor -->
              <div class="form-group">
                <label for="editor">Post</label>
                <textarea class="form-control" name="editor" rows="8" id="editor" cols="80"></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                <span class="error"><?php echo $postErr;?></span>
              </div>
<!-- form image path-->
              <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input class="form-control" type="text" name="thumbnail" value="" id="thumbnail" placeholder="enter image name">
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Enter image name of image you want to use that corresponds to an image in your image folder, the default image will be used if left blank.
                </small>
              </div>
              <!-- the check-box aren't working yet, due to limited time and unresolved
              proper implementation of category in the database. ideally each post should have
              as one to many category and each category to be used in many post.
              on how to add category to each post the idea of using SET datatype or simpling
              creating new blog_cat/news_cat was confusing and limited time to make appropriate decision-->
<!--check box section  -->
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Recycle</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Climate change</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Waste</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option3">
                <label class="form-check-label" for="inlineCheckbox4">Renewable Energy</label>
              </div>
<!--submit button-->
            <button type="submit" name="button" class="btn readmore">Submit</button>
            <h2 class="success"><?php echo $succMsg;?></h2>
          </form>
      </section>
    </div>
  </main>
  <?php require("includes/admin_footer.php") ?>
</body>
</html>
