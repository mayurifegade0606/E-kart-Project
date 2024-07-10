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

<!DOCTYPE html>

<html>

    <head>

        <title> PHP INSERT DATA </title>

        <meta charset="UTF-8">
        <link href="logSection.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
    <div class="sihnupContainer">
<div class="screen">
    <div class="screen__content">
        <div class="login">
        <div class="login__field">

        <form action="orderNow.php" method="post">

        <h2 class="heading1">Book your watch ....!</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div class="form-group">
            <input type="text" name="name" required placeholder="Name"  class="login__input" maxlength="30"><br><br>
            <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
        </div>

        <div class="form-group">
            <input type="email" name="email" required placeholder="Enter your email"  class="login__input" maxlength="50"><br><br>
            <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
        </div>

        <div class="form-group">
            <input type="mobile" name="mobile" required placeholder="Enter your number"  class="login__input" maxlength="12"><br><br>
            <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
        </div>

        <div class="form-group">
            <input type="text" name="address" required placeholder="Enter your Address"  class="login__input"><br><br>
        </div>

        <div class="form-group">
            <input type="submit" name="insert" value="Order Now"  class="login__submit1 ">
        </div>

        </form>
        </div>
        </div>
    </div>
</div>
    </div>
    
    <div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>	
    </body>

</html>

