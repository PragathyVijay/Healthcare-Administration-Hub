<?php
$conn = mysqli_connect('*****','*****','*****','*****') or die("could not connect to database");

if(isset($_POST['app_submit'])){

   $fname = mysqli_real_escape_string($conn, $_POST['f_name']);
   $lname = mysqli_real_escape_string($conn, $_POST['l_name']);
   $bday = mysqli_real_escape_string($conn, $_POST['Bdate']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $reason = mysqli_real_escape_string($conn, $_POST['reason']);

   $select_users = mysqli_query($conn, "SELECT * FROM `appointment` WHERE Email = '$email'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else
   {  
         mysqli_query($conn, "INSERT INTO `appointment`(First_Name, Last_Name, Birthday, Email, Phone, Reason) VALUES('$fname', '$lname', '$bday', '$email', '$phone', '$reason ')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:Success.html');
   }
}

?>

<head>
    <title>Appointment Form</title>
</head>
<script src = js/jquery-3.6.0.min.js> </script>
<script src = js/jquery.validate.js> </script> 
<script>
$(document).ready(function(){
$("#frm").validate({
rules: {
f_name:"required",
l_name:"required",
email:"required",
phone:"required",
reason:"required"
},
messages:{
f_name:"Enter your first name",
l_name:"Enter your last name",
email:"This is a required field",
phone:"Enter your phone number",
reason:"This is a required field"
}
});
});
</script>
<link rel="stylesheet" href="form.css" /> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<div class="wrapper rounded bg-white">
<div class="container mt-5 mb-5">
        <div class="h3">Appointment Form</div>
        <form action = "" method = "post" id=frm>
        <div class="form">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="f_name" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="l_name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Birthday</label>
                    <input type="date" class="form-control" name="Bdate" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Gender</label>
                    <div class="d-flex align-items-center mt-2">
                        <label class="option">
                            <input type="radio" name="Gender">Male
                            <span class="checkmark"></span>
                        </label>
                        <label class="option ms-4">
                            <input type="radio" name="Gender">Female
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" name="phone" required>
                </div>
            </div>
            <div class=" my-md-2 my-3">
                <label>Reason for appointment</label>
                <input style="height:70px;width:500px" type="text" placeholder="Accurate specification is expected" name="reason" required>
            </div>
            <div>
                  <button type="submit" name = "app_submit"
                  class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit</button>
                </div>
           </form>
        </div>

    </div>
