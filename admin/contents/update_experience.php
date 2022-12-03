<?php 

include('../head/head.php');

 /* $school=$row['school'] ;
$course=$_row['course'];
$star=$_row['star'];
$end=$_row['end'];
$certificate=$_row['certificate'];
$location=$_row['location'];
 */


       







        


include('conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);


  
  
$id2=base64_decode($id);
  




}
      
      ?>

<?php 

include('conn.php');


if(isset($_POST['submit'])){

$company = $_POST['position'];
$position=$_POST['position'];
$duties=$_POST['duties'];
$date=$_POST['date'];


$sql = "UPDATE experience SET company='$company=', position='$position', duties ='$duties' ,date ='$date'  WHERE id='$id2' ";
if(mysqli_query($conn,$sql)){
  echo "<script>alert('Experience  Updated succesfull '); window.location='../experience.php'</script>";
}
else{
  echo 'Error: '.mysqli_error($conn);
}
}







?>







 <?php 
        include('conn.php');

        $sql=mysqli_query($conn,"select * from experience where id='$id2'");

        while ($row=mysqli_fetch_array($sql)) {
          
        $ids=$row['id'];
        
        
        ?>
       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>



.form-label{
font-size: 20px;
}
.modal-body{
    margin-top: 40px;
width: 500px;
font-size:20px;

}

.form-control, .custom-select{
    font-size:20px;
}
</style>

 
</head>
<body>
    
<center>
<div class="modal-body">

<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm">
  <!-- 2 column grid layout with text inputs for the first and last names --->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Company Name</label>
        <input name="company" type="text"  value="<?php echo $row['company'];?> "  id="form6Example1" class="form-control" />
        <br>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Position</label>
        <input name="position" type="text"  value="<?php echo  $row['position']; ?> "  id="" class="form-control" />
       
      </div>
    </div>
  </div>

  <div class="col">
  <label for="comment">Duties</label>
  <textarea class="form-control h-20"  name="duties" value="  "  rows="2" id="comment"><?php echo  $row['duties']; ?></textarea>
</div>
<br>


<div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Date</label>
      <input type="text" value="<?php echo  $row['date']; ?>" class="form-control-file border" name="date">
      </div>
    </div>
    <br>




 
 
 <br>

  
  <!-- Submit button --->
  <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
</form>
</div>
</center>



</body>
</html>
          
     
        <?php }; ?>
    
















