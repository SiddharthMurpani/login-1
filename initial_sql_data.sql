-- noinspection SqlDialectInspectionForFile

use bill;

INSERT INTO user(email,password) VALUES ('bill@mackenty.org','12345');
INSERT INTO user(email,password) VALUES ('bmackenty@aswarsaw.org','12345');
INSERT INTO user(email,password) VALUES ('bmackenty@gmail.com','54321');

INSERT INTO usergroup(name,description) VALUES ('member','This is default group for members. Able to access the site, and see private content, but not able to see admin functions.');
INSERT INTO usergroup(name,description) VALUES ('administrator','This is the group for administrators.');
INSERT INTO usergroup(name,description) VALUES ('banned','This is default group for people who have been banned.');



