docker stop default-avatar-image-service-run
docker rm default-avatar-image-service-run
docker run -d --name default-avatar-image-service-run -p 8423:80 default-avatar-image-service