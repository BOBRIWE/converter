FROM circleci/node

WORKDIR /my-app

COPY package.json .

RUN sudo npm install

COPY . .

RUN ls

EXPOSE 3000 