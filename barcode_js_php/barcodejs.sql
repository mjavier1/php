create database barcodejs;
use barcodejs;
CREATE TABLE `barcodejs`.`t_productos` (
  `id_producto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `codigo` INT NULL,
  PRIMARY KEY (`id_producto`));