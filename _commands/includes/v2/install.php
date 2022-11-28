<?php

if($principal_command == "install"){    
    $ds = DIRECTORY_SEPARATOR;
    $install_folder = ROOT .'/install-projects';
    
    $zip_file = $install_folder.'/install.zip';
    $branch = 'project'.strtotime("now");

    if(file_exists($install_folder)){
        removeDir($install_folder);
    }

    $project = ($split_commands[1] == "root") ? ROOT : ROOT.'/'.$split_commands[1];

    exec("git clone -b dev https://gitlab.com/andrecosoft/install-projects/ install-projects");

    zipFolder($zip_file,$project,[$ds.'vendor'.$ds,$ds.'node_modules'.$ds,$ds.'install-projects'.$ds]);

    exec("cd ". $install_folder ." && git branch ".$branch);
    exec("cd ". $install_folder ." && git checkout ".$branch);
    exec("cd ". $install_folder ." && git add .");
    exec("cd ". $install_folder ." && git commit -m '".$branch."' ");
    exec("cd ". $install_folder ." && git push --set-upstream origin ".$branch);
    
    sendCommand(passToRemoteCommand($opciones[1]." ".$branch));

    echo "Analizando ...";
    sleep(10);
    echo "Procesando ...";
    sleep(80);
    echo "Cerrando ...";
    sleep(60);

    exec("cd ". $install_folder ." && git push origin --delete ".$branch);

    if(currentSystem()=="WIN"){
        exec('rmdir /Q /S "'. $install_folder .'"');
    }
    
    echo "Proceso realizado con exito.";

    sleep(5);
}