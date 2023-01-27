<!-- PHP CODE  -->
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'config.php';
        // Taking the Data from Input
        $email = $_POST['email'];
        $password = $_POST['pass'];
            $sql = "Select * from `signup` WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);    
            if($num == 1){
                $login = true;
                SESSION_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header( "refresh:2;url=admin.php" );
                }
            else{
                $showError = true;
            }
            }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/login.css">

    <title>Login Form</title>
</head>

<body>
    <!--START OF MAIN CONTAINER(WRAPPER)-->
    <div class="container-fluid wrapper">
        
       <!-- start of form -->
  <?php require 'components/login/form.php' ?>
  <!-- end of form -->

    </div>
    <!--END OF MAIN CONTAINER(WRAPPER)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        </script>
</body>

</html>