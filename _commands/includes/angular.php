<?php

if($command_options[0] == 'server-angular' && $command_options[1] == 'pullpush' && $command_options[2] == 'full'){
  $project = ROOT.'/'.$command_options[3].'/';
  ppmaster($project);
  sendCommand($option_one);
}