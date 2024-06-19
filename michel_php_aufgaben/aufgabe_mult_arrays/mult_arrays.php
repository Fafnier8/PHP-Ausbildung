<?php
/**
 * Includes array of books
 *
 * @var array $books Associative array of books with title, author and blurb
 */
include 'array.php';
?>

<html lang="en">
    <body>
        <table>
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Blurb</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $row){ ?>
                <tr>
                    <th scope="row"><?php echo $row['title'];?></th>
                    <td><?php echo $row['author'];?></td>
                    <td><?php echo $row['blurb'];?></td>
                </tr>
                <?php }?>
            </tbody>


        </table>
    </body>
</html>
