create table `jobs`
(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(254) NOT NULL,
    `company` varchar(254) NOT NULL,
    `years_worked` int(11) NOT NULL,
    `description` varchar(254) NOT NULL,
    primary key (`id`)
)

insert into jobs (title, company, years_worked, description) values ('Office Administrator', 'Brentwood School District', 1, 'A state government job in which I was trusted to handle tasks of data entry, paper distribution, and budget maintenence.');
insert into jobs (title, company, years_worked, description) values ('Game Official', 'West Islip Little League', 1, 'Officiated youth baseball games, which involved maintaining a safe environment for the youth athletes and facilitating a fair match between two teams.');