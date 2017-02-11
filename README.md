# docker-grawlixcms
Putting Grawlix CMS in Docker for local development.

## Purpose
I found the [Grawlix CMS](http://www.getgrawlix.com/) and wanted to give it a spin. I fired up my trusty Dockerfile and got started. Then, I realized that other people may want to do the same. I figured I'd share my effort, so people don't have to reinvent the wheel. You could use this Docker environment to quickly test out new versions of Grawlix or develop themes locally.

## Getting started from scratch
### Install Docker
First, you'll need Docker. This uses [Docker Compose](https://docs.docker.com/compose/install/), so follow those install instructions.

### Clone this repo
Once you have Docker installed. Clone this repo into a folder on your computer.
```
cd path/to/local/code
git clone https://github.com/levimccormick/docker-grawlixcms.git
```
This will pull all the code down into the docker-grawlixcms folder.

### Install Grawlix
If you have an existing Grawlix install, copy those files into the grawlixcms folder. If you are trying out Grawlix for the first time, extact the latest download into that folder.

There is a config.php included for new Grawlix installations to connect to the database container. ***DO NOT upload this file to your live site without modifications. It will break. Fill out the live site variables.***

### Build your Docker images
Navigate to the local_env folder and build the Docker webserver image.
```
cd local_env
docker-compose build
```

This will download the layers and configure the webserver image. Once it's done you can start it.

### Start the Docker containers
If you're still in the local_env folder, just start docker-compose
```
docker-compose up -d
```
This will launch three containers: webserver, dbserver, and phpmyadmin (for interacting with the database). Browse to (http://localhost:9000/) and you should see your installation.

### Stopping Docker
When your mischief has been managed, you can stop the containers with `docker-compose down` from the local_env folder.
