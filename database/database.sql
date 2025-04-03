create database crm;
use crm;

create table users
(
    id         int primary key auto_increment,
    name       varchar(100)            not null,
    email      varchar(100)            not null unique,
    phone      varchar(20)             not null,
    area       varchar(200),
    password   varchar(100)            not null,
    role       enum ('admin','booker') not null default 'booker',
    created_at TIMESTAMP                        DEFAULT CURRENT_TIMESTAMP
)