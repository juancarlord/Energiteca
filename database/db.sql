CREATE TABLE product (
    idproduct INT NOT NULL AUTO_INCREMENT,
    productName VARCHAR(45) NOT NULL,
    PRIMARY KEY (idproduct)
);

CREATE TABLE productBrand (
    idproductBrand INT NOT NULL AUTO_INCREMENT,
    brandName VARCHAR(45) NOT NULL,
    idproduct INT NOT NULL,
    PRIMARY KEY (idproductBrand),
    FOREIGN KEY (idproduct) REFERENCES product(idproduct)
);

CREATE TABLE productReference (
    idproductReference INT NOT NULL AUTO_INCREMENT,
    referenceName VARCHAR(100) NOT NULL,
    idproductBrand INT NOT NULL,
    PRIMARY KEY (idproductReference),
    FOREIGN KEY (idproductBrand) REFERENCES productBrand(idproductBrand)
);

CREATE TABLE city (
    idCity INT NOT NULL AUTO_INCREMENT,
    cityName VARCHAR(55) NOT NULL,
    PRIMARY KEY (idCity)
);

CREATE TABLE branch (
    idBranch INT NOT NULL AUTO_INCREMENT,
    branchName VARCHAR(45) NOT NULL,
    branchIdentifier VARCHAR(4) NOT NULL,
    branchEmail VARCHAR(45) NOT NULL,
    idCity INT NOT NULL,
    PRIMARY KEY (idBranch),
    FOREIGN KEY (idCity) REFERENCES city(idCity)
);

CREATE TABLE payment ( 
    idPayment INT NOT NULL AUTO_INCREMENT,
    paymentType VARCHAR(45) NOT NULL,
    PRIMARY KEY (idPayment)
);

CREATE TABLE vehicle (
    idVehicle INT NOT NULL AUTO_INCREMENT,
    vehicleType VARCHAR(45) NOT NULL,
    PRIMARY KEY (idVehicle)
);

CREATE TABLE vehicleBrand (
    idvehicleBrand INT NOT NULL AUTO_INCREMENT,
    vehicleBrandName VARCHAR(55) NOT NULL,
    idVehicle INT NOT NULL,
    PRIMARY KEY (idvehicleBrand),
    FOREIGN KEY (idVehicle) REFERENCES vehicle(idVehicle)
);

CREATE TABLE vehicleReference (
    idvehicleReference INT NOT NULL AUTO_INCREMENT,
    vehicleReferenceName VARCHAR(55) NOT NULL,
    idvehicleBrand INT NOT NULL,
    PRIMARY KEY (idvehicleReference),
    FOREIGN KEY (idvehicleBrand) REFERENCES vehicleBrand(idvehicleBrand)
);

CREATE TABLE callTypification (
    idCallTypification INT NOT NULL AUTO_INCREMENT,
    callType VARCHAR(55) NOT NULL,
    PRIMARY KEY (idCallTypification)
);

CREATE TABLE campaign (
    idCampaign INT NOT NULL AUTO_INCREMENT,
    campaignName VARCHAR(55) NOT NULL,
    PRIMARY KEY (idCampaign)
);

CREATE TABLE customer (
    idCustomer INT NOT NULL AUTO_INCREMENT,
    idType VARCHAR(45) NOT NULL,
    idNumber VARCHAR(45) NOT NULL,
    customerName VARCHAR(55) NOT NULL,
    customerType VARCHAR(55) NOT NULL,
    marketingChannel VARCHAR(55) NOT NULL,
    customerAddress VARCHAR(100) NOT NULL,
    customerZone VARCHAR(55) NOT NULL,
    customerCellphone VARCHAR(15) NOT NULL,
    customerDetails VARCHAR(15),
    customerEmail VARCHAR(55) NOT NULL,
    creationDate DATE NOT NULL,
    PRIMARY KEY (idCustomer)
);

CREATE TABLE customerSale (
    idCustomerSale INT NOT NULL AUTO_INCREMENT,
    claveDeVenta INT NOT NULL,
    saleDate DATE NOT NULL,
    saleChannel VARCHAR(45),
    vehiclePlates VARCHAR(15),
    complies TINYINT NOT NULL,
    comments TEXT,
    total DECIMAL NOT NULL,
    representative VARCHAR(45),
    idPayment INT NOT NULL,
    idBranch INT NOT NULL,
    idVehicle INT NOT NULL,
    idCampaign INT,
    idCallTypification INT NOT NULL,
    idCustomer INT NOT NULL,
    ventaAnulada VARCHAR(5),
    aTiempo VARCHAR(2),
    motivoNoEntrega TEXT,
    horaEntrega VARCHAR(255),
    estadoFinal INT(2),
    motivoCancelacion VARCHAR(255),
    otroMotivo VARCHAR(255),
    fechaAnulacion VARCHAR(30),
    disposition VARCHAR(50),
    service VARCHAR(50),
    PRIMARY KEY (idCustomerSale),
    FOREIGN KEY (idPayment) REFERENCES payment(idPayment),
    FOREIGN KEY (idBranch) REFERENCES branch(idBranch),
    FOREIGN KEY (idVehicle) REFERENCES vehicleReference(idvehicleReference),
    FOREIGN KEY (idCampaign) REFERENCES campaign(idCampaign),
    FOREIGN KEY (idCallTypification) REFERENCES callTypification(idCallTypification),FOREIGN KEY (idCustomer) REFERENCES customer(idCustomer)
);

CREATE TABLE customerProduct (
    idCustomerProduct INT NOT NULL AUTO_INCREMENT,
    idProduct INT NOT NULL,
    idCustomerSale INT NOT NULL,
    price DECIMAL NOT NULL,
    quantity INT NOT NULL,
    PRIMARY KEY (idCustomerProduct),
    FOREIGN KEY (idProduct) REFERENCES productReference(idproductReference),
    FOREIGN KEY (idCustomerSale) REFERENCES customerSale(idCustomerSale)
);

CREATE TABLE departamentos (
    idDepartamento INT NOT NULL AUTO_INCREMENT,
    Departamento VARCHAR(255) NOT NULL, 
    codigo INT NOT NULL,
    PRIMARY KEY (idDepartamento)
);
CREATE TABLE municipios (
    idMunicipio INT NOT NULL AUTO_INCREMENT,
    departamentoID INT NOT NULL,
    codigo INT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    PRIMARY KEY(idMunicipio),
    FOREIGN KEY(departamentoID) REFERENCES departamentos(idDepartamento)
);