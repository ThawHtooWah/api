<?php
   /*-----------------------------------------------
   Import log library
   -----------------------------------------------*/
   include_once("log.php");

   /*-----------------------------------------------
   Configurations for SFTP
   -----------------------------------------------*/
   define('SFTP_HOST', '');
   define('SFTP_PORT', '');
   define('SFTP_USER', '');
   define('SFTP_PWD', '');
   define('SFTP_PRIVATE_KEY', '');
   define('SFTP_REMOTE_DIR', '');
   define('SFTP_LOCAL_DIR', '');

   /*-----------------------------------------------
    Configurations for Composer
   -----------------------------------------------*/
   define('COMPOSER_AUTOLOAD_FILE', '../vendor/autoload.php'); // find in the phpseclib installed directory
?>
