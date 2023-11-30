<?php

include("config.php");
if(isset($_POST['input'])){

    $input = $_POST['input'];

    $query = "SELECT * FROM user_form WHERE id LIKE '{input}%' OR name LIKE '{input}%' OR email LIKE '{input}%' OR password LIKE '{input}%' OR user_type LIKE '{input}%' LIMIT 3";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0){?>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>User Type</th>
                </tr>
        </thead>
        <tbody>
            <?php

            while($row = mysqli_fetch_assoc($result)){

                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $password = $row['password'];
                $user_type = $row['user_type'];

                ?>

                <tr>
                    <
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $name;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $password;?></td>
                    <td><?php echo $user_type;?></td>
                <?php
            }
            ?>
        </tbody>
    </table>

    <?php

    }else{

        echo "<h6 class='text-danger text-center mt-3'>No data Found</h6>";
    }
}
?>