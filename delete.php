<?php 

require_once 'actions/dbconnect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete User</title>
   <link rel="stylesheet" type="text/css" href="delete.css">
</head>
<body>
<div class="deletos">
<h3>Do you really want to delete this media object?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
   <button class="yes" type="submit">Yes, delete it!</button >
   <a href="index.php"><button class="no" type="button">No, go back!</button ></a>
</form>
</div>

</body>
</html>

<?php
}
?>