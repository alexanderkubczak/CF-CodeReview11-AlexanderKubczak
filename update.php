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
   <title>Edit User</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update Media</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Title</th>
               <td><input type="text"  name="Title" placeholder ="Title" value="<?php echo $data['Title'] ?>"/></td>
           </tr>    
           <tr>
               <th>Image</th>
               <td><input type= "text" name="Image"  placeholder="Image" value ="<?php echo $data['Image'] ?>" /></td >
           </tr>
           <tr>
               <th>Author</th>
               <td><input type ="text" name= "Author" placeholder= "Author" value= "<?php echo $data['Author'] ?>" /></td >
           </tr>
           <tr>
               <th>Author</th>
               <td><input type ="text" name= "Author" placeholder= "Author" value= "<?php echo $data['Author'] ?>" /></td >
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type ="text" name= "ISBN" placeholder= "ISBN" value= "<?php echo $data['ISBN'] ?>" /></td >
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type ="text" name= "Publisher" placeholder= "Publisher" value= "<?php echo $data['Publisher'] ?>" /></td >
           </tr>
           <tr>
               <th>Description</th>
               <td><input type ="text" name= "Description" placeholder= "Description" value= "<?php echo $data['Description'] ?>" /></td >
           </tr>
           <tr>
               <th>Release Date</th>
               <td><input type ="text" name= "Releasedate" placeholder= "Releasedate" value= "<?php echo $data['Releasedate'] ?>" /></td >
           </tr>
            <tr>
               <th>Type</th>
               <td><input type ="text" name= "Type" placeholder= "Type" value= "<?php echo $data['Type'] ?>"/></td >
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>"/>
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a href= "index.php"><button type="button">Back</button ></a></td >
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>

<?php
}
?>