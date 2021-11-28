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

CREATE TABLE `perfiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `fechabaja` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci

CREATE TABLE caja_php.transac (
	id INT auto_increment KEY NOT NULL,
	fecha DATETIME DEFAULT NOW() NOT NULL,
	tipo char(1) NOT NULL,
	usuarioid INT NOT NULL,
	valor decimal(10,2) not null,
	paciente_hc INT(11) NULL,
	paciente_nombre varchar(150) null,
	profesional_nombre varchar(200) null,
	deriva int null,
	practica varchar(200),
	medio_pago int not null,
	observaciones varchar(5000)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE caja_php.derivadores (
id INT auto_increment KEY NOT NULL,
	nombre varchar(200) NOT NULL,
fechabaja DATETIME NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE caja_php.medios_pago (
id INT auto_increment KEY NOT NULL,
	nombre varchar(200) NOT NULL,
fechabaja DATETIME NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;