<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Digital Twin</span>
</nav>
<div class='login'>
<div class='form'>
  <!--Register-->
  <form class='register-form'>
  <input type='text' placeholder='User Name'>
  <input typer='password' placeholder='Password'>
  <input typer='email' placeholder='User email'>
    <button type='button'>Register</button>
    <p class='message'>Already Registered?<a href='#'> Login</a>
    </p>
  </form>
  <!--Log In-->
  <form class='login-form'>
  <input type='text' placeholder='User Name'>
  <input typer='password' placeholder='Password'>
    <button type='button' class='filter' onclick="document.location='filter.php'">Log In</button>
    <p class='message'>Not Registered?<a href='#'> Sign up</a>
    <p class='message'><a href='forgotpassword.php'>Forgot your password?</a>
    </p>
  </form>
</div>
</div>
  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    $('.message a').click(function()
    {
      $('form').animate({height:'toggle', opacity:'toggle'}, 'slow');
    })
  </script>
</body>
</html>