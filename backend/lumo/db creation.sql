
create table community_name(
	community_id int not null auto_increment primary key,
	community_name varchar(100) not null
);

create table health_official(
	health_official_id int not null auto_increment primary key,
	first_name varchar(20) not null,
	last_name varchar(20) not null,
	availability varchar(20),
	areas_of_expertise varchar(20) not null,
	community_id int,
	foreign key (community_id) references community_name(community_id),
	gender char not null,
	phone_number varchar(20),
	email varchar(100) not null
);

create table groups(
	group_id int not null auto_increment primary key,
	community_id int not null,
	foreign key (community_id) references community_name(community_id),
	description varchar(1000) not null,
	group_name varchar(100) not null
);

create table substance_abuser(
	first_name varchar(20) not null,
	last_name varchar(20) not null,
	substance_using varchar(100),
	phone_number varchar(20),
	mental_health_issue varchar(100),
	community_id int, 
	foreign key (community_id) references community_name(community_id),
	gender varchar(1) not null,
	date_of_birth date not null,
	abuser_id int not null auto_increment primary key,
	group_id int,
	foreign key (group_id) references groups(group_id),
	email varchar(100) not null
);

create table abuser_group(
	group_id int not null,
	foreign key (group_id) references groups(group_id),
	abuser_id int not null,
	foreign key (abuser_id) references substance_abuser(abuser_id)
);

USE [lumohacks]
GO

INSERT INTO [dbo].[community_name]
           ([community_id]
           ,[community_name])
     VALUES
			(100,'kitsilano'),(101,'dunbar'),(1002,'fraserview'),(103,'arbutus'),(104,'langley'),(105,'s. cambie'),(106,'sunset'),(107,'killarney'),(108,'newton'),(109,'hastings'),(110,'strathcona'),(111,'kerrisdale'),(112,'marpole'),(113,'ladner')
GO

--------------------------------------------------------
USE [lumohacks]
GO

INSERT INTO [dbo].[group]
           ([group_id]
           ,[community_id]
           ,[description]
           ,[group_name])
     VALUES
			(151,1002,'come and get help from your local community','fraserview addiction councelling center'),(152,112,'we are ready to help you. Come in today','marpole drug addicts group'),(153,106,'you can change your life with our help','addiction help center'),(154,113,'we can help you get better','mental health support group'),(155,110,'our support will allow you to overcome your addiction','get your life back'),(156,105,'we are ready to help you. Come in today','support center - south cambie'),(157,101,'come and get help from your local community','dunbar community help group'),(158,111,'you can change your life with our help','kerrisdale help center'),(159,109,'we have helped many overcome there addiction','sunshine help center')
			
GO
