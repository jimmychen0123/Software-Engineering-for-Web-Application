<!--require php form validation function-->
<?php require 'app/formValidation.php';?>
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
    <title>FOE_IE_Donate</title>
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
 <!--The .container class provides a responsive fixed width container-->
  <div class="container">
<!--The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.-->
<!--Require header -->
    <?php require 'includes/header.php';?>
<!--The main content area consists of content that is directly related to or expands upon the central topic of a document-->
    <main class="main">
<!--create row        -->
        <div class="row m-0">
<!--Use .flex-column to set a vertical direction-->
<!--Use justify-content utilities on flexbox containers to change the alignment of flex items on the main axis-->
            <section class="col-md-5 donate_statement pb-2 d-flex flex-column justify-content-center">
<!-- prompt message when submission complete successfully-->
<!-- The nl2br() function inserts HTML line breaks (<br> or <br />) in front of each newline (\n) in a string.-->
                <h2 class="success text-justify text-center"><?php echo nl2br($thank);?></h2>
                <h2 class="#">Our Campaigning Depends on You</h2>
                <p class="#">Your support makes it possible, your participation makes it powerful.
                    Whatever you can afford will make a big difference to our work.
                </p>
            </section>
<!--Donation form column-->
            <section class="col-md-7 donate_field p-2">
                <h2>Make a Donation</h2>
<!--Information sent from a form with the POST method is invisible to others -->
<!--the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page.
This way, the user will get error messages on the same page as the form.-->
<!--The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;.
This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.-->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <!--Use the .form-check-inline class if you want the checkboxes to appear on the same line-->
                    <!--Add a wrapper element with .form-group, around each form control, to ensure proper margins-->
                    <!-- Use a wrapper element with class="form-check" to ensure proper margins for labels and checkboxes.
                    Add the .form-check-label class to label elements,
                    and .form-check-input to style checkboxes properly inside the .form-check container.-->
                    <div class="form-check-inline form-group">
                        <!--.form-check-label class to label elements-->
                        <label class="form-check-label">
                            <!-- .form-check-input to style inside the .form-check container-->
                            <input type="radio" class="form-check-input" name="amount" value="5" checked>€5
                        </label>
                    </div>
                    <div class="form-check-inline form-group">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="amount" value="15">€15
                        </label>
                    </div>
                    <!--Other payment-->
                    <div class="form-check form-group">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="amount" value="other">CHOOSE OWN AMOUNT €
                        </label>
                        <div class="row">
                            <div class="col-10 col-sm-4">
                                <input type="text" class="form-control" name="ownAmount" placeholder="Enter an amount">
                            </div>
                            <!--error message-->
                            <span class="error"><?php echo $amountErr;?></span>
                        </div>
                    </div>
                    <h3>Payment Details</h3>
                    <!--Use the .form-check-inline class if you want the checkboxes to appear on the same line-->
                    <!--Add a wrapper element with .form-group, around each form control, to ensure proper margins-->
                    <!-- Use a wrapper element with class="form-check" to ensure proper margins for labels and checkboxes.
                    Add the .form-check-label class to label elements,
                    and .form-check-input to style checkboxes properly inside the .form-check container.-->
                    <!-- .form-row, a variation of our standard grid row -->
<!--name form-->
                    <div class="form-group form-row">
                        <div class="col">
                            <label for="fName">First Name:</label>
                            <input type="text" class="form-control" name="fName" id="fName" placeholder="First name">
                        </div>
                        <div class="col">
                            <label for="lName">Last Name:</label>
                            <input type="text" class="form-control" name="lName" id="lName" placeholder="Last name">
                        </div>
                    </div>
                    <!--error message -->
                    <span class="error"><?php echo $nameErr;?></span>
<!--email form-->
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <!--error message-->
                        <span class="error"><?php echo $emailErr;?><br></span>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
<!--address 1 form-->
                    <div class="form-group mt-2">
                        <!--<label> element represents a caption for an item in a user interface-->
                        <label for="address1">Address 1:</label>
                        <span class="error"><?php echo $addressErr;?></span>
                        <!--defines a one-line text input field-->
                        <!--The size attribute specifies the visible width-->
                        <input type="text" class="form-control" id="address1" name="address1"/>
                    </div>
<!--address 2 form-->
                    <div class="form-group">
                        <!--<label> element represents a caption for an item in a user interface-->
                        <label for="address2">Address 2:(optional)</label>
                        <!--defines a one-line text input field-->
                        <!--The size attribute specifies the visible width-->
                        <input type="text" class="form-control" id="address2" name="address2"/>
                    </div>
<!--city, country, postcode form-->
<!--responsive column-->
                    <div class="form-row">
                        <div class="col-md-4 mt-2 mb-2">
                            <input type="text" class="form-control" name="city" placeholder="City/Town">
                        </div>
                        <div class="col-md-4 mt-2 mb-2">
                            <input type="text" class="form-control" name="country" placeholder="Country">
                        </div>
                        <div class="col-md-4 mt-2 mb-2">
                            <input type="text" class="form-control" name="postCode" placeholder="Post code/ Eircode">
                        </div>
                    </div>
                    <!--error message for validation-->
                    <span class="error"><?php echo $cityErr;?><br></span>
                    <span class="error"><?php echo $countryErr;?><br></span>
                    <span class="error"><?php echo $postCodeErr;?><br></span>
<!--submission button-->
                    <button type="submit" class="btn btn-warning p-3 ml-3 mb-3 ">Submit</button>
                </form>
            </section>
        </div>
    </main>
<!--require footer -->
    <?php require 'includes/footer.php';?>
  </div>
 </body>
</html>