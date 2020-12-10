# PHP Docker

Requirements

Docker: https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04

Docker compose: https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-compose-on-ubuntu-20-04

**Build image**

```sh
$ docker-compose build app
```

**Up app**

```sh
$ docker-compose up -d
```

**Show services**

```sh
$ docker-compose ps
```

**Show files**

```sh
$ docker-compose exec app ls -l
```

**Show nginx logs**

```sh
$ docker-compose logs nginx
```

**Pause app**

```sh
$ docker-compose pause
```

**Unpause app**

```sh
$ docker-compose unpause
```

**Exit and close all**

```sh
$ docker-compose down
```
