<!--php connection to database-->
<?php
$siteroot = '/foe';
require("config/connect.php");
require("app/db_table.php");
$page = $connection->real_escape_string($_GET['page']);
$q = get_table($connection->real_escape_string($_GET['page']), $connection->real_escape_string($_GET['id']));
$result = mysqli_query($connection, $q);

if(!$result){
  echo "There was a problem querying the database";
}else{
  $row = mysqli_fetch_array($result);
}

 ?>

<!--specify to web browser that html version 5 used-->
<!DOCTYPE html>
<!-- contents language set to English -->
<html lang="en">
<head>
  <!-- standard UTF-8 character encoding specified-->
  <meta charset="UTF-8" />
  <!--Mobile display-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--page title. Can bee seen on the browser tab-->
  <title>FOE_IE_Post</title>
  <!--links to bootstrap reboot (reset.css) css files-->
  <link rel="stylesheet" href="css/bootstrap-reboot.css" />
  <!--link to bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!--link to local css file-->
  <link rel="stylesheet" href="css/style.css" />
  <!--google font-->
  <!--note the pipe in the url cause the html validator to flag href-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:300,400" rel="stylesheet">
  <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Jquery scripts-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!--Bootstrap Script-->
  <script src="script/bootstrap.min.js"></script>
  <!--script used in header-->
  <script src="script/header.js"></script>
  <!--popper scripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>
<body>
  <?php require("includes/header.php") ?>
  <main class="main pb-3">
    <article class="article inner_container m-0">
      <h2><?php echo $row['title']; ?></h2>

        <?php echo $row['post']; ?>

      <div class="article_info mt-5">
        <p>Posted on <i><?php echo substr($row['date'], 0,10); ?></i><p>
      </div>
    </article>
    <!-- post comment section-->
    <section class="post_comments inner_container mx-auto">
      <h2 class="p-3">Leave a comment</h2>
      <form class="m-5" action="#" method="post">
        <div class="form-row">
          <div class="form-group col-12 col-md-5">
            <label for="name">Name: </label>
            <input class="form-control" type="text" name="name" value="" placeholder="name">
          </div>
          <div class="form-group col-12 col-md-7">
            <label for="email">Email Address: </label>
            <input class="form-control" type="email" name="" value="" placeholder="email address">
          </div>
          <div class="form-group col-12 col-md-8">
            <label for="comment">Add comment</label>
            <textarea class="form-control" name="" id="comment" rows="8" cols="80"></textarea>
          </div>
        </div>
        <button type="button" name="button" class="btn readmore mb-3">Submit</button>
      </form>
    </section><!--end of post comments sections-->

    <!--comment section-->
    <section class="comments">

    </section><!--end of comments sections-->
  </main>
  <div class="outer_container blog_cat_container">
    <div class="inner_container mx-auto">
      <aside class="related_articles">
        <h2 class='pt-2 text-center'>Latest <?php echo ucwords($page); ?></h2>
        <div class="card-deck p-2">

          <div class="card">
            <img class="card-img-top" src="images/art-close-up-ecology-886521.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This part is left for further developement. The title of either a related post on latest post would be here</p>
            </div>
            <div class="card-footer">
               <small class="text-muted">posted on "date"</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/art-close-up-ecology-886521.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This part is left for further developement. The title of either a related post on latest post would be here</p>
            </div>
            <div class="card-footer">
               <small class="text-muted">posted on "date"</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/art-close-up-ecology-886521.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This part is left for further developement.</p>
            </div>
            <div class="card-footer">
               <small class="text-muted">posted on "date"</small>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
  <?php require("includes/footer.php");?>
</body>
