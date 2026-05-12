FROM php:8.2-apache

# 解决 "More than one MPM loaded" 报错的关键
RUN a2dismod mpm_event && a2enmod mpm_prefork

# 安装 MySQL 扩展
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# 复制文件
COPY . /var/www/html/

# 权限设置
RUN chown -R www-data:www-data /var/www/html/

# 设置 Apache 默认端口
ENV PORT 80
EXPOSE 80
