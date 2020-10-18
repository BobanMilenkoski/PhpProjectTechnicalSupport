<?php
    
    class Customer {
        
        private $firstName, $lastName, $address, $city, $state, $postalCode, $countryCode, $phone, $email;
        
        //Constructor
        function __construct($firstName, $lastName, $address, $city, $state, $postalCode, $countryCode, $phone, $email) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->address = $address;
            $this->city = $city;
            $this->state = $state;
            $this->postalCode = $postalCode;
            $this->countryCode = $countryCode;
            $this->phone = $phone;
            $this->email = $email;
        }
        
        //GET methods
        function getFirstName() {
            return $this->firstName;
        }

        function getLastName() {
            return $this->lastName;
        }

        function getAddress() {
            return $this->address;
        }

        function getCity() {
            return $this->city;
        }

        function getState() {
            return $this->state;
        }

        function getPostalCode() {
            return $this->postalCode;
        }

        function getCountryCode() {
            return $this->countryCode;
        }

        function getPhone() {
            return $this->phone;
        }

        function getEmail() {
            return $this->email;
        }

        
        //SET methods
        function setFirstName($firstName) {
            $this->firstName = $firstName;
        }

        function setLastName($lastName) {
            $this->lastName = $lastName;
        }

        function setAddress($address) {
            $this->address = $address;
        }

        function setCity($city) {
            $this->city = $city;
        }

        function setState($state) {
            $this->state = $state;
        }

        function setPostalCode($postalCode) {
            $this->postalCode = $postalCode;
        }

        function setCountryCode($countryCode) {
            $this->countryCode = $countryCode;
        }

        function setPhone($phone) {
            $this->phone = $phone;
        }

        function setEmail($email) {
            $this->email = $email;
        }





    }
?>