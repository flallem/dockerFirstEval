CWD:= $(shell pwd)

help: ## Show this help.
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/##//'

build: ## validate 
	docker rm my_redis|| echo "no container running"
	docker build --tag myredis:latest . 

run: ## launch a docker container 
	echo $(CWD)
	docker rm my_redis|| echo "no container running"
	docker run -d --rm  --name my_redis myredis:latest

run-debug: ## launch a docker container synchronously 
	echo $(CWD)
	docker rm myredis  || echo "no container running"
	docker run --rm -p8080:80 -v $(CWD)/myapp:/var/www/myapp/web/ --name myredis myredis:latest 

run-exec: ## launch a docker container with bash
	echo $(CWD)
	docker rm my_redis  || echo "no container running"
	docker run --rm -p8080:80 -v $(CWD)/myapp:/var/www/myapp/web/ -it --entrypoint "/bin/bash" --name my_redis myredis:latest 



stop: ## launch a docker container 
	docker stop my_redis 


