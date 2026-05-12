FROM php:8.2-apache

# 彻底修复 MPM 冲突：卸载所有可能冲突的模块，只留一个
RUN a2dismod mpm_event mpm_worker || true
RUN a2enmod mpm_prefork

# 安装必要的 MySQL 扩展
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# 复制你的所有代码到服务器目录
COPY . /var/www/html/

# 确保文件夹权限正确
RUN chown -R www-data:www-data /var/www/html/

# 强制设置端口，适配 Railway 的环境
ENV PORT 80
EXPOSE 80

# 启动命令
CMD ["apache2-foreground"]
