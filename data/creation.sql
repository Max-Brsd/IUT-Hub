create table users (
	idUser INTEGER NOT NULL,
	name varchar(100),
	lastname varchar(100),
	primary key("idUser")
);

create table account (
	id INTEGER NOT NULL,
	email varchar(100),
	password varchar(255),
	idUser1 INTEGER,	
	idUser2 INTEGER,
	idUser3 INTEGER,
	idUser4 INTEGER,
	idUser5 INTEGER,	
	primary key ("id"),
	foreign key ("idUser1") references users("idUser"),
	foreign key ("idUser2") references users("idUser"),
	foreign key ("idUser3") references users("idUser"),
	foreign key ("idUser4") references users("idUser"),
	foreign key ("idUser5") references users("idUser")
);

create table movies (
	idMovie INTEGER NOT NULL,
	title varchar(255),
	description text,
	movieUrl varchar(255),
	primary key ("idMovie")
);