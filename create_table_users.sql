CREATE TABLE `users` (
 `_id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(255) NOT NULL,
 `password` text NOT NULL,
 `email` text NOT NULL,
 PRIMARY KEY (`_id`),
 UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1