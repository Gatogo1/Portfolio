
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
           
                
                <!---content area --->
         
              
                <div class="container">
<button type="button" class="btn btn-success" id="myBtn" data-toggle="modal" data-target="#myModal1" data-show="true">Add Project</button>
</div>




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

.btn{
    font-size:15px;  
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
  padding: 8px;
}
td{
  text-align:center;
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
 font-size:15px;
  background-color: #2C8A9B;
  color: white;

}

.modal-body{
  font-size: 20px;
}

.form-control{
  line-height: 50px;
}

.sta{

 
}

.fa{
  font-size: 20px;
  color:white;
}
read{
 display:none;
}

/* delete modal box*/
/* The Modal (background) */
.modals {
  display:none ; /* Hidden by default */
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
  margin-top: 300px;
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

.img{
    width:50px;
    hieght:40px;
}


/*end delete modal box*/



    </style>
  </head>




 <!-- Modal -->
 <div class="modal fade" id="myModal1" role="dialog">
<div class="modal-dialog ">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>
<div class="modal-body">







<!----->

<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm">
  <!-- 2 column grid layout with text inputs for the first and last names --->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Project Tittle</label>
        <input name="tittle" type="text"  placeholder="Enter Project tittle: "  id="form6Example1" class="form-control" />
        <br>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Client Name</label>
        <input name="client" type="text"  placeholder="Enter Client Name:  "  id="" class="form-control" />
       
      </div>
    </div>
  </div>

  <div class="col">
  <label for="comment">Discription</label>
  <textarea value="3"  class="form-control" rows="5"  id="summernote"   name="discri"></textarea>
</div>
<script>

        
$('#summernote').summernote({

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
<br>


<div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Project Link</label>
      <input type="text" placeholder="Enter project link " class="form-control-file border" name="link">
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
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</div>
</div>

</div>
</div>



<?php 


include('conn/conn.php');


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
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename)){
		// Image db insert sql
		$sql = "INSERT INTO `project`(`client`,`tittle`,`discri`, `link`,`image`,`date`,`status`) VALUES ('$client','$tittle','$discri','$link','$filename',now(),1)";
		if(mysqli_query($conn,$sql)){
		  echo 'Data inserted successfully';
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




<!-----end modal------>




  
 
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

<center>
  
<h3>Projects</h3>
         <table >
        <tr>
       
          <th>Client Name</th>
          <th>Project Titlte</th>
          <th>Image</th>
          <th>Date</th>
          <th>Action</th>
         
         
         
        </tr>

        <?php 
        include('conn/conn.php');
$id=0;



        $sql=mysqli_query($conn,"select * from project");

        while ($row=mysqli_fetch_array($sql)) {
            $id++;
        
    $data= $row['id'];
$status=$row['status'];
$read="";

if ($status==='1') {
  $read='<i class="fa  fa-envelope-open-o" aria-hidden="true"></i>';
}
else {
  $read='<i class="fa  fa-envelope-o" aria-hidden="true"></i>';
}




$link="contents/update_project.php?id=".urlencode(base64_encode($data));

    





        ?>
        
        <tr>
        <td><?php echo  $row['client'];?></td>
          <td><?php echo $row['tittle'] ;?></td>
          <td> <img   src="upload/<?php echo $row['image'] ;?>" class="img" alt="">  </td>
          <td><?php echo $row['date'] ;?> </td>
          <td>  <a name="btn"  title="Read/Reply" id="Btn" class="btn btn-primary" href="<?=$link; ?>" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
          <a name="btn"   title="Delete" id="btndel"  onclick="deleteProfile();" class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        
        
         
         
      
        </tr>
       

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
  location.href ='project';
}


del.onclick = function() {
  location.href ='contents/delete_project.php?id=<?php echo $row['id']; ?>';
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





        <?php }; ?>
        </table>
</center>



</div>


 



</div>




  
</body>
</html>
