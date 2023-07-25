<?php
    class Mammifere extends Animal
    {
        private string $type;

        public function __construct($type)
        {
            $this->type = $type;
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
        public function infoPlus(): string
        {
            return "je suis un mammifère";
        }
    }