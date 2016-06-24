--
-- Database: `maps`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
(17, 'Manchester', 'Manchester', 53.480801, 2.242600),
(16, 'Leeds', 'Leeds', 53.800800, 1.549100),
(15, 'Boston', 'Boston', 52.978901, 0.026600),
(14, 'Normanton', 'Normanton', 53.700901, 1.417100),
(13, 'Belfast', 'Belfast', 54.597301, 5.930100),
(12, 'Cardiff', 'Cardiff', 51.481602, 3.179100),
(11, 'Edinburgh', 'Edinburgh', 55.953300, 3.188300),
(10, 'London', 'London', 51.507401, 0.127800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
