<div style="display:flex; flex-direction:column; margin-bottom: 20px;"> 
    <div>
        <h2 style="font-weight: bold;" >รายวิชา</h2>
    </div>
    <div class="" style="width: 600px; margin-left:20px;">
        <ol class="list-group list-group-numbered">
            <?php
                foreach($data["subject"] as $row){


                    echo '
                    
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">'.$row["course_name"].' '.$row["course_code"].'</div>
                                '.$row["instructor"].'
                            </div>
                            <div style="display: flex; flex-direction:column; align-items: center;">
                                
                                <form action="/registion" method="post" onsubmit="return confirmSubmit()">
                                    <input type="hidden" name="std_id" value="'.$_SESSION["user_id"].'">
                                    <input type="hidden" name="courses_id" value="'.$row["course_id"].'">
                                    <button class="text-info" style=" cursor: pointer; all: unset;" type="submit" >ลงทะเบียน</button>
                                </form>
                                
                            </div>
                            
                        </li>
                    ';
                }
            ?>
        
       
        </ol>
    </div>
</div>

