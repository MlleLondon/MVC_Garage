drop database if exists garage_250;
create database garage_250;
use garage_250;

create table client(
    idclient int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(50),
    tel varchar(50),
    primary key (idclient) 
);

create table technicien(
    idtechnicien int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    qualification varchar(50),
    email varchar(50),
    mdp varchar(50),
    primary key (idtechnicien) 
);

create table vehicule(
    idvehicule int(3) not null auto_increment,
    matricule varchar(20),
    marque varchar(30),
    nbkm int(8),
    energie varchar(30),
    idclient int(3) not null,
    primary key (idvehicule),
    foreign key (idclient) references client(idclient) 
);

create table intervention(
    idintervention int(3) not null auto_increment,
    description text,
    dateinter date,
    prix float,
    idtechnicien int(3) not null,
    idvehicule int(3) not null,
    primary key (idintervention),
    foreign key (idtechnicien) references technicien(idtechnicien),
    foreign key (idvehicule) references vehicule(idvehicule)
);
