<?php

namespace App;

class Car
{
    private int $roues = 4;
    private string $couleur;
    private string $marque;
    private string $modele;
    private int $essence;


    //constructeur
    public function __construct(
        int $roues, 
        string $couleur,
         string $marque, 
         string $modele, 
         int $essence
    ){
        $this->roues = $roues;
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->essence = $essence;
    }


    /**
     * Get the value of couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    //fonction rouler
    public function rouler($essence): string
    {
        if ($essence >= 2){
            $this->essence -= 2;
            echo $this->modele . ' roule! ';
        }else{
            echo 'ne peut pas rouler'
        }
    }

    //fonction klaxonner
    public function klaxonner(): string
    {
        return $this->modele . ' klaxonne! ';
    }


    /**
     * Get the value of modele
     */
    public function getModele()
    {
        return $this->modele;
    }
}
