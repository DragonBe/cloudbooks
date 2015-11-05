DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `book_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `book_title` VARCHAR(150) NOT NULL,
  `book_isbn` CHAR(13) NULL,
  `book_abstract` TEXT NULL,
  `publisher_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`book_id`),
  UNIQUE KEY `book_isbn_uk` (`book_isbn`)
) ENGINE=InnoDb CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

DROP TABLE IF EXISTS `publisher`;
CREATE TABLE `publisher` (
  `publisher_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `publisher_name` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`publisher_id`)
) ENGINE=InnoDb CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';