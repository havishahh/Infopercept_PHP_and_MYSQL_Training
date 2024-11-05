<?php
    $conn = mysqli_connect("localhost","root","","ajaxcrud");
    if(isset($_POST['checking_add'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $class = $_POST['class'];
        $section = $_POST['section'];

        $query = " insert into students(fname,lname,class,section)values('$fname','$lname','$class','$section')";
        $query_run = mysqli_query($conn,$query);

        if($query_run){
            echo $return = "<h4>Data inserted successfully</h4>";
        }else{
            echo $return = "<h4>Data not inserted</h4>";
        }
    }


    if(isset($_POST['checking_view']))
    {
        $stud_id = $_POST['stud_id'];
        $result_array = [];

        $query = " select * from students where id = '$stud_id'";
        $query_run = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run)>0){
            foreach($query_run as $row){
                array_push($result_array,$row);
            }
            header('Content-Type: application/json');
            echo json_encode($result_array);
        }else{
            echo $return = "no record found";
        }
    }

    if(isset($_POST['checking_edit']))
    {
        $stud_id = $_POST['stud_id'];
        $result_array = [];

        $query = " select * from students where id = '$stud_id'";
        $query_run = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run)>0){
            foreach($query_run as $row){
                array_push($result_array,$row);
            }
            header('Content-Type: application/json');
            echo json_encode($result_array);
        }else{
            echo $return = "no record found";
        }
    }
?>
