from debian:buster
COPY tools /
COPY conf /
run sh script_wordpress.sh
RUN cp /www.conf /etc/php/7.3/fpm/pool.d/
EXPOSE 9000
CMD ["sh", "run_serv.sh"]