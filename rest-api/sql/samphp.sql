CREATE DATABASE IF NOT EXISTS php CHARACTER SET utf8 COLLATE utf8_general_ci;
/*---------dbprefix-----------*/

CREATE TABLE IF NOT EXISTS categories(
 	category_id INT(11) AUTO_INCREMENT NOT NULL,
    CONSTRAINT pk_category_id PRIMARY KEY (category_id),
    name varchar(256) NOT NULL,
  description text NOT NULL,
  created datetime NOT NULL,
  modified timestamp NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*--------products-----------*/

CREATE TABLE IF NOT EXISTS products(
    id int(11) NOT NULL,
  name varchar(32) NOT NULL,
  description text NOT NULL,
  price decimal(10,0) NOT NULL,
  category_id INT(4) NOT NULL,
    CONSTRAINT fk_category_id_products FOREIGN KEY (category_id) REFERENCES categories(category_id) ON UPDATE CASCADE,
  created datetime NOT NULL,
  modified timestamp NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;