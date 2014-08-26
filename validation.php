<?php
session_save_path('file/temp');
session_start();

?>
<br/><br/><br/>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <title>Partage Mot de passe</title>
    <head>
    <title>Inscription</title>
    </head>
    <body>


<?php


$code = htmlspecialchars($_POST['code'], ENT_COMPAT,'ISO-8859-1', true);
$aes = htmlspecialchars($_POST['aes'], ENT_COMPAT,'ISO-8859-1', true);
$_SESSION['aes'] = $aes;
    
if($_SESSION['aleat_nbr']== $code 
and !empty($aes)){
    include('traitement.php');    
}else{
     header('Location: '.$_SESSION['url'].'&codeError=1');
}
?>


</body>
</html>
