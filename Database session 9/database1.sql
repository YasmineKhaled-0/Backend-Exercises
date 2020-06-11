create database college;
use college;
create table students (
    id int(11) primary key,
    password varchar(30) not null,
    name varchar(30) not null,
    email varchar(30) not null,
    courses varchar(30)not null
)

use college;
create table Professor (
    id int(11) primary key,
    password varchar(30)not null,
    name varchar(30)not null,
    email varchar(30)not null,
    courses_id varchar(10) not null
)
ALTER table students add grades varchar not null default'U';
use college;
create table courses(
    id varchar(11) primary key,
    name varchar(30) not null
)