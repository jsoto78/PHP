CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `perfilid` int NOT NULL,
  `fechaalta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechabaja` datetime DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci