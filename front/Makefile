help: ## Show this help.
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/##//'


build: ## create docker image
	(echo "build-front";docker build -t docker-first-eval-front .)

test: ## launch a docker container 
	(make build; docker run -p 80:80 docker-first-eval-front;echo "Test launched")

run: ## launch a docker container 
	(docker run -p 80:80 docker-first-eval-front)



