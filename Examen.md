# Docker 101

1) Crear un Dockerfile para uso en Network 
-
Creamos  host 1: web-01 (nginx), host 2: desktop01, este último debe crearse de la imagen ubuntu, personalizando la imagen con la instalación los paquetes:
    - iputils-ping 
    - curl

2) Crear un Dockerfile, para servidor de apliaciones (tomcat, JBoss/Wildfly, Springboot, php)

3) Crear un docker-compose para utilizar el Dockerfile (servidor de apliaciones) junto con otro contenedor que represente una base de datos, puede ser postgres, mysql

4) Ejecución de docker compose
    - Proyecto en Github
      - Dockerfile
      - docker-sompose
    - Imagenes publicas en hub.docker.com
      
Evaluación
-
  - Github URL
  - Archivo Readme.md
  - docker pull cuentapropia/nombreimagen:latest
