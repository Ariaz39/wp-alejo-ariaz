<?php

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'pullpush' &&  empty($command_options[2])){
  $project = ROOT.'/'.$command_options[2];

  ppmaster($project);
  sendCommand($option_one);
}

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'autoload'){
  sendCommand($option_one);
}

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'allcache'){
  sendCommand($option_one);
}

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'install'){
  sendCommand($option_one);
}

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'removevendor'){
  sendCommand($option_one);
}

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'stash'){
  sendCommand($option_one);
}

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'stash'){
  sendCommand($option_one);
}

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'permisions'){
  sendCommand($option_one);
}

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'optimize-clear'){
  sendCommand($option_one);
}

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'pullpush-third-back' && !empty($command_options[2])){
  $project = ROOT.'/'.$command_options[2].'/app/Modules';
  $publish_folder = $project.'/_core/publish';
  $system_folder = $publish_folder.'/system';

  createOrValidateFolder($publish_folder);
  createOrValidateFolder($system_folder);

  if(file_exists(ROOT.'/README.MD')){
    copy(ROOT.'/README.MD', $system_folder.'/README.MD');
  }

  if(file_exists(ROOT.'/config.json')){
    copy(ROOT.'/config.json', $system_folder.'/config.json');
  }
  
  ppdev($project);
  sendCommand($option_one);
}

if($command_options[0] == 'laravel-ext' && $command_options[1] == 'pullcore' && !empty($command_options[2])){
  sendCommand($option_one);
}