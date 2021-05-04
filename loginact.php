<?php
$database = file_get_contents("http://localhost/data.json");
$database = json_decode($database, TRUE);
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    for($i=0; $i < count($database); $i++) {
            if($database[$i]['username'] == $_POST['username']) {
            if($database[$i]['password'] == $_POST['password'])
            if($database[$i]['email'] == $_POST['email'])
            {
                $success = TRUE;
                break;
            } else {
                $success = FALSE;
            }
        } else {
            $success = FALSE;
        }
    }
} else {
    echo "Please entry the column";
}

if($success == TRUE) {
    echo "Welcome Here ".$_POST['username'];
} else {
    echo "Username/Password Wrong !";
}
?>