<?php
    require('../model/database.php');
    require('../model/product.php');
    require('../model/product_db.php');

    $action = filter_input(INPUT_POST, 'action');
    if ($action === NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action === NULL) {
            $action = 'list_products';
        }
    }

    if ($action == 'list_products') {
        // Get product data
        $products = get_products();

        // Display the product list
        include('product_list.php');

    } else if ($action == 'delete_product') {
        $product_code = filter_input(INPUT_POST, 'product_code');
        delete_product($product_code);
        header("Location: .");

    } else if ($action == 'show_add_form') {
        include('product_add.php');

    } else if ($action == 'add_product') {
        $code = filter_input(INPUT_POST, 'code');
        $name = filter_input(INPUT_POST, 'name');
        $version = filter_input(INPUT_POST, 'version', FILTER_VALIDATE_FLOAT);
        $releaseDate = filter_input(INPUT_POST, 'releaseDate');

        // Validate the inputs
        if ( $code === NULL || $name === FALSE || 
                $version === NULL || $version === FALSE || 
                $releaseDate === NULL) {
            $error = "Invalid product data. Check all fields and try again.";
            include('../errors/error.php');
        } else {
            //TODO - add validation for Version such that is always of #.# format 
            //       i.e. only 2 single digit numbers seprated by a dot
            //       Use RegEx google search to build the pattern, if you like)
            //       display error like shown above using an appropriate message 
            //       like : "Version should be of #.# format"
            
            
            // Validation version with regEx
            $version_regex = "/^\d[.]\d$/";
            
            if (!preg_match($version_regex, $version)) {
                $error = "Version should be of #.# format";
                include ('../errors/error.php');
            }

            
            //Validation Data with RegEx
            
            $date_regex = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/';
            
            if (!preg_match($date_regex, $releaseDate)) {
            $error = "Data should be yyyy-mm-dd format only";
            include ('../errors/error.php');
                    
            }
            
            //       Similarly, add validation for Release Date, should be entered in 
            //       yyyy-mm-dd format only; Use RegEx for this as well and display error message
            
            
            
            //DO NOT change the code below
            $product = new Product($code, $name, $version, $releaseDate);
            add_product($product);
            header("Location: .");
        }
    }
?>