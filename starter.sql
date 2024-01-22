CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(100) NOT NULL UNIQUE,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `account_type` BOOLEAN NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;