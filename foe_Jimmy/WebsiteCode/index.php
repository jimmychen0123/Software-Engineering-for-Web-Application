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
    <title>FOE_IE_Home</title>
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
      <main>
        <!--carousel:A slide show component for cycling through elements-->
        <!--.carousel Creates a carousel-->
        <section class="carousel">
          <!--Adds indicators for the carousel. These are the little dots at the bottom of each slide (which indicates how many slides there are in the carousel,
          and which slide the user are currently viewing)-->
          <div id="indicators" class="carousel slide" data-ride="carousel">
            <!--hide the indicator in mobile view -->
            <ol class="carousel-indicators d-none d-md-flex">
              <li data-target="indicators" data-slide-to="0" class="active"></li>
              <li data-target="indicators" data-slide-to="1"></li>
              <li data-target="indicators" data-slide-to="2"></li>
            </ol>
            <!--.carousel-inner adds slides to the carousel -->
            <!--hide the p element in mobile view to simplify the layout-->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/straws-tube-plastic-colorful-65612.jpeg" alt="plastic">
                <!--Add elements inside <div class="carousel-caption"> within each <div class="carousel-item"> to create a caption for each slide-->
                <div class="carousel-caption">
                  <h3>The Sick Of Plastic</h3>
                  <p class="d-none d-md-block"> Donate €50 or more to Friends of the Earth you will receive one of our Keep Cups in time for filling your Christmas stockings!</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/pexels-photo-459728.jpeg" alt="fossil">
                <div class="carousel-caption">
                  <h3>Fossil Free Future</h3>
                  <p class="d-none d-md-block"> The deployment of wind energy has been the biggest success story of Ireland’s decarbonisation thus far, with approximately 26% of electricity generated coming from this source in 2017.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/pexels-photo-1230157.jpeg" alt="take_action">
                <div class="carousel-caption">
                  <h3>Take Action</h3>
                  <p class="d-none d-md-block">I want to see: Supermarkets reduce the amount of plastic packaging they use.</p>
                </div>
              </div>
            </div>
            <!--Adds a left (previous) button to the carousel, which allows the user to go back between the slides             -->
            <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
              <!--Used together with .carousel-control-prev to create a "previous" button-->
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <!--Adds a right (next) button to the carousel, which allows the user to go forward between the slides            -->
            <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
              <!-- Used together with .carousel-control-next to create a "next" button               -->
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>
        <!--second row-->
        <section class="page_link">
          <div class="row">
<!--blog column with jumbotron-->
            <div class="col-md-4 mb-1 ">
              <div class="jumbotron h-100">
                <img class="d-block mx-auto" src="images/icons8-blog-100.png" alt="blog">
                <h2>Blog</h2>
                <p>Read the latest thinking from the Friends of the Earth Ireland team</p>
                <a class="btn btn-lg btn-outline-dark" href="blog.php" role="button">Read more</a>
              </div>
            </div>
<!--news column with jumbotron-->
            <div class="col-md-4 mb-1">
              <div class="jumbotron h-100">
                <img class="d-block mx-auto" src="images/icons8-google-news-100.png" alt="news">
                <h2>News</h2>
                <p>Keep up with our recent stories</p>
                <a class="btn  btn-lg btn-outline-dark" href="news.php" role="button">Learn more</a>
              </div>
            </div>
<!--about us column with jumbotron-->
            <div class="col-md-4 mb-1">
              <div class="jumbotron h-100">
                <img class="d-block mx-auto" src="images/icons8-europe-100.png" alt="earth">
                <h2>About Friend Of Earth</h2>
                <p>Friends of the Earth campaigns for environmental justice and sustainability</p>
                <a class="btn btn-lg btn-outline-dark" href="about.php" role="button">Get to know</a>
              </div>
            </div>
          </div>
        </section>
      </main>
<!--require footer-->
      <?php require 'includes/footer.php';?>
    </div>
  </body>
</html>
