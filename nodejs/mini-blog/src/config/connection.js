require('dotenv').config();

const Sequelize = require('sequelize');
const sequelize = new Sequelize("blog-estudo", "alphard", "teste", {
    host: "database-mysql", // nome do container
    dialect: 'mysql'
});

sequelize.authenticate().then(() => {
    console.log('Banco de dados conectado.');
}).catch((erro) => {
    console.log('Banco de dados nao conectado ' + erro);
})

module.exports = sequelize; 