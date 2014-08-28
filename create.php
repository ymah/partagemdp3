<?php
include('Crypt/RSA.php');
include('Crypt/AES.php');

<<<<<<< HEAD



////////////////////////
function  generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    $l = strlen($characters);
    $last = 0;
    for ($i = 0; $i < $length; $i++) {
        $nbr = mt_rand(0, $l - 1);
        if($nbr == $last){
            $nbr = ($nbr * mt_rand(0,5))%$l;
        }
        if(($characters[$last] == '0' and $characters[$nbr] == 'O')
        || ($characters[$last] == '1' and ($characters[$nbr] == 'l' || $characters[$nbr] == 'I'))
        || ($characters[$last] == 'O' and $characters[$nbr] == '0')
        || ($characters[$last] == 'l' and ($characters[$nbr] == '1' || $characters[$nbr] == 'I'))
        || ($characters[$last] == 'I' and ($characters[$nbr] == 'l' || $characters[$nbr] == '1'))
        || ($characters[$last] == 'w' and $characters[$nbr] == 'v')
        || ($characters[$last] == 'v' and $characters[$nbr] == 'w')
        || ($characters[$last] == 'W' and $characters[$nbr] == 'V')
        || ($characters[$last] == 'V' and $characters[$nbr] == 'W')
        || ($characters[$last] == 'v' and $characters[$nbr] == 'u')
        || ($characters[$last] == 'u' and $characters[$nbr] == 'v')
        || ($characters[$last] == 'V' and $characters[$nbr] == 'U')
        || ($characters[$last] == 'U' and $characters[$nbr] == 'V')) {

		$nbr = ($nbr+10)%l;

        }
        $last = $nbr;
        $randomString .= $characters[$last];
=======
function  generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    $l = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[mt_rand(0, $l - 1)];
>>>>>>> 1b053e17c0a55f8b946a30a547e97c3c4a5c22e4
    }
    return $randomString;
}

<<<<<<< HEAD
////////////////////////





=======
>>>>>>> 1b053e17c0a55f8b946a30a547e97c3c4a5c22e4
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






<<<<<<< HEAD
if(isset($_POST['id']) and isset($_POST['mdp'])and (isset($_SESSION['admin']))){
=======
if(isset($_POST['id']) and isset($_POST['mdp'])){
>>>>>>> 1b053e17c0a55f8b946a30a547e97c3c4a5c22e4
    $nbr=generateRandomString(10);
    $id = htmlspecialchars($_POST['id'], ENT_COMPAT,'ISO-8859-1', true);
    $mdp = htmlspecialchars($_POST['mdp'], ENT_COMPAT,'ISO-8859-1', true);

    
    $rsa = new Crypt_RSA();
<<<<<<< HEAD
    extract($rsa->createKey(2048));
    $rsa->loadKey($publickey);
    $resID = base64_encode($rsa->encrypt($id));
    $resMDP = base64_encode($rsa->encrypt($mdp));
    $lien = curPageURL()."?code=$nbr&temp=".time()."";
    $pk = generateRandomString(8);

    if(!file_put_contents("file/key/$pk$nbr.crt","$resID;$resMDP;$cle"))//on enregistre le resultat dans le fichier de sortie
        echo 'Exception reçue : erreur ecriture dans le fichier<br/>';
    
echo "

<div class=\"row\">
<fieldset>
<legend>URL à envoyer au client</legend>
$lien
</fieldset>
<fieldset>
<legend>Clé RSA privée de decyptage à envoyer au client</legend>
$privatekey
</fieldset>
<fieldset>
<legend>Code unique à envoyer au client via un autre canal (telephone ou sms)</legend>
$pk
</fieldset>
</div>
";
}else if(isset($_SESSION['admin'])){


?>
<h3 style="color:white" class="text-center">Saisissez un identifiant et un mot de passe</h3>
<div class="row">
<div class="large-2 columns"></div>
<div class="large-8 columns">
    <form class="formulaire" action="" method="POST">
    <p><label>Identifiant: </label><input name="id" type="text"/></p>

    <p><label>Mot de passe: </label><input name="mdp" type="text"/></p>
    <p><input class="button" type="submit" value="valider"/>
    </form>
</div>
<div class="large-2 columns"></div>
</div>
<?php } else {?>
<h3 style="color:white" class="text-center">Administration</h3>
<div class="row">
<div class="large-2 columns"></div>
<div class="large-8 columns">
    <form class="formulaire" action="" method="POST">
    <p><label>Identifiant administrateur: </label><input name="IDADMIN" type="text"/></p>

    <p><label>Mot de passe administrateur: </label><input name="MDPADMIN" type="text"/></p>
    <p><input class="button" type="submit" value="valider"/>
    </form>
</div>
<div class="large-2 columns"></div>
</div>






<?php } ?>
=======
    extract($rsa->createKey(1500));
    $rsa->loadKey($publickey);
    
    $resID = base64_encode($rsa->encrypt($id));
    $resMDP = base64_encode($rsa->encrypt($mdp));
    
    
    $lien = curPageURL()."?code=$nbr&temp=".time()."";
    $pk = generateRandomString(8);
    echo $pk;
    $des = new Crypt_AES();
    $des->setKey($pk);
    $cle = base64_encode($des->encrypt($privatekey));
    if(!file_put_contents("file/key/$nbr.crt","$resID;$resMDP;$cle"))//on enregistre le resultat dans le fichier de sortie
        echo 'Exception reçue : erreur ecriture dans le fichier<br/>';
    
    echo "<table>
<tr>
<td>Identifiant</td>
<td>$id</td>
</tr>
<tr>
<td>Clé AES</td>
<td>$pk<br/><br/></td>
</tr>
<tr>
<tr>
<td>Lien</td>
<td>$lien</td>
</tr>

</table>";
}else {


?>
    <form action="" method="POST">
    <p><label>Identifiant: </label><input name="id" type="text"/></p>

    <p><label>Mot de passe: </label><input name="mdp" type="text"/></p>
    <p><input type="submit" value="valider"/>
    </form>
<?php } ?>
>>>>>>> 1b053e17c0a55f8b946a30a547e97c3c4a5c22e4
