CREATE TABLE IF NOT EXISTS `municipios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_dpto` int(5) unsigned NOT NULL,
  `municipio` varchar(50) COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;

INSERT INTO `municipios` (`id`,  `id_dpto`,  `municipio`) VALUES
(1, 1, 'APARTADO '),
(2, 1, 'CAUCASIA '),
(3, 1, 'MEDELLIN '),
(4, 2, 'BARRANQUILLA '),
(5, 3, 'BOGOTA,  D.C. '),
(6, 4, 'CARMEN DE BOLIVAR '),
(7, 4, 'CARTAGENA DE INDIAS '),
(8, 5, 'POPAYAN '),
(9, 6, 'VALLEDUPAR '),
(10, 7, 'QUIBDO '),
(11, 8, 'MONTERIA '),
(12, 9, 'PLATO '),
(13, 9, 'SANTA MARTHA '),
(14, 10, 'VILLAVICENCIO '),
(15, 11, 'PASTO '),
(16, 11, 'TUMACO '),
(17, 12, 'CUCUTA '),
(18, 13, 'MOCOA '),
(19, 14, 'AGUACHICA'),
(20, 14, 'BARRANCABERMEJA '),
(21, 14, 'BUCARAMANGA '),
(22, 15, 'SAN MARCOS'),
(23, 15, 'SINCELEJO '),
(24, 16, 'IBAGUE '),
(25, 17, 'PEREIRA ');