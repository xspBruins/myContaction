create database if not exists 527Bar;
use 527Bar;
--管理员表
drop table if exists bar_admin;
create table bar_admin(
id tinyint unsigned auto_increment key,
username varchar(20) not null unique,
password char(32) not null,
email varchar(50) not null,
adalbumPath varchar(50),
info text
);

--帖子发表
drop table if exists bar_topic;
create table bar_topic(
id int unsigned auto_increment key,
tName varchar(50) not null unique,
tAuthor varchar(20),
--帖子主题
tTop text,
--具体内容
tDesc text,
--帖子图片
tImg varchar(50) not null,
tubTime int unsigned not null,
isShow tinyint(1) default 1,
isHot tinyint(1) default 0
);

--用户表
drop table if exists bar_user;
create table bar_user(
id int unsigned auto_increment key,
username varchar(20) not null unique,
password varchar(32) not null,
email varchar(50) not null,
mobile varchar(20) not null,
regTime varchar(50) not null
);

--网吧介绍表
drop table if exists bar_introduction;
create table bar_introduction(
id int unsigned auto_increment key,
bName varchar(50) not null unique,
bDesc text
);

--网吧相册表
drop table if exists bar_album;
create table bar_album(
id int unsigned auto_increment key,
bId int unsigned not null,
albumPath varchar(50) not null,
--照片主题
phoTop text,
--照片描述
phoDesc text
);

--焦点图相册表
drop table if exists focus_album;
create table focus_album(
id int unsigned auto_increment key,
albumPath varchar(50) not null,
phoTop text,
phoDesc text
);

--食物分类表
drop table if exists bar_cate;
create table bar_cate(
id smallint unsigned auto_increment key,
cName varchar(50) unique
);

--饮品小吃表
drop table if exists bar_eat;
create table bar_eat(
id int unsigned auto_increment key,
eName varchar(50) not null unique,
--普通价格
mPrice decimal(10,2) not null,
--网站价格
iPrice decimal(10,2) not null,
pDesc text,
pImg varchar(50) not null,
isShow tinyint(1) default 1,
isHot tinyint(1) default 0,
--代表哪个分类下的商品
cId smallint unsigned not null
);

--联系我们表
drop table if exists bar_contact;
create table bar_contact(
id int unsigned auto_increment key,
contactName varchar(50) not null,
contactEmail varchar(50) not null,
comment text
);


