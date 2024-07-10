<?php
require_once "order_conn.php";
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);


    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $name_error = "Name must contain only alphabets and space";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
        }


    if (!$error) {
        if(mysqli_query($conn, "INSERT INTO users(name, email, mobile ,address) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "', '" . $address . "')")) {
        header("location: confirm.php");
        exit();
        } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        }
        mysqli_close($conn);
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Registration Form in PHP with Validation | Tutsmake.com</title>
    <link href="logSection.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

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
                     <input type="text" placeholder="Name" name="name" class="login__input" pattern ="[a-zA-Z]+" value="" maxlength="50" required="">
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

        <div class="form-group">
            <input type="email" name="email" required placeholder="Enter your email"  class="login__input" maxlength="50"><br><br>
            <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
        </div>

        <div class="form-group">
            <input type="mobile" name="mobile" required placeholder="Enter your number" pattern="^[0-9]{10}" class="login__input" maxlength="12"><br><br>
            <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
        </div>

        <div class="form-group">
            <input type="text" name="address" required placeholder="Enter your Address"  class="login__input"><br><br>
        </div>

        <div class="form-group">
        <input type="submit" class="login__submit" name="signup" value="Order Now">
                    
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

