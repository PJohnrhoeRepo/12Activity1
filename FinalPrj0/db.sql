create database finaldb;

use finaldb;

CREATE TABLE `userinfodtable` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL, 
  `gender` varchar(100) NOT NULL,
  `strand` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);
