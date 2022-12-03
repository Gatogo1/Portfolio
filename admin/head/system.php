<?php   include('conn.php');


$sql = "SELECT * FROM project WHERE status='1' ORDER BY id DESC";
        $res = mysqli_query($conn, $sql); 
        
        
        
        ?>

<?php echo mysqli_num_rows($res); ?>