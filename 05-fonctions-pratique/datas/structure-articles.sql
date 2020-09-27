-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema articles
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema articles
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `articles` DEFAULT CHARACTER SET utf8 ;
USE `articles` ;

-- -----------------------------------------------------
-- Table `articles`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `articles`.`users` (
  `idusers` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `thename` VARCHAR(45) NULL,
  PRIMARY KEY (`idusers`),
  UNIQUE INDEX `thename_UNIQUE` (`thename` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `articles`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `articles`.`articles` (
  `idarticles` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(150) NOT NULL,
  `texte` TEXT NOT NULL,
  `thedate` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `users_idusers` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idarticles`),
  UNIQUE INDEX `titre_UNIQUE` (`titre` ASC),
  INDEX `fk_articles_users_idx` (`users_idusers` ASC),
  CONSTRAINT `fk_articles_users`
    FOREIGN KEY (`users_idusers`)
    REFERENCES `articles`.`users` (`idusers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
