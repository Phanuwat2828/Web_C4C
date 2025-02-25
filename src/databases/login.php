

<?php
    
    function login_($email,$password_u){
        $conn = getConnection();
        $sql = "select * from students where email = ?";
        $st = $conn->prepare($sql);
        $st->bind_param("s",$email);
        $st->execute();
        $result = $st->get_result();
        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            if($password_u==$user['password']){
                
                $unix_timestamp = time();
                $_SESSION['timestamp'] = $unix_timestamp;
                $_SESSION['user_id'] = $user['student_id'];
                $_SESSION['fname'] = $user['first_name'];
                $_SESSION['lname'] = $user['last_name'];
                $_SESSION['birth'] = $user['date_of_birth'];
                $_SESSION['phone'] = $user['phone_number'];
                //   header("Location: customer.php");
                echo '<script> window.location.href = "/";</script>';
                return true;
              exit();
            }else{
                echo "testdbb";
              return false;
            }
        }else{
            echo "testdb1";
            return false;
        }
    }
    function get_subject(){
        $conn = getConnection();
        $sql = "call get_subject(?)";
        $st = $conn->prepare($sql);
        $st->bind_param("s",$_SESSION["user_id"]);
        $st->execute();
        $result = $st->get_result();
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC); 
        } else {
            return [];
        }
    }
?>