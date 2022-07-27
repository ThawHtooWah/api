<?php

// Importing and use require libraries
require COMPOSER_AUTOLOAD_FILE;
use phpseclib3\Net\SFTP;
use phpseclib3\Crypt\PublicKeyLoader;

class SFTP_Upload_Download
{
   function run_upload_download($type, $local_file, $remote_file)
   {
      // Connecting to SFTP
      $sftp = new SFTP(SFTP_HOST, SFTP_PORT);

      // Loading and Authenicating with Public Key
      $key = PublicKeyLoader::load(file_get_contents(SFTP_PRIVATE_KEY));
      $login = $sftp->login(SFTP_USER, $key);

      if ($login)
      {
         print "Login to SFTP successful!";
         
         // for download
         if ($type == 'D')
         {
            $sftp->get(SFTP_REMOTE_DIR.$remote_file, SFTP_LOCAL_DIR.$local_file);
         }
         
         $sftp->chdir('dw/cb_test');
         $pwd =  $sftp->pwd()."\n";
         echo $pwd;
      }
      else
         throw new Exception('Authenication failed. Please check Login User or Private Key.');
   }
}
?>
