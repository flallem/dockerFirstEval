help: ## Show this help.
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/##//'

install-tools: ## Install project tooling
	echo "install required tools"

###
###Build operations

build-all: ## build docker image and check terraform scripts
	echo "build project artifacts"
	(cd front; make build)
	(cd back; make build)

build-back: ## check terraform scrips
	(cd back; make build)

build-front: ## Build container images
	(cd front; make build)

test: ## launch a docker container 
	#./script/invoke_local $(PWD)/code/ping
	echo "launch test"



