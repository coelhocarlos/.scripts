
## Add repository
### https://launchpad.net/%7Eondrej/+archive/ubuntu/php
### https://launchpad.net/~ondrej/+archive/ubuntu/apache2
sudo add-apt-repository ppa:ondrej/php
sudo add-apt-repository ppa:ondrej/apache2
sudo apt-get update
sudo apt-get dist-upgrade


## Use the following command to search available PHP 7 modules in the package repository.
sudo apt-cache search php7*


## Install PHP 5.6
sudo apt install php5.6 php5.6-common php5.6-gd php5.6-mysql php5.6-imap phpmyadmin php5.6-cli php5.6-cgi libapache2-mod-fcgid apache2-suexec-pristine php-pear mcrypt  imagemagick libruby libapache2-mod-python php5.6-curl php5.6-intl php5.6-pspell php5.6-recode php5.6-sqlite3 php5.6-tidy php5.6-xmlrpc php5.6-xsl memcached php-memcache php-imagick php-gettext php5.6-zip php5.6-mbstring php5.6-opcache php5.6-json php5.6-ldap php5.6-soap php5.6-bz2 php5.6-bcmath php5.6-xml php5.6-dev php5.6-fpm php5.6-phpdbg php-apcu dh-php php5.6-readline pkg-php-tools shtool xml2


## Install PHP 7.0
sudo apt install php7.0 php7.0-common php7.0-gd php7.0-mysql php7.0-imap phpmyadmin php7.0-cli php7.0-cgi libapache2-mod-fcgid apache2-suexec-pristine php-pear mcrypt  imagemagick libruby libapache2-mod-python php7.0-curl php7.0-intl php7.0-pspell php7.0-recode php7.0-sqlite3 php7.0-tidy php7.0-xmlrpc php7.0-xsl memcached php-memcache php-imagick php-gettext php7.0-zip php7.0-mbstring php7.0-opcache php7.0-json php7.0-ldap php7.0-soap php7.0-bz2 php7.0-bcmath php7.0-xml php7.0-dev php7.0-fpm php7.0-phpdbg php-apcu php7.0-readline pkg-php-tools shtool xml2 dh-php dh-make


## Install PHP 7.1
sudo apt install php7.1 php7.1-common php7.1-gd php7.1-mysql php7.1-imap phpmyadmin php7.1-cli php7.1-cgi libapache2-mod-fcgid apache2-suexec-pristine php-pear mcrypt  imagemagick libruby libapache2-mod-python php7.1-curl php7.1-intl php7.1-pspell php7.1-recode php7.1-sqlite3 php7.1-tidy php7.1-xmlrpc php7.1-xsl memcached php-memcache php-imagick php-gettext php7.1-zip php7.1-mbstring php7.1-opcache php7.1-json php7.1-ldap php7.1-soap php7.1-bz2 php7.1-bcmath php7.1-xml php7.1-dev php7.1-fpm php7.1-phpdbg php-apcu php7.1-readline pkg-php-tools shtool xml2 dh-php dh-make


## Install PHP 7.2
sudo apt install php7.2 php7.2-common php7.2-gd php7.2-mysql php7.2-imap phpmyadmin php7.2-cli php7.2-cgi libapache2-mod-fcgid apache2-suexec-pristine php-pear mcrypt  imagemagick libruby libapache2-mod-python php7.2-curl php7.2-intl php7.2-pspell php7.2-recode php7.2-sqlite3 php7.2-tidy php7.2-xmlrpc php7.2-xsl memcached php-memcache php-imagick php-gettext php7.2-zip php7.2-mbstring php7.2-opcache php7.2-json php7.2-ldap php7.2-soap php7.2-bz2 php7.2-bcmath php7.2-xml php7.2-dev php7.2-fpm php7.2-phpdbg php-apcu php7.2-readline pkg-php-tools shtool xml2 dh-php dh-make


## Install PHP 7.3
sudo apt install php7.3 php7.3-common php7.3-gd php7.3-mysql php7.3-imap phpmyadmin php7.3-cli php7.3-cgi libapache2-mod-fcgid apache2-suexec-pristine php-pear mcrypt  imagemagick libruby libapache2-mod-python php7.3-curl php7.3-intl php7.3-pspell php7.3-recode php7.3-sqlite3 php7.3-tidy php7.3-xmlrpc php7.3-xsl memcached php-memcache php-imagick php-gettext php7.3-zip php7.3-mbstring php7.3-opcache php7.3-json php7.3-ldap php7.3-soap php7.3-bz2 php7.3-bcmath php7.3-xml php7.3-dev php7.3-fpm php7.3-phpdbg php-apcu php7.3-readline libapache2-mod-php7.3 pkg-php-tools shtool xml2 dh-php dh-make

