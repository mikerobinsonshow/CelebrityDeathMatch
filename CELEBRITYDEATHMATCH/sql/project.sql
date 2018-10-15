
create table Actors(
	actorId int NOT NULL AUTO_INCREMENT,
	firstName VARCHAR(255) NOT NULL,
	lastName VARCHAR(255) NOT NULL,
	imagePath VARCHAR(255),
	onScreenKills INT,
	onScreenDeaths INT,
	PRIMARY KEY (actorId)
);


Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Arnold','Schwarzenegger','images/Arnold_Schwarzenegger.jpg', 369 ,5);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Chow', 'Yun-Fat' , 'images/Chow_Yun-Fat.jpg', 295 ,23);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Sylvester',  'Stallone' ,'images/Sylvester_Stallone.jpg' ,267 ,12);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Dolph', 'Lundgren' , 'images/Dolph_Lundgren.jpg', 239 ,10);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Tomisaburo', 'Wakayama' , 'images/Tomisaburo_Wakayama.jpg', 226 ,5);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Clint',  'EastWood' , 'images/Clint_Eastwood.jpg',207 ,7);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Nicholas', 'Cage' , 'images/Nicholas_Cage.jpg', 204 ,7);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Jet', 'Li' , 'images/Jet_Li.jpg', 201 ,2);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Clive',  'Owen' , 'images/Clive_Owen.jpg', 194 ,12);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Wesley', 'Snipes', 'images/Wesley_Snipes.jpg', 193 ,14);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Jason', 'Statham' , 'images/Jason_Statham.jpg', 182 ,8);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Christian', 'Bale' , 'images/Christian_Bale.jpg', 161 ,10);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Will', 'Smith' , 'images/Will_Smith.jpg', 158 ,3);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Bruce', 'Willis' , 'images/Bruce_Willis.jpg', 157 ,15);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Ray', 'Stevenson' , 'images/Ray_Stevenson.jpg', 149 ,17);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Mel', 'Gibson' , 'images/Mel_Gibson.jpg', 148 ,23);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Steven', 'Seagal' , 'images/Steven_Seagal.jpg', 146 ,13);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Charlie', 'Sheen' , 'images/Charlie_Sheen.jpg', 131 ,21);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('James', 'Coburn' , 'images/James_Coburn.jpg', 106 ,22);
Insert into Actors (firstName, lastName, imagePath, onScreenKills, onScreenDeaths) values ('Michael', 'Clarke Duncan' , 'images/Michael_ClarkeDuncan.jpg', 105 ,9);



create TABLE ActorStats(
	statsId int NOT NULL AUTO_INCREMENT,
	actorId int not null,
	name VARCHAR(255),
	wins int,
	deaths int,
	PRIMARY KEY (statsId),
	FOREIGN KEY (actorId) REFERENCES Actors(actorId) 
);

