<?php require('./template/header.php')?>

<?php

require_once('./config.php');
require_once('./Database.php');

$db = new Database();
$query = "SELECT * FROM user";
$usersData = $db->select(query: $query);


?>

<?php ?>
    <div class="container mx-auto">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Skill</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($usersData) :?>
                            <?php while($row = $usersData->fetch_assoc()) : ?>
                        <tr class="">
                            <th scope="row"><?php echo $row['name']?></th>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['skill']?></td>
                            <td><a href="/update.php?id=<?php echo $row['id']?>" >Edit</a></td>
                        </tr>
                        <?php endwhile;?>
                        <?php else: ?>
                            <p>No Data available</p>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php require('./template/footer.php')?>



