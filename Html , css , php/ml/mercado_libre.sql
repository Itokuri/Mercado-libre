SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `mercado_libre` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mercado_libre`;

DROP TABLE IF EXISTS `estanteria`;
CREATE TABLE IF NOT EXISTS `estanteria` (
  `id_producto` int(11) NOT NULL DEFAULT '0',
  `producto` varchar(50) DEFAULT NULL,
  `cantidad` int(2) DEFAULT NULL,
  `nro_almacen` int(11) DEFAULT NULL,
  `nro_espacio` int(11) DEFAULT NULL,
  `nro_estanteria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `estanteria`
  ADD PRIMARY KEY (`id_producto`);
