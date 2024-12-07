CREATE DATABASE tintuc;
USE tintuc;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255),
    role INT -- 0: Người dùng khách, 1: Quản trị viên
);

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

CREATE TABLE news (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    content TEXT,
    image VARCHAR(255),
    created_at DATETIME,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);


INSERT INTO categories (name) VALUES ('Công nghệ');
INSERT INTO categories (name) VALUES ('Thể thao');
INSERT INTO categories (name) VALUES ('Giải trí');
INSERT INTO categories (name) VALUES ('Kinh tế');
INSERT INTO categories (name) VALUES ('Sức khỏe');


INSERT INTO news (title, content, created_at, category_id) 
VALUES ('Bài viết 1 về Công nghệ', 'Nội dung bài viết 1 về công nghệ.', NOW(), 1);

INSERT INTO news (title, content, created_at, category_id) 
VALUES ('Bài viết 2 về Thể thao', 'Nội dung bài viết 2 về thể thao.', NOW(), 2);

INSERT INTO news (title, content, created_at, category_id) 
VALUES ('Bài viết 3 về Giải trí', 'Nội dung bài viết 3 về giải trí.', NOW(), 3);

INSERT INTO news (title, content, created_at, category_id) 
VALUES ('Bài viết 4 về Kinh tế', 'Nội dung bài viết 4 về kinh tế.', NOW(), 4);

INSERT INTO news (title, content, created_at, category_id) 
VALUES ('Bài viết 5 về Sức khỏe', 'Nội dung bài viết 5 về sức khỏe.', NOW(), 5);


INSERT INTO users (username, password, role) VALUES ('admin', '123456', 1);  -- Quản trị viên
INSERT INTO users (username, password, role) VALUES ('user1', 'password1', 0); -- Người dùng
INSERT INTO users (username, password, role) VALUES ('user2', 'password2', 0); -- Người dùng
INSERT INTO users (username, password, role) VALUES ('user3', 'password3', 0); -- Người dùng
INSERT INTO users (username, password, role) VALUES ('user4', 'password4', 0); -- Người dùng
