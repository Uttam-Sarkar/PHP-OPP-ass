<?php
    class Book{        
        private $title; 
        private $author;
        private $available = 0;
        private $isbn;

        public function __construct(string $title,string $author, int $isbn, int $available){
            $this->title = $title;
            $this->author = $author;
            $this->available = $available;
            $this->isbn = $isbn;
        }
        
        // public function get_title() {
        //     return $this->title;
        // }
        // public function get_author() {
        //     return $this->author;
        // }
        // public function isAvailable(): bool {
        //     return $this->available;
        // }
        // public function get_isbn() {
        //     return $this->isbn;
        // }

        public function __set($property, $arrguments){
            if(isset($this->$property)){
                $this->$property = $arrguments[0];
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


        public function getCopy(): bool {
            if ($this->available < 1) {
                return false;
            } else {
                $this->available--;
            return true;
            }
        }

        public function addCopy(int $num): int{
            if($num>=0){
                $this->available = $this->available + $num ; 
                return $this->available;
            }
            else{
                echo "Error input <br>";
                return 0; 
            }
        }

        public function __toString(){
            $result = $this->title.' - ' . $this->author;
            if(!($this->available)){
                $result = $result . ' <b>Not available</b>'; 
            }
            else{
                $result = $result .' - ('. $this->available .' copy)' . ' <b>Available</b>'; 
            }

            return $result;
        }
    }    
?>