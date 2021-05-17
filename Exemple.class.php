<?php
//? Les classes sont des blocs de code qui vont permettre de définir la structure des objets liés à la classe.

//? Pour créer une classe on note class NomDeLaCLasse {}
class Exemple
{

    //? Une classe possède des variables qui vont être affectées à tous les objets qui vont instancier la classe. On les appelle des propriétés.

    //* Propriétés
    //? Portée de la variable : peut être public, private, ou protected (entre autres).
    //? Une variable public est accessible partout, même hors de la classe.
    public $name, $type;
    //? Une variable protected n'est accessible que dans la classe est ses enfants.
    protected $age, $adress;
    //? Une variable private n'est accessible que dans la classe actuelle.
    private $salary, $cb_number;

    //* METHODES
    //? Les méthodes sont les fonctions qui sont spécifiques à des classes.

    //* Méthodes magiques
    //? Parmi les méthodes magiques on retrouve __construct et __destruct, mais bien d'autres encore. Ce sont des méthodes qui sont appelées automatiquement lors d'évènements spécifiques (la plupart liés au cycles de vie de l'objet)
    public function __construct(String $name, String $type, Int $age, String $adress, Int $salary, Int $cb_number)
    {
        $this->name = $name;
        $this->type = $type;
        $this->age = $age;
        $this->adress = $adress;
        $this->salary = $salary;
        $this->cb_number = $cb_number;
    }

    //* Méthodes
    //? Généralement les méthodes courantes sont les getters et les setters, mais aussi d'autres méthodes de manipulation d'objet.



    /**
     * Get the value of adress
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of cb_number
     */
    public function getCb_number()
    {
        return $this->cb_number;
    }

    /**
     * Set the value of cb_number
     *
     * @return  self
     */
    public function setCb_number($cb_number)
    {
        $this->cb_number = $cb_number;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}
