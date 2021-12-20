<?php

if(isset($_POST['submit'])){
	  // Username
  $username = $_POST['username'];

  // Validate empty or less than 3 characters
  if(empty($username) || strlen($username) < 3) {
    echo "<h4>Error: Enter a Valid Name </h4>";
  }

  // Email
  $email = $_POST['email'];

  // Validate empty or email
  if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h4>Error: Please provide a valid email address</h4>";
  }

  // Password
  $password = $_POST['password'];

  // Define RegEx pattern
  $pattern  = "/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{7,}$/";

  // Validate empty or pattern
  if(empty($password) || preg_match($pattern, $password) === 0) {
    echo "<h4>Error: Password is invalid</h4>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="introductory_page.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<title>Form Validation in PHP</title>
	<link rel="stylesheet" type="text/css" href="ContactMe.css">
</head>
<body>
	<div class="contact-title mt-4">
		<h1>Hello This is Dev</h1>
		<h2>Always There to Help You!</h2>
	</div>
	<div class="contact-form">
		<form autocomplete="off" method="post" action="<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]); 
     ?>">
		<p>
		      <label for="username">Name*</label><br>	      
              <input type="text" name="username" class="form-control">
        </p>

    <p>
      <label for="email">Email*</label><br>
      <input type="email" name="email" class="form-control">
    </p>

    <p >
      <label for="password">Password*</label><br>
      <input type="password" name="password" class="form-control">
    </p>
		<input type="submit" name="submit" value="Regsiter" class="form-control submit">
	</form>
	</div>
</body>
</html>



