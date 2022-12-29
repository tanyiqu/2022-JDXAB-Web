FROM node
RUN cd /opt&&npm install express&&apt update&&apt install nginx -y
COPY src/run.js /opt/
COPY src/nginx.conf /etc/nginx/sites-enabled/default
COPY src/run.sh /start.sh
EXPOSE 8080
ENTRYPOINT ["bash", "/start.sh"]
