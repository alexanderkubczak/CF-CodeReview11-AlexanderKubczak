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
   $id = $_POST['id'];

   $sql = "UPDATE media SET Title = '$title', Image = '$image', Author = '$author', ISBN = '$isbn', Description = '$description', Releasedate = '$releasedate', Publisher = '$publisher', Type = '$type' WHERE id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>