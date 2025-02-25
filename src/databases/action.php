

<?php

    function delete_subject($en_id){
        $conn = getConnection();
        $sql = "call del_subject(?)";
        $st = $conn->prepare($sql);
        $st->bind_param("s",$en_id);
        $st->execute();
        $result = $st->get_result();
    
    }

    function show_subject(){
        $conn = getConnection();
        $sql = "select * from courses";
        $st = $conn->prepare($sql);
        $st->execute();
        $result = $st->get_result();
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC); 
        } else {
            return [];
        }
    }

    function invite_courses($std_id,$courses_id){
        $conn = getConnection();
        $sql = "call invite_courses(?,?)";
        $st = $conn->prepare($sql);
        $st->bind_param("ss",$std_id,$courses_id);
        if ($st->execute()) {
            echo "Enrollment successful!";
        } else {
            echo "<script>alert('". $st->error."');</script>";
        }

    }

?>