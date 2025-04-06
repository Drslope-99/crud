<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="styles/views.css">

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details">
            <?php
            if(isset($_GET["id"])){
                $id = $_GET["id"];
               include("connect.php");
               $sql = "SELECT * FROM books WHERE id=$id";
               $statement = $pdo->query($sql);
               $result = $statement->fetch(PDO::FETCH_ASSOC);
            //    echo var_dump($result);
            ?>
            <h2>Title</h2>
            <p><?php echo $result["title"]; ?></p>
            <h2>Description</h2>
            <p><?php echo $result["description"]; ?></p>
            <h2>Type</h2>
            <p><?php echo $result["type"]; ?></p>
            <h2>Author</h2>
            <p><?php echo $result["author"]; ?></p>
            <?php
            
            }

            ?>

        </div>
    </div>
</body>

</html>