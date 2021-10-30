CREATE TABLE tblusers (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(100) NOT NULL,
    lastname varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    phonenumber varchar(100) NOT NULL,
    address varchar(100) NOT NULL,
    postingdate varchar(100) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET =  utf8 ;

