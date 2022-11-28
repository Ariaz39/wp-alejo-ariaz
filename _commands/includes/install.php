<?php

if($command_options[0] == 'install'){

  if(isset($command_options[1])){
    $ds = DIRECTORY_SEPARATOR;
    $install_folder = ROOT .'/install-projects';
    
    $zip_file = $install_folder.'/install.zip';
    $branch = 'project'.strtotime("now");

    if(file_exists($install_folder)){
      removeDir($install_folder);
    }

    if($command_options[1] == "wordpress"){
      $project = ROOT;
    }else{
      $project = ROOT.'/'.$command_options[1];
    }

    exec("git clone -b dev https://gitlab.com/andrecosoft/install-projects/ install-projects");

    // file_put_contents($install_folder."branch.txt", $branch);
    zipFolder($zip_file,$project,[$ds.'vendor'.$ds,$ds.'node_modules'.$ds]);

    exec("cd ". $install_folder ." && git branch ".$branch);
    exec("cd ". $install_folder ." && git checkout ".$branch);
    exec("cd ". $install_folder ." && git add .");
    exec("cd ". $install_folder ." && git commit -m '".$branch."' ");
    exec("cd ". $install_folder ." && git push --set-upstream origin ".$branch);

    sendCommand($option_one.":".$branch);

    echo "Analizando ...";
    sleep(60);
    echo "Procesando ...";
    sleep(60);
    echo "Cerrando ...";
    sleep(60);

    exec("cd ". $install_folder ." && git push origin --delete ".$branch);

    if(currentSystem()=="WIN"){
      exec('rmdir /Q /S "'. $install_folder .'"');
    }

    echo "Proceso realizado con exito.";

  }
}