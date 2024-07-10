<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "user_db";
    
    // get values form input text and number

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `user_form`(`name`, `email`, `mobile`,`address`) VALUES ('$name','$email','$mobile','$address')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'your order is confirm';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);
}

?>

<html>
<head>

</head>
<body>
<center>
<h1>Java Script Form validation Test</h1>
<h3>Sign Up Form</h3>
<form name="myform"  action="index2.php" method="post">

Name : <input type="text" name="name"/><br>
Email : <input type="text" name="email"/><br>
Mobile : <input type="text" name="mobile"/><br>
Address : <textarea name="address"></textarea><br>
<input type="submit" value="Submit">
</form>
</center>

<script src="validate.js"></script>
</body>
</html>