CREATE TABLE `cardinfo` (
 `_id` int(11) NOT NULL,
 `userId` int(11) NOT NULL,
 `firstname` text NOT NULL,
 `lastname` text NOT NULL,
 `job` text NOT NULL,
 `skills` text NOT NULL,
 PRIMARY KEY (`_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1