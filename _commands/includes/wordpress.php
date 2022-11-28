<?php

if($command_options[0] == 'wordpress' && $command_options[1] == 'pullpush' && $command_options[2] == 'full'){
  $project = ROOT.'/';
  ppmaster($project);
  sendCommand($option_one);
}

if($command_options[0] == 'wordpress' && $command_options[1] == 'pullpush' && $command_options[2] == 'project'){
  $project = ROOT.'/'.$command_options[3];
  ppmaster($project, $option_two);
  sendCommand($option_one);
}