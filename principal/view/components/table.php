
<?php include "./controller/userController.php";?>

<div class="table_containers"><table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>CÉDULA</th>
    </tr>
    <?php
    $users = getUsers();
    foreach ($users as $user){
   ?>
   <tr>
    <td><?php echo $user -> getId();?></td>
    <td><?php echo $user -> getName();?></td>
    <td><?php echo $user -> getLastName();?></td>
    <td><?php echo $user -> getIdNumber();?></td>
   </tr>
   <?php
    }
    ?>
</table></div>