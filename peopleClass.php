<?php
       class People {
        private $name;
        private $dateOfBirth;
        private $cep;
        private $number;
        private $complement;
        private $fontSize;
        private $height;
        private $weight;
    
        public function getName() {
            return $this->name;
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function getDateOfBirth() {
            return $this->dateOfBirth;
        }
        public function setDateOfBirth($dateOfBirth) {
            $this->dateOfBirth = $dateOfBirth;
        }
        public function getCep() {
            return $this->cep;
        }
        public function setCep($cep) {
            $this->cep = $cep;
        }
        public function getNumber() {
            return $this->number;
        }
        public function setNumber($number) {
            $this->number = $number;
        }
        public function getComplement() {
            return $this->complement;
        }
        public function setComplement($complement) {
            $this->complement = $complement;
        }
        public function getFontSize() {
            return $this->fontSize;
        }
        public function setFontSize($fontSize) {
            $this->fontSize = $fontSize;
        }
        public function getHeight() {
            return $this->height;
        }
        public function setHeight($height) {
            $this->height = $height;
        }
        public function getWeight() {
            return $this->weight;
        }
        public function setWeight($weight) {
            $this->weight = $weight;
        }
        public function calculaIMC() {
            if ($this->height > 0 && $this->weight > 0) {
                $heightInMeters = $this->height / 100;
                $imc = $this->weight / ($heightInMeters * $heightInMeters);
                return $imc;
            } else {
                return null;
            }
        }
    }
?>