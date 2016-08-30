CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(128) NOT NULL,
    surname VARCHAR (128) NOT NULL,
);
INSERT INTO tbl_user (firstname, surname) VALUES ('Иван', 'Иванов');
INSERT INTO tbl_user (firstname, surname) VALUES ('Пётр', 'Петров',);
INSERT INTO tbl_user (firstname, surname) VALUES ('Алексей', 'Сидоров');



CREATE TABLE tbl_contact (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INTEGER NOT NULL,
    email VARCHAR(128) NOT NULL,
    phone VARCHAR (128) NOT NULL
);

INSERT INTO tbl_contact (user_id, email, phone) VALUES (1, 'ivan@yandex.ru', '+79178228888');
INSERT INTO tbl_contact (user_id, email, phone) VALUES (2, 'petr@yandex.ru', '+79278248812');
INSERT INTO tbl_contact (user_id, email, phone) VALUES (3, 'alex@yandex.ru', '+79378227681');
