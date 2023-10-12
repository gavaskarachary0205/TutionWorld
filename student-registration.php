
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>Tuiton World</title>
        
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
    background: white;
    border: 3px;
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
    
input[type="signup"]{
    width: 320px;
    height: 35px;
    margin-top: 20px;
    border: none;
    background-color: #ff7200;
    color: white;
    font-size: 18px;
    cursor: pointer;
}

.input[type="signup"]:hover{
    color: white;
    background: rgb(13, 211,247);
}

.p{
    text-align: center;
    padding: 20px;
    font-size: 15px;
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
                <form action="connct.php" method="POST">
                    <br><br>
                        <legend><b>Student Register Details</b></legend><br><br>
                        <label>Full Name</label>
                        <input type="text" placeholder="Full Name" name="FullName" required><br><br>
                        <label>Email</label>
                        <input type="email" placeholder="Email"name="Email" required><br><br>
                        <label>Mobile</label>
                        <input type="tel" placeholder="Mobile Number" name="Mobile" required><br><br>
                        <label>Date of Birth</label>
                        <input type="date" placeholder="Date of Birth"name="DateOfBirth" required><br><br>
                        <label>Location</label>
                        <input type="text" placeholder="Location" name="Location" required><br><br>
                        <label>Pincode</label>
                        <input type="text" placeholder="Pincode" name="Pincode" required><br><br>
                        <label>Password</label>  
                        <input type="password" placeholder="Password" name="Pass" required><br><br>
                        <label>ReEnter Password</label> 
                        <input type="password" placeholder="ReEnter Password" name="RePass" required><br><br>
                        <!-- <input type="submit" name="" value="submit"> -->
                        <div >
                            <button class="btn btn-primary" onclick="display('Regigstration sucessfully...')">Sign In</button>
                        </div>
                </form>
                <p>By clicking the sign up, your agree to our <br>
                <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a>
                </p>
                <p> Already have an account? <a href="student_login.php">Login Here</a></p>
            </div>
        </div>
        <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
    </body>
</html>