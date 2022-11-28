<?php

if($principal_command == "pullpush"){
    if($command_two_sp  == 'root'){
        $project = ROOT;
    }else{
        $project = ROOT."/".$command_two_sp;
    }

    ppdev($project);

    sendCommand(passToRemoteCommand($opciones[1]));
}