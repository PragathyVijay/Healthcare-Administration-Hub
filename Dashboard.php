<?php

if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header("location : Login.php");
}
?>
<?php 
if(isset($_SESSION['success'])) : ?>
<div>
    <h3>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h3>
</div>
<?php endif ?>
<style>
    #button{
        background-color:#E8E8E8;
        width:140px;
        height:60px;
        font-size: 20px;
        font-family:impact;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="dashboard.css" /> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Home Page</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="About Us.html"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">About Us</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Sevices</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Departments</span></a></li>
                        <li><a href="Your Appointment.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Your Appointment</span></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                <a href="Appointment.php">
                                    <button id="button">Book Appointment</button>
                                    </a>
                                    <a href="Login.php?logout='1'">
                                    <button id="button" name = "logout">Logout</button>
                                    </a>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li class="dropdown">
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>JS Krishna</span>
                                                    <p class="text-muted small">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <div class="img mb-2">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.9F3SkAq3ystWCd9AQ2j_FwHaD3&pid=Api&P=0" width = "900" height = "500" class="rounded-circle">
                    </div>
                    </body>  
