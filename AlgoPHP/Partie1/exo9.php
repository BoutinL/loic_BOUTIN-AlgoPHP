<h1>Exercice 9</h1>
<p>
    Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable 
    (sinon ce n’est pas le cas, «non imposable»).
    Affichage:
        Age: 32
        Sexe: F
        La personne est imposable.
</p>
<h2>Résultat</h2>
<?php
function imposable(int $age, $sexe){
    if($sexe == H && $age >= 20){
        echo "Age : $age";
        echo "Sexe : $sexe";
        echo "La personne est imposable.";
    } else if($sexe == F && $age >= 18 && $age <= 35){
        echo "Age : $age";
        echo "Sexe : $sexe";
        echo "La personne est imposable.";
    } else {
        echo "Age : $age";
        echo "Sexe : $sexe";
        echo "La personne n'est pas imposable.";
    }
}
echo imposable(32, F);
?>