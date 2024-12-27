# web-ecommerce
## instalation in server
- ```sudo apt update```
- ```sudo apt install apache2 php libapache2-mod-php php-mysql -y```
- ```sudo systemctl start apache2```
- ```sudo systemctl enable apache2```
- ```sudo systemctl restart apache2```
- ```mysql -h <RDS-endpoint> -u <username> -p```
---
## configuration in database mysql
```sql
CREATE DATABASE ecommerce;
USE ecommerce;
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL,
    customer_name VARCHAR(255) NOT NULL,
    address TEXT NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
SELECT * FROM orders;
```
---
