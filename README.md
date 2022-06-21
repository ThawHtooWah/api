# Installtion of Apache Server in Ubuntu

## 1. Installing Apache
**Update local package**
```console
sudo apt update
```
**Install apache2 package**
```console
sudo apt install apache2
```

## 2. Adjust Firewall
**List UFW application profiles**
```console
sudo ufw app list
```
**Allow Apache**
```console
sudo ufw allow 'Apache'
```
**Check status**
```console
sudo ufw status
```

## 3. Check Web Server
**Check to make sure service is running**
```console
sudo systemctl status apache2
```
**Check Apache2 Default Page**
```console
http://your_server_ip
(or)
http://localhost
```

## 4. Manage Apache Process
**Stop Web Server**
```console
sudo systemctl stop apache2
```
**Start Web Server**
```console
sudo systemctl start apache2
```
**Restart Web Server**   
Stop and then start the service again
```console
sudo systemctl restart apache2
```






