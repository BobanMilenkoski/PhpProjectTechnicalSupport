<?php
    require('../model/database.php');
    require('../model/customer.php');
    require('../model/customer_db.php');
    
    
    
    $action = filter_input(INPUT_POST, 'action');
        if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
        if ($action === NULL) {
        $action = 'display_customer';
        }
        }
    //instantiate variable(s)
    
        $customers = array();
    

    // Get customer data
    if ($action == 'display_customer') {
        $customers = get_customers();
        
        //Validation
        $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $address = filter_input(INPUT_POST, 'address');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $postal_code = filter_input(INPUT_POST, 'postal_code');
        $country = filter_input(INPUT_POST, 'countryCode');
        $phone = filter_input(INPUT_POST, 'phone');
        $email = filter_input(INPUT_POST, 'email');
        
        
        $customer = get_customers();
        
        include('customer_display.php');

       
    }
    
   
    
   
        