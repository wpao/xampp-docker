docker-compose up -d //berjalan di belakang layar
docker compose up //alwais waching log
docker logs xampp-apache
docker logs mysql-database

http://localhost:8080/www/
http://localhost:8080/www/htdocs/db_connect.php

<!--  -->

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL
);

INSERT INTO users (name, email) VALUES
('Alice', 'alice@example.com'),
('Bob', 'bob@example.com'),
('Charlie', 'charlie@example.com');

<!--  -->
