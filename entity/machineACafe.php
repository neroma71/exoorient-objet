<?php
    class MachineACafe
    {
       private string $marque;
       private string $cafe;
       private string $enFonction;
       private string $sucre; 

       public function __construct(string $marque)
       {
            $this->marque = $marque;
       }

       /**
        * Get the value of enFonction
        */ 
       public function getEnFonction()
       {
              return $this->enFonction;
       }

       /**
        * Set the value of enFonction
        *
        * @return  self
        */ 
       public function setEnFonction($enFonction)
       {
              $this->enFonction = $enFonction;

              return $this;
       }

       /**
        * Get the value of cafe
        */ 
       public function getCafe()
       {
              return $this->cafe;
       }

       /**
        * Set the value of cafe
        *
        * @return  self
        */ 
       public function setCafe($cafe)
       {
              $this->cafe = $cafe;

              return $this;
       }

       /**
        * Get the value of marque
        */ 
       public function getMarque()
       {
              return $this->marque;
       }

       /**
        * Set the value of marque
        *
        * @return  self
        */ 
       public function setMarque($marque)
       {
              $this->marque = $marque;

              return $this;
       }

       /**
        * Get the value of sucre
        */ 
        public function getSucre()
        {
               return $this->sucre;
        }
 
        /**
         * Set the value of sucre
         *
         * @return  self
         */ 
        public function setSucre($sucre)
        {
               $this->sucre = $sucre;
 
               return $this;
        }

       public function allumage()
       {
         if($this->getEnFonction()){
            $this->enFonction == true;
            return "machine allumée";
       }
       else{
         return "machine éteinte";
       }
    }
       public function mettreUneDosette()
        {
        if($this->getEnFonction()){
           $this->enFonction == true;
           return "dosette ajoutée";
          }
        else{
            return "allumer la machinde en 1er";
        }
    }
       public function faireDuCafe()
        {
            if($this->getEnFonction()){
               $this->enFonction == true;
                return "café en préparation";
            }
            else{
                return "mettre une dosette";
            }
        }

        public function addSugar()
        {
            if($this->getEnFonction() && $this->sucre == true)
            {
                return "café sucré";
            }
            else{
                return "pas de sucre";
            }
        }
    }