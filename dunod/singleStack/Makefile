CWD:= $(shell pwd)

help: ## Show this help.
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/##//'

build: ## validate 
	docker stop mono_sympho || echo "no container running"
	docker build --tag monolite:latest . 

run: ## launch a docker container 
	echo $(CWD)
	docker rm mono_sympho  || echo "no container running"
	docker run -d --rm -p80:80 -v $(CWD)/myapp:/var/www/myapp/web/ --name mono_sympho monolite:latest

run-debug: ## launch a docker container synchronously 
	echo $(CWD)
	docker rm mono_sympho  || echo "no container running"
	docker run --rm -p80:80 -v $(CWD)/myapp:/var/www/myapp/web/ --name mono_sympho monolite:latest 

run-exec: ## launch a docker container with bash
	echo $(CWD)
	docker rm mono_sympho  || echo "no container running"
	docker run --rm -p80:80 -v $(CWD)/myapp:/var/www/myapp/web/ -it --entrypoint "/bin/bash" --name mono_sympho monolite:latest 



stop: ## launch a docker container 
	docker stop mono_sympho 


