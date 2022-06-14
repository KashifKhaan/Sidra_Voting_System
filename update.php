



                        <?php
$id = $_GET['id'];
include_once 'connection.php';

$sQuery = ("select * from registration WHERE registration .reg_id = $Regestrationid");

$sRes = mysqli_query($con, $sQuery);

$row =mysqli_fetch_array($sRes);

if (isset($_POST['ssave'])) {

    $Regestrationid = $_GET['Regestrationid'];

    
    $name = $_POST['fname'];
    $username = $_POST['lname'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
$sQuery="UPDATE `registration` SET `NAME`='$name',`USERNAME`='$username',`EMAIL`='$email',`COUNTRY`='$country',`CITY`='$city',`PASSWORD`=' $password',`PHONE`=' $phone' WHERE registration .reg_id = $Regestrationid";

 
}




    


?>







<form  method="post" action="action.php"  enctype="multipart/form-data">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to Register your vote.</p>
    <hr>

    <label for="name"><b>NAME</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" >

    <label for="Adress"><b>Adress</b></label>
    <input type="text" placeholder="Enter Adress" name="adress" id="adress" >

    <label for="id-cardß"><b>id-card no</b></label>
    <input type="text" placeholder="Enter cnic number" name="cnic" id="cnic" >


    <label><b>Select Image File:</label></b></label>
    <input type="file" name="image">
    
    <label><b>Select pdfFile:</label></b></label>
    <input type="file" name="pdf">

    <button type="submit" name="submit" class="registerbtn">Submits</button>
  </div>
</form>