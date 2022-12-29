FROM openjdk:11-jre-slim
EXPOSE 7777
COPY flag.sh /tmp
ADD mvel-ctf.jar mvel-ctf.jar
ENTRYPOINT ["java", "-jar", "mvel-ctf.jar"]
