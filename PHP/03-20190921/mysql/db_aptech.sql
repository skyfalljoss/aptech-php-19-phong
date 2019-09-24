create database aptech_php_19;
create table Phong (
	id int auto_increment ,
    name varchar(255),
    birthday datetime,
    address varchar(255),
    primary key (id)
);

create table BoMon (
	id int auto_increment ,
    maMon varchar(255),
	tenMon varchar(255),
    primary key (id),
    FOREIGN KEY(maMon) REFERENCES Phong(id)
);

DROP DATABASE aptech_php_19;

DROP TABLE PHONG;

ALTER TABLE PHONG 
ADD email varchar(255);

INSERT INTO  Phong (name, birthday,address) values ('PHONG', '26/07/1999','Da NANG'),
('PHONG2', '27/07/1999','Da NANG'),
('PHONG3', '28/08/2000','Da NANG');

SELECT * From Phong where id=1;

UPDATE Customers
SET name = 'PhongU'
WHERE CustomerID = 2;



