<?php

function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}



session_save_path('file/temp');
session_start();
$_SESSION['url']= curPageURL();
if(isset($_GET['codeError']) and $_GET['codeError']==1){
    echo '<h2 style="color:red">Erreur recommencez !</h2>';
}

$id = htmlspecialchars($_GET['code'], ENT_COMPAT,'ISO-8859-1', true);
$temp = htmlspecialchars($_GET['temp'], ENT_COMPAT,'ISO-8859-1', true);
$_SESSION['id'] =  $id;
if((time() - $temp) > 1200){
    $_SESSION['expire']=true;
    $_SESSION['fichier']="file/key/$id.crt";
    header('Location: index.php?codeError=2');
    
} 
?>


<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <title>Partage Mot de passe</title>
    <head>
    <title>Inscription</title>
    </head>
    <body>






    <form action="index.php" method= "POST" >

    <p><label>Clé privée AES fournie</label></p>
    <t/><p><input type="text" name="aes"/></p>
    <p><label>Veuillez reproduire les numéros présents sur le captcha</label><p>
<?php

    echo '<img src="captcha2.php" alt="CAPTCHA" />';

?>
<p>B : <input type="text" name ="code"/></p>

<p><input type="submit" value="valider"/></p>

    </form>
    </body>
    </html>
