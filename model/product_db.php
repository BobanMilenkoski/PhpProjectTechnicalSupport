<?php
    function get_products() {
        global $db;
        
        
        // SQL query for loading $products array
        $query = 'SELECT * FROM products';
        
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;

    }

    function delete_product($product_code) {
        global $db;
        
      
        //The code below is SQL query for deleting an existing Product
        $query = 'DELETE FROM products WHERE productCode = :product_code';
       
        $statement = $db->prepare($query);
        $statement->bindValue(':product_code', $product_code);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;

    }

    function add_product($product){
        global $db;

   
        // The code below is SQL query for adding a new product
        $query = 'INSERT INTO products (productCode, name, version, releaseDate)
              VALUES
                 (:productCode, :name, :version, :releaseDate)';
        
        
        $statement = $db->prepare($query);
        $statement->bindValue(':productCode', $product->getCode());
        $statement->bindValue(':name', $product->getName());
        $statement->bindValue(':version', $product->getVersion());
        $statement->bindValue(':releaseDate', $product->getReleaseDate());
        $statement->execute();
        $statement->closeCursor();
        
    }
                
    
?>