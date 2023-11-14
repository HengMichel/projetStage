<?php

// Vérification ReCaptcha
$recaptchaSecretKey = 'VOTRE_CLE_SECRETE_RECAPTCHA';
$recaptchaResponse = $_POST['g-recaptcha-response'];

$recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecretKey}&response={$recaptchaResponse}";
$recaptchaResult = json_decode(file_get_contents($recaptchaUrl));

if ($recaptchaResult->success) {
    // Le ReCaptcha est valide, traitez le commentaire

    // Connexion à la base de données
    $servername = "votre_serveur";
    $username = "votre_nom_utilisateur";
    $password = "votre_mot_de_passe";
    $dbname = "votre_base_de_donnees";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifiez la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données : " . $conn->connect_error);
    }

    // Récupérez les données du formulaire
    $commentaire = $_POST['comment'];
    $nom_utilisateur = $_POST['userName'];
    $email_utilisateur = $_POST['userEmail'];

    // Utilisation de requête préparée
    $stmt = $conn->prepare("INSERT INTO commentaires (nom_utilisateur, email_utilisateur, commentaire) VALUES (?, ?, ?)");

    // Vérification de la préparation de la requête
    if (!$stmt) {
        die("Échec de la préparation de la requête : " . $conn->error);
    }

    // Liage des paramètres
    $stmt->bind_param("sss", $nom_utilisateur, $email_utilisateur, $commentaire);

    // Exécution de la requête préparée
    $stmt->execute();

    // Fermez la connexion et la requête préparée
    $stmt->close();
    $conn->close();

    // ... Le reste de votre traitement si nécessaire
} else {
    // Le ReCaptcha n'est pas valide
    die("Erreur ReCaptcha : " . $recaptchaResult->errorCodes);
}


?>
