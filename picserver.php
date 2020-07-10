


 

<?php
error_reporting(0);
include("database-connectivity.php");

   

 $fname= $_FILES["upload-file"]["name"];
 $tmpname= $_FILES["upload-file"]["tmp_name"];
    $folder="student/".$fname;

    move_uploaded_file($tmpname,$folder);


    
    
    $query="INSERT INTO picture values('$folder')";
    mysqli_query($conn,$query);
         $sql="select * from picture where Image='$folder'";
       $sqq=mysqli_query($conn,$sql);
   
    if($result=mysqli_fetch_assoc($sqq))
    {
        echo "<img src='".$result['Image']."'height='100' width='100'/>";
    }
   
    
    ?>
    
