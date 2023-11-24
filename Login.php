<?php

$conn = mysqli_connect('localhost','root','root123','hospital') or die("could not connect to database");
session_start();

if(isset($_POST['login_user'])){
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password_1']));

   $select_users = mysqli_query($conn, "SELECT * FROM `user` WHERE username = '$username' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);


         $_SESSION['username'] = $row['username'];
         $_SESSION['password'] = $row['password'];
         header('location:Dashboard.php');


   }
   else
   {
      $message[] = 'incorrect username or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/s.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<div class="form-container">

<head>
 <title>Login</title>
</head>
<link rel="stylesheet" href="regis.css" /> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Log In</h2>

              <form action = "" method = "post">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name = "username" required />
                  <label class="form-label" for = "username">Username : </label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name = "password_1" required/>
                  <label class="form-label" for = "password">Password : </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name = "login_user"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Log In</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Not a user?<a href = "Registration.php" class="fw-bold text-body"><b>
                   <u>Register</u></b></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>