CREATE SCHEMA IF NOT EXISTS `blog-estudo` DEFAULT CHARACTER
SET
  utf8;

USE `blog-estudo`;

CREATE TABLE
  IF NOT EXISTS `blog-estudo`.`usuarios` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `is_ativo` TINYINT NULL DEFAULT 1,
    `dt_criacao` datetime DEFAULT CURRENT_TIMESTAMP,
    `dt_atualizacao` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
  ) ENGINE = InnoDB;

CREATE TABLE
  IF NOT EXISTS `blog-estudo`.`noticias` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `titulo` VARCHAR(255) NOT NULL,
    `descricao` LONGTEXT NOT NULL,
    `dt_criacao` datetime DEFAULT CURRENT_TIMESTAMP,
    `dt_atualizacao` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `id_usuario` INT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `dart`.`usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
  ) ENGINE = InnoDB;
