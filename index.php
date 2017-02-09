<?php

include ('includes/header.php'); // HTML file includes css style and header coding of bootstrap
include ('includes/config.php'); // config file for the database connection
include ('includes/database.php'); // Database class with methods 
?>

 <div class="container">

      <div class="header clearfix">
   
        <h3 class="text-muted text-center">Queue App</h3>
      </div>




<?php
     include ('includes/newcustomer.php');
    // HTML code for new customer form 
     /*
     Assigning data from post to variables 
     */
    if(isset($_POST['submit']) && isset($_POST['service'])){  
        $service =$_POST['service'];
        $org=$_POST['organisation'];
    $title =$_POST['title'];
    $type =$_POST['type'];  
         // escape_string method to prvent SQL Injection
    $first_name =$database->escape_string($_POST['first_name']);
     $last_name =$database->escape_string($_POST['last_name']);
        $time=date('H:i', time());

             if($org==null){
                       $name=$title." ".$first_name." ".$last_name;
             }else{$name=$org;
             $first_name=  $last_name=$org;
               
                  }
        if($type=='Anonymous'){
            $name=$type;
             $first_name=  $last_name=$type;
        }else{}

        // Check if fields are empty to avoid inserting null values
        if(!empty($service) && !empty($first_name) && !empty($last_name)){
            //if name contains numeric digits, display error message and block inserting
            if (!preg_match('#[0-9]#',$name)){ 
        $insert_customer= " INSERT INTO queue (type,name,service,time) VALUES ('$type','$name','$service','$time')";
  $send=$database->query($insert_customer); //SQL Query to insert customer details
            }else{ echo '<script>
    alert("Name can not contain numbers");
</script>
';}
        }else{}
            if(empty($first_name)){
        echo '<script>
    alert("Firstname can not be empty");
</script>
';
     }
     if(empty($last_name)){
        echo '<script>
    alert("Lastname can not be empty");
</script>
';
     }
       
    }
     // if fields are empty display error message
     if(isset($_POST['submit']) && empty($_POST['service'])){
        echo '<script>
    alert("Service can not be empty");
</script>
';
     }
 
    
    ?>
    

<div class="col-xs-6 col-md-6">
   <div class="panel panel-default">
 
  <div class="panel-heading">Queue</div>
<p style="padding:10px;">List of the customers being queued</p>
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Type</th>
                  <th>Name</th>
                  <th>Service</th>
                  <th>Queued at</th>
                </tr>
              </thead>
              <tbody>
               <?php /*
              *Fetch results from database and assign them into variables 
                     */
$selectall = " SELECT * FROM queue";
$send=$database->query($selectall);
while($row=mysqli_fetch_assoc($send)){       
$id=$row['id'];
$name=$row['name'];
$service= $row['service'];
$type =$row['type'];
$time=$row['time'];

    
?>

                <tr><!--Print fetched results -->
                  <td><?php echo $id;?></td>    
                  <td><?php echo $type;?></td>
                  <td><?php echo $name;?></td>
                  <td><?php echo $service;?></td>
                  <td><?php echo $time;?></td>
                </tr>
            
               <?php }?> <!--End of fetch array while loop-->
                  
              </tbody>
            </table>
</div>
</div>
</div>
  
</div>


</div>
     
      <footer class="footer">
        <p style="padding:20px;"> Ltd &copy; Company 2017</p>
      </footer>

    </div>  
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>




<script>
$("#hide_names").click(function(){
    $("#names_").hide("slow");
    $("#organisation_field").hide("slow");
})

$("#show_org").click(function(){
    $("#names_").hide("slow");
    $("#organisation_field").show("slow");
})

$("#show_names").click(function(){
    $("#organisation_field").hide("slow");
    $("#names_").show("slow");
})
      
</script>


<script>
  $('.btn-group').on('click', '.btn', function() {
  $(this).addClass('active').siblings().removeClass('active').addClass('btn-default');
});
</script>
</html>






