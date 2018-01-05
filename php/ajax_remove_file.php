<?php
if(isset($_POST['file'])){
    $file = '../../visa_uploads/' . $_POST['file'];
    if(file_exists($file)){
        unlink($file);
    }
}


$f = fopen("../../rezlt.html", "a");
	fwrite($f, $file);


?>
