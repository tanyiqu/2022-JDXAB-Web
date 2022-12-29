FROM williamyeh/java8
MAINTAINER qt-ctf-bypass-ognl
EXPOSE 8080
ADD qt-ctf-bypass-ognl.jar qt-ctf-bypass-ognl.jar

COPY flag.sh /tmp

ENTRYPOINT ["java", "-jar", "qt-ctf-bypass-ognl.jar"]
