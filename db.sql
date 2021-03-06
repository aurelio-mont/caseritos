
-- -----------------------------------------------------
-- Schema caseritos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `idRoll` INT NOT NULL,
  `numero_documento` BIGINT NOT NULL,
  PRIMARY KEY (`idUsuarios`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `roll`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `roll` (
  `idRoll` INT NOT NULL AUTO_INCREMENT,
  `nombreRoll` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idRoll`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empleados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empleados` (
  `docuemtoEmpledo` BIGINT NOT NULL,
  `primerNombre` VARCHAR(45) NOT NULL,
  `segundoNombre` VARCHAR(45) NULL,
  `primerApellido` VARCHAR(45) NOT NULL,
  `segundoApellido` VARCHAR(45) NULL,
  `fechaNacimiento` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `estado` BIT NULL,
  `idTipoDocumento` INT NOT NULL,
  PRIMARY KEY (`docuemtoEmpledo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clientes` (
  `documentoCliente` BIGINT NOT NULL,
  `primerNombre` VARCHAR(45) NOT NULL,
  `segundoNombre` VARCHAR(45) NULL,
  `primerApellido` VARCHAR(45) NOT NULL,
  `segundoApellido` VARCHAR(45) NULL,
  `fechaNacimiento` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `estado` BIT NULL,
  `idDepartamento` INT NOT NULL,
  `idCiudad` INT NOT NULL,
  `idGenero` INT NOT NULL,
  `idTopoDocumento` INT NULL,
  PRIMARY KEY (`documentoCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `departamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `departamento` (
  `idDepartamento` INT NOT NULL AUTO_INCREMENT,
  `departamento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDepartamento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ciudad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ciudad` (
  `idCiudad` INT NOT NULL,
  `ciudad` VARCHAR(45) NOT NULL,
  `idDepartamento` INT NOT NULL,
  PRIMARY KEY (`idCiudad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `genero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `genero` (
  `idGenero` INT NOT NULL AUTO_INCREMENT,
  `genero` VARCHAR(20) NULL,
  PRIMARY KEY (`idGenero`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tipo_documento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `idTipoDocumento` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipoDocumento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proveedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proveedores` (
  `docuemtoProveedor` BIGINT NOT NULL,
  `rasonSocial` VARCHAR(100) NOT NULL,
  `primerNombre` VARCHAR(45) NOT NULL,
  `segundoNombre` VARCHAR(45) NULL,
  `primerApellido` VARCHAR(45) NOT NULL,
  `segundoApellido` VARCHAR(45) NULL,
  `fechaNacimiento` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `estado` BIT NULL,
  `idDepartamento` INT NOT NULL,
  `idCiudad` INT NOT NULL,
  `idGenero` INT NOT NULL,
  `idTopoDocumento` INT NOT NULL,
  PRIMARY KEY (`docuemtoProveedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL,
  `descripcion` VARCHAR(200) NULL,
  `precioCompra` VARCHAR(45) NULL,
  `precioVenta` VARCHAR(45) NULL,
  `stockMin` INT NULL,
  `documentoProveedor` BIGINT NOT NULL,
  `foto` VARCHAR(100) NULL,
  PRIMARY KEY (`idProducto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `presentacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `presentacion` (
  `idPresentacion` INT NOT NULL AUTO_INCREMENT,
  `presentacion` VARCHAR(45) NULL,
  PRIMARY KEY (`idPresentacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `entradas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `entradas` (
  `idEntrada` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(200) NOT NULL,
  `fechaEntrada` DATE NOT NULL,
  `cantidad` INT NOT NULL,
  `idProducto` INT NOT NULL,
  PRIMARY KEY (`idEntrada`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `salidas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `salidas` (
  `idSalida` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(200) NOT NULL,
  `fechaSalida` DATE NOT NULL,
  `cantidad` INT NOT NULL,
  `idProducto` INT NOT NULL,
  PRIMARY KEY (`idSalida`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `factura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `factura` (
  `idFactura` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NULL,
  `total` INT NULL,
  `estado` BIT NULL,
  `documentoCliente` BIGINT NOT NULL,
  `documentoEmpleado` BIGINT NOT NULL,
  PRIMARY KEY (`idFactura`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `detalle_factura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `detalle_factura` (
  `idDetalle` INT NOT NULL AUTO_INCREMENT,
  `cantidad` INT NULL,
  `precio` INT NULL,
  `idFactura` INT NOT NULL,
  `idProducto` INT NOT NULL,
  PRIMARY KEY (`idDetalle`))
ENGINE = InnoDB;

INSERT INTO genero (genero) VALUES ('Masculino'),('Femenino'),('Otro');
INSERT INTO roll (nombreRoll) VALUES ('Administrador'),('Vendedor'),('Almacenista');
INSERT INTO tipo_documento (tipo) VALUES ('Cédula de Ciudadaníav'),('Cédula de Extranjería'),('Tarjeta de identidad'),('Registro civil'),('NIT');




-- insert de departamentos de colombia
insert into departamento(departamento)
values
('AMAZONAS'),
('ANTIOQUIA'),
('ARAUCA'),
('ATLÁNTICO'),
('BOLÍVAR'),
('BOYACÁ'),
('CALDAS'),
('CAQUETÁ'),
('CASANARE'),
('CAUCA'),
('CESAR'),
('CHOCÓ'),
('CÓRDOBA'),
('CUNDINAMARCA'),
('BOGOTÁ D.C'),
('GUAJIRA'),
('GUANÍA'),
('GUAVIARE'),
('HUILA'),
('MAGDALENA'),
('META'),
('NARIÑO'),
('NORTE DE SANTANDER'),
('PUTUMAYO'),
('QUINDIO'),
('RISARALDA'),
('SAN ANDRÉS Y PROVIDENCIA'),
('SANTANDER'),
('SUCRE'),
('TOLIMA'),
('VALLE DEL CAUCA'),
('VAUPÉS'),
('VICHADA');


-- insert de la ciudades
insert into ciudad(ciudad,idDepartamento)
values
('EL ENCANTO',1),
('LA CHORRERA',1),
('LA PEDRERA',1),
('LETICIA',1),
('MIRITÍ-PARANÁ',1),
('PUERTO NARIÑO',1),
('PUERTO SANTANDER',1),
('TARAPACÁ',1),
('AMAZONAS',1),
('LA CIUDAD DE CARO',1)
;
