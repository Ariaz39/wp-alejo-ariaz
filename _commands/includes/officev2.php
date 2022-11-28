<?php

if($command_options[0] == 'server-v2' && $command_options[1] == 'pullpush'){
  $project = ROOT.'/'.$command_options[2].'/Modules/'.$command_options[3];
  ppmaster($project);
  sendCommand($option_one);
}

if($command_options[0] == 'server-v2' && $command_options[1] == 'autoload'){
  sendCommand($option_one);
}