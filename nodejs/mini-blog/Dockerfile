FROM alpine

RUN apk add --update nodejs npm

WORKDIR /usr/app

COPY package*.json ./

# COPY dbinit/init.sql /docker-entrypoint-initdb.d/

RUN npm ci

COPY . .

EXPOSE 3000

CMD ["npm", "start"]
