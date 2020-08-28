-- -----------------------------------------------------
-- Base de datos del sistema de Herramientas Tics

-- -----------------------------------------------------
-- Schema tics
--
-- Base de datos del sistema de Herramientas Tics
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `htic` DEFAULT CHARACTER SET utf8 ;
USE `htic` ;

-- -----------------------------------------------------
-- Table `htic`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `htic`.`Usuarios` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Usuario` VARCHAR(100) NULL,
  `Nombre` VARCHAR(100) NULL,
  `Apellidos` VARCHAR(100) NULL,
  `Contrasena` VARCHAR(8) NULL,
  `Correo` VARCHAR(100) NULL,
  `Plantel` SMALLINT(4) NULL COMMENT '47202=Azcapotzalco, 47203=Naucalpan, 47204=Vallejo, 47205=Oriente, 47206=Sur',
  `Tipo` SET('A', 'P', 'E') NULL DEFAULT 'A' COMMENT 'A = Alumno, P = Profesor, E = Especial',
  `Generacion`  SMALLINT(4) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `Usuario_UNIQUE` (`Usuario` ASC))
ENGINE = Aria
COMMENT = 'Contiene los datos de los alumnos y usuarios que ingresaran al sistema';

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `Usuario`, `Nombre`, `Apellidos`, `Contrasena`, `Correo`, `Plantel`, `Tipo`) VALUES
(1, 'BASJ850331631', 'Jonathan', 'Bailon Segura', '31031985', 'jonn59@gmail.com', NULL, 'P'),
(2, 'TOOL890730IJ6', 'David', 'Ortuño', '30071989', NULL, NULL, 'P'),
(3, 'AIPJ840407V55', 'Rodrigo', 'Aizpuru', '07041984', NULL, NULL, 'P'),
(4, 'JITY831129', 'Yadira', 'Jimenéz Taboada', '29111983', NULL, NULL, 'P'),
(5, 'MOVK820303', 'Karla', 'Moreno Vega', '03031982', NULL, NULL, 'P'),
(6, 'PRUEBA', 'Usuario', 'de Prueba', '01011991', NULL, NULL, 'E');

-- -----------------------------------------------------
-- Table `htic`.`Logs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `htic`.`Logs` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Usuarios_id` INT UNSIGNED NOT NULL,
  `Accion` VARCHAR(45) NULL,
  `Tiempo` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `Url` VARCHAR(100) NULL,
  `Ip` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
COMMENT 'Contiene un seguimiento de la actividad realizada por el usuario';;


-- -----------------------------------------------------
-- Table `htic`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `htic`.`Admin` (
  `id` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Usuario` VARCHAR(45) NULL,
  `Nombre` VARCHAR(45) NULL,
  `Apellidos` VARCHAR(45) NULL,
  `Contrasena` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = Aria
COMMENT 'Contiene los usuarios administradores que pueden acceder al Backend';


-- -----------------------------------------------------
-- Table `htic`.`Cuestionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `htic`.`Cuestionario` (
  `id` MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Usuarios_id` INT NOT NULL,
  `P1` TINYINT(1) NULL DEFAULT 0,
  `P2` TINYINT(1) NULL DEFAULT 0,
  `P3` TINYINT(1) NULL DEFAULT 0,
  `P4` TINYINT(1) NULL DEFAULT 0,
  `P5` TINYINT(1) NULL DEFAULT 0,
  `P6` TINYINT(1) NULL DEFAULT 0,
  `P7` TINYINT(1) NULL DEFAULT 0,
  `P8` TINYINT(1) NULL DEFAULT 0,
  `P9` TINYINT(1) NULL DEFAULT 0,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
COMMENT 'Contiene las respuestas del cuestionario de opinión';
