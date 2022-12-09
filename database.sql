-- The Bakery Database 

--
-- Table structure for table `Customers`
--

CREATE TABLE IF NOT EXISTS `customer` 
(
    `customer_id` int(10) NOT NULL auto_increment,
    `first_name` varchar(255) NOT NULL, 
    `last_name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `phone` varchar(255),
    `address` varchar(255),
    PRIMARY KEY (`customer_id`)
); 

--
-- Table structure for table `Login`
--

CREATE TABLE IF NOT EXISTS `login` 
(
    `login_id` int(10) NOT NULL auto_increment,
    `username` varchar(255) NOT NULL, 
    `salt` varchar(10) NOT NULL,
    `password` varchar(255) NOT NULL,  
    `date_joined` varchar(255),
    `date_last_modified` varchar(255),
    `customer_id` int(10) NOT NULL, 
    PRIMARY KEY (`login_id`),
    FOREIGN KEY (`customer_id`) REFERENCES customer(`customer_id`)
);

--
-- Table structure for table `Orders`
--

CREATE TABLE IF NOT EXISTS `orders` 
(
    `order_id` int(10) NOT NULL auto_increment,
    `order_status` varchar(255) NOT NULL, 
    `time_ordered` varchar(255) NOT NULL, 
    `time_received` varchar(255) NOT NULL, 
    `total` numeric(10, 2) NOT NULL, 
    `custom_order` boolean, 
    `customer_id` int(10) NOT NULL, 
    PRIMARY KEY (`order_id`),
    FOREIGN KEY (`customer_id`) REFERENCES customer(`customer_id`) 
);

--
-- Table structure for table `Custom`
--

CREATE TABLE IF NOT EXISTS `custom`
(
    `custom_id` int(10) NOT NULL auto_increment, 
    `stack` int(10) NOT NULL, 
    `top style` varchar(255) NOT NULL, 
    `bottom style` varchar(255) NOT NULL, 
    `top frosting` varchar(255) NOT NULL, 
    `bottom frosting` varchar(255) NOT NULL, 
    `top layer` varchar(255) NOT NULL, 
    `bottom layer` varchar(255) NOT NULL,
    PRIMARY KEY (`custom_id`)
);

--
-- Table structure for table `CustomOrder`
--

CREATE TABLE IF NOT EXISTS `custom_order` 
(
    `order_id` int(10) NOT NULL, 
    `custom_id` int(10) NOT NULL,
    FOREIGN KEY (`order_id`) REFERENCES orders(`order_id`),
    FOREIGN KEY (`custom_id`) REFERENCES custom(`custom_id`)
);

--
-- Table structure for table `Menu`
--

CREATE TABLE IF NOT EXISTS `menu` 
(
    `menu_id` int(10) NOT NULL auto_increment, 
    `food` varchar(255) NOT NULL, 
    `description` varchar(255),
    `price` numeric(10, 2) NOT NULL,
    `image` varchar(255) NOT NULL,
    PRIMARY KEY (`menu_id`)
);

--
-- Table structure for table `OrderItem`
--

CREATE TABLE IF NOT EXISTS `order_item` 
(
    `order_id` int(10) NOT NULL, 
    `menu_id` int(10) NOT NULL, 
    `quantity` int(10) NOT NULL, 
    `order_details` varchar(255),
    FOREIGN KEY (`order_id`) REFERENCES orders(`order_id`),
    FOREIGN KEY (`menu_id`) REFERENCES menu(`menu_id`)
); 

--
-- Table structure for table `Discount`
--

CREATE TABLE IF NOT EXISTS `discount` 
(
    `discount_id` int(10) NOT NULL auto_increment,
    `discount` varchar(255) NOT NULL,
    `discount_value` numeric(2, 2) NOT NULL,
    `status` varchar(255) NOT NULL,
    PRIMARY KEY (`discount_id`)
);

--
-- Table structure for table `Specials`
--

CREATE TABLE IF NOT EXISTS `specials` 
(
    `specials_id` int(10) NOT NULL auto_increment,
    `menu_id` int(10) NOT NULL,
    `discount_id` int(10),
    PRIMARY KEY (`specials_id`),
    FOREIGN KEY (`menu_id`) REFERENCES menu(`menu_id`),
    FOREIGN KEY (`discount_id`) REFERENCES discount(`discount_id`)
);

--
-- Insert values for the database (Some tables are not used)
--

-- Insert for Menu 

INSERT INTO menu (`food`, `description`, `price`, `image`) VALUES ('Baguette', 'Freshly Baked!', 3.00, 'Menu_Pictures/baguette.jpg');
INSERT INTO menu (`food`, `description`, `price`, `image`) VALUES ('Brioche', 'Freshly Baked!', 2.00, 'Menu_Pictures/brioche.jpg');
INSERT INTO menu (`food`, `description`, `price`, `image`) VALUES ('Chocolate Muffin', 'Freshly Baked!', 2.00, 'Menu_Pictures/muffin.jpg');
INSERT INTO menu (`food`, `description`, `price`, `image`) VALUES ('Cinnamon Rolls', 'Freshly Baked!', 2.00, 'Menu_Pictures/cinnamon.jpg');
INSERT INTO menu (`food`, `description`, `price`, `image`) VALUES ('Croissant', 'Freshly Baked!', 2.50, 'Menu_Pictures/croissant.jpg');
INSERT INTO menu (`food`, `description`, `price`, `image`) VALUES ('Focaccia', 'Freshly Baked!', 4.00, 'Menu_Pictures/focaccia.jpg');
INSERT INTO menu (`food`, `description`, `price`, `image`) VALUES ('Glazed Donut', 'Freshly Baked!', 1.50, 'Menu_Pictures/donut.jpg');
INSERT INTO menu (`food`, `description`, `price`, `image`) VALUES ('Sourdough', 'Freshly Baked!', 5.00, 'Menu_Pictures/sourdough.jpg');
INSERT INTO menu (`food`, `description`, `price`, `image`) VALUES ('White Bread', 'Freshly Baked!', 3.00, 'Menu_Pictures/whitebread.jpg');

-- Insert for Discount 

INSERT INTO discount (`discount`, `discount_value`, `status`) VALUES ('Daily', 0.10, 'Active');
INSERT INTO discount (`discount`, `discount_value`, `status`) VALUES ('Holiday Special Discount', 0.25, 'Not Active');

-- Insert for Specials

INSERT INTO specials (`menu_id`, `discount_id`) VALUES (1, 1);
INSERT INTO specials (`menu_id`, `discount_id`) VALUES (7, 1);
INSERT INTO specials (`menu_id`, `discount_id`) VALUES (4, 1);
INSERT INTO specials (`menu_id`, `discount_id`) VALUES (6, 1);

--- Insert for Login 

INSERT INTO login (`username`, `salt`, `password`, `customer_id`) VALUES ('Bob', 'AYZ2JXUjEU', '7fde3ede339fec5a6e5a87d9ff9e176c', '1');

-- Actual Password: test