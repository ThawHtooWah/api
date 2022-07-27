<?php

   // Importing config file
   $root_dir = dirname(dirname(__FILE__));
   include_once("$root_dir/conf.php");

   // Importing and use require libraries
   require COMPOSER_AUTOLOAD_FILE;
   use phpseclib3\Net\SFTP;
   use phpseclib3\Crypt\PublicKeyLoader;

   // Connecting to SFTP
   $sftp = new SFTP(SFTP_HOST, SFTP_PORT);
   log::info_log("SFTP Connected!");

   // Loading and Authenicating with Public Key
   $key = PublicKeyLoader::load(file_get_contents(SFTP_PRIVATE_KEY));
   $login = $sftp->login(SFTP_USER, $key);

   $file_name = 'sample.csv'; 
   if ($login)
   {
      print "[".date("Y-m-d H:i:s")."] Login to SFTP successful!\n";
      
      // Upload a file
      $sftp->put(SFTP_REMOTE_DIR."/$file_name", SFTP_LOCAL_DIR."/$file_name");
      print "[".date("Y-m-d H:i:s")."] Upload to SFTP successful!\n";
   }
   else
      throw new Exception('Authenication failed. Please check Login User or Private Key.');
?>