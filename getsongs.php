<?php

//each song is an associative array
$song1 = array('id'=>1, 'artist'=>'ABBA', 'title'=> 'Dancing Queen');
$song2 = array('id'=>2, 'artist'=>'Queen', 'title'=> 'Bohemian Rhapsody');
$song3 = array('id'=>3, 'artist'=>'Elvis', 'title'=> 'Hound Dog');
$song4 = array('id'=>4, 'artist'=>'Sinatra', 'title'=> 'Fly me to the moon');
$song5 = array('id'=>5, 'artist'=>'Beatles', 'title'=> 'Hey Jude!');

//array list of each associative object
$arr_list = [$song1, $song2, $song3, $song4, $song5];

//set content type
header('Content-type: application/json');

//php function to change to json string
echo json_encode($arr_list);

?>