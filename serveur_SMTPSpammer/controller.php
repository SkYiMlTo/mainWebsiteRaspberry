<?php

define("MAX_REQUESTS", 5);

function storeInfos(){
    $fileCreated = false;
    $payload = Array (
                "mail" => $_POST['mail'],
            "amount" => $_POST['amount'],
            "subject" => $_POST['subject'],
            "message" => $_POST['message']
        );
    for($loop = 0; $loop < MAX_REQUESTS; $loop++){
        $victim = "victime".$loop.".json";
        if (!file_exists('../jsonFiles/smtpSpammer/'.$victim)) {
            file_put_contents('../jsonFiles/smtpSpammer/'.$victim, json_encode($payload), FILE_APPEND);
            $fileCreated = true;
            break;
        }
    }
    $fileCreated ? header('Location: ./index.php') : header('Location: ./index.php?tooManyRequests=true');
}

if ($_GET['func'] == 'storeInfos'){
    storeInfos();
}