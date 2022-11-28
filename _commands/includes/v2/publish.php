<?php

if($principal_command == "publish"){
    $folder = ROOT.'/'.$split_commands[1];

    $project = $folder.'/src/modules';
    $install_folder = $folder .'/install-projects';
    $publish_folder = $project.'/_core/publish';
    $system_folder = $publish_folder.'/system';
    $file_zip = $install_folder.'/dist.zip';
    $folder_target = $folder.'/dist';
    $branch = 'project'.strtotime("now");
  
    createOrValidateFolder($system_folder);
  
    copy($folder.'/vue.config.js', $system_folder.'/vue.config.js');
    copy($folder.'/package.json', $system_folder.'/package.json');
  
    if(file_exists(ROOT.'/README.MD')){
      copy(ROOT.'/README.MD', $system_folder.'/README.MD');
    }
  
    if(file_exists(ROOT.'/config.json')){
      copy(ROOT.'/config.json', $system_folder.'/config.json');
    }
  
    $have_local_env = is_file($folder."/.env.dev.local");
    if($have_local_env){
      exec('cd '.$folder.' && npm run build:dev');
    }else{
      exec('cd '.$folder.' && npm run build');
    }
      
    exec("cd ".$folder." && git clone -b dev https://gitlab.com/andrecosoft/install-projects/ install-projects");
    zipFolder($file_zip,$folder_target);
  
    exec("cd ". $install_folder ." && git branch ".$branch);
    exec("cd ". $install_folder ." && git checkout ".$branch);
    exec("cd ". $install_folder ." && git add .");
    exec("cd ". $install_folder ." && git commit -m '".$branch."' ");
    exec("cd ". $install_folder ." && git push --set-upstream origin ".$branch);
  
    ppdev($project);
    sendCommand(passToRemoteCommand($opciones[1]." ".$branch));
  
    if(currentSystem()=="WIN"){
      exec('rmdir /Q /S "'. $install_folder .'"');
    }
  
    echo "Publicando ...";
    sleep(30);
    exec("cd ". $install_folder ." && git push origin --delete ".$branch);
    echo "Terminando ...";
    sleep(10);
}