<?php

   // Importing config file and it's definition file(s)
   $root_dir = dirname(dirname(__FILE__));
   include_once("$root_dir/conf.php");
   include_once("$root_dir/def/upload_download.php");

   $type = $argv[1];  // fixed value ( U for Upload, D for Download )
   $local_file = $argv[2];
   $remote_file = $argv[3];

   $run = new SFTP_Upload_Download();
   $run->run_upload_download($type, $local_file, $remote_file);
?>