## Install PHP 7.4
sudo apt install php7.4 php7.4-common php7.4-gd php7.4-mysql php7.4-imap php7.4-cli php7.4-cgi libapache2-mod-fcgid apache2-suexec-pristine php-pear mcrypt  imagemagick libruby libapache2-mod-python php7.4-curl php7.4-intl php7.4-pspell php7.4-sqlite3 php7.4-tidy php7.4-xmlrpc php7.4-xsl memcached php-memcache php-imagick php-gettext php7.4-zip php7.4-mbstring php7.4-opcache php7.4-json php7.4-ldap php7.4-soap php7.4-bz2 php7.4-bcmath php7.4-xml php7.4-dev php7.4-fpm php7.4-phpdbg php-apcu php7.4-readline libapache2-mod-php7.4 pkg-php-tools shtool xml2 dh-php dh-make libphp7.4-embed php-geoip php-xdebug

# For command line
## Managing Multiple Versions
### https://github.com/oerdnj/deb.sury.org/wiki/Managing-Multiple-Versions
update-alternatives --query php

# For command line
## It's important to note that there are four important PHP commands you should update if changing the default versions.
## These include php, php-config, phpdbg and phpize. So, to fully migrate to PHP 7.3, execute the following:
sudo update-alternatives --set php /usr/bin/php7.3
sudo update-alternatives --set php-config /usr/bin/php-config7.3
sudo update-alternatives --set phpdbg /usr/bin/phpdbg7.3
sudo update-alternatives --set phpize /usr/bin/phpize7.3

sudo update-alternatives --set phar /usr/bin/phar7.3
sudo update-alternatives --set phar.phar /usr/bin/phar.phar7.3


# For apache
## https://tecadmin.net/switch-between-multiple-php-version-on-ubuntu/
### Switch From PHP 7.2 => PHP 7.3
sudo a2dismod php7.2
sudo a2enmod php7.3
sudo service apache2 restart


### Switch From PHP 7.3 => PHP 7.2
sudo a2dismod php7.3
sudo a2enmod php7.2
sudo service apache2 restart


# ISPConfig setup
## Add other PHP versions
### https://www.howtoforge.com/tutorial/how-to-install-php-7-for-ispconfig-3-from-debian-packages-on-debian-8-and-9/

### PHP 5.6

Path to the PHP FastCGI binary: php-cgi5.6
Path to the php.ini directory: /etc/php/5.6/cgi/php.ini

Path to the PHP-FPM init script: php5.6-fpm
Path to the php.ini directory: /etc/php/5.6/fpm/php.ini
Path to the PHP-FPM pool directory: /etc/php/5.6/fpm/pool.d

### The cli version for e.g. cron jobs has the name php5.6.


### PHP 7.0

Path to the PHP FastCGI binary: php-cgi7.0
Path to the php.ini directory: /etc/php/7.0/cgi/php.ini

Path to the PHP-FPM init script: php7.0-fpm
Path to the php.ini directory: /etc/php/7.0/fpm/php.ini
Path to the PHP-FPM pool directory: /etc/php/7.0/fpm/pool.d

### The cli version for e.g. cron jobs has the name php7.0.


### PHP 7.1

Path to the PHP FastCGI binary: php-cgi7.1
Path to the php.ini directory: /etc/php/7.1/cgi/php.ini

Path to the PHP-FPM init script: php7.1-fpm
Path to the php.ini directory: /etc/php/7.1/fpm/php.ini
Path to the PHP-FPM pool directory: /etc/php/7.1/fpm/pool.d

### The cli version for e.g. cron jobs has the name php7.1.


### PHP 7.2

Path to the PHP FastCGI binary: php-cgi7.2
Path to the php.ini directory: /etc/php/7.2/cgi/php.ini

Path to the PHP-FPM init script: php7.2-fpm
Path to the php.ini directory: /etc/php/7.2/fpm/php.ini
Path to the PHP-FPM pool directory: /etc/php/7.2/fpm/pool.d

###  The cli version for e.g. cron jobs has the name php7.2.


### PHP 7.3

Path to the PHP FastCGI binary: php-cgi7.3
Path to the php.ini directory: /etc/php/7.3/cgi/php.ini

Path to the PHP-FPM init script: php7.3-fpm
Path to the php.ini directory: /etc/php/7.3/fpm/php.ini
Path to the PHP-FPM pool directory: /etc/php/7.3/fpm/pool.d

###  The cli version for e.g. cron jobs has the name php7.3.


### PHP 7.4

Path to the PHP FastCGI binary: php-cgi7.4
Path to the php.ini directory: /etc/php/7.4/cgi/php.ini

Path to the PHP-FPM init script: php7.4-fpm
Path to the php.ini directory: /etc/php/7.4/fpm/php.ini
Path to the PHP-FPM pool directory: /etc/php/7.4/fpm/pool.d

###  The cli version for e.g. cron jobs has the name php7.4.
