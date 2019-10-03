FROM ubuntu:16.04
MAINTAINER Pavel Parkhomets "parkhomets@yandex-team.ru"


RUN apt-get update
RUN apt-get install -y "php"
RUN apt-get install -y "php7.0-sqlite"



ADD admin.php /home
ADD base.sqlite /home
ADD base.sqlite.sqbpro /home
ADD index.php /home
ADD test_form.php /home
ADD user.php /home



WORKDIR /home
EXPOSE 8080
CMD ["php", "-S", "0.0.0.0:8080"]