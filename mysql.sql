create table message(
id int primary key auto_increment,
title varchar(20) not null,
content varchar(200) not null,
addtime datetime not null
)charset utf8;


create table admin(
id int primary key auto_increment,
user_name varchar(20),
pass_word varchar(20) 
)charset utf8;

insert into admin
(user_name,pass_word)
values
('root','azhang');

