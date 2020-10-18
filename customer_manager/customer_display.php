<?php include '../view/header.php'; ?>
<main>
    <!-- display a table of customer information -->    
    
    
    <h2>View Customers</h2>
    <table width="100%">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Phone</th>			
            <th>Email</th>		
        </tr>       
        
        
        <!--foreach loop through $customers array -->
          <?php foreach ($customers as $customer) : ?>
            
           <tr>
                
                <td><?php echo ($customer['firstName']); ?></td>
                <td><?php echo htmlspecialchars($customer['lastName']); ?></td>
                <td><?php echo htmlspecialchars($customer['address']); ?></td>
                <td><?php echo htmlspecialchars($customer['city']); ?></td>
                <td><?php echo htmlspecialchars($customer['state']); ?></td>
                <td><?php echo htmlspecialchars($customer['postalCode']); ?></td>
                <td><?php echo htmlspecialchars($customer['countryCode']); ?></td>
                <td><?php echo htmlspecialchars($customer['phone']); ?></td>
                <td><?php echo htmlspecialchars($customer['email']); ?></td>
                
            </tr>
            
           <?php endforeach; ?>
           

        <?php include '../view/footer.php'; ?>
    <!-- DO NOT change anything below -->    
    </table>
</main>