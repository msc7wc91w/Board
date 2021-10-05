<?php
    include("db.php");

    if(isset($_POST['save_task'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $query = "INSERT INTO board(title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Save Successfully';
        $_SESSION['message_type'] = 'success';

        header("Location: test.php");
    }
?>