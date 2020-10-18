<?php
    function get_technicians() {
        global $db;
               
        // SQL query for loading $technicians array
         $query = 'SELECT * FROM technicians ORDER BY lastName';
              
            $statement = $db->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
        return $result;
               
         
    }

    
    function delete_technician($techID) {
        global $db;
        
        //SQL query for deleting an existing Technician
        $query = 'DELETE FROM technicians WHERE techID = :techID';

        $statement = $db->prepare($query);
        $statement->bindValue(':techID', $techID);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    
    }
    

    function add_technician ($technician) {
        global $db;
        
        // SQL query for adding a new Technician
        $query = 'INSERT INTO technicians (firstName, lastName, email, phone, password)
                VALUE (:firstName, :lastName, :email, :phone, :password) ';

        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $technician ->getFirstName());
        $statement->bindValue(':lastName', $technician ->getLastName());
        $statement->bindValue(':email', $technician ->getEmail());
        $statement->bindValue(':phone', $technician ->getPhone());
        $statement->bindValue(':password', $technician ->getPassword());
        $statement->execute();
        $statement->closeCursor();
           
    }
?>