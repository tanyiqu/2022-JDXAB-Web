FROM tanyiqu/mysql:mariadb_10.1.48

COPY src /tmp/src
COPY mysql /tmp

 # 导入mysql数据库
RUN service mysql start\
 && mysql -e "source /tmp/db.sql;" \
 && mysql -e "use mysql;update mysql.user set authentication_string = password('123456'), plugin = 'mysql_native_password' where user = 'root';flush privileges;"

 # 配置web页面
RUN mv /tmp/src/* /var/www/html \
 && mv /tmp/start.sh /start.sh \
 && chmod -R 777 /var/www/html \
 
 # 清理临时文件
 && rm -rf /tmp/db.sql \
 && rm -rf /tmp/www

WORKDIR /var/www/html
EXPOSE 80

# 环境中自带 start.sh
CMD ["/bin/bash", "/start.sh"]

