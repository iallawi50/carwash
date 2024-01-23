CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(100) NOT NULL UNIQUE,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `account_type` BOOLEAN NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `carwash`.`washes` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL , `description` TEXT NOT NULL , `location` TEXT NOT NULL , `user_id` INT NOT NULL ) ENGINE = InnoDB;

CREATE TABLE `carwash`.`services` (`id` INT NOT NULL AUTO_INCREMENT , `title` TEXT NOT NULL , `price` INT NOT NULL , `wash_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `carwash`.`reservations` (`id` INT NOT NULL , `date` DATE NOT NULL , `time` TIME NOT NULL , `status` INT NOT NULL , `wash_id` INT NOT NULL , `user_id` INT NOT NULL ) ENGINE = InnoDB;
