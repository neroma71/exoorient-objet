<?php
    class Animal
    {
        private string $categorie;

        public function __construct($categorie)
        {
            $this->categorie= $categorie;
        }

        /**
         * Get the value of categorie
         */ 
        public function getCategorie()
        {
                return $this->categorie;
        }

        /**
         * Set the value of categorie
         *
         * @return  self
         */ 
        public function setCategorie($categorie)
        {
                $this->categorie = $categorie;

                return $this;
        }
        
        public function info(): string
        {
            return "je suis un animal";
        }
    }