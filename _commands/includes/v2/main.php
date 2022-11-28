<?php
include("functions.php");

$principal_command = substr($option_one,0,strpos($option_one, " "));
$split_commands = explode(' ', $option_one);
$command_one_sp = $split_commands[0];
$command_two_sp = $split_commands[1];

$file = CURRENT_DIR.'/includes/v2/'.$command_one_sp.".php";
if(file_exists($file)){
    include($file);
}