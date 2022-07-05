# phpseclib
Reference - https://phpseclib.com/docs/install

phpseclib provides pure-PHP implementations of SSH2, SFTP, RSA, DSA, Elliptic Curves, AES, ChaCha20, X.509, CSR, CRL, SPKAC, etc.

## Installation
### 1. Install Composer 2

**1.1 Download the installer to the current directory**
``` sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
```

**1.2 Verify the installer SHA-384**
```sh 
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
```

**1.3 Install in bin**
```sh
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer2
```

**1.4 Run the installer**
```sh 
php composer-setup.php
```

**1.5 Check Composer version** 
```sh
➜  composer2 --version                       
Composer version 2.2.15 2022-07-01 12:01:26
```