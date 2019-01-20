FROM phpunit/phpunit
COPY /php /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./StackTest.php" ]