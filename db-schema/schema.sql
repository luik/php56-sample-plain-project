create schema Demo;

create table user
(
	id int auto_increment,
	name varchar(100) null,
	surname varchar(100) null,
	doc_id int not null,
	constraint user_pk
		primary key (id)
);

create unique index user_doc_id_uindex
	on user (doc_id);

create table purchase
(
	id int auto_increment,
	item_code int not null,
	price int not null,
	user_id int not null,
	constraint purchase_pk
		primary key (id)
);

