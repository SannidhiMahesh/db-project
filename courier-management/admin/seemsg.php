
<?php
    session_start();
    if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>

<?php
include('head.php');
?>


    <tr style="background-color:red;">
        
    </tr>
<?php
    include('../dbconnection.php');
  ?>  
<h3>MESSAGES BY CUSTOMRS</h3>


<?php
    $qry = "select * FROM contacts";
    $run = mysqli_query($dbcon,$qry);
    if($run==true){
    while($row=mysqli_fetch_assoc($run))
    {
        echo $row['subject'].":-";

        echo $row['email'].":-";
        
        echo $row['msg']."<br>";
        

    }
}
    // $run= mysqli_query($dbcon,$qryy);
    // $data=mysqli_fetch_assoc($run);
    // $sub = $data['subject'];
    // $msg= $data('msg');}
?>