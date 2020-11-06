SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- estructura de conductors
-- ----------------------------
DROP TABLE IF EXISTS `conductors`;
CREATE TABLE `conductors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ape` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fec_nac` date DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 
 
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- estructura para no se que XD
-- ----------------------------
INSERT INTO `conductors` VALUES ('1', 'ED', 'AAAA', '464655', 'XXXXXX', '0000-00-00', '','', null, null, null);
INSERT INTO `conductors` VALUES ('2', 'ROY', 'BBBBBB', '564646', 'EEEE', '0000-00-00', '','', null, null, null);