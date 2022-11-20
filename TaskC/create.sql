CREATE DATABASE jstube; 
USE jstube;

create table jstube.USER
(User_id int not null,
User_name varchar(20) not null,
Email varchar(20) not null,
Password varchar(20) not null,
primary key (User_id));

create table jstube.VIDEO
(Video_name varchar(50),
Video_id int not null, 
User_id int not null,
Upload_time date,
Membership_requirement boolean default false,
Link varchar(2083) not null,
primary key (Video_id),
foreign key (User_id) references USER(User_id)
);

Create table jstube.MEMBERSHIP
(User_id int not null,
Level int default 0,
Valid_date date,
Primary key (User_id),
Foreign key (User_id) references USER(User_id)
);

create table jstube.ADMINISTRATOR
(Administrator_id int not null,
Password varchar(20) not null,
Email varchar (20) not null unique,
Primary key (Administrator_id)
);

Create table jstube.CASE
(Case_id int not null primary key,
Administrator_id int default 10001,
Video_id int not null,
Type int not null,
Report_user_id int not null,
Foreign key (Administrator_id) references ADMINISTRATOR(Administrator_id),
Foreign key (Video_id) references VIDEO(Video_id),
Foreign key (Report_user_id) references USER(User_id)
);

Create table jstube.VIEW
(Video_id int not null,
User_id int not null,
Times int default 0,
Foreign key (Video_id) references VIDEO(Video_id),
Foreign key (User_id) references USER(User_id)
);
