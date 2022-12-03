<?php 

include('conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);

$sql= "DELETE FROM  `experience` WHERE id='$id'";


$result=$conn->query($sql);
if ($result==TRUE) {
    header("location:../Experience");
  
}
else{
    echo"not deleted";
    echo $id;
}

}


      
      ?>