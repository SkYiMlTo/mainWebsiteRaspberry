<?php

define("MAX_FILES", 3);

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function storeImg()
{
    #Variable
    $fileCreated = false; // Is the JSON file created ?

    #Generate random string we will add to img name for more robustness
    $randomString = generateRandomString();

    #Upload image on server
    $uploaddir = '../jsonFiles/instaBot/';
    $uploadfile = $uploaddir . $randomString . "_" . basename($_FILES['pic']['name']);
    if (!move_uploaded_file($_FILES['pic']['tmp_name'], $uploadfile))
        header('Location: ./index.php?imgNotUploaded=true');

    #Generate JSON file with img and description
    $payload = Array (
        "img" => $randomString . "_" . basename($_FILES['pic']['name']),
        "description" => $_POST['description']
    );

    for($loop = 0; $loop < MAX_FILES; $loop++){
        $victim = "image".$loop.".json";
        if (!file_exists($uploaddir.$victim)) {
            file_put_contents($uploaddir.$victim, json_encode($payload), FILE_APPEND);
            $fileCreated = true;
            break;
        }
    }

    # Redirection if image uploaded on serv or not
    $fileCreated ? header('Location: ./index.php') : header('Location: ./index.php?jsonFileNotCreated=true');
}

if ($_GET['func'] == 'storeImg') {
    storeImg();
}