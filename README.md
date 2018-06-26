# Stackcats
Experimenting with Docker Swarm and Stacks

```bash
docker build -t "stackcats" -t "lightster/stackcats:latest" -t "lightster/stackcats:part5" .
docker push lightster/stackcats
docker-machine create --driver virtualbox stackcats01
docker-machine create --driver virtualbox stackcats02
docker-machine ls
docker-machine ssh stackcats01 "docker swarm init --advertise-addr <stackcats-ip-address-from-ls>"
docker-machine ssh stackcats02 "docker swarm join --token <token-from-init> <stackcats01-ip-address>"
eval $(docker-machine env stackcats01)
docker-machine ssh stackcats01 "mkdir ./data"
docker stack deploy -c docker-compose.yml kcatstack
docker stack ps kcatstack
docker stack rm kcatstack
eval $(docker-machine env -u)
docker-machine rm stackcats01
docker-machine rm stackcats02
```
