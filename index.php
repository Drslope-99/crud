<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Book List</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book List</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add New Book</a>
            </div>
        </header>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <!-- <th>Description</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  include('connect.php');

                  $sql = "SELECT * FROM books";
                  $statement = $pdo->query($sql);

                  $books = $statement->fetchAll(PDO::FETCH_ASSOC);
                ?>

                <?php foreach($books as $book): ?>

                <tr>
                    <td><?php echo $book['id']; ?></td>
                    <td><?php echo $book['title']; ?></td>
                    <td><?php echo $book['author']; ?></td>
                    <td><?php echo $book['type']; ?></td>

                    <td>
                        <a href="view.php?id=<?php echo $book['id']; ?>" class="btn btn-info">Read More</a>
                        <a href="edit.php?id=<?php echo $book['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $book['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>