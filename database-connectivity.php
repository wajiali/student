
   
  
  
    


  
<?php
    
   
//---code for connecting to MySql database----
$servername="localhost";
$dBUser="root";
$dBPassword="";
$dBName="pic";
           
$conn=mysqli_connect($servername,$dBUser,$dBPassword,$dBName);
//--error checking----------
if(!$conn) 
{
  die( "Connection failed:".mysqli_connect_error()) ;   
}
else 
    echo "connection successfull Saad";
   
    
    


?>
