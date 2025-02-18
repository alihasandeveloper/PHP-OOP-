<?php require('./template/header.php')?>

<?php

require_once('./config.php');
require_once('./Database.php');

$db = new Database();
$query = "SELECT * FORM userdata";
$result = 
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
                        <tr class="">
                            <th scope="row">Mark</th>
                            <td>1</td>
                            <td>Otto</td>
                            <td><a href="#">Edit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php require('./template/footer.php')?>



