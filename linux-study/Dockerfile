# FROM ubuntu:18.04

# RUN yes | unminimize
# RUN locale-gen ja_JP.UTF-8
# ENV LANG ja_JP.UTF-8
# ENV TZ Asia/Tokyo
# WORKDIR /linux-study
# base imgae（docker imagesコマンドで表示されたREPOSITORYを指定）
FROM  nginx:latest

# author
MAINTAINER  kageshima

ADD default.conf /etc/nginx/conf.d

RUN echo "now building..."