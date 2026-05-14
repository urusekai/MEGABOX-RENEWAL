CREATE TABLE `members` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(12) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(10) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`num`),
  UNIQUE KEY `members_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
