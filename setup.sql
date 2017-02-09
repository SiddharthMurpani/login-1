/* this is the setup file for MySQL */

CREATE TABLE IF NOT EXISTS USERS (
  id INT PRIMARY KEY AUTO_INCREMENT,
  email TEXT,
  password TEXT
);

