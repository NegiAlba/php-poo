<?php

class Animal
{
    //* Propriétés

    /**
     * ? Résoluteur de portée :
     *  ? public : Une propriété, ou une méthode publique est accessible ou modifiable depuis n'importe où, à l'intérieur et à l'extérieur de la classe. [Déconseillé]
     * 
     *  ? protected : Une propriété, ou une méthode protégée n'est accessible ou modifiable que depuis l'intérieur de la classe, mais aussi à l'intérieur des classes qui héritent de celle-ci
     * 
     *  ? private : Une propriété, ou une méthode privée n'est accessible ou modifiable que depuis l'intérieur de la classe.
     *
     */
    protected $espece;

    /**
     * Nom de l'animal actuel
     *
     * @var String
     */
    protected $nom;
    /**
     * Nombre de pattes de mon animal
     *
     * @var Int
     */
    private $nb_de_pattes;
    //! Les propriétés sont des données sensibles qui vont être manipulées par les utilisateurs et il convient de limiter leur accès

    //* Méthodes
    //TODO : Les méthodes getters et setters : Getter permet de récupérer la valeur d'une propriété - Setter permet d'affecter une valeur à une propriété.

    //? La fonction get_espece va permettre de récupérer la propriété espece de l'objet

    public function getEspece(): ?String //? On suppose que le retour sera soit nulle, soit une chaîne de caractères (Compatible que depuis PHP 7.1 ?)
    {
        //? return $this->espece consiste en un retour de valeur de la propriété espece de l'objet actuel
        return $this->espece;
    }

    //? La fonction set_espece va permettre d'assigner une valeur à la propriété espece de l'objet
    public function setEspece(String $newEspece) //? Utiliser un type devant l'argument impose l'utilisation de ce type à l'argument.
    {

        //? On affecte la valeur de l'argument à la propriété espèce.
        $this->espece = $newEspece;
    }

    /**
     * Get the value of nom
     */
    public function getNom(): ?String
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom(String $nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nombre de pattes de mon animal
     *
     * @return  Int
     */
    public function getNb_de_pattes(): ?Int
    {
        return $this->nb_de_pattes;
    }

    /**
     * Set nombre de pattes de mon animal
     *
     * @param  Int  $nb_de_pattes  Nombre de pattes de mon animal
     *
     * @return  self
     */
    public function setNb_de_pattes(Int $nb_de_pattes)
    {
        $this->nb_de_pattes = $nb_de_pattes;
    }
}
