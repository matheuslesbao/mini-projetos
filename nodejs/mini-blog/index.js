const express = require("express");
const app = express();

const port = process.env.port || 3000;

app.get('/', (req, res) => {
  res.send('Testando app')
})

app.listen(port, () => {
  console.log(` Escutando na porta localhost:${port}`);
})
