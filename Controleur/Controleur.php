<?php

require 'Modele/Modele.php';

// Affiche la liste de tous les billets du blog
function accueil()
{
    if (isset($_POST['valider_ticket'])) {
        ajouterTicket($_POST['titre'], $_POST['demande']);
    }
    $billets = getBillets();
    require 'Vue/vueAccueil.php';
}

// Affiche les détails sur un billet
function billet($idBillet)
{
    $billet = getBillet($idBillet);
    $etats = Etats($billet['nom_etat']);
    if ($billet['nom_etat'] == "fermé") {
        erreur("Ce ticket est maintenant fermé ! Vous ne pouvez plus y accéder !");
    }
    if (isset($_POST['valider_commentaire'])) {
        ajouterCommentaire($_POST['auteur'], $_POST['contenu'], $billet['id']);
    }
    if (isset($_POST['modifier_etat'])) {
        ModifierEtat($_POST['etats'], $idBillet);
    }
    if (isset($_POST['valider_ticket'])) {
        ajouterTicket($_POST['titre'], $_POST['demande']);
    }
    $commentaires = getCommentaires($idBillet);
    require 'Vue/vueBillet.php';
}

// Affiche une erreur
function erreur($msgErreur)
{
    require 'Vue/vueErreur.php';
}
