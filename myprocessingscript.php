<?php
if(isset($_POST['field1']) && isset($_POST['field2']) && isset($_POST['field3'])) {
    $data = $_POST['field1'] . ' - ' . $_POST['field2']. ' - ' . $_POST['field3'] . ' - ' . date("l jS \of F Y h:i:s A")  .  "\r\n\n";
    $ret = file_put_contents('mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        //echo "$ret bytes written to file";
        
        include 'index.html';
    }
}
else {
   die('no post data to process');
}