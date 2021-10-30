CREATE DATABASE phppdo CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE testpdo (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(100) NOT NULL,
    lastname varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    contact varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET =  utf8 ;