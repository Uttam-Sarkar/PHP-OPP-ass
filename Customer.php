<?php
    class Customer{        
        private $id; 
        private $firstName;
        private $lastName;
        private $email;

        public function __construct(int $id,string $firstName, string $lastName, string $email){
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
        }

        // public function get_id() {
        //     return $this->id;
        // }        
        // public function get_firstName() {
        //     return $this->firstName;
        // }
        // public function get_lastName() {
        //     return $this->lastName;
        // }
        // public function get_email() {
        //     return $this->email;
        // }
        // public function set_email(string $email){
        //     $this->email = $email;
        // }

        public function __set($property, $arrguments){
            if(isset($this->$property)){
                $this->$property = $arrguments;
            }else{
                echo "<b>Not fount</b><br>";
            }
        }

        public function __get($property) {
            if(isset($this->$property)){
                return $this->$property;
            }else{
                echo "<b>Not fount</b><br>";
            }
        }

        public function __toString(){
            $result = $this->id . ' - ' . $this->firstName . ' - ' . $this->lastName . ' - ' . $this->email;
            return $result;
        }
    }    
?>
