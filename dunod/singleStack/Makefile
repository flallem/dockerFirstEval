help: ## Show this help.
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/##//'


build: ## validate 
	docker build --tag monolite:latest . 


run: ## launch a docker container 
	docker run -d --rm -p80:80 --name mono_sympho monolite:latest



