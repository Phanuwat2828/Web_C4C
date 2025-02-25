<?php
    declare(strict_types=1);

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if(isset($_SESSION['timestamp'])){
            delete_subject($_GET["id_en"]);
            echo '<script> window.location.href = "/subject";</script>';
        }else{
            echo '<script> window.history.back();</script>';
        }
    }else{
        echo '<script> window.history.back();</script>';
    }



?>