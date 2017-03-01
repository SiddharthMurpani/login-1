CREATE TABLE `user` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
  `email` TEXT NOT NULL,
  `password` TEXT NOT NULL
);

CREATE TABLE `usergroup` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `description` TEXT NOT NULL
);

CREATE TABLE `userorganization` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `country` TEXT NOT NULL
);

CREATE TABLE `membership` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
  `user_group` INTEGER NOT NULL,
  `user` INTEGER NOT NULL
);


ALTER TABLE `membership` ADD CONSTRAINT `fk_userrole__user` FOREIGN KEY (`user`) REFERENCES `user` (`id`);
ALTER TABLE `membership` ADD CONSTRAINT `fk_userrole__user_group` FOREIGN KEY (`user_group`) REFERENCES `usergroup` (`id`);
