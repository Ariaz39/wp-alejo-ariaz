<?php

if($command_options[0] == 'server-om' && $command_options[1] == 'pullpush' && $command_options[2] == 'front'){
  $project = ROOT.'/'.$command_options[3].'/src/modules';
  ppmaster($project);
  sendCommand($option_one);
}

if($command_options[0] == 'server-om' && $command_options[1] == 'pullpush' && $command_options[2] == 'front-staging'){
  $project = ROOT.'/'.$command_options[3].'/src/modules';
  ppmaster($project);
  sendCommand($option_one);
}

if($command_options[0] == 'server-om' && $command_options[1] == 'pullpush' && $command_options[2] == 'back'){
  $project = ROOT.'/'.$command_options[3].'/app/Modules';
  ppmaster($project);
  sendCommand($option_one);
}

if($command_options[0] == 'server-om' && $command_options[1] == 'autoload' && $command_options[2] == 'back'){
  sendCommand($option_one);
}