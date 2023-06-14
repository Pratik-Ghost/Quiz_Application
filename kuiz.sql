------------------------------------------------------- Database name: `Kuiz`

--table `questions`

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `qno` int(11) NOT NULL,
  `question` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `correct_answer` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- data for table `questions`

INSERT INTO `questions` (`qid`, `qno`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_answer`) 
VALUES (6, 1, 'What does PHP stand for?', 'Personal Hypertext Processor\r\n', 'Private Home Page', 'Personal Home Page', 'Hypertext Preprocessor', 'd'),
(7, 2, 'How do you write "Hello World" in PHP?', 'echo "Hello World";', 'Document.Write("Hello World");', '"Hello World";', 'none of these', 'a'),

-- table `users`

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `played_on` varchar(225) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--data for table `users`

INSERT INTO `users` (`id`,`name`, `email`, `password`, `played_on`, `score`) VALUES
(1, 'Pravin','xtha@gmail.com',3456 ,'2017-07-31 06:52:45', 8),
(2, 'Admin','admin@gmail.com',12345 ,'2017-07-31 05:01:43', 0),
(3, 'Ram','Ram@gmail.com',12390, '2017-07-31 06:35:35', 6),
(4, 'sandy','Sandy@gmail.com',123490, '2017-07-31 06:53:37', 5),
(5, 'Hello','hello@gmail.com',13490, '2017-07-31 06:58:18', 5);

-- table `admin`

CREATE TABLE `admin` (
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
);

--data for table `admin`

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com','adminpass123'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;