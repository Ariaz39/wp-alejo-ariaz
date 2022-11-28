<?php

if($principal_command == "deploy"){
    $project = ROOT;
    sendCommand(passToRemoteCommand($opciones[1]));
}