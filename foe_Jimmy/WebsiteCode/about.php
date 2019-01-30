<!--php connection to database-->
<?php
require("config/connect.php");
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
    <title>FOE_IE_About</title>
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
    <main class="main pb-2">
        <!--fisrt row -->
        <section>
            <div class="row">
                <!--Video column in first row-->
                <div class="col-md-7">
<!--Create responsive video or slideshow embeds based on the width of the parent by creating an intrinsic ratio that scales on any device.-->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffoeireland%2Fvideos%2F10154602770020119%2F&show_text=0&width=560" width="560" height="315" ></iframe>
                    </div>
                </div>
<!--About FOE column in first row-->
                <div class="col-md-5 align-self-center">
                    <h2 class="text-center">About Friends of the Earth</h2>
                    <p class="text-center">Friends of the Earth campaigns for environmental justice and sustainability.
                        We believe in sustainable development - meeting the needs of the current generation without compromising the ability of future generations to meet their needs.
                        And we believe in fair shares - too often the poorest communties in the world are denied access to the natural resources essential to life, such as fresh water, while rich countries consume and pollute recklessly.
                    </p>
                </div>
            </div>
        </section>
        <!--second row:introduce -->
        <section class="introduce p-3">
            <h2>FOE Ireland</h2>
            <p>In Ireland, Friends of the Earth was launched in October 2004. We promote education and action for environmental sustainability and environmental justice.
                We focus on Ireland's response to the big environmental challenges of our time such as climate change and energy, the waste crisis and the spread of GM crops and food.
            </p>
<!--use collapse to hide and show large amount of content-->
            <div id="introduce_collapse" class="collapse">
                <p>
                    Friends of the Earth Ireland is a company limited by guarantee (a not-for-profit company) sustained by donations, subcriptions and grants.
                    We are registered with the Companies Office in Dublin (No. 383678) and file annual returns and produce audited accounts.
                </p>
            </div>
<!--Then add the data-target="#id" attribute to connect the button with the collapsible content -->
<!--add the data-toggle="collapse" attribute to an <a> or a <button> element.-->
            <a href="#introduce_collapse" class="btn btn-warning" data-toggle="collapse">Click to expand</a>
        </section>
        <!--third row:our mission -->
        <section class="ourMission p-3">
            <h2>Our Mission</h2>
            <p>To shift the balance of Irish policy and practice in favour of environmental justice and sustainability at home and internationally.</p>
            <!--use collapse to hide and show large amount of content-->
            <div id="demo" class="collapse">
                <h3>Goal</h3>
                <ul>
                    <li>To develop Friends of the Earth's capacity, credibility and legitimacy.</li>
                    <li>To position Friends of the Earth as a leading environmental NGO in Ireland.</li>
                    <li>To win endorsement for Friends of the Earth's environmental justice and sustainability analysis amongst key decisions makers, the media and the public in Ireland, at EU level and internationally.</li>
                </ul>
            </div>
            <!--Then add the data-target="#id" attribute to connect the button with the collapsible content -->
            <!--add the data-toggle="collapse" attribute to an <a> or a <button> element.-->
            <a href="#demo" class="btn btn-warning" data-toggle="collapse">Click to expand</a>
        </section>
    </main>
     <!--Require footer -->
    <?php require 'includes/footer.php';?>
 </div>
</body>
</html>