-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ecommerce
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ecommerce` ;

-- -----------------------------------------------------
-- Schema ecommerce
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET utf8mb4 ;
USE `ecommerce` ;

-- -----------------------------------------------------
-- Table `ecommerce`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecommerce`.`categoria` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `created_time` DATETIME NULL DEFAULT NULL COMMENT 'created tiem',
  `updated_time` DATETIME NULL DEFAULT NULL COMMENT 'updated tiem',
  `codigo` VARCHAR(255) NULL DEFAULT NULL COMMENT 'codigo da categoria',
  `nome` VARCHAR(255) NULL DEFAULT NULL COMMENT 'nome da categoria',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecommerce`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecommerce`.`produto` (
  `id` INT(11) NOT NULL,
  `Nome` VARCHAR(100) NOT NULL,
  `SKU` VARCHAR(45) NOT NULL COMMENT 'chave primaria',
  `preço` DECIMAL(10,0) NULL DEFAULT NULL COMMENT 'valor do produto',
  `descrição` TEXT NULL DEFAULT NULL COMMENT 'descrição do produto',
  `quantidade` FLOAT NULL DEFAULT NULL COMMENT 'quantidade de itens',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
