<?php 

    // session_start();

    $conn = mysqli_connect('localhost', 'mercury_fitness', 'mercuryheat', 'mercury_fitness');

    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    $errors = ['first_name' => '', 'last_name' => '', 'email' => '', 'password' => ''];

    $fname = '';
    $lname = '';
    $email = '';
    $password = '';

    
    if (isset($_POST['submit'])) {

        // check valid inputs
        if (empty($_POST['fname'])) {
            $errors['first_name'] = 'First name is required';
        } else {
            $fname = $_POST['fname'];
        }

        if (empty($_POST['lname'])) {
            $errors['last_name'] = 'last name is required';
        } else {
            $lname = $_POST['lname'];
        }

        if (empty($_POST['email'])) {
            $errors['email'] = 'email is required';
        } else {
            $email = $_POST['email'];

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'email must be valid email address';
            }
        }

        if (empty($_POST['password'])) {
            $errors['password'] = 'password is required';
        } else {
            $password = $_POST['password'];

            if (sizeof(str_split($password)) < 6) {
                $errors['password'] = 'minimum of 6 characters required';
            }
        }

        if(!array_filter($errors)) {

            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $first_name = mysqli_real_escape_string($conn, $_POST['fname']);
            $last_name = mysqli_real_escape_string($conn, $_POST['lname']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $sql = "INSERT INTO users(email,first_name,last_name, password) VALUES('$email', '$first_name', '$last_name', '$password')";

            if (mysqli_query($conn, $sql)) {
                header('Location: login.php');

            } else {
                echo 'query error ' . mysqli_error($conn);
            }

        }

    }

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mercury Fitness: Contact Us</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>

        * {
            font-family: sans-serif;
        }

        [id='contactForm'] input {
            width: 600px;
            /* padding: 10px; */
        }

        [id='btn'] {
            /* padding: 10px; */
        }

        .form-wrapper {
            background-color: white;
            padding: 30px;

            width: fit-content;
            margin: auto auto;
            margin-top: 30px;

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .form-group {
            width: 400px;
        }


    </style>

</head>

    <body style="background-color: rgb(255 211 211 / 80%);">


        <!-- Contact Start -->

                <br>
                <br>
                <br>

                <h1 style="text-align: center; color: black;">Sign Up</h1>

                <div class="form-wrapper form-row" style="">

                    <form id="contactForm" action="register.php" method="POST">
                        <div class="control-group">
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name"
                             value="<?php echo htmlspecialchars($fname) ?>" />
                            <p style="color: red;"><?php echo $errors['first_name'] ?></p>
                        </div>
                        
                        <div class="control-group">
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"
                                value="<?php echo htmlspecialchars($lname) ?>" />
                            <p style="color: red;"><?php echo $errors['last_name'] ?></p>
                        </div>

                        <div class="control-group">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your Email"
                                 value="<?php echo htmlspecialchars($email) ?>" />
                            <p style="color: red;"><?php echo $errors['email'] ?></p>
                        </div>

                        <div class="control-group">
                            <input type="password" class="form-control" name="password" id="subject" placeholder="password"
                                 value="<?php echo $password ?>" />
                            <p style="color: red;"><?php echo $errors['password'] ?></p>
                        </div>

                        <p style="text-align: right;"><a href="login.php" style="color: blue; text-decoration: none;">Already have an account? Log in</a></p>
                        
                        <div>
                            <button id="btn" class="btn btn-outline-primary" name="submit" type="submit">Sign Up</button>
                        </div>
                    </form>

                </div>

                
            </div>
        <!-- Contact End -->

       

        <!-- Back to Top -->
        
    </body>

</html>
