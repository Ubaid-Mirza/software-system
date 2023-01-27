<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Hello, world!</title>
</head>

<body>
  <div class="container-fluid main">
   <!-- start of nav -->
   <?php
   require 'components/index/nav.php' 
   ?>
    <!-- end of nav -->

     <!-- start of nav none -->
   <?php
   require 'components/index/none.php' 
   ?>
    <!-- end of nav none -->

     <!-- start of body -->
   <?php
   require 'components/index/body.php' 
   ?>
    <!-- end of body -->

     <!-- start of services -->
   <?php
   require 'components/index/service.php' 
   ?>
    <!-- end of services -->
    
   
    
  </div>
  <!--END OF MAIN CONTAINER(WRAPPER)-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

  </script>
</body>

</html>