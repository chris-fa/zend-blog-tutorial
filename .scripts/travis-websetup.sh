#!/usr/bin/env bash

echo "Configuring apache2..."
sudo apt-get install -qq apache2

WEBROOT="${pwd}/public"
echo "WEBROOT: $WEBROOT"

sudo echo "
<VirtualHost *:8085>
	DocumentRoot $WEBROOT
	<Directory $WEBROOT>
		DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
	</Directory>
</VirtualHost>
" | sudo tee /etc/apache2/sites-available/default > /dev/null
sudo a2enmod rewrite
sudo a2enmod actions

echo "Restartin apache2..."
sudo service apache2 restart

echo "Configuring MySQL..."
# mysql -u root -e "CREATE USER 'blog'@'localhost' IDENTIFIED BY 'secret'"
# mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'blog'@'localhost' WITH GRANT OPTION;"
mysql -e 'CREATE DATABASE blog_tutorial;'