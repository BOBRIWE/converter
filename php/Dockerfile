FROM circleci/php
WORKDIR /usr/src/myapp/php
COPY composer.json .
RUN sudo composer install
COPY . .


