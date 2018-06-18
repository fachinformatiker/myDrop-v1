# myDrop-v1
myDrop-v1 - Drop Remote for Raspberry Pi

 <br />

### INSTALLATION

 <br />

you will need WiringPi, so install it using this tutorial:

[WiringPi](http://wiringpi.com/download-and-install/)

 <br />

Than, use the following commands to install Apache2, PHP and myDrop

> sudo apt-get install apache2 php libapache2-mod-php -y

> wget https://github.com/szalewicz/myDrop-v1/archive/master.zip

> unzip master.zip

> cd myDrop-master

> sudo mv * /var/www/html/

> sudo chmod -R 777 /var/www/html/*

> sudo adduser www-data gpio

> sudo systemctl restart apache2

<br />

 <br />
 
### CHANGE (in conf.php)

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

If you need help feel free to write my an e-mail: **github@fachinformatiker.app**  :speech_balloon:

:+1:
