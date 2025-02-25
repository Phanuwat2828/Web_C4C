<?php
    declare(strict_types=1);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_SESSION['timestamp'])){
            invite_courses($_POST["std_id"],$_POST["courses_id"]);
            echo '<script> window.location.href = "/subject";</script>';
        }else{
            echo '<script> window.history.back();</script>';
        }
    }else{
        echo '<script> window.history.back();</script>';
    }



?>