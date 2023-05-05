<?php


// exo : créer une class Membre avec les propriétés (pseudo, mdp)
// puis un membre (objet) affecter lui un pseudo et un mdp, sachant que le pseudo doit obligatoirement faire entre 1 et 15 caractères et de type string, le mdp doit faire minimum 6 caractères.
// Afficher le résultat.


class Membre
{
    private $pseudo;
    private $mdp;

    public function setPseudo(string $pseudo)
    {
        if (strlen($pseudo) > 1 && strlen($pseudo) <=15)
        {
            return $this->pseudo = $pseudo;
        }
        else
        {
            echo "Le pseudo doit faire entre 2 et 15 caractères";
        }
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }


    public function setMdp($mdp)
    {
        if (strlen($mdp) >= 6)
        {
            return $this->mdp = $mdp;
        }
        else
        {
            echo "Le mot de passe doit avoir minimum 6 caractères";
        }
    }

    public function getMdp()
    {
        return $this->mdp;
    }

}

$membre1 = new Membre();
$membre1->setPseudo("Kloog");
echo $membre1->getPseudo() . "<br>";
$membre1->setMdp("bla");
echo $membre1->getMdp() . "<br>";