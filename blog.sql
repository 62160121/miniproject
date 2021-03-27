
--ผมไม่มั่นใจนะครับ ผมสร้างแบบไม่ได้ใช้คำสั่ง--
CREATE TABLE authors(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username varchar(45) NOT NULL,
    passwd varchar(45)NOT NULL,
    name varchar(45)NOT NULL,
    penname varchar(45)NOT NULL,
    email varchar(45)NOT NULL

)ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE articles(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title varchar(45) NOT NULL,
    body varchar(45)NOT NULL,
    create_te varchar(45)NOT NULL,
    authors_id int(11) references authors(id),
    publish_sts char(1)NOT NULL

)ENGINE = InnoDB DEFAULT CHARSET=utf8;

/*f the ORDERS table has already been created and the foreign key has not yet been set*/
ALTER TABLE articles
   ADD FOREIGN KEY (authors_id) REFERENCES authors (id);