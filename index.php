<?php
$pathSession = 'file/temp';

if ( !file_exists($pathSession) ) {
    mkdir ($pathSession, 0770);
}
$dir = 'file/key';

if ( !file_exists($dir) ) {
    mkdir ($dir, 0770);
}
<<<<<<< HEAD
session_start();

$identifiantAdmin = 'runiso';
$passAdmin = 'P9yTeYVW';
if(isset($_POST['IDADMIN']) and isset($_POST['MDPADMIN'])){

        $idadmin = htmlspecialchars($_POST['IDADMIN'], ENT_COMPAT,'ISO-8859-1', true);
        $mdpadmin = htmlspecialchars($_POST['MDPADMIN'], ENT_COMPAT,'ISO-8859-1', true);
        if(($idadmin == $identifianAdmin) and ($mdpadmin == $passAdmin)){


                $_SESSION['admin']= $idadmin;
                header('Location: index.php');


        }else {
                header('Location: index.php');
        }
}else {
        header('Location: index.php');
}

?>

=======
?>

<<<<<<< HEAD

>>>>>>> 1b053e17c0a55f8b946a30a547e97c3c4a5c22e4
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
    <html class="no-js" lang="en" >

    <head>
    <meta charset="utf-8">
    <!-- If you delete this meta tag World War Z will become a reality -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partage mot de passe</title>

    <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
    <link rel="stylesheet" href="zurb/css/normalize.css">
    <link rel="stylesheet" href="zurb/css/foundation.css">

    <!-- If you are using the gem version, you need this only -->
    <link rel="stylesheet" href="zurb/css/app.css">

    <script src="zurb/js/vendor/modernizr.js"></script>

    </head>
    <body>
<<<<<<< HEAD


<?php
include('navbar.php');
include('header.php');
?>
<div class="row">
<br/><br/>
<?php
=======
    <script src="zurb/js/vendor/jquery.js"></script>
    <script src="zurb/js/foundation.min.js"></script>
    <script>
    $(document).foundation();
</script>
=======
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <title>Partage Mot de passe</title>
    <head>
    <title>Inscription</title>
    </head>
    <body>
>>>>>>> f1173c7280398eb792db01675fd27ea0dca86840





<<<<<<< HEAD
<?php
include('navbar.php');
>>>>>>> 1b053e17c0a55f8b946a30a547e97c3c4a5c22e4

if(isset($_GET['code']) and isset($_GET['temp'])){
    
    include('client.php');

}else if(isset($_POST['code'])){
    include('validation.php');
}else if(isset($_GET['codeError']) && $_GET['codeError']==2){
    include('expiration.php');
}else {
<<<<<<< HEAD
?>

<?php
    include('create.php');
}

?>
</div>
<?php include('footer.php');?>


    <script src="zurb/js/vendor/jquery.js"></script>
    <script src="zurb/js/foundation.min.js"></script>
<script src="zurb/js/foundation/foundation.topbar.js"></script>

    <script>
    $(document).foundation();
</script>

=======
    include('create.php');
}
=======

<?php
    
    if(isset($_GET['code']) and isset($_GET['temp'])){
    
        include('client.php');

    }else if(isset($_POST['code'])){
        include('validation.php');
    }else if(isset($_GET['codeError']) && $_GET['codeError']==2){
        include('expiration.php');
    }else {
        include('create.php');
    }
>>>>>>> f1173c7280398eb792db01675fd27ea0dca86840


?>
>>>>>>> 1b053e17c0a55f8b946a30a547e97c3c4a5c22e4
</body>
</html>
