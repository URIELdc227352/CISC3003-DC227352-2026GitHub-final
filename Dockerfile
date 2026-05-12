FROM php:8.2-apache

# 1. 安装 MySQL 扩展
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# 2. 将整个项目复制到 Apache 运行目录
COPY . /var/www/html/

# 3. 开启 Apache 的重写模块（可选）
RUN a2enmod rewrite

# 4. 赋予权限
RUN chown -R www-data:www-data /var/www/html/

# 5. 暴露 80 端口
EXPOSE 80
