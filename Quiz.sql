---------------------------------------------- Database: `Quiz`

-- Table `admin`

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- data for table `admin`

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- Table for `answer`

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--  data for table `answer`

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('1', '1'),
('2', '2'),
('3', '3'),
('4', '4');

----table for feedback

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('0', 'Quiz', 'quiz10@gmail.com', 'testing', 'good', '2015-06-19', '09:22:15pm'),
('1', 'App', 'app10@gmail.com', 'feedback', ';test', '2015-06-20', '05:28:16am');


-- Table for `history`

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--  data for table `history`

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `correct`, `wrong`, `date`) VALUES
('suryaprasadtripathy8@gmail.com', '5b141b8009cf0', 22, 10, 8, 2, '2018-06-03 16:56:00'),
('pinky@gmail.com', '5b141b8009cf0', 30, 10, 10, 0, '2018-06-03 16:57:45'),
('priyanka@gmail.com', '5b141b8009cf0', 22, 10, 8, 2, '2018-06-03 16:59:06'),
('suryaprasadtripathy8@gmail.com', '5b141f1e8399e', 26, 10, 9, 1, '2018-06-03 17:17:26'),
('janobe@gmail.com', '5b141b8009cf0', 10, 10, 5, 5, '2021-02-23 11:41:03');


CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- data for table `options`

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('1', 'sdb', '1'),
('2', 'jsdb', '2'),
('3', 'dsbv', '3'),
('4', 'jbdv', '4');

-- Table  for `questions`

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- data for table `questions`

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('0', '0', 'dbjb', 4, 1),
('2', '2', 'dvsd', 4, 1),
('3', '3', 'What does PHP stand for?', 4, 1),
('5', '5', 'Who is the father of PHP?', 4, 2),
('6', '6', 'PHP files have a default file extension of.', 4, 3);

-- Table for `quiz`

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--  data for table `quiz`

INSERT INTO `quiz` (`eid`, `title`, `correct`, `wrong`, `total`, `date`) VALUES
('0', 'Php & Mysqli', 3, 1, 10, '2018-06-03 16:46:56'),
('1', 'Ip Networking', 3, 1, 10, '2018-06-03 17:02:22'),
('2', 'Janobe Sourcecode', 3, 3, 34, '2021-02-25 10:36:35');

-- Table for `rank`

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- data for table `rank`

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('pinky@gmail.com', 30, '2018-06-03 16:57:45'),
('priyanka@gmail.com', 22, '2018-06-03 16:59:06'),
('janobe@gmail.com', 10, '2021-02-23 11:41:03');

-- Table for `user`

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- data for table `user`

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('Quiz App', 'janobe@gmail.com', 'jan'),

-- Indexes for table `admin`

ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

-- Indexes for table `user`

ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

-- AUTO_INCREMENT for table `admin`

ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
