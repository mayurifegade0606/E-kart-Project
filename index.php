<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link href="logSection.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="sihnupContainer">
<div class="screen">
    <div class="screen__content">
        <div class="login">
        <div class="login__field">

     <form action="login.php" method="post">

         <div class="gif">
         <img src="login.gif" alt="gif" width="110px" height="110px" >
         </div>
         
     	<h2 class="heading">LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	
     	<input type="text" name="uname" placeholder="User Name" class="login__input"><br>

     
     	<input type="password" name="password" placeholder="Password" class="login__input"><br>

     	<button type="submit" class="login__submit ">
         <span class="button__text">LOGIN
         </button>

          <a href="signup.php" class="ca">Create an account</a>
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