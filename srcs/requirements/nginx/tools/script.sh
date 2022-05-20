apt-get update
apt-get install -y nginx
# mkdir -p /etc/nginx/ssl_certs/

cp private.pem /etc/nginx/sites-available/private.pem
cp public.key /etc/nginx/sites-available/public.key

service nginx start

mv default /etc/nginx/sites-available/default
