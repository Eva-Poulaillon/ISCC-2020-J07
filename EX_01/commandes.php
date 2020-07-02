<?php
    $historique_commandes = array('5.49','9.99','5.49','15.99','25');
    $montant_total = 0;

function afficher_commandes ($historique_commandes)
{
    foreach($historique_commandes as $elements)
    {
        echo("Une commande de $elements euros a été recue."); 
        echo "<br>";
        $montant_total += $elements;
    }

    echo ("Le total des commandes est de $montant_total euros");

}

afficher_commandes($historique_commandes)

?>