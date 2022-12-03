<?php

include('conn/conn.php');
session_start();

?>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $password=$_POST["password"];

//to prevent php injection

$email=stripcslashes($email);
$password=stripcslashes($password);


$sql= "  select * from user where email= '".$email."' AND  password= '".$password."' ";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    if($row["email"]==$email)
    {   
        $_SESSION["email"]=$email ;
        $_SESSION["usertype"]=$row['usertype'] ;

      
        header("location:home");
    } 

    elseif($row["password"]==$password)
    {
       
        header("location:home");
    } 

    else{
      echo"<script>alert('your mother!'); window.location='login'</script>";
    }


}


?>




<style>
    body{
      background: rgb(13,47,91);
background: linear-gradient(90deg, rgba(13,47,91,1) 0%, rgba(2,11,36,1) 81%);
    position: relative;
   
}


.login{
    width: 400px;
    height: 300px;
    border: 1px solid #eee;
    margin-left: 30%;
    margin-top: 5%;
    padding: 10%px;
   
  
}

.login h1{
    color: aliceblue;
    text-align: center;
}

input[type=text ], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=password ], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  
  div {
    border-radius: 5px;
   
    padding: 20px;
  }

  label {
color: white;
  }
</style>



    <title>
        Login
    </title>
</head>
<body>
   <div class="login">
<h1>Login</h1>
<form action="#" method="POST">
    <label for="fname">Your Email</label>
    <input type="text" id="fname" name="email" placeholder="Your email..">

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Your password..">

   
  
    <input type="submit" name="submit" value="Submit">
  </form>
   </div> 
</body>
</html>