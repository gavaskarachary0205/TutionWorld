<?php


    include("database.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $gmail=$_POST['email'];
        $password=$_POST['pass'];
    
        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
       
            $query = "select *  from student where email = '$gmail' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                        header("location: index.php");
                        die;
                    }
                }
            }
            echo "<script type= 'text/javascript'> alert('wrong username or password')</script>";
        }
        else{
        echo "<script type='text/javascript'> alert('Successfully Regiter')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <style>

.bg-color
{
    background: rgb(238,174,202);
    background: radial-gradient(circle, rgb(207, 163, 182) 0%, rgba(148,187,233,1) 100%);
    height: 200vh;
    background-size: cover;
}
.login
{
    width: 360px;
    height: 320px;
    margin: auto;
    background: rgb(205, 197, 228);
    border-radius: 3px;
    font-family: "Roboto";
        font-weight: bolder;
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
        <div class="login">
            <h1>Login</h1><br>

            <form method="POST">
                <label>Email</label>
                <input type="email" placeholder="Email"name="email" required><br><br>
                <label>Password</label>
                <input type="password" placeholder="Passworde"name="pass" required><br><br>
                <input type="submit" name="" value="Login"><br><br>
            </form>
            <p> Not have an Account? <a href="Student_signUPpageUpdate.php">SignUp Hear</a></p>
      </div>
</body>
</html>