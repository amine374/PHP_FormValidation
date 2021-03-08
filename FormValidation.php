<?php
$NameError = "";
$EmailError = "";
$GenderError = "";
$WebsiteError = "";
//$Submit = $_POST["submit"];

if(isset($_POST["submit"]))
{
    if(empty($_POST["name"]))
    {
        $NameError = "Name is required";
    }

    else
    {
        $Name = Test_User_Input($_POST["name"]);
    }

    if(empty($_POST["email"]))
    {
        $EmailError = "Email is required";
    }

    else
    {
        $Email = Test_User_Input($_POST["email"]);
    }

    if(empty($_POST["gender"]))
    {
        $GenderError = "Gender is required";
    }

    else
    {
        $Gender = Test_User_Input($_POST["gender"]);
    }

    if(empty($_POST["website"]))
    {
        $WebsiteError = "Website is required";
    }

    else
    {
        $Website = Test_User_Input($_POST["website"]);
    }
}

function Test_User_Input($Data)
    {
        return $Data;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="FormValidation.php" method="post">
    <legend>* Please Fill Out the Following Fields</legend>
        <fieldset>
        Name: <br>
        <input type="text" name="name" class="input" value="">
        * <?php echo $NameError; ?><br>

        Email: <br>
        <input type="email" name="email" class="input" value="">
        * <?php echo $EmailError; ?><br>

        Gender: <br>
        <input type="radio" name="gender" class="radio" value="Female">Female
        <input type="radio" name="gender" class="radio" value="Male">Male
        *<?php echo $GenderError; ?><br>

        Website: <br>
        <input type="text" name="website" class="website" value="">
        *<?php echo $WebsiteError; ?><br>

        Comment: <br>
        <textarea  name="comment" rows="5" cols="25"></textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="Submit Your Information">
        </fieldset>
    </form>
</body>
</html>