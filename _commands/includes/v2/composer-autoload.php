<?php

if($principal_command == "composer-autoload"){

    
    sendCommand(passToRemoteCommand($opciones[1]));
}