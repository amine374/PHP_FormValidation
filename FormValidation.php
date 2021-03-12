<?php
$NameError = "";
$EmailError = "";
$GenderError = "";
$WebsiteError = "";
$Name = "";
$Email = "";

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
        if(!preg_match("/^[A-Za-z\. ]*$/",$Name))
        {
            $NameError = "Only letters ans white space are allowed";
        }
    }
    
    

    if(empty($_POST["email"]))
    {
        $EmailError = "Email is required";
    }

    else
    {
        $Email = Test_User_Input($_POST["email"]);
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $Email))
        {
            $EmailError = "Invalid Email Format.";
        }
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
        if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/", $Website))
        {
            $WebsiteError = "Invalid Format Address Format.";
        }
    }

    if(empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["gender"]) && empty($_POST["website"]))
    {
        if((preg_match("/^[A-Za-z\. ]*$/",$Name) == true) && (preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $Email) == true) && 
        preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/", $Website))
        {
            echo "<h2>Your Submit Information</h2> <br>";
            echo "Name:".ucwords ($_POST["name"])."<br>";
            echo "Email: {$_POST["email"]}<br>";
            echo "Gender: {$_POST["gender"]}<br>";
            echo "Website: {$_POST["website"]}<br>";
            echo "Comments: {$_POST["comment"]}<br>";
        }
        else
        {
            echo "Please Completet and Correct your form again.";
        }
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
    <style type="text/css">
        input[type="text"],input[type="email"],textarea{
        border:  1px solid dashed;
        background-color: rgb(221,216,212);
        width: 600px;
        padding: .5em;
        font-size: 1.0em;
        }
        .Error{
            color: red;
        }
</style>
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