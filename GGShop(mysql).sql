CREATE TABLE Brand(
IdBrand varchar(2) not null auto_increment,
	PRIMARY KEY (IdBrand),
NamaBrand varchar (50) not null,
Tentang text null
);


CREATE TABLE Kategori(
IdKategori varchar(2) NOT null,
	PRIMARY KEY (IdKategori),
NamaKategori varchar(50) not null
);

CREATE TABLE Produk(
IdProduk varchar(2) not null auto_increment,
	PRIMARY KEY (IdProduk),
IdBrand varchar(2) not null,
	FOREIGN KEY (IdBrand) REFERENCES Brand(IdBrand),
IdKategori varchar(2) not null,
	FOREIGN KEY(IdKategori) REFERENCES Kategori(IdKategori),
NamaProduk varchar(60) not null,
Harga int not null,
Deskripsi text null,
Foto varchar(50) null
);

CREATE TABLE Feedback(
IdFeedback int not null auto_increment,
	PRIMARY KEY (IdFeedback),
Name varchar(50) not null,
Email varchar(50) not null,
Phone int not null,
Message text not null
);


CREATE TABLE admin(
username varchar(60) not null,
password varchar(15) not null
);


INSERT INTO `kategori`(`IdKategori`, `NamaKategori`) VALUES (1,'Mouse');
INSERT INTO `kategori`(`IdKategori`, `NamaKategori`) VALUES (2,'Keyboard');
INSERT INTO `kategori`(`IdKategori`, `NamaKategori`) VALUES (3,'Headset');
INSERT INTO `kategori`(`IdKategori`, `NamaKategori`) VALUES (4,'Controller');

INSERT INTO `brand`(`IdBrand`, `NamaBrand`) VALUES (1,'SteelSeries');
INSERT INTO `brand`(`IdBrand`, `NamaBrand`) VALUES (2,'Razer');
INSERT INTO `brand`(`IdBrand`, `NamaBrand`) VALUES (3,'Logitech');

INSERT INTO `admin`(`username`, `password`) VALUES ('admin','admin');

INSERT INTO `feedback`(`Name`, `Email`, `Phone`, `Message`) VALUES ('Paijo', 'paijo@paijo.com', 089089089089, 'Bagus produknya, lengkap dengan garansi yang gampang diklaim' )

