create database hw1;

create table users(
    id integer primary key auto_increment,
    nome varchar(50) not null,
    cognome varchar(50) not null,
    username varchar(50) not null unique,
    email varchar(50) not null unique,
    password varchar(255) not null
);

CREATE table photo(
    id integer,
    photosrc VARCHAR(255) unique
);