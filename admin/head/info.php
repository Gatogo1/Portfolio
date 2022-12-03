<?php 


include('conn.php');

$sql = "SELECT * FROM project WHERE status='1' ORDER BY id DESC";
        $res = mysqli_query($conn, $sql); 
        
        
        $row=mysqli_num_rows($res);
        ?>


<div class="container">


                    <div class="row">
                        <div style="background-color:orange ;" class="info  col-sm-2">
                                 <div class="log"><i class="f-info fa fa-envelope" aria-hidden="true"></i></div>
                                 <div class="mass">Massage <span">0</span></div>
                        </div>

                        <div style="background-color:rgb(137, 87, 16) ;" class="info  col-sm-2">
                            <div class="log"><i class="f-info fa fa-group" aria-hidden="true"></i></div>

                            <div class="mass">Total Users <span  red;">0</span></div>
                   </div>

                   <div style="background-color:rgb(35, 91, 211) ;" class="info  col-sm-2">
                    <div class="log"><i class="f-info fa  fa-newspaper-o" aria-hidden="true"></i></div>
                    <div class="mass">Total Ads <span  >0</span></div>
           </div>

           <div style="background-color:rgb(58, 10, 99) ;" class="info  col-sm-2">
            <div class="log"><i class="f-info fa  fa-user-circle" aria-hidden="true"></i></div>
                    <div class="mass">Total Projects <span  ><?php echo $row?></span></div>
            </div>



            <div style="background-color:rgb(10, 99, 75) ;" class="info  col-sm-2">
                <div class="log"><i class="f-info fa  fa-user-circle" aria-hidden="true"></i></div>
                        <div class="mass">Page Visitors <span  >0</span></div>
                </div>
                    </div>

                    
                </div>