<?php

class Panier
{
    public $nbProduit; // propriété
    public function ajoutArticle()
    {
        // traitement...
        return "article ajouté!";
    }

    protected function retirerArticle()
    {
        // traitement ...
        return "article retiré!";
    }

        private function affichageArticle()
    {
        // traitement ...
        return "article affiché!<br>";
    }
}
// -------------------------------------
$panier = new Panier(); // on instancie un objet de la class Panier grâce au mot-clé "new"
var_dump($panier); // object(Panier)#1 (1) { ["nbProduit"]=> NULL } : type(object), nom (de la classe = Panier), référence de l'objet (#1)
echo "<br>";
$panier->nbProduit = 5; // affectation d'une valeur sur la propriété nbProduit de l'objet
echo "Panier nombre de produits : " . $panier->nbProduit . "<br>"; // affichage du contenu de la propriété public nbProduit de l'objet panier.
echo $panier->ajoutArticle(); // execution de la méthode ajoutArticle de l'objet panier
// echo $panier->retirerArticle(); // méthode proteted inacessible depuis l'espace global
// echo $panier->affichageArticle(); méthode private inacessible depuis l'espace global
echo "<br>";

$panier2 = new Panier();
echo "Panier2 nombre de produits : " . $panier2->nbProduit . "<br>"; // ici le nombre est vide, car nous sommes dans un autre objet indépendant du précédent, auquel nous n'avons pas encore affecté de valeur
$panier2->nbProduit = 3;
echo "Panier2 nombre de produits :" . $panier2->nbProduit . "<br>"; // après affectation cela affiche 3 pour cet objet
var_dump($panier2);

/*******************
 
Niveau de visibilité:
    public: accessible de partout
    protected : accessible depuis la class où c'est déclaré ainsi que les classes héritières
    private : acessible uniquement depuis la class où c'est déclaré

Divers :
    - "new" est un mot clé permettant d'effectuer une instanciation.
    - Une class peut produire plusieurs objets, et donc nous pouvons effectuer plusieurs instanciations
    Ex. $panier représente l'objet issu de la class Panier

********************/
