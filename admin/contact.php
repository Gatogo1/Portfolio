<?php include('head/head.php') ?>

<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 30px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}


.fa{

}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  font: size 50px;
}


.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-whatsapp {
  background: #15982f;
  color: white;
}

.fa-phone {
  background: #4b9c62;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-globe {
  background: blue;
  color: white;
}


.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background:orange;
  color: white;
  padding: 10px 10px;
  font-size: 20px;
  cursor: pointer;
  width: 50%;
  margin: 10px;
  
}

.btn:hover {
  opacity: 1;
}



  </style>



<?php  

include('conn/conn.php');
$id=0;
        $sql=mysqli_query($conn,"select * from contact");

        while ($row=mysqli_fetch_array($sql)) {
$id= $row['id'] ; 
$facebook= $row['facebook'] ; 
$whatsapp= $row['whatsapp'] ;
$phone= $row['phone'] ;
$linkedin= $row['linkedin'] ;
$email= $row['email'] ;
$youtube= $row['youtube'] ;


        }      
?>


<?php
include('conn/conn.php');
if (isset($_POST['submit'])) {
  $facebook=$_POST['facebook'];
  $whatsapp=$_POST['whatsapp'];
  $linkedin=$_POST['linkedin'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];

  $youtube=$_POST['youtube'];
  
  $sql="INSERT INTO  `contact`( `facebook`, `whatsapp`, `linkedin`, `phone`, `email`, `youtube`) VALUES ('$facebook','$whatsapp','$linkedin','$phone','$email','$youtube')";
      
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }
?>


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

                <form class="row" method="post" style="max-width:500px;margin:auto">
  <h1 class="head">Contact</h1>
  <div class="input-container">
    <i class="fa fa-facebook    fa-lg icon"></i>
    <input class="input-field" value="<?php echo $facebook ?>" type="text" name="facebook">
  </div>

  <div class="input-container">
    <i class="fa fa-whatsapp  fa-lg icon"></i>
    <input class="input-field" value="<?php echo $whatsapp?>"  type="text"name="whatsapp">
  </div>


  <div class="input-container">
    <i class="fa fa-linkedin  fa-lg icon"></i>
    <input class="input-field"   value="<?php echo $linkedin?>" type="text" name="linkedin">
  </div>

  <div class="input-container">
    <i class="fa fa-phone  fa-lg icon"></i>
    <input class="input-field"  value="<?php echo $phone?>" type="number"  name="phone">
  </div>

  <div class="input-container">
    <i class="fa fa-google   fa-lg icon"></i>
    <input class="input-field" value="<?php echo $email?>" type="text"  name="email">
  </div>
  
  <div class="input-container">
  <i class="fa fa-globe  fa-lg icon"></i>
    <input class="input-field" value="<?php echo $youtube?>" type="text"name="youtube">
  </div>

  <button    name="submit" type="submit" class="btn bg-warning btn-default  btn-lg">Update </button>
</form>
                <!---end  content area --->

            </div>

        </div>

    </div>
  
    
        
    </body>
</html>