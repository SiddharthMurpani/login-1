-- noinspection SqlDialectInspectionForFile

use YOUR DATABASE HERE;

INSERT INTO user(email,password) VALUES ('user01@myemail.com','12345');
INSERT INTO user(email,password) VALUES ('user02@myemail.com','12345');
INSERT INTO user(email,password) VALUES ('user03@myNEWemail.com','54321');

INSERT INTO usergroup(name,description) VALUES ('member','This is default group for members. Able to access the site, and see private content, but not able to see admin functions.');
INSERT INTO usergroup(name,description) VALUES ('administrator','This is the group for administrators.');
INSERT INTO usergroup(name,description) VALUES ('banned','This is default group for people who have been banned.');



