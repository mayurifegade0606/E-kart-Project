<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link href="logSection.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

</head>
<body>

<div class="sihnupContainer">
<div class="screen">
    <div class="screen__content">
        <div class="login">
        <div class="login__field">
     <form action="signup-check.php" method="post">
          
     <h2 class="heading">Sign Up</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          
          <?php
           if (isset($_GET['name']))
            { 
                
                 ?>
               <input type="text" name="name" placeholder="Name" class="login__input" 
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php 
     }else
     { ?>
               <input type="text"  name="name" placeholder="Name" class="login__input" ><br>
          <?php }?>

          
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"  name="uname"  placeholder="User Name" class="login__input" 
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text"   name="uname" placeholder="User Name" class="login__input" class="login__input" ><br>
          <?php }?>


     	
     	<input type="password"  name="password"  placeholder="Password" class="login__input" ><br>

         
          <input type="password" name="re_password"  placeholder="Re_Password" class="login__input" ><br>
         <button type="submit" class="login__submit " name="signup" >
         <span class="button__text">Sign up
         </button>

         <a href="index.php" class="ca">Already have an account?</a>
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