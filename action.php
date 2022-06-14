
<?php

include_once 'connection.php';

if (isset($_POST['submit'])) 

{

	$name = $_POST['name'];
	$adress = $_POST['adress'];
	$cnic = $_POST['cnic'];
    $image = $_FILES['image'];
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];

    $pdf = $_FILES['pdf'];
    $pdf_name = $_FILES['pdf']['name'];
    $pdf_tmp = $_FILES['pdf']['tmp_name'];
    $pdf_type = $_FILES['pdf']['type'];




    if($name == '' || $adress == '' || $cnic == '') {
        echo "<script>alert('Any Field Is Empty')</script>";
        exit();
    }


        if($image_type =="image/jpeg" || $image_type =="image/png" || $image_type =="image/jpg")
        {
            move_uploaded_file($image_tmp,"img/$image_name");
        }
        else{
            echo "<script>alert('nvalid mage type')</script>";
            exit();
        }


        // if($pdf_type =="pdf/pdf")
        // {
            move_uploaded_file($pdf_tmp,"pdf/$pdf_name");
        // }
        // else{
        //     echo "<script>alert('only pdf is allow')</script>";
        //     exit();
        // }





               
          
            
    $query = "insert into voters (name, address, id_card,image,pdf) values ('$name', '$adress', '$cnic', '$image_name','$pdf_name')";

    $result = mysqli_query($con, $query);
    
     if ($result) {
        echo "<center><h1>Data Has Been Inserted Successfully</h1></center>";
        header("refresh:0.5; url=index.php?page=index.php");
    } else {
        echo "<center><h1>Data Submission Failed</h1></center>".mysqli_error($con);
    }
}   
?>



