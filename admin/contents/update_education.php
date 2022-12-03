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


if (isset($_POST['submit'])) {
$school=$_POST['school'];
$course=$_POST['course'];
$star=$_POST['star'];
$end=$_POST['end'];
$certificate=$_POST['certificate'];
$location=$_POST['location'];

$sql = "UPDATE education SET school='$school', course='$course', star ='$star' , end ='$end', certificate='$certificate' , location ='$location' WHERE id='$id2' ";
$query_run = mysqli_query($conn, $sql);
    
    
if($query_run){
echo"<script>alert('Education Updated succesfull '); window.location='../por_abuot.php'</script>";
}
}




?>







 <?php 
        include('conn.php');

        $sql=mysqli_query($conn,"select * from education where id='$id2'");

        while ($row=mysqli_fetch_array($sql)) {
          
        
        
        ?>
       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>



.form-lable{
font-size: 50px;
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
<form method="post" name="sentMessage" id="contactForm">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">School Name</label>
        <input name="school" type="text"  value="<?php echo $row['school']; ?> "  id="form6Example1" class="form-control" />
        <br>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Course Studied</label>
        <input name="course" type="text"  value="<?php echo $row['course']; ?>"  id="form6Example2" class="form-control" />
       
      </div>
    </div>
  </div>

 <br>
  




 <!-- Text input -->
 <div class="form-outline ">
  <label class="form-label" for="form6Example4">Started Date</label>
  <input  class="form-control" name="star"    value="<?php echo $row['star']; ?>" type="date"  required>
   
  </div>
 <br>
  <div class="form-outline ">
  <label class="form-label" for="form6Example4">Ended Date</label>
  <input  class="form-control" name="end"  value="<?php echo $row['end']; ?>" type="date" max="2029" required>
   
  </div>
   <br>

  <!-- Text input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example4">Certificate</label>
  <select name="certificate" class="custom-select mr-lg-4" id="inlineFormCustomSelect"  required>
        <option selected><?php echo $row['certificate']; ?></option>
        <option value="Masters">Masters</option>
        <option value="Degree">Degree</option>
        <option value="HND">HND</option>
        <option value="Diploma">Diploma</option>
       
      </select>
  </div>

  <br>
  <div class="form-outline mb-4">
      <label class="mr-lg-4 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select name="location" class="custom-select mr-lg-4" id="inlineFormCustomSelect"  required>
        <option  selected><?php echo $row['location']; ?></option>
        <option value="Online">Online</option>
        <option value="In Person">In person</option>
       
      </select>
    </div>

 <br>
 <br>

  
  <!-- Submit button -->
  <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
</form>

</div>
</center>



</body>
</html>
          
     
        <?php }; ?>
    
















