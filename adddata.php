<html>
<head>
   <title >PHP CRUD  |  Add User</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Add Media</legend>

   <form action="actions/create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Title</th>
               <td><input  type="text" name="Title"  placeholder="Title"/></td >
           </tr>    
           <tr>
               <th>Image</th>
               <td><input  type="text" name= "Image" placeholder="Image"/></td>
           </tr>
           <tr>
               <th>Author</th>
               <td><input type="text"  name="Author" placeholder ="Author"/></td>
           </tr>
            <tr>
               <th>ISBN</th>
               <td><input type="text"  name="ISBN" placeholder ="ISBN"/></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text"  name="Description" placeholder ="Description"/></td>
           </tr>
           <tr>
               <th>Release Date</th>
               <td><input type="text"  name="Releasedate" placeholder ="Releasedate"/></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text"  name="Publisher" placeholder ="Publisher"/></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><input type="text"  name="Type" placeholder ="Type"/></td>
           </tr>
           <tr>
               <td><button type ="submit">Add new Media</button></td>
               <td ><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset >

</body>
</html>