<?php
    function get_customers() {
        global $db;
        
        //SQL query for Selecting all the Customers 
        $query = 'SELECT * FROM customers
              ORDER BY lastName';
        try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
}
                   
    
