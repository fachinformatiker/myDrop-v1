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

> unzip myDrop-master.zip

> cd myDrop-master

> mv * /var/www/html/

 <br />

 <br />
 
### CHANGE

* $kamera = "17";
* $ventil1 = "18";
* $blitz = "19";

 <br />
 
 <br />

### RUN

http://IP-OF-YOUR-PI/index.html
