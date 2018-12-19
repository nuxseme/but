# but
buy ticket
docker run -p 3306:3306 --name mysql -v /data/mysql/conf:/etc/mysql -v /data/mysql/logs:/logs -v /data/mysql/data:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=123456 -d mysql

docker run -p 82:80 -v /data/projects/but:/var/www/html -v /data/nginx/but:/etc/nginx/sites-enabled -v /data/log/but:/var/nginx/log --name  but -d nuxse/nginx-php-fpm


增加 ORM特性
增加 日志 