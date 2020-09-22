    
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

<?php
 
//Including Database configuration file.
 
include "config.php";
 
//Getting value of "search" variable from "script.js".
 
if (isset($_POST['search'])) {
 
//Search box value assigning to $Name variable.
 
   $Name = $_POST['search'];
 
//Search query.
 
   $sql = "SELECT Name FROM karyawan WHERE Name LIKE '%$Name%' LIMIT 5";
 
//Query execution
 
   $ExecQuery = mysqli_query($link, $sql);
 
//Creating unordered list to display the result.
 
   echo '
 
<li class="list-group-item">
 
   ';
 
   //Fetching result from the database.
 
   while ($result = MySQLi_fetch_array($ExecQuery)) {
 
       ?>
 
   <!-- Creating unordered list items.
 
        Calling javascript function named as "fill" found in "script.js" file.
 
        By passing fetched result as a parameter. -->
 
   <li onclick='fill("<?php echo $result['name']; ?>")'>
 
   <a class="list-group-item">
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
       <?php
            echo $result['Name']; 
        ?>
       
 
   </a></li>
 
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
 
   <?php
 
}}
 
 
?>
 
 <script type="text/javascript" src="script.js"></script>

</ul>