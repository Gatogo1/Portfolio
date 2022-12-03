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

$filename = $_FILES['image']['name'];
$client=$_POST['client'];
$tittle=$_POST['tittle'];
$discri=$_POST['discri'];
$link=$_POST['link'];

// Select file type
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

// valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){

// Upload files and store in database
if(move_uploaded_file($_FILES["image"]["tmp_name"],'../upload/'.$filename)){
// Image db insert sql
$sql = "UPDATE project SET client='$client', tittle='$tittle', discri ='$discri' ,link ='$link' , image ='$filename',date=now(),status='1' WHERE id='$id2' ";
if(mysqli_query($conn,$sql)){
  echo "<script>alert('Project Updated succesfull '); window.location='../project.php'</script>";
}
else{
  echo 'Error: '.mysqli_error($conn);
}
}else{
echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
}
}



}


?>







 <?php 
        include('conn.php');

        $sql=mysqli_query($conn,"select * from project where id='$id2'");

        while ($row=mysqli_fetch_array($sql)) {
          
        $ids=$row['id'];
        $client=$row['client'];
        
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

<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm">
  <!-- 2 column grid layout with text inputs for the first and last names --->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Project Tittle</label>
        <input name="tittle" type="text"  value="<?php echo $row['tittle'];?> "  id="form6Example1" class="form-control" />
        <br>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Client Name</label>
        <input name="client" type="text"  value="<?php echo  $row['client']; ?> "  id="" class="form-control" />
       
      </div>
    </div>
  </div>

  <div class="col">
  <label for="comment">Discription</label>
  <textarea class="form-control"  name="discri" value="  "  rows="2" id="comment"><?php echo  $row['discri']; ?></textarea>
</div>
<br>


<div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Project Link</label>
      <input type="text" value="<?php echo  $row['link']; ?>" class="form-control-file border" name="link">
      </div>
    </div>
    <br>
 <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Select Image 1</label>
      <input type="file" class="form-control-file border" name="image">
      </div>
    </div>




 
 
 <br>

  
  <!-- Submit button --->
  <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
</form>
</div>
</center>



</body>
</html>
          
     
        <?php }; ?>
    
















