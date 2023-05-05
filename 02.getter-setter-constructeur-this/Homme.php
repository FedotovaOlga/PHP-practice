<?php
class Homme
{
    private $prenom;
    private $nom;

    public function setPrenom($prenom) // $prenom est une vaiable de réception, on aurait pu la nommer autrement (ce n'est pas $prenom de la class plus haut)
    {
        return $this->prenom = $prenom; // prenom de gauche fait référence à la propriété privée de l'objet; $prenom à droite fait référence au paramètre de la méthode setPrenom; affectation de la donnée réceptionnée par $prenom en paramètre de la méthode, sur le prenom de l'objet en cours (celui qui execute la méthode)
    }

    public function getPrenom()
        {
            return $this->prenom; // prenom = propriété de l'objet ($this fait référence à l'objet en cours -> cad celui qui execute la méthode)
        }
}

// ---------------------------
$homme1 = new Homme();
$homme1->setPrenom("César");
echo $homme1->getPrenom() . "<br>";

$homme2 = new Homme();
$homme2->setPrenom("Azeddine");
echo $homme2->getPrenom() . "<br>";

/*************************
    les getteurs et les setteurs sont utilisés afin de contrôler l'intégrité des données pour ne pas se retrouver avec n'importe quoi à l'intérieur des propriétés

    - $this fait référence à l'objet en cours (celui qui fait appel à un élément de la class)

    - getteur pour (voir/récupérer)
    - setteur pour (affecter/donner)
    ainsi nous sommes obligés de passer par les setteur si l'on souhaite affecter une valeur à une propriété et les getteur pour la récupérer

***************************/