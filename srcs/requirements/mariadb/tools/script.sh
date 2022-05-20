# service mysql start

# if ! mysql -u root --password=fbouibao "USE $DB_NAME"; then
#     mysql -u root -e "CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASS';"
#     mysql -u root -e "CREATE DATABASE $DB_NAME;"
#     mysql -u root -e "USE $DB_NAME; GRANT ALL PRIVILEGES ON * TO '$MYSQL_USER'@'%' WITH GRANT OPTION; FLUSH PRIVILEGES;"
#     mysqladmin --user=root password fbouibao
#     mysql -u root --password=fbouibao wordpress < wrp.sql
#     touch /reda
#     service mysql stop
# fi

# mysqld_safe

if [  ! -f /done ]
then
    chown -R mysql:mysql /etc/mysql/*
    service mysql start
#    mysql -u root --password=fbouibao "USE $DB_NAME"
    mysql -u root -e "CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASS';"
    mysql -u root -e "CREATE DATABASE $DB_NAME;"
    mysql -u root -e "USE $DB_NAME; GRANT ALL PRIVILEGES ON * TO '$MYSQL_USER'@'%' WITH GRANT OPTION; FLUSH PRIVILEGES;"
    mysqladmin --user=root password $MYSQL_ROOT_PASS
    mysql -u root --password=$MYSQL_ROOT_PASS $DB_NAME < /last_wp.sql
    service mysql stop
    touch /done
fi
chown -R mysql:mysql /etc/mysql/*
mysqld_safe

