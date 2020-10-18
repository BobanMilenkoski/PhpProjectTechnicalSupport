<?php
    
    class Product {
        private $code, $name, $version, $releaseDate;

        // Constructor 
        function __construct($code, $name, $version, $releaseDate) {
            $this->code = $code;
            $this->name = $name;
            $this->version = $version;
            $this->releaseDate = $releaseDate;
        }
        
        // GET methods 
        function getCode() {
            return $this->code;
        }

        function getName() {
            return $this->name;
        }

        function getVersion() {
            return $this->version;
        }

        function getReleaseDate() {
            return $this->releaseDate;
        }

        
        //SET methods
        function setCode($code) {
            $this->code = $code;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setVersion($version) {
            $this->version = $version;
        }

        function setReleaseDate($releaseDate) {
            $this->releaseDate = $releaseDate;
        }


    }
?>

