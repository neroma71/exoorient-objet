<?php

require_once('entity/mammifere.php');

    class Chien extends Mammifere
    {
        private int $nbPattes;
        private string $couleur;
        private string $race;
        private string $nom;

        public function __construct($nbPattes, $couleur, $race, $nom)
        {
            $this->nbPattes = $nbPattes;
            $this->couleur = $couleur;
            $this->race = $race;
            $this->nom = $nom;
        }

        /**
         * Get the value of race
         */ 
        public function getRace()
        {
                return $this->race;
        }

        /**
         * Set the value of race
         *
         * @return  self
         */ 
        public function setRace($race)
        {
                $this->race = $race;

                return $this;
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

        /**
         * Get the value of nbPattes
         */ 
        public function getNbPattes()
        {
                return $this->nbPattes;
        }

        /**
         * Set the value of nbPattes
         *
         * @return  self
         */ 
        public function setNbPattes($nbPattes)
        {
                $this->nbPattes = $nbPattes;

                return $this;
        }

        public function crie(): string
        {
            return "j'aboie";
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }
    }