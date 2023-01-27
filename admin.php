<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin!</title>
</head>

<body>
    <div class="container-fluid admin-components">
        <?php require 'components/admin/_aside-admin.php' ?>
        <!-- START OF MAIN-BODY-->
        <div class="container-fluid main-body bg-primary">
          <!--Start of main-body header--> 
        <?php require 'components/admin/_admin-main-body-header.php' ?>
        <!--end of main-body header-->

            <!-- Start OF OVERVIEW-->
            <?php require 'components/admin/_admin-overview.php' ?>

             <!-- END OF OVERVIEW-->
            
            <!-- END OF MAIN-BODY-->
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


</body>

</html>