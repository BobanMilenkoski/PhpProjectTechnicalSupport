<?php include '../view/header.php'; ?>
<main>
    <h1>Technician List</h1>
    <!-- display a table of technicians -->   
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>&nbsp;</th>
        </tr>
        
        <!-- foreach loop through $technicians array -->
        
        <?php foreach ($technicians as $technician) : ?>
        <tr>
             <td><?php echo htmlspecialchars($technician['firstName']); ?></td>
             <td><?php echo htmlspecialchars($technician['lastName']); ?></td>
            <td><?php echo htmlspecialchars($technician['email']); ?></td>
            <td><?php echo htmlspecialchars($technician['phone']); ?></td>
            <td><?php echo htmlspecialchars($technician['password']); ?></td>
            
            <!-- delete button -->
            <td><form action="" method="post">
                <input type="hidden" name="action"
                       value="delete_technician">
                <input type="hidden" name="technician_id"
                       value="<?php echo htmlspecialchars($technician['techID']); ?>">
                <input type="submit" value="Delete">
            </form></td>
        </tr>
        <?php endforeach; ?>

        
    <!-- DO NOT change anything below -->            
    </table>
    <p><a href="./technician_manager/index.php?action=show_add_form">Add Technician</a></p>

</main>
<?php include '../view/footer.php'; ?>