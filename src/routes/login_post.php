<?php

declare(strict_types=1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $status = login_($_POST["email"],$_POST["password"]);
}else{
    echo "test";
}
// Assume that login success


