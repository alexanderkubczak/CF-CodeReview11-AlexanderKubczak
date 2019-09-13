
<?php require_once 'actions/dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD</title>

   <style type ="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>

<div class ="homescreen">
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Title</th>
               <th>Image</th>
               <th>Author</th>
               <th>ISBN</th>
               <th>Description</th>
               <th>Release Date</th>
               <th>Publisher</th>
               <th>Type/th>

           </tr>
       </thead>
       <tbody>
           
       </tbody>
   </table>
   <br>
   <a href= "adddata.php"><button type="button" >Add Media</button></a> <br><br><br>

   <form action='update.php' method='get'>
   <input type='number' name="id" value='<?php echo $id[0]; ?>'>
   <input type='submit' value='Update'>
</form>
 
</div>

</body>
</html>