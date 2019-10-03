php -S 0.0.0.0:8080 - for run server

Либо контейнер:
sudo docker build -t android_task .
sudo docker run -itd -p 1337:8080 --name task2 android_task