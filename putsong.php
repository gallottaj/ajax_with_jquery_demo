<?php
//set content type
header('Content-type: application/json');

//php function to change to json string
echo json_encode($_GET);

?>