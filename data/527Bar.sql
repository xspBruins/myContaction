create database if not exists 527Bar;
use 527Bar;
--����Ա��
drop table if exists bar_admin;
create table bar_admin(
id tinyint unsigned auto_increment key,
username varchar(20) not null unique,
password char(32) not null,
email varchar(50) not null,
adalbumPath varchar(50),
info text
);

--���ӷ���
drop table if exists bar_topic;
create table bar_topic(
id int unsigned auto_increment key,
tName varchar(50) not null unique,
tAuthor varchar(20),
--��������
tTop text,
--��������
tDesc text,
--����ͼƬ
tImg varchar(50) not null,
tubTime int unsigned not null,
isShow tinyint(1) default 1,
isHot tinyint(1) default 0
);

--�û���
drop table if exists bar_user;
create table bar_user(
id int unsigned auto_increment key,
username varchar(20) not null unique,
password varchar(32) not null,
email varchar(50) not null,
mobile varchar(20) not null,
regTime varchar(50) not null
);

--���ɽ��ܱ�
drop table if exists bar_introduction;
create table bar_introduction(
id int unsigned auto_increment key,
bName varchar(50) not null unique,
bDesc text
);

--��������
drop table if exists bar_album;
create table bar_album(
id int unsigned auto_increment key,
bId int unsigned not null,
albumPath varchar(50) not null,
--��Ƭ����
phoTop text,
--��Ƭ����
phoDesc text
);

--����ͼ����
drop table if exists focus_album;
create table focus_album(
id int unsigned auto_increment key,
albumPath varchar(50) not null,
phoTop text,
phoDesc text
);

--ʳ������
drop table if exists bar_cate;
create table bar_cate(
id smallint unsigned auto_increment key,
cName varchar(50) unique
);

--��ƷС�Ա�
drop table if exists bar_eat;
create table bar_eat(
id int unsigned auto_increment key,
eName varchar(50) not null unique,
--��ͨ�۸�
mPrice decimal(10,2) not null,
--��վ�۸�
iPrice decimal(10,2) not null,
pDesc text,
pImg varchar(50) not null,
isShow tinyint(1) default 1,
isHot tinyint(1) default 0,
--�����ĸ������µ���Ʒ
cId smallint unsigned not null
);

--��ϵ���Ǳ�
drop table if exists bar_contact;
create table bar_contact(
id int unsigned auto_increment key,
contactName varchar(50) not null,
contactEmail varchar(50) not null,
comment text
);


