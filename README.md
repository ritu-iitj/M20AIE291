# M20AIE291
Docker Webapp image from scratch

A docker image is made up of read only layers which represent a Dockerfile instruction. Each instruction creates a layer which is read only.
Each docker image is based on one base linux image. 

Our Docker image is based on the ubuntu 18.04. Following are the various parts of the DockerFile explained - 

- MAINTAINER This command is the command that declares the author of the image. # Usage: MAINTAINER [name]
-  ADD This command copies folder from your host OS to the docker container. Our webapp code from html folder will be copied to the www/html folder of apache2
- RUN builds your application
- CMD is used to run a command as soon as a container is launched. It is different from RUN as RUN is used at the time of building an image.
- EXPOSE this command is used to specify the port number upon which the container is running its process for networking with the outside world (your host). We are exposing port 80 because Apache web server runs on port 80 by default hence we can come from outside our container and run on hook up to the port 80 of our container. Think of it like a plug of like charges. #usage: EXPOSE [port]
-D FOREGROUND When -D FOREGROUND is not passed apache is run in the background and the apache process will be detached from the shell. This will cause docker container to be stopped.
- ENV This are environment variables for re-usable commands. These variables consist of “key value” pairs which can be accessed within the container by scripts and applications alike. This functionality of Docker offers an enormous amount of flexibility for running programs.
the . command instructs the build to take read from the current folder in which we are in.


To build the Docker image based on this DockerFile, run the following command - 

- docker build -t webapp_docker 

This will create a docker image of the name webapp_docker, you can choose any other name. To see the list of image created, run the following command - 
- docker images

Now to run the created image, run the following command - 

docker run --name webapp_apache -p 3000:80 -i -t webapp_docker 

This will run the webapp in the docker container and you can access it in the browser on port 3000 by going to the http://localhost:3000




