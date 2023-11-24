<link rel="stylesheet" href="appointment.css" /> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-between mb-3">

        <span>Doctors</span>
        
        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


/* Set a style for the submit button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<button class="btn btn-success add" onclick="openForm()">Feedback</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Feedbacks</h1>

    <input style="height:200px" type="text" placeholder="Any Feedbacks" name="email" required>

    <button type="button" class="btn btn-success add" onclick="closeForm()">Submit</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
        
    </div>
    <div class="row g-2">

        <div class="col-md-3">

            <div class="card p-2 py-3 text-center">

                <div class="img mb-2">

                    <img src="https://pngimg.com/uploads/doctor/doctor_PNG16041.png" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">Peter Parker</h5>
                <small>Neurosurgeon</small>
                <b>27/08/22</b>
                <b>Monday</b>
                <b>9.00-9.30</b>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>

                <div class="mt-4 apointment">

                    <a href="Form.php">
                    <button class="btn btn-success text-uppercase">Book Appointment</button>
                    </a>
                    
                </div>

            </div>
            
        </div>




        <div class="col-md-3">

            <div class="card p-2 py-3 text-center">

                <div class="img mb-2">

                    <img src="https://i.imgur.com/o5uMfKo.jpg" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">Mario Speedway</h5>
                <small>Cardiologist</small>
                <b>28/08/22</b>
                <b>Tuesday</b>
                <b>10.00-10.30</b>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>

                <div class="mt-4 apointment">

                    <a href="Form.php">
                    <button class="btn btn-success text-uppercase">Book Appointment</button>
                    </a>
                    
                </div>

            </div>
            
        </div>




        <div class="col-md-3">

            <div class="card p-2 py-3 text-center">

                <div class="img mb-2">

                    <img src="https://i.imgur.com/tmdHXOY.jpg" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">Anna Sthesia</h5>
                <small>Surgeon</small>
                <b>29/08/22</b>
                <b>Wednesday</b>
                <b>11.00-11.30</b>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                    
                </div>

                <div class="mt-4 apointment">

                    <a href="Form.php">
                    <button class="btn btn-success text-uppercase">Book Appointment</button>
                    </a>
                </div>

            </div>
            
        </div>




        <div class="col-md-3">

            <div class="card p-2 py-3 text-center">

                <div class="img mb-2">

                    <img src="https://i.imgur.com/C4egmYM.jpg" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">Paul Moliv</h5>
                <small>Dentist</small>
                <b>30/08/22</b>
                <b>Thursday</b>
                <b>12.00-12.30</b>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                   
                    
                </div>

                <div class="mt-4 apointment">

                    <a href="Form.php">
                    <button class="btn btn-success text-uppercase">Book Appointment</button>
                    </a>
                    
                </div>

            </div>
            
        </div>



        <div class="col-md-3">

            <div class="card p-2 py-3 text-center">

                <div class="img mb-2">

                    <img src="https://i.imgur.com/0LKZQYM.jpg" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">Anna Maul</h5>
                <small>Eye Specialist</small>
                <b>31/08/22</b>
                <b>Friday</b>
                <b>2.00-2.30</b>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>

                <div class="mt-4 apointment">

                    <a href="Form.php">
                    <button class="btn btn-success text-uppercase">Book Appointment</button>
                    </a>
                    
                </div>

            </div>
            
        </div>


        <div class="col-md-3">

            <div class="card p-2 py-3 text-center">

                <div class="img mb-2">

                    <img src="https://i.imgur.com/ZSkeqnd.jpg" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">Gail Forcewind</h5>
                <small>Urology</small>
                <b>01/09/22</b>
                <b>Saturday</b>
                <b>3.00-3.30</b>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>

                <div class="mt-4 apointment">

                    <a href="Form.php">
                    <button class="btn btn-success text-uppercase">Book Appointment</button>
                    </a>
                    
                </div>

            </div>
            
        </div>



        <div class="col-md-3">

            <div class="card p-2 py-3 text-center">

                <div class="img mb-2">

                    <img src="https://i.imgur.com/MZm1LNz.jpg" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">William Peterson</h5>
                <small>Dermatologist</small>
                <b>03/09/22</b>
                <b>Monday</b>
                <b>4.00-4.30</b>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>

                <div class="mt-4 apointment">

                    <a href="Form.php">
                    <button class="btn btn-success text-uppercase">Book Appointment</button>
                    </a>
                    
                </div>

            </div>
            
        </div>



        <div class="col-md-3">

            <div class="card p-2 py-3 text-center">

                <div class="img mb-2">

                    <img src="https://i.imgur.com/HFpxxJz.jpg" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">Patey Cruiser</h5>
                <small>Child Specialist</small>
                <b>04/09/22</b>
                <b>Tuesday</b>
                <b>5.00-5.30</b>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>

                <div class="mt-4 apointment">

                    <a href="Form.php">
                    <button class="btn btn-success text-uppercase">Book Appointment</button>
                    </a>
                    
                </div>
            </div> 
        </div>      
    </div>
   </div>