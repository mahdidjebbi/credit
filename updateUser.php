

<?php

include '../controller/UserU.php';

$error = "";

// create topic
$user = null;

// create an instance of the controller
$userU = new userU();
if 
(
    isset($_POST["idUser"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["adress"]) &&
    isset($_POST["role"]) 


) 
{
    if (
        !empty($_POST["idUser"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
         !empty($_POST["adress"]) && 
         !empty($_POST["role"]) 
    ) {

    $userU->updateUser($_POST["idUser"],$_POST["nom"],$_POST["prenom"],$_POST["adress"],$_POST["role"]);
        header('Location:listeUser.php');//==> transistion de page
        echo $_POST["idUser"];
        echo $_POST["nom"];
        echo $_POST["prenom"];
        echo $_POST["adress"];
        echo $_POST["role"];

        //echo $_POST["date_publication"];
    } else
        echo "information manquante";
}
?>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
  

<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="ListFormation.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>formation </a>
                    
                    <a href="ListUser.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>user</a>
                    <a href="ListType.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>type</a>
            
                    
                </div>
            </nav>
        </div>
        <div class="content">



     <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            
                            <hr class="dropdown-divider">
                           
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>

    <hr>
  <button><a href="ListUser.php">Back to list</a></button>
    <div id="error">
        <?php echo $error; ?>
    </div>
 <?php
    if (isset($_POST['idUser'])) {
        $user = $userU->showUser($_POST['idUser']);

    ?>
        <form action="" method="POST">
            <table border="1" align="center">
                <!--<tr>
                    <td>
                        <label for="idtopic">Id Topic:
                        </label>
                    </td>
                    <td><input type="text" name="idtopic" id="idtopic" value="<//?php echo $topic['idtopic']; ?>" maxlength="20"></td>
                </tr>-->
                <input type="hidden" name="idUser" id="idUser" value="<?php echo $user['idUser']; ?>">


                <tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $user['nom']; ?>" maxlength="20"></td>
                </tr>
               


                <tr>
                    <td>
                        <label for="prenom">prenom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" value="<?php echo $user['prenom']; ?>" maxlength="20"></td>
                </tr>
              

                <tr>
                    <td>
                        <label for="adress">adress:
                        </label>
                    </td>
                    <td><input type="text" name="adress" id="adress" value="<?php echo $user['adress']; ?>" maxlength="20"></td>
                </tr>

                 <tr>
                    <td>
                        <label for="role">role:
                        </label>
                    </td>
                    <td><input type="text" name="role" id="role" value="<?php echo $user['role']; ?>" maxlength="20"></td>
                </tr>


            
                <tr align="center">
                <td>
                    <input type="submit" value="Save" >
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>




