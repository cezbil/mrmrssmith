# mrmrssmit code test
app is pretty easy to use value 1 in value 2 in, choose operator and calculate
## Getting Started

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. ```make build``` this will take some time

if you're waiting long might be good idea to run 
``` 
    docker compose build --pull --no-cache
    docker compose up
```
and monitor situation
3. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
4. ```make stop``` to stop the Docker containers.

or just clone it to some server that can run symfony 6.2 :D
## Symfony Docker
I cloned symfony docker form: [symfony-docker](https://github.com/dunglas/symfony-docker)

Created by [Kévin Dunglas](https://dunglas.fr), co-maintained by [Maxime Helias](https://twitter.com/maxhelias) and sponsored by [Les-Tilleuls.coop](https://les-tilleuls.coop).
