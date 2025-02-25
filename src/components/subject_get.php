<div style="display:flex; flex-direction:column; margin-bottom: 20px;"> 
    <div style="width: 500px; margin-left:20px;">
        <ul class="list-group">
            <li class="list-group-item">Name : <?php echo $_SESSION["fname"]." ".$_SESSION["lname"]?></li>
            <li class="list-group-item">Birth : <?php echo $_SESSION["birth"]?></li>
            <li class="list-group-item">Your Phone : <?php echo $_SESSION["phone"]?></li>
        </ul>

    </div>
    <div class="mt-4" style="width: 600px; margin-left:20px;">
    <ol class="list-group list-group-numbered">
        <?php

            if($data["subject"] != []){
                foreach($data["subject"] as $row){


                    echo '
                    
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">'.$row["name"].' '.$row["code"].'</div>
                                '.$row["lec"].'
                            </div>
                            <div style="display: flex; flex-direction:column; align-items: center;">
                                <span class="">วันที่ลงทะเบียน '.$row["date"].'</span>
                                
                                <a class="text-danger" style=" cursor: pointer;" href="/deletes?id_en='.$row["id_en"].'" onclick="return confirmSubmit()">ถอนรายวิชา</a>
                            </div>
                            
                        </li>
                    ';
                }
            }else{
                echo "ไม่มีวิชาที่ลงทะเบียน";
            }
            
        ?>
        
       
        </ol>
    </div>
</div>