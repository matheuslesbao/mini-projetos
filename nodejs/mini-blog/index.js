const express = require("express");
const app = express();

const { User } = require('./src/models');

app.use(express.json());


const port = process.env.port || 3000;

app.listen(port, () => {
  console.log(` Escutando na porta localhost:${port}`);
});
