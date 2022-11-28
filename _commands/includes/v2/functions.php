<?php


function passToRemoteCommand($command){
    return 'commandv2:'. str_replace(" ",":",$command);
}