<!-- check sebelum run -->

sudo systemctl stop mariadb
sudo systemctl stop mysql

docker images
docker container ls -a
docker volume ls
docker network ls
docker ps

<!-- create & run -->

docker compose build
docker compose create
docker compose start

docker-compose up --build -d

docker-compose up -d //berjalan di belakang layar
docker compose up //alwais waching log

<!-- stop -->

docker container stop
docker compose stop

<!-- hapus -->

docker image rm imageId/namaImage
docker container rm containerId/nameContainer
docker volume rm volumeId/nameVolume
docker network rm networkId/nameNetwork

docker compose down
docker-compose down --volumes
docker-compose down --volumes --remove-orphans

<!-- see logs -->

docker logs xampp-apache
docker logs mysql-database

<!-- exect -->

docker exec -it xampp-apache ls /www/htdocs //melihat isi htdocs
docker exec -it mysql-new bash
docker container exec -i -t containerId/namacontainer /bin/bash

<!-- inspect -->

docker volume inspect volumename

<!-- logs -->

docker logs mysql-database
docker logs phpmyadmin
docker logs xampp-apache

<!-- acces -->

http://localhost:8080/www/
http://localhost:8080/www/htdocs/db_connect.php

<!-- create table & field -->

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL
);

INSERT INTO users (name, email) VALUES
('Alice', 'alice@example.com'),
('Bob', 'bob@example.com'),
('Charlie', 'charlie@example.com');

<!-- yang belum -->

backup data volume dengan cara membuat arsip
tar cvf /backup/backup.tar.gz /data
zib, gz,

<!-- backup -->

docker container run --rm --name ubuntubackup --mount "type=bind,source=/home/w/Documents/xampp-docker/backup,destination=/backup" --mount "type=volume,source=db_xampp,destination=/data" ubuntu:latest tar cvf /backup/backup.tar.gz /data

<!-- restore -->

docker container run --rm --name ubunturestore --mount "type=bind,source=/home/w/Documents/xampp-docker/backup,destination=/backup" --mount "type=volume,source=db_xampp,destination=/data" ubuntu:latest bash -c "cd /data && tar xvf /backup/backup.tar.gz --strip 1"
