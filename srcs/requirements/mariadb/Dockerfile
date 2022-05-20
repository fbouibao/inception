FROM debian:buster
COPY tools /
COPY conf /
RUN sh script_ist.sh
EXPOSE 3306
CMD [ "sh" ,  "script.sh" ]