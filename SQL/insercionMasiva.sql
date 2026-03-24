-- INSERCION DE TABLAS

-- ######## USUARIO ########
CREATE TABLE Usuario
(
	idALumno TINYINT NOT NULL AUTO_INCREMENT,
	NIA CHAR(2) NOT NULL, -- Numero de identificacion de cada alumno relacionado con su puesto (del 0 al 9 tiene un 0 delante: 00,01,02,03...)
	nombre VARCHAR(100) NOT NULL,
	contrasenia VARCHAR(100) NOT NULL,
	jesuita VARCHAR(100) NOT NULL,
	rutaImagen VARCHAR(100) NOT NULL,
	infromacion MEDIUMTEXT NOT NULL, -- Es informcaion del jesuita de cada alumno que puede ser una frase de 5 palabras que lo identifique hasta dos o tres lineas
	CONSTRAINT PK_Usuario PRIMARY KEY (idALumno),
	CONSTRAINT CSU_Usuario_Nombre UNIQUE (nombre),
	CONSTRAINT CSU_Usuario_Jesuita UNIQUE (jesuita)
)

-- INSERCION MASIVA DE DATOS

-- ######## USUARIO ########
INSERT INTO Usuario (NIA, nombre, contrasenia, jesuita, rutaImagen, infromacion) 
VALUES 
('00', 'Juan Pérez', 'hash_pass_1', 'Ignacio de Loyola', 'img/ignacio.jpg', 'Fundador de la Compañía de Jesús y autor de los Ejercicios Espirituales.'),
('01', 'Ana García', 'hash_pass_2', 'Francisco Javier', 'img/javier.jpg', 'Misionero incansable en Asia, conocido como el apóstol de las Indias.'),
('02', 'Luis Rodríguez', 'hash_pass_3', 'Pedro Claver', 'img/claver.jpg', 'Se definía como "esclavo de los esclavos para siempre" en Cartagena de Indias.'),
('03', 'Marta López', 'hash_pass_4', 'Alberto Hurtado', 'img/hurtado.jpg', 'Santo chileno, fundador del Hogar de Cristo y gran activista social.'),
('04', 'Carlos Ruiz', 'hash_pass_5', 'Roque González', 'img/roque.jpg', 'Mártir de las reducciones paraguayas y gran defensor de los indígenas.'),
('05', 'Elena Beltrán', 'hash_pass_6', 'Baltasar Gracián', 'img/gracian.jpg', 'Escritor del Siglo de Oro, autor de El Criticón y gran pensador.'),
('06', 'Diego Sanz', 'hash_pass_7', 'Matteo Ricci', 'img/ricci.jpg', 'Pionero del diálogo cultural entre Occidente y China.'),
('07', 'Lucía Méndez', 'hash_pass_8', 'Gerard Manley Hopkins', 'img/hopkins.jpg', 'Poeta británico que renovó la métrica con su técnica del sprung rhythm.'),
('08', 'Jorge Cano', 'hash_pass_9', 'Karl Rahner', 'img/rahner.jpg', 'Uno de los teólogos más influyentes del Concilio Vaticano II.'),
('09', 'Sofía Vega', 'hash_pass_10', 'Pierre Teilhard de Chardin', 'img/chardin.jpg', 'Paleontólogo y filósofo que unió fe cristiana y evolución biológica.');