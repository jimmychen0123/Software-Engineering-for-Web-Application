<?php
//this php file is for form validation

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
// define variables and set to empty values
$amountErr = $nameErr = $addressErr = $cityErr = $countryErr = $postCodeErr = $emailErr ="";

$amount = $fName = $lName = $address1 = $address2 = $city = $country = $postCode = $email =$thank= "";
/*check whether the form has been submitted using $_SERVER["REQUEST_METHOD"].
If the REQUEST_METHOD is POST, then the form has been submitted - and it should be validated.
If it has not been submitted, skip the validation and display a blank form.
 */

if($_SERVER['REQUEST_METHOD']==='POST'){


    //validation for amount
    //first if is to check the radio button is set
    if(isset($_POST["amount"])){
        //check user input the amount if other radio button is set
        if($_POST["amount"] == "other"&&empty($_POST["ownAmount"])){

            $amountErr = "*Amount is required";

        }
        //check the user enter a valid input
        else if($_POST["amount"] == "other"&&preg_match('/^\d+(\.\d{2})?$/',$_POST["ownAmount"])){
            //call function
            //assign amount
            $amount = test_input($_POST["ownAmount"]);

        }// end if
        //assign error message if user enter a invalid input
        else if($_POST["amount"] == "other"&&!preg_match('/^\d+(\.\d{2})?$/',$_POST["ownAmount"])){

            $amountErr = "Only enter positive number ";

        }

        else{
            //assign amount if user set the either first two radio buttons
            $amount = $_POST["amount"];

        }//end else

    }//end if

    else{
        //assign error message if user did not set the radio button
        $amountErr = "*Amount is required";

    }//end else

    //validation for first name
    //check if the field is empty
    if (!empty($_POST["fName"])) {
        //check if user enter a valid input for name
        if(preg_match("/^[a-zA-Z ]*$/",$_POST["fName"])){

            $fName = test_input($_POST["fName"]);

        }

        else{
            //assign error message for invalid input
            $fNameErr = "Only letters and white space allowed";

        }


    }
    else  {
        //assign error message for empty input
        $fNameErr = "* Name is required";

    }

    //validation for last name
    //check if the filed is empty
    if (!empty($_POST["lName"])) {

        if(preg_match("/^[a-zA-Z ]*$/",$_POST["lName"])){
            //assign variable
            $lName = test_input($_POST["lName"]);

        }

        else{

            $nameErr = "Only letters and white space allowed";

        }

    }
    else  {

        $nameErr = "* Name is required";

    }

    //validation for address
    //check if the address 1 is empty
    if (!empty($_POST["address1"])) {


        $address1 = test_input($_POST["address1"]);
        $address2 = test_input($_POST["address2"]);


    }

    else  {
         //show error message
        $addressErr = "* Address is required";

    }

    //validation for city
    if (!empty($_POST["city"])) {

        $city = test_input($_POST["city"]);

    }

    else  {

        $cityErr = "* City field is required";

    }

    //validation for country
    if (!empty($_POST["country"])) {

        $country = test_input($_POST["country"]);

    }

    else  {

        $countryErr = "* Country field is required";

    }

    //validation for postCode
    if (!empty($_POST["postCode"])) {

        $postCode = test_input($_POST["postCode"]);

    }

    else  {

        $postCodeErr = "* Post code field is required";

    }

    //validation for city
    if (!empty($_POST["postCode"])) {

        $postCode = test_input($_POST["postCode"]);

    }

    else  {

        $postCodeErr = "* Post code field is required";

    }

    //validation for email
    if (!empty($_POST["email"])) {

        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

            $email = test_input($_POST['email']);

        }

        else{

            $emailErr ="Please enter a valid email address";

        }

    }

    else  {

        $emailErr = "* Email is required";

    }


//    echo "<p>Amount: $amount</p>";
//    echo "<p>First Name: $fName</p>";
//    echo "<p>Last Name: $lName</p>";
//    echo "<p>Address 1: $address1</p>";
//    echo "<p>Address 2: $address2</p>";
//    echo "<p>City : $city</p>";
//    echo "<p>Country: $country</p>";
//    echo "<p>Post Code: $postCode</p>";
//    echo "<p>Email: $email</p>";
//

//connect to database
    require('./config/connect.php');
    if($connection->connect_error){

        die(mysqli_connect_error());

    }
//fetch the user input to database in else block
    else {

        //echo "Connected successfully";
        //check all the data is not empty
        if(!empty($amount)&&!empty($fName)&&!empty($lName)&&!empty($address1)&&!empty($city)&&!empty($country)&&!empty($postCode)&&!empty($email)){
            //set up an query
            $query = "INSERT INTO donate_record (amount, fName, lName,  email, address1, address2, city, country, post_code) 
                    VALUES ('$amount', '$fName', '$lName', '$email' ,'$address1', '$address2', '$city', '$country', '$postCode')";
            //prompt a string to user if the submission is completed
            if ($connection->multi_query($query) === TRUE) {


                $thank ="$fName! \n Thank You for donation \n €$amount";

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


}

?>