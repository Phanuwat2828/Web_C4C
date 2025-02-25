<?php

declare(strict_types=1);
$subject = get_subject();
renderView('subject_get',["subject"=>$subject]);