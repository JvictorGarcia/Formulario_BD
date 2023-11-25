-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema site_receitas
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `site_receitas` ;

-- -----------------------------------------------------
-- Schema site_receitas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `site_receitas` DEFAULT CHARACTER SET utf8 ;
USE `site_receitas` ;

-- -----------------------------------------------------
-- Table `site_receitas`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `site_receitas`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `site_receitas`.`usuarios` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `data_cadastro` DATETIME NULL,
  `status` VARCHAR(10) NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `site_receitas`.`receitas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `site_receitas`.`receitas` ;

CREATE TABLE IF NOT EXISTS `site_receitas`.`receitas` (
  `id_receitas` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL DEFAULT NULL,
  `ingredientes` TEXT(500) NULL DEFAULT NULL,
  `receita` TEXT(1000) NULL DEFAULT NULL,
  `foto` BLOB NULL DEFAULT NULL,
  `categoria` VARCHAR(100) NULL,
  `usuarios_id_usuario` INT(11) NOT NULL,
  PRIMARY KEY (`id_receitas`),
  INDEX `fk_receitas_usuarios_idx` (`usuarios_id_usuario` ASC),
  CONSTRAINT `fk_receitas_usuarios`
    FOREIGN KEY (`usuarios_id_usuario`)
    REFERENCES `site_receitas`.`usuarios` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
