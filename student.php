<!--

Created by: Ajinkya Nanaware.
Server: Xammp
Database Name: test
Table Name: student

-->

<?php 
    if(isset($_POST['register']))
    {
        $first = $_POST['studentf'];
        $second = $_POST['students'];
        $third = $_POST['studentt'];
        $fourth = $_POST['studentfr'];
        $fifth = $_POST['studentfi'];
        $sixth = $_POST['studentsi'];
        $seventh = $_POST['studentsev'];
        $eight = $_POST['studente'];
        $name = $_POST['name'];
        $comment = $_POST['comment'];
       
       $con = mysqli_connect("localhost","root","","test");      //localhost is server ,root is username of server,"" no password and stfeedback is the database name
       $query = "insert into student (id,name,sone,stwo,sthree,sfour,tone,ttwo,tthree,tfour,comment) values ('','$name','$first','$second','$third','$fourth','$fifth','$sixth','$seventh','$eight','$comment')";

    $result = mysqli_query($con, $query);
        if($result==1)
        {       

        echo'<script>alert("Thank You..! Your Feedback is valuable to us..")</script>';      
        }
        else 
        {       
        echo "Failed to Registration";
         }
  }  
?>

