<?php
    session_start();

    include("database.php");


    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $fullname = $_POST['fname'];
        $gmail = $_POST['email'];
        $mobile = $_POST['mobile'];
        $Dateofbirth = $_POST['dob'];
        $location = $_POST['loc'];
        $pincode =$_POST['pin'];
        $password =$_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "INSERT INTO `student`(`fname`, `email`, `mobile`, `dob`, `loc`, `pin`, `pass`) VALUES ('$fullname','$gmail','$mobile','$Dateofbirth','$location','$pincode','$password')";

            mysqli_query($con, $query);
            
            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter Some Valid Information')</script>";
        }     
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>SignUp</title>
    <style>
    
    
        .bg-color{
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgb(207, 163, 182) 0%, rgba(148,187,233,1) 100%);
        height: 200vh;
        background-size: cover; 
    
    }
    *{
        margin:0;
    }
    .signup{
        width: 360px;
        height: 800px;
        margin: auto;
        background: rgb(224, 197, 205);
        border: 3px;
        font-family: "Roboto";
        font-weight: bolder;
    }
    
    .login{
        width: 360px;
        height: 320px;
        margin: auto;
        background: white;
        border-radius: 3px;
    }
    
    .h1 {
        text-align: center;
    }
    
    .h4 {
        text-align: center;
        padding-top: 15px ;
    }
    
    .form {
        width: 300px;
        margin: 20px;
    }
    
    .form label {
        display: flex;
        margin-top: 20px;
        font-size: 18px;
    }
    
    .form input {
        width: 100%;
        padding: 7px;
        border:none;
        border-radius:6px;
        border: 1px solid gray;
        outline: none;
    }
        
    input[type="submit"]{
        width: 320px;
        height: 35px;
        margin-top: 20px;
        border: none;
        background-color: #ff7200;
        color: white;
        font-size: 18px;
        cursor: pointer;
    }
    
    .input[type="submit"]:hover{
        color: white;
        background: rgb(13, 211,247);
    }
    
    .p{
        text-align: center;
        padding: 20px;
        font-size: 6px;
    }
    .navbar{
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #34495e;
        color: white;
    }
    .logo{
        font-size: 20px;
        margin: 14px;
    }
    .menu ul{
        display: flex;
    }
    .menu li{
        list-style: none;
    }
    .menu li a{
        text-decoration: none;
        color: white;
        padding: 16px;
        display: block;
    }
    .menu li:hover{
        background-color: #48637e;
    }
               
            </style> 
</head>


<body>
    <div id="section-student-registration">
        <div>
            <div class="navbar">
                    <div class="logo" ><a href="tution-world-home-page.html" style="color: white;">
                    Tution World</a>
                    </div>
                 <div class="menu">
                     <ul>
                        <li><a href="tution-world-home-page.html" style="color: white;">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="login-page.html" style="color: white;">Signup/Login</a></li>
                        </ul>
                 </div>
            </div>
        </div>
                <div class="bg-color" style="text-align: center;">
                    <div class="signup">
                        <h1>Sign Up</h1><br><br>

                        <form method="POST">
                            <label>Full Name</label>
                            <input type="text" placeholder="Full Name" name="fname" required><br><br>
                            <label>Email</label>
                            <input type="email" placeholder="Email"name="email" required><br><br>
                            <label>Mobile</label>
                            <input type="text" placeholder="Mobile"name="mobile" required><br><br>
                            <label>Date of birth</label>
                            <input type="date" placeholder="Date of birth"name="dob" required><br><br>
                            <label>Location</label>
                            <input type="text" placeholder="Location"name="loc" required><br><br>
                            <label>Pin code</label>
                            <input type="text" placeholder="Pin code"name="pin" required><br><br>
                            <label>Password</label>
                            <input type="password" placeholder="Passworde"name="pass" required><br><br>
                            <label>Re-password</label>
                            <input type="password" placeholder="Re-password"name="" required><br><br>
                            <input type="submit" name="" value="Sign up"><br><br>
                        </form>
                        <p>By clicking the SignUp Button, you agree to you our<br>
                        <a href="">Terms and conditions</a> and <a href="#">Policy Privacy</a>
                     </p>
                     <p>Already have an account? <a href="Student_loginPageUpdate.php">Login Here</a></p>
                  </div>
    </div>
            <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>

            
                












    </body>
    

</html>