<!DOCTYPE html>

<?php 
if(isset($_POST['submit']))
{
    $fname = $_POST['f-name'];
    $lname = $_POST['l-name'];
    $gender = $_POST['gen'];
    $email = $_POST['email-adddress'];
    $contact = $_POST['phone'];
    $cityname = $_POST['c-name'];
    $experience = $_POST['experience'];
    $username = $_POST['user-name'];
    $password = $_POST['password'];
    $con_password = $_POST['con-password'];
    if($password == $con_password)
    {   $conn = mysqli_connect('localhost','root','','techify') or die('Connection failed');
        $sql = "INSERT INTO instructor(instfname,instlname,Gender,email,contact,city,experience,insusername,inspassword) VALUES('{$fname}','{$lname}','{$gender}','{$email}','{$contact}','{$cityname}','{$experience}','{$username}','{$password}')";
        mysqli_query($conn,$sql) or die("Query Failed");
        $sqli = "INSERT INTO instdescp(username) VALUES('{$username}')";
        mysqli_query($conn,$sqli)or die("query falild");
        mysqli_close($conn);
        header('location: http://localhost/techify/login.php');
    } 
    else
    {
        header('location: http://localhost/techify/instructorsingup.php');
    }
}
else
{
?>


<head>
    <title>Techify</title>
    <link rel="icon" type="image/x-icon" href="Dimages/favicon.jpeg">
    <link rel="stylesheet" type="text/css" href="DCSS/inst.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ee6725c5d8.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="right-box">
        <div class="signup-form">
            <h1>Instuctor's Signup </h1>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <div class="f-name rel pos">
                    <label for="f-name">First Name</label><br>
                    <input type="text" name="f-name" id="l-name" placeholder="First Name"><br>
                    <i class="fas fa-user"></i><br>
                </div>
                <div class="l-name rel pos">
                    <label for="l-name">Last Name</label><br>
                    <input type="text" name="l-name" id="l-name" placeholder="Last Name"><br>
                    <i class="fas fa-user"></i><br>
                </div>
                <div class="gender rel pos">
                    <label for="gen">Gender</label><br>
                    <input type="text" name="gen" id="gen" placeholder="Male/Female"><br>
                    <i class="fas fa-user"></i><br>
                </div>
                <div class="mail rel pos">
                    <label for="email-address">Email</label><br>
                    <input type="email" name="email-adddress" id="email-address" placeholder="name@example.com"><br>
                    <i class="far fa-envelope"></i><br>
                </div>
                <div class="phone rel pos">
                    <label for="phone">Contact </label><br>
                    <input type="number" name="phone" id="phone" placeholder="+91**********"><br>
                    <i class="fas fa-phone"></i><br>
                </div>
                <div class="c-name rel pos">
                    <label for="c-name">City </label><br>
                    <input type="text" name="c-name" id="c-name" placeholder="City"><br>
                    <i class="fas fa-city"></i><br>
                </div>

                <div class="exp rel pos">
                    <label for="experience">Experience</label><br>
                    <input type="number" name="experience" id="experience" placeholder="Experience in field"><br>
                    <i class="fas fa-briefcase"></i><br>
                </div>

                <div class="user rel pos">
                    <label for="user-name">Username</label><br>
                    <input type="text" name="user-name" id="user-name" placeholder="Username"><br>
                    <i class="fas fa-user"></i><br>
                </div>
                
                <div class="pass rel pos">
                    <label for="pasword">Password</label><br>
                    <input type="password" name="password" id="password" placeholder="Password"><br>
                    <i class="fas fa-lock"></i><br>
                </div>
                <div class="pass rel pos">
                    <label for="con-pasword">Confirm Password</label><br>
                    <input type="password" name="con-password" id="con-password" placeholder="Retype Password"><br>
                    <i class="fas fa-lock"></i><br>
                </div>
                <div class="btn rel">
                    <button type="submit" name="submit">Register</button>
                </div>
                <div class="agree">
                    <h6>By signing up, you agree to our <u>Community Guidelines</u>,<br> <u>Terms of Use </u> and <u>Privacy policy</u> </h6>
                </div>
                <div class="new-user rel">
                    <p>Already have account?</p><a href="login.php">Log In</a>
                    <br>
                    <a href="studsign.php">Create Account as Student</a>
                </div>
            </form>
        </div>
    </div>
    <div class="left-box">

</div>

<?php 
}
?>