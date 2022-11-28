<?php

if($principal_command == "stash"){
    sendCommand(passToRemoteCommand($opciones[1]));
    echo "procesando...";
    sleep(20);
}