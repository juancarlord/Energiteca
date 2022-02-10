CREATE DATABASE IF NOT EXISTS energiteca;

USE energiteca;

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

CREATE TABLE inboundCall (
    idCall INT NOT NULL AUTO_INCREMENT, 
    callDate DATE NOT NULL,
    idCallTypification INT NOT NULL,
    idCampaign INT NOT NULL, 
    saleChannel VARCHAR(45) NOT NULL,
    representativeName VARCHAR(55) NOT NULL,
    PRIMARY KEY (idCall),
    FOREIGN KEY (idCallTypification) REFERENCES callTypification(idCallTypification),
    FOREIGN KEY (idCampaign) REFERENCES campaign(idCampaign)
);

CREATE TABLE sale (
    idSale INT NOT NULL AUTO_INCREMENT,
    quantity INT NOT NULL,
    price DECIMAL NOT NULL,
    grandTotal DECIMAL NOT NULL,
    idproductReference INT NOT NULL,
    idCall INT NOT NULL,
    idPayment INT NOT NULL,
    PRIMARY KEY (idSale),
    FOREIGN KEY (idproductReference) REFERENCES productReference(idproductReference),
    FOREIGN KEY (idCall) REFERENCES inboundCall(idCall),
    FOREIGN KEY (idPayment) REFERENCES payment(idPayment)
);