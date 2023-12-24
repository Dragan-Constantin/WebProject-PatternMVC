DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) DEFAULT NULL,
    `price` DECIMAL(10,2) DEFAULT NULL,
    `description` VARCHAR(255) DEFAULT NULL,
    `image_path` VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `product_id` INT NOT NULL,
    `firstname` VARCHAR(100),
    `lastname` VARCHAR(100),
    `email` VARCHAR(50),
    `message` VARCHAR(255),
    PRIMARY KEY(`id`),
    FOREIGN KEY(`product_id`)
    REFERENCES `products`(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image_path`) VALUES
    (1, 'BikeFirst', '399.90', 'Affordable electric bike with a powerful motor and sleek design.', 'images/bike1.png'),
    (2, 'BikeOne', '899.99', 'Premium electric bike with a powerful motor and sleek design.', 'images/bike2.png'),
    (3, 'Bike22', '2993.00', 'Top-of-the-line electric bike with a powerful motor and sleek design.', 'images/bike3.png'),
    (4, 'Bike5', '699.99', 'Affordable electric bike with a powerful motor and sleek design.', 'images/bike4.png');
COMMIT;