Insert into actorstats (actorId, name, wins, deaths) values (1, 'Arnold Schwarzenegger',0,0);
Insert into actorstats (actorId, name, wins, deaths) values (2, 'Chow  Yun-Fat',0,0);
Insert into actorstats (actorId, name, wins, deaths) values (3, 'Sylvester Stallone' ,0,0);
Insert into actorstats (actorId, name, wins, deaths) values (4, 'Dolph  Lundgren' ,0,0);
Insert into actorstats (actorId, name, wins, deaths) values (5, 'Tomisaburo  Wakayama' , 0,0);
Insert into actorstats (actorId, name, wins, deaths) values (6, 'Clint EastWood' ,0,0);
Insert into actorstats (actorId, name, wins, deaths) values (7, 'Nicholas  Cage' ,0,0);
Insert into actorstats (actorId, name, wins, deaths) values (8, 'Jet  Li' ,0,0);
Insert into actorstats (actorId, name, wins, deaths) values (9, 'Clive Owen' ,0, 0);
Insert into actorstats (actorId, name, wins, deaths) values (10, 'Wesley  Snipes',0, 0);
Insert into actorstats (actorId, name, wins, deaths) values (11, 'Jason  Statham' ,0,0);
Insert into actorstats (actorId, name, wins, deaths) values (12, 'Christian  Bale' ,0, 0);
Insert into actorstats (actorId, name, wins, deaths) values (13, 'Will  Smith' ,0,0);
Insert into actorstats (actorId, name, wins, deaths) values (14, 'Bruce  Willis' ,0, 0);
Insert into actorstats (actorId, name, wins, deaths) values (15, 'Ray  Stevenson' ,0, 0);
Insert into actorstats (actorId, name, wins, deaths) values (16, 'Mel  Gibson' ,0, 0);
Insert into actorstats (actorId, name, wins, deaths) values (17, 'Steven  Seagal' ,0, 0);
Insert into actorstats (actorId, name, wins, deaths) values (18, 'Charlie  Sheen' ,0, 0);
Insert into actorstats (actorId, name, wins, deaths) values (19, 'James  Coburn' ,0, 0);
Insert into actorstats (actorId, name, wins, deaths) values (20, 'Michael  Clarke Duncan' ,0,0);

create table CustomerData(
	customerDataId INT NOT NULL AUTO_INCREMENT,
	firstName VARCHAR(255),
	lastName VARCHAR(255),
	city VARCHAR(35),
	state VARCHAR(35),
	passwd VARCHAR(255),
	email VARCHAR(255),
	PRIMARY KEY (customerDataId)
);


INSERT INTO customerData (firstName, lastName, city, state, passwd, email) VALUES ('Yoko', 'Nakano', 'New York', 'NY', 'okyo010', 'tanpopo1187@gmail.com');
INSERT INTO customerData (firstName, lastName, city, state, passwd, email) VALUES ('Mike', 'Robinson', 'Tampa', 'FL', 'eike009','mikerb@aaa.com');
INSERT INTO customerData (firstName, lastName, city, state, passwd, email) VALUES ('Triston', 'Powell', 'Queens', 'NY', 'notsirt008', 'tristonpowell@gmail.com');
INSERT INTO customerData (firstName, lastName, city, state, passwd, email) VALUES ('Mike', 'Gordan', 'Ft. Lauderdale', 'FL', 'ekim007', 'xmichealg@gmail.com');
INSERT INTO customerData (firstName, lastName, city, state, passwd, email) VALUES ('Nirajan', 'Paudel', 'Queens', 'NY', 'najarin006','najarin006@aaa.com');
INSERT INTO customerData (firstName, lastName, city, state, passwd, email) VALUES ('Roxanne', 'Thwaites', 'Bronx', 'NY', 'ennaxor005', 'roxanneC.thwaites@gmail.com');
INSERT INTO customerData (firstName, lastName, city, state, passwd, email) VALUES ('Sarah', 'Hawthorne', 'San Diego', 'CA', 'haras004', 'sarah.hawthorne@gmail.com');
INSERT INTO customerData (firstName, lastName, city, state, passwd, email) VALUES ('Christopher', 'Kennedy', 'Dallas', 'TX', 'rehpotsirhc003', 'chiskennedy@gmail.com');
INSERT INTO customerData (firstName, lastName, city, state, passwd, email) VALUES ('Mary', 'Kellerman', 'Detroit', 'MA', 'yram002', 'marykellerman18@yahoo.com');
INSERT INTO customerData (firstName, lastName, city, state, passwd, email) VALUES ('Bryce', 'Johnson', 'Atlanta', 'Georgia', 'ecyrb001', 'brycejohnson87@aol.com');



create table Transactions(
	transactionsId int NOT NULL AUTO_INCREMENT,
	customerDataId int NOT NULL,
	transactionAmount float(3,2),
	trtime Date,
	PRIMARY KEY (transactionsId),
	FOREIGN KEY (customerDataId) REFERENCES CustomerData(customerDataId)
);
