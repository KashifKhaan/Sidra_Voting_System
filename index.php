<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="my_style.css">
</head>
<body>
<fieldset>
  <legend>Sidra Project</legend>
  
<form  method="post" action="action.php"  enctype="multipart/form-data">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to Register your vote.</p>
    <hr>

    <label for="name"><b>NAME</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" ><br>

    <label for="Adress"><b>Adress</b></label>
    <input type="text" placeholder="Enter Adress" name="adress" id="adress" ><br>

    <label for="id-cardß"><b>id-card no</b></label>
    <input type="text" placeholder="Enter cnic number" name="cnic" id="cnic" ><br>


    <label><b>Select Image File:</label></b></label>
    <input type="file" name="image"><br>

    <button type="submit" name="submit" class="registerbtn">Submits</button>
  </div>
</form>
</fieldset>

<br>
<center><h1>Data Table</h1></center>
<br>

<center>

<table width="900" bgcolor="lightblue" border="2px" cellpaddng="2px",cellspacing="2px", width="50%">

  <?php
  
include_once 'connection.php';


$sQuery = ("SELECT * FROM voters");

$sRes = mysqli_query($con, $sQuery);

?> 
<tr>

  <td>sno</td>
    <td>NAME</td>
    <td>Address</td>
    <td>id card no</td>
    <td>IMAGE</td>
    <td>delete</td>
    <td>Update</td>
</tr>

 
<?php
$counter =1;
while ($row =mysqli_fetch_array($sRes)){ 

  $image=$row['image'];
  $pdf=$row['pdf']
?>  	  
</tr> 


<tr >
              <td><?php echo   $counter; ?></td>
              <td><?php echo $row ['name'] ;?></td>
              <td><?php echo $row  ['address'];?></td>
              <td><?php  echo $row ['id_card'];?></td>
           
              <td align="center"><img align="center" width="100px" src="img/<?php echo $image;?>  "></td>

              
              
              <td> <a  style="background-color: skyblue;" href="delete.php?id=<?php echo $row['id']; ?>" > delete</a> </td>
              
              <td> <a  style="background-color: skyblue;" href="update.php?id=<?php echo $row['id']; ?>" > Update</a> </td>

              </tr>  
              <?php
              $counter++;
              }
              ?> 


</table>


</center>




</body>
</html>