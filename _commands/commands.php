<?php
define('CURRENT_DIR', dirname(__FILE__));
define('ROOT', dirname(dirname(__FILE__)));

$opciones = $argv;
$command =  explode(':', $opciones[1]);
$option_one =  @$opciones[1];
$option_two =  @$opciones[2];
$command_options =  explode(':', $option_one);
$info_config = getConfig();

if($command_options[0] == 'commands' && $command_options[1] == 'pullpush'){
  ppmaster(ROOT.'/_commands');
}

if($command_options[0] == 'commands' && $command_options[1] == 'pull'){
  pull(ROOT.'/_commands');
}


if(strpos($option_one,":") === false){
  include('includes/v2/main.php');
}else{
  include('includes/install.php');
  include('includes/server.php');
  include('includes/local.php');
  include('includes/office.php');
  include('includes/laravelinterno.php');
  include('includes/node.php');
  include('includes/angular.php');
  include('includes/officev2.php');
  include('includes/wordpress.php');
  include('includes/laravel-ext.php');
  include('includes/master-project.php');
  include('includes/deploy.php');
  include('includes/vue-ext.php');
}
//---------------

function ppmaster($project,$option_two = ''){
  $option_two = $option_two ? $option_two: "Update Develop";

  $cd = 'cd '.$project.' && ';
  exec($cd.' git pull');
  exec($cd.' git add .');
  exec($cd.' git commit -m "'.$option_two.'"');
  sleep(2);
  exec($cd.' git push');
  sleep(2);
  exec($cd.' git push --progress "origin" dev:master');
}

function ppdev($project,$option_two = ''){
  $option_two = $option_two ? $option_two : "Update Develop";

  $cd = 'cd '.$project.' && ';
  exec($cd.' git pull');
  exec($cd.' git add .');
  exec($cd.' git commit -m "'.$option_two.'"');
  sleep(2);
  exec($cd.' git push');
}

function pull($project){
  $cd = 'cd '.$project.' && ';
  exec($cd.' git pull');
}

function sendCommand($command){
  $json_config = ROOT."/config.json";
  if(!is_file($json_config)){ die('NO SE ENCONTRO EL JSON CONFIG.'); }

  $config_encode = urlencode(urlencode(base64_encode(file_get_contents($json_config))));
  $command_serv = urlencode($command.'||'.$config_encode);
  exec('curl http://produccionsitios.com:2280/toolsdev/custom/?comando=filedinamicinclude_serverGeneralCommands_'.$command_serv);
}


function zipFolder($file_zip,$folder,$restric=[]){
  $zip = new ZipArchive();
  $zip->open($file_zip, ZipArchive::CREATE | ZipArchive::OVERWRITE);
  $files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($folder),
    RecursiveIteratorIterator::LEAVES_ONLY
  );

  foreach ($files as $name => $file)
  {
      // Skip directories (they would be added automatically)
      if (!$file->isDir())
      {
          // Get real and relative path for current file
          $filePath = $file->getRealPath();
          $relativePath = substr($filePath, strlen($folder) + 1);
  
          // Add current file to archive
          if(!isGitPath($filePath) && !strpos_array($filePath, $restric)){
            $zip->addFile($filePath, str_replace('\\','/',$relativePath));
          }else if(isGitPath($filePath)){
            $zip->addFile($filePath, str_replace('\\','/',$relativePath));
          }
      }
  }
  
  // Zip archive will be created only after closing object
  $zip->close();
}

function createOrValidateFolder($dest_folder){
  if(!file_exists($dest_folder)){
    mkdir($dest_folder, 0777, true);
  }
}

function removeDir($dirPath){
  if (is_dir($dirPath)) {
      $objects = scandir($dirPath);
      foreach ($objects as $object) {
          if ($object != "." && $object !="..") {
              if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
                removeDir($dirPath . DIRECTORY_SEPARATOR . $object);
              } else {
                unlink($dirPath . DIRECTORY_SEPARATOR . $object);
              }
          }
      }
    reset($objects);
    rmdir($dirPath);
  }
}

function currentSystem(){
  if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    return 'WIN';
  } else {
    return 'LIN';
  }
}

function strpos_array($haystack, $needles=array(), $offset=0) {
  $chr = array();
  foreach($needles as $needle) {
          $res = strpos($haystack, $needle, $offset);
          if ($res !== false) $chr[$needle] = $res;
  }
  if(empty($chr)) return false;
  return min($chr);
}

function isGitPath($filePath){
  $ds = DIRECTORY_SEPARATOR;
  if(strrpos($filePath, $ds.'.git'.$ds) === false){
    return false;
  }else{
    return true;
  }
}


function getConfig(){
  $json_config = ROOT."/config.json";
  if(!is_file($json_config)){ die('NO SE ENCONTRO EL JSON CONFIG.'); }
  $json_config = file_get_contents($json_config);

  return json_decode($json_config, true);
}