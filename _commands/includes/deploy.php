<?php

if($command_options[0] == 'deploy' && $command_options[1] == 'prod'){
  echo "Enviando cambios a produccion.... \n";
  echo "Iniciando en 10 segundos, puedes cancelar con CRTL + C \n";
  sleep(10);
  echo "Revise sus cambios \n";

  sendCommand($option_one);
}