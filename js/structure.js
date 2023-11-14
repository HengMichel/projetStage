function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var userName = profile.getName();
    var userEmail = profile.getEmail();

    // Vous pouvez utiliser ces informations pour personnaliser l'expérience de l'utilisateur ou afficher un formulaire de commentaire.
    // Par exemple, pré-remplir le champ "Nom" avec userName.
    // Afficher un formulaire de commentaire.
}