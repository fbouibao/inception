apt-get update
apt-get install -y php-fpm php-mysql wget curl unzip
service php7.3-fpm start
wget https://wordpress.org/latest.zip
mkdir -p /var/www/html
cp latest.zip /var/www/html/
cd /var/www/html/
unzip latest.zip
chmod 644 /wp-config.php
cp /wp-config.php /var/www/html/
mv wordpress/* .
rm -rf wordpress