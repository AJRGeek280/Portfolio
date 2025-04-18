<?php
$servername = "localhost"; //nom de l'host.
$username = "root"; //nom d'utilisateur.
$password = ""; //mot de passe de la base de donnée.
$dbname = "mon_portfolio"; //le nom de la base de donnée.


$conn = mysqli_connect($servername, $username, $password, $dbname); //on lance la connexion vers la base de donnée

if (!$conn) {//ici on verifie si la connexion à echouer, on arrête tout et on renvoie une erreur
    die("La connexion a échoué:" . mysqli_connect_error());
}

//ENTRER LES INFORMATION DANS LA BASE DE donnée

if (isset($_POST["envoie"])) {

    $nom = htmlspecialchars($_POST['nom']); //on recuper le nom entrer par l'utilisateur
    $email = htmlspecialchars($_POST['email']); //on recuper l'email entrer par l'utilisateur
    $message = htmlspecialchars($_POST['message']); //on recuper le message entrer par l'utilisateur

    if (!empty($_POST["nom"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
				// si les champs ne sont pas vide, on envoie les données dans la base de donnée.
        $sql = "INSERT INTO mon_portfolio.message(nom,email,messages) VALUE('$nom','$email','$message')";
        mysqli_query($conn,$sql);
    }
}
?>