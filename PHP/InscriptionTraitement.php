<?php
session_start();
//connexion a la BD
try{
    $bdd=new PDO('mysql:host=localhost;dbname=gesticket','root','');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
 die('Erreur: '.$e->getMessage());
}
// code d'inscription du guichetier
if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['passwrd_confirm']) && !empty($_POST['passwrd_confirm'])) 
 
{
    $nom=htmlspecialchars($_POST['nom']);
    $email=htmlspecialchars($_POST['email']);
    $tel=htmlspecialchars($_POST['numTel']);
    $pass=htmlspecialchars($_POST['passwrd']);
    $password=password_hash($pass,PASSWORD_DEFAULT);
    $passConfirm=htmlspecialchars($_POST['passwrd_confirm']);

    if($pass==$passConfirm){

        $selection=$bdd->prepare("SELECT emailGuich FROM guichetier WHERE emailGuich=:email"); //on verifie ici si un  guichetier
        $selection->execute(array('email'=>$email));        //possede deja cet adresse email dans la base de donnees
        if($selection->rowCount()>0){
            header('Location:/index.php?erreur=emailExist');
        }
        else{         //insertion du guichetier
            $insertion=$bdd->prepare("INSERT INTO guichetier(nomGuich,telGuich,emailGuich,	passwrdGuich) VALUES(:nom,:tel,:email,:pass)");
            $insertion->execute(array(
                'nom'=>$nom,
                'tel'=>$tel,
                'email'=>$email,
                'pass'=>$password
            ));
            $id=$bdd->lastInsertId();
            // creation de sessions
            $_SESSION['id']=$id;
            $_SESSION['nom']=$nom;
            $_SESSION['email']=$email;
            $_SESSION['tel']=$tel;
            header('Location:dashboard.php');
        }
       
    }
}
else{ 
    // code pour la connexion du guichetier

    if(isset($_POST['email']) and isset($_POST['passwrd'])){
    $email=htmlspecialchars($_POST['email']);
    $pass=htmlspecialchars($_POST['passwrd']);
    $selection=$bdd->prepare("SELECT*FROM guichetier WHERE emailGuich=:email");
    $selection->execute(array('email'=>$email));
    if($selection->rowCount()>0){
        $guichetier=$selection->fetch();
        if(password_verify($pass,$guichetier['passwrdGuich'])){  
            header('Location:dashboard.php');
            $_SESSION['guichetier']=$guichetier; // creation d'une cession du guichetier
        }
        else{
            header('Location:../index.php?erreur=infos');
        }
    }
    else{
        header('Location:/index.php?erreur=infos');
    }
}

}
?>