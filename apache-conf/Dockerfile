FROM ubuntu 
RUN apt update 
RUN apt install -y apache2
RUN apt install -y apache2-utils 
RUN apt clean 
RUN a2enmod proxy rewrite
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]

