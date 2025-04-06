<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit book</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>

        <?php
             if(isset($_GET["id"])){
                $id = $_GET["id"];
                include("connect.php");
                $sql = "SELECT * FROM books WHERE id=$id";
                $statement = $pdo->query($sql);
                $result = $statement->fetch(PDO::FETCH_ASSOC);
            
           ?>

        <form action="process.php" method="POST">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="Book title"
                    value="<?php echo $result['title']; ?>">
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" placeholder="author name"
                    value="<?php echo $result['author']; ?>">
            </div>

            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select book type</option>
                    <option value="Adventure" <?php if($result['type'] == "Adventure"){echo "selected"; }?>>Adventure
                    </option>
                    <option value="Fantasy" <?php if($result['type'] == "Fantasy"){echo "selected"; }?>>Fantasy</option>
                    <option value="SciFi" <?php if($result['type'] == "SciFi"){echo "selected"; }?>>SciFi</option>
                    <option value="Horror" <?php if($result['type'] == "Horror"){echo "selected"; }?>>Horror</option>
                    <option value="Inspirational" <?php if($result['type'] == "Inspirational"){echo "selected"; }?>>
                        Inspirational</option>
                    <option value="Motivational" <?php if($result['type'] == "Motivational"){echo "selected"; }?>>
                        Motivational</option>
                </select>
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="Book description"
                    value="<?php echo $result['description']; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-element">
                <input type="submit" name="edit" value="Edit Book" class="btn btn-success">
            </div>
        </form>

        <?php
            }
         ?>

    </div>
</body>

</html>