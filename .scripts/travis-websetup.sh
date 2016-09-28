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

echo "Configuring MySQL"
mysql -u root -e "CREATE USER 'root'@'localhost' IDENTIFIED BY 'root'"
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION"

composer install
php public/index.php orm:schema-tool:create


