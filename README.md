# hostgator

https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04

https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-compose-on-ubuntu-20-04

docker-compose build app
docker-compose up -d

Mostra estados dos serviços:
docker-compose ps

Mostra os arquivos do app
docker-compose exec app ls -l

Mostra os logs do nginx
docker-compose logs nginx

Pausa o ambiente
docker-compose pause

Tira o pause do ambiente
docker-compose unpause

Fecha e remover tudo
docker-compose down
