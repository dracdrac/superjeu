<?php    
    // PAGE : UNE ETIQUETTE
    require('template/header.php');
    echo affiche_page_etiquette($_GET['id']);
    $lien_modifier = "admin.php?action=modifieretiquette&id=" . $_GET['id'];
    require('template/footer.php');
?>
