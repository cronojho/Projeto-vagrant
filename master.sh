#!/bin/bash
sudo docker swarm init --advertise-addr=10.10.10.100
sudo docker swarm join-token worker | grep docker > /vagrant/worker.sh
sudo docker pull webdevops/php-apache:alpine-php7
sudo docker run --name mycalc -dti -p 80:80 --mount type=bind,src=/vagrant,dst=/app/ webdevops/php-apache:alpine-php7