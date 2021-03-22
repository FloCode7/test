<?php

// Db connexion

require 'connectDb.php';

// Creat users table

$pdo->exec("CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username VARCHAR(255) NOT NULL,
    password CHAR(255),
    slug VARCHAR(255) NOT NULL,
    ft_image VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    role ENUM ('Author','Admin','Subscriber') NULL DEFAULT 'Subscriber',
    created_at TIMESTAMP NULL DEFAULT CURRENT _TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'Tables : USERS, ';

?>