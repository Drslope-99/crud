<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add new books</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="POST">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="Book title">
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" placeholder="author name">
            </div>

            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select book type</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="SciFi">SciFi</option>
                    <option value="Horror">Horror</option>
                    <option value="Inspirational">Inspirational</option>
                    <option value="Motivation">Motivational</option>
                </select>
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="Book description">
            </div>

            <div class="form-element">
                <input type="submit" name="create" value="Add Book" class="btn btn-success">
            </div>
        </form>
    </div>
</body>

</html>