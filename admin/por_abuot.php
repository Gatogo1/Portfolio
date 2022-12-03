<?php include('head/head.php') ?>
<body>
    <!---Tittle bar-->
    <?php include('head/header.php') ?>
    <!--end tittle bar-->
    <div class="container-fluid">

        <div class="row">
       <!---menu-->
<?php include('head/menu.php') ?>

             <div class="content col-sm-10 bg-light">
                <!--info-->
                <?php include('head/info.php') ?>
                <!-- end info-->
                <hr style="background-color: red;">
           
                <!----body_content--->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>without bootstrap</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


    <style>

        .form-group, .custom-select{
            font-size:20px;
        }
.form-control{
    font-size:15px;
    width:100%;
}




.table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}

 td ,  th{
  border: 1px solid #ddd;
  width:150px;
 
}
td{
    font-size:15px;
}

td a{
   text-align:center;
}
/*
.education tr :nth-child(even){
  background-color:#f2f2f2 ;
}*/

 tr:hover{

 cursor:pointer:
  
}
 th{
  padding-top: 12px;
  padding-bottom: 12px;
 
  background-color: #2C8A9B;
  color: white;

}

.modal-body{
  font-size: 20px;
}

.form-control{
  line-height: 50px;
}

/* delete modal box*/
/* The Modal (background) */
.modals {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal1-content {
  background-color: #fefefe;
  margin-top: 100px;
  padding: 20px;
  border:none;
 
  width: 500px;
}

/* The Close Button */
.close1 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover{
  cursor: pointer;
}

.close1:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
  border:yellow;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
  border:yellow;
}




/*end delete modal box*/





    </style>
  </head>
 
  <div class="container">


<!-- The Modal -->
<div id="myModal" class="modals">
  <center>
  <div class="modal1-content">
    <span class="close">&times;</span>
    <div class="container">
      <h1>Delete Row</h1>
      <p>Are you sure you want to delete Row?</p>
    
      <div class="clearfix">
        <button type="button"id="cancel" class="cancelbtn">Cancel</button>
        <button type="button"id="del" class="deletebtn">Delete</button>
      </div>
    </div>


  </div>
  </center>
</div>







  <form  method="post">
    <div class="form-group">
      <label for="comment">About me</label>
      <textarea value="3"  class="form-control" rows="5"  id="summernote"   name="about"></textarea>
    </div>
    <button   name="submit1"type="submit" class="btn  btn-primary">Submit</button>
  </form>




<?php
 include('conn/conn.php');
  if (isset($_POST['submit1'])) {
$about=$_POST['about'];


$sql = "INSERT INTO `about`(`about`) VALUES ('$about')";
    
    
if(mysqli_query($conn,$sql))
echo"<script>alert('About  added succesfull '); window.location='por_abuot.php'</script>";


}
?>
<?php 
include('conn/conn.php');

$sql=mysqli_query($conn,"select * from about");

while ($row=mysqli_fetch_array($sql)) {
   
$about=$row['about'] ; 
}
?>


<br>
<br>
<br>
<hr>
<h3>Education</h3>
<center>
  
         <table >
        <tr>
       
          <th>School</th>
          <th>Course</th>
          <th>Start</th>
          <th>End</th>
          <th>Certificate</th>
          <th>Online/In Person</th>
          <th>Action</th>
         
        </tr>

        <?php 
        include('conn/conn.php');
$id=0;



        $sql=mysqli_query($conn,"select * from education");

        while ($row=mysqli_fetch_array($sql)) {
            $id++;
        
    $data= $row['id'];



$link="contents/update_education.php?id=".urlencode(base64_encode($data));

    





        ?>
        
        <tr>
        <td><?php echo  $row['school'];?></td>
          <td><?php echo $row['course'] ;?></td>
          <td><?php echo $row['star'] ;?></td>
          <td><?php echo $row['end'] ;?></td>
          <td><?php echo $row['certificate'] ;?> </td>
          <td> <?php echo $row['location'] ;?></td>
          <td>
            
            <div class=" row dtn-d">
          <a name="btn"  id="Btn" class="btn-sm btn-primary" href="<?=$link; ?>" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
          <a name="btn" id="btn" class="btn-sm btn-danger"  onclick="deleteProfile();" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a> 
          </div>
          </td>
         
<script>
// Get the modal
var modal = document.getElementById("myModal");

var cancel = document.getElementById("cancel");

var del = document.getElementById("del");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function deleteProfile() {
  modal.style.display = "block";
}

cancel.onclick = function() {
  location.href ='about';
}


del.onclick = function() {
  location.href ='contents/delete_education.php?id=<?php echo $row['id']; ?>';
}




// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



</script>


        </tr>
        <?php }; ?>
        </table>
</center>
<button type="button" class="btn btn-success m-5" id="myBtn" data-toggle="modal" data-target="#myModal1" data-show="true">Add Education</button> 
<!-- end about--->
            </div>

        </div>

    </div>
  
    
        
    </body>
</html>



















<!-- Modal -->
<div class="modal fade" id="myModal1" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>
<div class="modal-body">



<form method="post" name="sentMessage" id="contactForm">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">School Name</label>
        <input name="school" type="text"  placeholder="Enter school name: "  id="form6Example1" class="form-control" />
        <br>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Course Studied</label>
        <input name="course" type="text"  placeholder="Enter course:  "  id="form6Example2" class="form-control" />
       
      </div>
    </div>
  </div>

 <br>
  




 <!-- Text input -->
 <div class="form-outline mb-4">
  <label class="form-label" for="form6Example4">Started Date</label>
  <input  class="form-control" name="star" type="date"  min=1990-09-08  required>
   
  </div>
 <br>
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example4">Ended Date</label>
  <input  class="form-control" name="end" type="date" step=7 min=2014-09-08  required>
   
  </div>
   <br>

  <!-- Text input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example4">Certificate</label>
  <select name="certificate" class="custom-select mr-lg-4" id="inlineFormCustomSelect"  required>
        <option selected>Select Certificate...</option>
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
        <option selected>Location</option>
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
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</div>
</div>

</div>
</div>





<?php 


if (isset($_POST['submit'])) {
$school=$_POST['school'];
$course=$_POST['course'];
$star=$_POST['star'];
$end=$_POST['end'];
$certificate=$_POST['certificate'];
$location=$_POST['location'];


$sql = "INSERT INTO `education`(`school`, `course`, `star`, `end`, `certificate`, `location`) VALUES ('$school','$course','$star','$end','$certificate','$location')";
    
    
if(mysqli_query($conn,$sql))
echo"<script>alert('Education added succesfull '); window.location='about'</script>";


}




?>


</div>



<!----updating database--->




<!----  end updating database--->










    <script>

        
        $('#summernote').summernote({
        placeholder: '<?php  echo $about ?>',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    
</script>






<!----end_body content---->


    </div>
  </div> 



    </div>



    <script>


    </script>
</body>
</html>
