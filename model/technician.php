<?php
    
    class Technician {
        
        private $techID, $firstName, $lastName, $email, $phone, $password;
        
        //Constructor
        function __construct($techID, $firstName, $lastName, $email, $phone, $password) {
            $this->techID = $techID;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->phone = $phone;
            $this->password = $password;
        }
        
        
        //GET methods
        function getTechID() {
            return $this->techID;
        }

        function getFirstName() {
            return $this->firstName;
        }

        function getLastName() {
            return $this->lastName;
        }

        function getEmail() {
            return $this->email;
        }

        function getPhone() {
            return $this->phone;
        }

        function getPassword() {
            return $this->password;
        }

        
        //SET methods
        function setTechID($techID) {
            $this->techID = $techID;
        }

        function setFirstName($firstName) {
            $this->firstName = $firstName;
        }

        function setLastName($lastName) {
            $this->lastName = $lastName;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setPhone($phone) {
            $this->phone = $phone;
        }

        function setPassword($password) {
            $this->password = $password;
        }





    }
?>