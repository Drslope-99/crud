<?php 
include('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(!empty($_POST['title'])){
        $title = sanitizeInput($_POST['title']);
    }

   if(!empty($_POST['author'])){
    $author = sanitizeInput($_POST['author']);
   } 

   if(!empty($_POST['type'])){
    $type = sanitizeInput($_POST['type']);
   } 

   if(!empty($_POST['description'])){
    $description = sanitizeInput($_POST['description']);
   } 

   if(!$title || !$author || !$type || !$description){
      echo "Please fill in all the fields";
      exit();
   }

   $sql = 'insert into books(title, author, type, description) values(?,?,?,?)';
   $statement = $pdo->prepare($sql);
   $statement->execute([$title, $author, $type, $description]);

   header('Location: index.php');
   exit;
} 


if(isset($_POST['edit'])){
    $updatedTitle = sanitizeInput($_POST['title']);
    $updatedAuthor = sanitizeInput($_POST['author']);
    $updatedType = sanitizeInput($_POST['type']);
    $updatedDescription = sanitizeInput($_POST['description']);
    $id = sanitizeInput($_POST['id']);
   
    $sql = "UPDATE users SET title=?, author=?, type=?, description=? WHERE id=?";
   $statement= $pdo->prepare($sql);
   $statement->execute([$updatedTitle, $updatedAuthor, $updatedType, $updatedDescription, $id]);

   
 }


function sanitizeInput($input) {
    // Trim whitespace from the beginning and end
    $input = trim($input);

    // Remove backslashes
    $input = stripslashes($input);

    // Convert special characters to HTML entities
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // Optionally, escape for SQL if using raw queries (not recommended)
    // $input = mysqli_real_escape_string($conn, $input);

    return $input;
}


?>