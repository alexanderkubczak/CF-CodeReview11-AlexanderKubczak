<?php 

require_once 'dbconnect.php';

if ($_POST) {
   $title = $_POST['Title'];
   $image = $_POST['Image'];
   $author = $_POST['Author'];
   $isbn = $_POST['ISBN'];
   $description = $_POST['Description'];
   $releasedate = $_POST['Releasedate'];
   $publisher = $_POST['Publisher'];
   $type = $_POST['Type'];

   $sql = "INSERT INTO media (Title, Image, Author, ISBN, Description, ReleaseDate, Publisher, Type) VALUES ('$title', '$image', '$author', '$isbn', '$description', '$releasedate', '$publisher','$type')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>