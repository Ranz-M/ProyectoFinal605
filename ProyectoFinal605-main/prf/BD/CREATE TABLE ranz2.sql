CREATE TABLE ranz.Usuario
(Id_Usuario INT AUTO_INCREMENT NOT NULL,
Nombre VARCHAR (255) NOT NULL,
Apellidos VARCHAR (55) NOT NULL,
Direccion TEXT NOT NULL,
Telefono VARCHAR(12) NOT NULL,
Fecha_Nac DATE NOT NULL,
Email VARCHAR (255) NOT NULL,
PRIMARY KEY(Id_Usuario))ENGINE=INNODB;