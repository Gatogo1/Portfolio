<!DOCTYPE html>
<html lang="en">


<?php

  include('head/head.php');


  ?>
<body>
<?php  
  include('head/header.php');
?>

    <div class="main-content">
    <?php  
  include('head/menu.php');
?>
    <div class="content">
      <!---news feed--->
      <?php  
  include('head/info.php');
?>
      <!----end new feed --->

         <hr>
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

    </style>
  </head>
 

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



<center>
  
<h3>Massages</h3>
         <table >
        <tr>
       
          <th>Name</th>
          <th>Contact</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Date</th>
          <th>Action</th>
          <th>Status</th>
         
         
        </tr>

    
        


        <?php 
        include('conn/conn.php');
$id=0;



$sql = "SELECT * FROM massage WHERE status='0' ORDER BY id DESC";
$res = mysqli_query($conn, $sql); 



        while ($row=mysqli_fetch_array($res)) {
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



$link="view_massage.php?id=".urlencode(base64_encode($data));

    





        ?>
        
        <tr>
        <td><?php echo  $row['name'];?></td>
          <td><?php echo $row['contact'] ;?></td>
          <td><?php echo $row['email'] ;?></td>
          <td><?php echo $row['subject'] ;?></td>
          <td><?php echo $row['date'] ;?> </td>
          <td>  <a name="btn"  id="Btn" class="btn btn-primary" href="<?=$link; ?>" role="button">View</a> 
          <a name="btn" id="btn" class="btn btn-danger" href="contents/delete_massage.php?id=<?php echo $row['id']; ?>" role="button">Delete</a></td>
          <td>
          <div class="sta">
        <p name="btn" id="btn" class="btn btn-success" href="contents/delete_massage.php?id=<?php echo $row['id']; ?>" role="button"><?php echo $read ?></p></div>  
          </td>
         
      
        </tr>
        <?php }; ?>
        </table>
</center>
</div>



</div>



<!----updating database--->




<!----  end updating database--->











<!----end_body content---->


    </div>
  </div> 



    </div>

<script>

function myFunction() {
  let text = "Press a button!\nEither OK or Cancel.";
  if (confirm(text) == true) {
    text = "You pressed OK!";
  } else {
    text = "You canceled!";
  }
  document.getElementById("demo").innerHTML = text;
}

</script>

  
</body>
</html>
