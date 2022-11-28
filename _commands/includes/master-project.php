<?php

if($command_options[0] == 'master-project' && $command_options[1] == 'pullpush'){
  $project = ROOT;

  ppmaster($project);
  sendCommand($option_one);
}