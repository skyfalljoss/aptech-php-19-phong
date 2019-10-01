create database aptech_php_19;
create table Phong(
	id int auto_increment ,
    name varchar(255),
    birthday datetime,
    address varchar(255),
    primary key (id)
);

create table BoMon (
	id int auto_increment ,
    maMon int,
	tenMon varchar(255),
    primary key (id),
    FOREIGN KEY(maMon) REFERENCES Phong(id)
);
DROP DATABASE aptech_php_19;

DROP TABLE PHONG;

ALTER TABLE PHONG 
ADD email varchar(255);

INSERT INTO  Phong (name, birthday,address) values ('PHONG', '1999/07/26','Da NANG'),
('PHONG2', '1999/06/28','Da NANG'),
('PHONG3', '2000/07/26','Da NANG');


ALTER TABLE phong
MODIFY COLUMN birthday date;

UPDATE phong
SET birthday = '2000/08/26'
WHERE id = 5 OR id=6;

SELECT * From Phong where 1;

create table users (
	id int auto_increment,
    email varchar(255),
    password varchar(255),
    primary key (id),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

insert into users ( email, password) values
('skyfall@gmail.com','123456'),
('skyfall1@gmail.com','123456'),
('skyfall2@gmail.com','123456'),
('skyfall3@gmail.com','123456'),
('skyfall4@gmail.com','123456'),
('skyfall5@gmail.com','123456'),
('skyfall6@gmail.com','123456');

SELECT * From users where id<4;



