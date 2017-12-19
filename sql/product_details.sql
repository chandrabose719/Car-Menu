CREATE TABLE `product_details` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_cost`) VALUES
('01', 'case_of_holmes', '1500'),
('02', 'the_pirate_hunt', '1500'),
('03', 'adventure_of_wonderland', '1500'),
('04', 'mystery_of_egypt', '1400'),
('05', 'infection', '1400'),
('06', 'shadow_play', '1400');