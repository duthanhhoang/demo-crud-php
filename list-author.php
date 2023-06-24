<?php
include_once 'connect.php';

$sql = "SELECT * FROM authors";
$stmt = connect()->query($sql); //statement
$stmt->execute();
$authors = $stmt->fetchAll(PDO::FETCH_OBJ);

var_dump($authors)

?>
<div class="container">
    <a href="views/add-author.php" class="btn btn-lg btn-success mb-3 mt-3">Add Author</a>
    <table class="table  table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
            <th scope="col">BirthDate</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($authors)): ?>
            <?php foreach ($authors as $author) :?>
                <tr>
                    <th scope="row"><?php echo $author->id ?></th>
                    <td><?php echo $author->firstName ?></td>
                    <td><?php echo $author->lastName ?></td>
                    <td><?php echo $author->email ?></td>
                    <td><?php echo $author->birthdate ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No Data</td>
            </tr>
        <?php endif ?>
        </tbody>
    </table>
</div>
