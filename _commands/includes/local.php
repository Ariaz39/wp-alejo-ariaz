<?php

## front
if($command_options[0] == 'local' && $command_options[1] == 'pull' && $command_options[2] == 'front' && $command_options[4] == 'core'){
  $project = ROOT.'/'.$command_options[3].'/src/core';
  pull($project);
}

if($command_options[0] == 'local' && $command_options[1] == 'pull' && $command_options[2] == 'front' && $command_options[4] == 'modules'){
  $project = ROOT.'/'.$command_options[3].'/src/modules';
  pull($project);
}

if($command_options[0] == 'local' && $command_options[1] == 'pullpush' && $command_options[2] == 'front' && $command_options[4] == 'core'){
  $project = ROOT.'/'.$command_options[3].'/src/core';
  ppmaster($project);
}

if($command_options[0] == 'local' && $command_options[1] == 'pullpush' && $command_options[2] == 'front' && $command_options[4] == 'modules'){
  $project = ROOT.'/'.$command_options[3].'/src/modules';
  ppmaster($project);
}

## back
if($command_options[0] == 'local' && $command_options[1] == 'pull' && $command_options[2] == 'back' && $command_options[4] == 'core'){
  $project = ROOT.'/'.$command_options[3].'/app/Core';
  pull($project);
}

if($command_options[0] == 'local' && $command_options[1] == 'pull' && $command_options[2] == 'back' && $command_options[4] == 'modules'){
  $project = ROOT.'/'.$command_options[3].'/app/Modules';
  pull($project);
}

if($command_options[0] == 'local' && $command_options[1] == 'pullpush' && $command_options[2] == 'back' && $command_options[4] == 'core'){
  $project = ROOT.'/'.$command_options[3].'/app/Core';
  ppmaster($project);
}

if($command_options[0] == 'local' && $command_options[1] == 'pullpush' && $command_options[2] == 'back' && $command_options[4] == 'modules'){
  $project = ROOT.'/'.$command_options[3].'/app/Modules';
  ppmaster($project);
}

if($command_options[0] == 'local' && $command_options[1] == 'pullpush' && $command_options[2] == 'wordpress'){
  $project = ROOT.'/'.$command_options[3];
  ppdev($project,$option_two);
}