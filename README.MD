# DOCKER FIRST EVALUATION

This repository is designed to build and deploy a very small app as designed in the following diagram.

![project architecture](https://raw.githubusercontent.com/flallem/dockerFirstEval/master/doc/images/dockerFirstEval.jpg)

It generates : 
	- a docker container updated on docker hub 
	- a REST API 

## Application goal
This application will then be used by student


## Repo Organization

	.
	├── client		// docker container with php simple web page
	└── server		// REST API ( ApiGateway + lambda ). Write post args to S3
	│   
	├── doc			// Documentation folder
	│   └── images
	│  
	├── scripts		// installation, deployment and management scripts

