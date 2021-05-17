<?php

final class Mammifere extends Animal
{
    private $oeuf;

    public function identify()
    {
        if (!$this->oeuf) {
            echo " Je suis un {$this->espece} qui s'appelle {$this->nom} et j'ai {$this->nb_de_pattes} pattes et je pond pas de p****** d'oeufs";
        } else {
            echo " Je suis un connard d'ornythorynque (et je sais pas comment ça s'écrit)";
        }
    }

    /**
     * Get the value of oeuf
     */
    public function getOeuf()
    {
        return $this->oeuf;
    }

    /**
     * Set the value of oeuf
     *
     * @return  self
     */
    public function setOeuf($oeuf)
    {
        $this->oeuf = $oeuf;

        return $this;
    }
}
