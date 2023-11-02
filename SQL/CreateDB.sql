CREATE TABLE `Studenten` (
    `StudentID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `Naam` varchar(255),
    `Adres` varchar(255),
    `TelefoonNr` varchar(255),
    `Email` varchar(255),
    `Wachtwoord` varchar(255),
    `IsAdmin` BOOLEAN,
    `IsActief` BOOLEAN
);

CREATE TABLE `Vakken` (
    `VakID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `Naam` VARCHAR(255)
);

CREATE TABLE `Lessen` (
    `LesID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `Naam` VARCHAR(255),
    `Beschrijving` VARCHAR(255),
    `VakID` INT,
    `BeginDatum` DATE,
    `EindDatum` DATE,
    FOREIGN KEY (`VakID`) REFERENCES `Vakken`(`VakID`)
);

CREATE TABLE `Cijfers` (
    `CijferID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `Cijfer` DECIMAL(10, 2),
    `StudentID` INT,
    `VakID` INT,
    FOREIGN KEY (`StudentID`) REFERENCES `Studenten`(`StudentID`),
    FOREIGN KEY (`VakID`) REFERENCES `Vakken`(`VakID`)
);

CREATE TABLE `LessenStudenten` (
    `LessenStudentenID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `StudentID` INT,
    `LesID` INT,
    FOREIGN KEY (`StudentID`) REFERENCES `Studenten`(`StudentID`),
    FOREIGN KEY (`LesID`) REFERENCES `Lessen`(`LesID`)
);
