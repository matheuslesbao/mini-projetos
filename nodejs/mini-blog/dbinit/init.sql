CREATE SCHEMA IF NOT EXISTS `blog-estudo` DEFAULT CHARACTER
SET
  utf8;

USE `blog-estudo`;

CREATE TABLE
  IF NOT EXISTS `usuarios` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
  ) ENGINE = InnoDB;

CREATE TABLE
  IF NOT EXISTS `noticias` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `titulo` VARCHAR(255) NOT NULL,
    `descricao` LONGTEXT NOT NULL,
    `id_usuario` INT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `blog-estudo`.`usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
  ) ENGINE = InnoDB;
