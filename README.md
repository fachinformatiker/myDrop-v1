# myDrop
myDrop - Drop Remote for Raspberry Pi

 <br />

### INSTALLATION

 <br />

you will need WiringPi, so install it using this tutorial:

[WiringPi](http://wiringpi.com/download-and-install/)

 <br />

Than, use the following commands to install Apache2, PHP and myDrop

> sudo apt-get install apache2 php libapache2-mod-php -y

> wget https://github.com/szalewicz/myDrop/archive/master.zip

> unzip master.zip

> cd myDrop-master

> sudo mv * /var/www/html/

> sudo chmod -R 777 /var/www/html/*

> sudo adduser www-data gpio

> sudo systemctl restart apache2

<br />

 <br />
 
### CHANGE (in scripts/conf.php)

* $kamera = "22";
* $ventil1 = "12";
* $ventil2 = "16";
* $blitz = "29";

 <br />
 
 <br />

### RUN

http://IP-OF-YOUR-PI/index.html

 <br />
 
 <br />

 <br />
 
 <br />

If you need help feel free to write my an e-mail: **info@sysop.top**  :speech_balloon:

:+1:
