<?php
if(isset($_POST['name']) && isset($_POST['type']) && isset($_POST['description']) && isset($_POST['location'])&& !empty($_POST['name']) && !empty($_POST['location']) && !empty($_POST['type']) && !empty($_POST['description']) && isset($_POST['lat']) && !empty($_POST['lat'])) {
    $data = $_POST['type'] . '       |       ' . $_POST['location'] . '       |       ' . $_POST['lat'] . '       |       ' . $_POST['description'] .  '       |       ' . $_POST['name'] .  '       |       ' . $_POST['email'] ."\n";
    $ret = file_put_contents('problems.txt', $data, FILE_APPEND | LOCK_EX);
     if($ret === false) {
        die('error');
     }
    else {
        echo "Problem report saved";
    }
}
else {
   die('no post data to process');
}




?>


