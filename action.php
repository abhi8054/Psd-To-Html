<?php

$conn = mysqli_connect("localhost","root",null,"userdb");

if(!$conn){
    echo "Error".mysqli_connect_error();
    die();
}

$task = $_GET['action'];

switch($task){
    case 'Enroll Now': 
        $name=$_GET['fullname'];
        $email=$_GET['email'];
        $number=$_GET['number'];
        $date = date('d-m-y');
        
        $sql="INSERT INTO `enroll`(`fullname`, `email`, `number`, `date_enroll`) VALUES ('$name','$email','$number','$date')";
        $exe = mysqli_query($conn,$sql);
        if($exe){
            echo "<script>alert('Enroll Successful')</script>";
        }else{
            echo "<script>alert('Error')</script>";
        }
        echo "<script>window.location.href='/PsdToHtml/index.html'</script>";
        break;
    case 'veiwpdf' :
        $sql1="SELECT * FROM syllabus";
        $exe1=mysqli_query($conn,$sql1);
        while($res=mysqli_fetch_all($exe1)){
            // print_r($res);
        ?>
        <embed src="<?php echo"pdf/".$res[0][1] ?>" width="500px" height="450px" />
        <?php
        }
        break;   
        // header("location:/PsdToHtml/index.html");
}