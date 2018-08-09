help: ## Show this help.
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/##//'


build: ## create docker image
	(echo "build-geoip";docker build -t image-first-eval-geoip .)

test: ## launch a docker container 
	(make build; make run ; echo "Test launched")

run: ## launch a docker container 
	(docker run -d --rm --name eval-geoip image-first-eval-geoip)



