<?php 
include 'dbconn.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $workTitle = $_POST['workTitle'];
    $companyName = $_POST['companyName'];
    $phoneNo = $_POST['phoneNo'];
    $file = $_FILES['file'];

    $filename=$file['name'];
    $filepath = $file['temp_name'];
    $fileerror = $file['error'];

    if($fileerror ==0){
        $destfile = 'upload/'.$filename;
        move_uploaded_file($filepath,$destfile);
        
        $insertquery = "insert into tcs(username, email,workTitle,companyName,phoneNo,file) values('
        $username','$email','$workTitle','$companyName','$phoneNo',' $destfile')";

        $query = mysqli_query($con,$insertquery);

        if($query){
            echo "inserted";
        }else{
            echo "not inserted";
        }
    }
}else{
    echo "No button has been clicked";
}
?>
