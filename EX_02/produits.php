<html><body>
<?php
$produits = array(
    'T-shirt rouge'=>'15.50',
    'T-shirt vert'=>'15.50',
    'T-shirt argent'=>'16.50',
    'Short bleu'=>'19.99',
    'Short vert'=>'19.99',
    'Veste argent'=>'35');


function afficher_produits($produits)
{
    echo '<table border=1 cellspacing =0 cellpadding=0> 
    <tr> <td width=100px> Produits </td> <td width=100px> Prix </td> </tr> </table>';

    foreach($produits as $element=>$value)
    {
        echo '<table border=1 cellspacing =0 cellpadding=0>
            <tr>
            <td width=100px>'.$element.'</td>
            <td width= 100px>'.$value.'</td>
            </tr>
            </table>';
    }
}

afficher_produits($produits);

?>
</body></html>