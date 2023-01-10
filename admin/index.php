<?php
session_start();

ini_set('display_errors', 1);

if(!isset($_SESSION['email'])){
    header('Location:../login.php');
}

include('../db.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Your Name">
    <title>Blog Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>
<body>

<?php include('common/header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <?php include("common/sidebar.php"); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <?php
            // Dynamic page load
            $page = $_GET['page'] ?? '';
            $action = $_GET['action'] ?? '';

            switch ($page){
                case 'pages':
                    if($action == 'list'){
                        include('page/list.php');
                    }elseif ($action == 'create'){
                        include('page/create.php');
                    }elseif ($action == 'edit'){
                        include('page/edit.php');
                    }elseif ($action == 'delete'){
                        include('page/delete.php');
                    }else{
                        include('page/list.php');
                    }
                    break;
                case 'logout':
                    include("logout.php");
                    break;
                default:
                    include('dashboard.php');
            }
            ?>
        </main>
    </div>
</div>


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html>
