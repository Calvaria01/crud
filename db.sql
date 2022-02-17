CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb3


INSERT INTO `users` (`id`, `name`, `last_name`, `pos`) VALUES
(1, 'Иван', 'Иванов', 'Менеджер'),
(2, 'Петр', 'Петров', 'Сисадмин'),
(3, 'Сара', 'Конор', 'Бухгалтер'),
(4, 'Федор', 'Федоров', 'Архитектор'),
(5, 'Алексей', 'Алексеев', 'Оператор'),
(6, 'Марина', 'Маринина', 'Менеджер'),
(7, 'Михаил', 'Михайлов', 'Директор'),
(8, 'Владислав', 'Валдаев', 'Водитель'),
(9, 'Валентина', 'Иванова', 'Художник'),
(10, 'Владислав', 'Валдаев', 'Водитель');
