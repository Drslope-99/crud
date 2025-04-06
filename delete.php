<?php

  if(isset($_GET['id'])){
    $id = $_GET['id'];

    include('connect.php');
   
    $sql = 'DELETE FROM books WHERE id = ?';
    $statement = $pdo->prepare($sql);
    $statement->execute([$id]);


if ($statement->rowCount() > 0) {
    echo "The book was deleted successfully.";
    header("Location: index.php");
} else {
    echo "No book found with the provided ID, or nothing was deleted.";
}
  }

?>