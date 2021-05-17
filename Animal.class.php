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
    public $espece;
    protected $nom;
    private $nb_de_pattes;
    //! Les propriétés sont des données sensibles qui vont être manipulées par les utilisateurs et il convient de limiter leur accès

    //* Méthodes
}
