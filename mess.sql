--创建数据库
create database mes charset=utf8;
use mes;
--创建留言信息表
create table mes_infoo(
id int primary key auto_increment,
title varchar(20) not null comment'标题',
content text not null comment '内容',
addtime varchar(20) not null comment'添加时间'
)charset=utf8;

--创建用户表
create table admin(
id int auto_increment,
user_name varchar(20) not null,
pass_word varchar(20) not null,
primary key(id)
)charset=utf8;

--管理员
insert into admin
	values
	(default,'root','azhang');
	<?php

	?>