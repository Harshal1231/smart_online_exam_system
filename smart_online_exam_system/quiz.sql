-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 10:37 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_mono` varchar(10) NOT NULL,
  `a_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_mono`, `a_password`) VALUES
(1, 'umesh', '1236547890', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `m_id` int(11) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `out_of_marks` int(11) NOT NULL,
  `obtain_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`m_id`, `s_id`, `out_of_marks`, `obtain_marks`) VALUES
(116, '1700180212', 12, 5),
(117, '1700180161', 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `paper_config`
--

CREATE TABLE `paper_config` (
  `A` int(11) NOT NULL,
  `R` int(11) NOT NULL,
  `U` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `time` float NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper_config`
--

INSERT INTO `paper_config` (`A`, `R`, `U`, `subject_name`, `time`, `marks`) VALUES
(4, 4, 4, 'java', 600, 12);

-- --------------------------------------------------------

--
-- Table structure for table `quetion_answer`
--

CREATE TABLE `quetion_answer` (
  `q_id` int(10) NOT NULL,
  `q_description` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `ans` text NOT NULL,
  `q_level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quetion_answer`
--

INSERT INTO `quetion_answer` (`q_id`, `q_description`, `a`, `b`, `c`, `d`, `ans`, `q_level`) VALUES
(1, 'Name the two segments of engineering sector.', 'heavy and light', 'civil and mechanical', 'electronics and telecommunication', 'None of above', 'heavy and light', 'A'),
(2, 'Different types of Process Industry', 'General', 'Chemical', 'Heat', 'All of above', 'All of above', 'A'),
(3, 'Assigning each group according to the similar activities to be performed, to manager with the necessary authority to supervise them is called ____________.', 'Planning', 'Organizing', 'Controlling', 'Decision making', 'Organizing', 'A'),
(4, 'Out of the following options given below, which does not implies to equity?', 'Equal wages', 'Dignity', 'Fair', 'Good work culture', 'Equal wages', 'A'),
(5, 'GATT was superseded by WTO in', '1994', '1998', '2000', '2005', '1994', 'A'),
(6, 'The success of any project depends upon-', 'Planning', 'Organizing', 'Directing', 'All of the Above', 'Planning', 'A'),
(7, 'Planning Means', 'Thinking before doing', 'Thinking after doing', 'Thinking during doing', 'All of the Above', 'Thinking before doing', 'A'),
(8, 'Which is the Smart technique that allows everybody to do the job as per their Skills or Specialization.', 'Division of work', 'Authority & Responsibility', 'Discipline', 'All of the Above', 'Division of work', 'A'),
(9, 'The two types of trade are ___________________ and ____________________.', 'direct, indirect', 'bilateral, multilateral', 'internal, external', 'local, global', 'bilateral, multilateral', 'A'),
(10, 'Textile industry does not produce ______________.', 'polythene', 'cotton', 'wool', 'jute', 'polythene', 'A'),
(11, 'Business is the process of providing platform to the people to exhibit their ________________ and _______________ skills.', 'technical, economical', 'thinking, mental', 'technical, managerial', 'All of above', 'technical, managerial', 'A'),
(12, '\"Administration is concerned with the determination or planning of corporate policy whereas management is concerned with the execution or implementation of policy witihin the limits set\" is stated by _____________________.', 'Oliver Sheldon', 'Henry Fayol', 'F. W. Taylor', 'Peter Drucker', 'Oliver Sheldon', 'A'),
(13, 'Remuneration of personnel is the principle based on ______________________ principles.', 'F.W. Taylor', 'Henry Fayol', 'Peter Drucker', 'Mary Follet', 'Henry Fayol', 'A'),
(14, 'Organizing facilitates _______________________.', 'effective management', 'delegation of authority', 'performance of employees', 'All of above', 'All of above', 'A'),
(15, 'The objectives of planning is to ________________.', 'increase productivity', 'decrease overload of work', 'maintain standards', 'increase productivity, decrease overload of work and maintain standards', 'increase productivity, decrease overload of work and maintain standards', 'A'),
(16, 'First nationalisation of 14 banks happened in', '1969', '1976', '1950', '1991', '1969', 'A'),
(17, 'Following is not the chemical industry', 'Polymer', 'Petrochemical', 'Paints', 'Sugar', 'Sugar', 'A'),
(18, 'To start with enthusiasm is called as', 'Initiative', 'Dynamism', 'Leadership', 'Management', 'Initiative', 'A'),
(19, 'Employees get energized due to', 'Controlling', 'Planning', 'Motivation', 'Decision- making', 'Motivation', 'A'),
(20, 'HDFC Bank is a _____________.', 'Public sector bank', 'Private sector bank', 'Foreign bank', 'Co-operative bank', 'Private sector bank', ''),
(21, 'The assignment of each grouping to a manager with the authority necessary to supervise it\' , is called as ____________ .', 'Controlling', 'Organising', 'Staffing', 'Planning', 'Organising', 'U'),
(22, 'Traders make profit in form of ...............................', 'laons', 'commissions', 'shares', 'None of above', 'commissions', 'U'),
(23, '_________ and ________ bare produced in largest quantity in chemical industry.', 'soda and soap', 'cosmetics and paper', 'polymers and plastics', 'soaps and detergents', 'polymers and plastics', 'U'),
(24, 'Insurance company is categorized as', 'Life Insurance', 'General Insurance', 'All of above', 'None of above', 'All of above', 'U'),
(25, 'Scalar chain is the _____________ , which runs from top level to the lower level in the organization.', 'line of authority', 'plane of authority', 'path of authority', 'authority', 'line of authority', 'U'),
(26, 'SMART stand for _____________________.', 'specific, measurable, achievable, realistic, timely', 'specific, measurable, accountable, realistic, timely', 'specific, moveable, achievable, realistic, timely', 'specific, moveable, accountable, realistic, timely', 'specific, measurable, achievable, realistic, timely', 'U'),
(27, 'Following is the fastest growing sector in india now a days', 'Agriculture', 'Fishing', 'Service', 'Manufacturing', 'Service', 'U'),
(28, 'All export and imports activities are governed by', 'Foreign trade policy', 'fiscal policy', 'global policy', 'trade and business policy', 'Foreign trade policy', 'U'),
(29, 'Following bank is working for agriculture field', 'ICICI', 'Allhabad', 'NABARD', 'AgroB', 'NABARD', 'U'),
(30, 'Food, Water, Shelter are _______________ needs', 'Physiological', 'Esteem', 'Social', 'Safety', 'Physiological', 'U'),
(31, '_________ activites includes communication among the different department which are dependent upon each other', 'controlling', 'movtivating', 'coordinating', 'diecision making', 'coordinating', 'U'),
(32, 'henry fayol proposed _________________ no of principles of management', '10', '20', '14', '30', '14', 'U'),
(33, '_________________ results into better output in terms of work', 'Division of work', 'authority and responsibity', 'discipline', 'all of the above', 'Division of work', 'U'),
(34, 'management functions are as ______________________', 'planning', 'organisaing', 'directing', 'all of the above', 'all of the above', 'U'),
(35, '__________________ is recruitment of right people right place in an organisation', 'planning', 'organising', 'staffing', 'controlling', 'staffing', 'U'),
(36, 'major functions of insurance comapny ____________', 'to provide certianty', 'to provie protection', 'share risk', 'all of the above', 'all of the above', 'U'),
(37, '________________ is backbone of indian economy', 'IT', 'textile', 'banking', '1 and 3', 'banking', 'U'),
(38, '_______ does not belong to Henry Fayol\'s 14 principles of management?', 'Standardisation', 'Scalar chain', 'Authority', 'Discipline', 'Standardisation', 'U'),
(39, 'Who is not a middle level manager?', 'General Manager', 'Production Manager', 'Section head', 'Marketing manager', 'General Manager', 'U'),
(40, 'Which type of industries involve largest investment?', 'Small scale industries', 'Large scale industries', 'Village industries', 'Sugar industries', 'Large scale industries', 'U'),
(41, 'Which one of these is the largest segment in Indian industry?', 'Textile Industry', 'Banking Industry', 'Chemical Industry', 'Engineering Industry', 'Engineering Industry', 'R'),
(42, 'Mechanism that allows trade is called as _________', 'Government', 'Industry', 'Market', 'Finance department', 'Market', 'R'),
(43, 'Globalisation has pose major challenges for', 'Big producers', 'Small producers', 'rural Producers', 'none of above', 'Small producers', 'R'),
(44, 'What is management', 'It is science', 'It is an Art', 'Both (a) and (b) are wrong', 'Both (a) and (b) are correct', 'Both (a) and (b) are correct', 'R'),
(45, 'Work on correct track with correct speed is possiable by ______________.', 'Controlling', 'Directing', 'Organising', 'Planing', 'Controlling', 'R'),
(46, 'Providing correct way of working is', 'Controlling', 'Organising', 'Directing', 'Planning', 'Directing', 'R'),
(47, 'Position, designation, seniority defines _______', 'Scaler chain', 'Initiative', 'Authority', 'Centralization', 'Authority', 'R'),
(48, 'In which type of industry fiber is converted into yarn,then fabric', 'Chemical', 'Health care', 'Process', 'Textiles', 'Textiles', 'R'),
(49, 'Which statement is wrong?', 'Proper planning helps in motivating', 'Planning reduces risk', 'Planning is thinking after failures', 'Planning improves the processes', 'Planning is thinking after failures', 'R'),
(50, 'The base of success of any project of an organization is its', 'Planning', 'Organizing', 'Directing', 'all of above', 'Planning', 'R'),
(51, 'The blend of kindness and justice in an organization is _______________', 'Equity', 'Scalar chain', 'order', 'unity of command', 'Equity', 'R'),
(52, '__________ is important not only for the individuals but also for an organization too.', 'Division of work', 'Authority', 'Discipline', 'all of above', 'Discipline', 'R'),
(53, '______________ has allowed companies to increase their base of operation', 'Liberalization', 'Globalization', 'Privatization', 'all of above', 'Globalization', 'R'),
(54, '14 Principles of Management is contributed by', 'Henry Fayol', 'F W taylor', 'P F ducker', 'H Koontz', 'Henry Fayol', 'R'),
(55, 'The segment which is known as economy\'s goods producing segment', 'trading sector', 'allied sector', 'industrial sector', 'business sector', 'industrial sector', 'R'),
(56, 'Service industry is _________ Sector in Economy', 'Primary', 'Secondary', 'Basic', 'Tertiary', 'Tertiary', 'R'),
(57, 'when many functions are controlled by a central Authority, It is called as __________.', 'Authority', 'Management', 'Discipline', 'Centralisation', 'Centralisation', 'R'),
(58, 'Which is not the technique for effecting decision making in core company', 'Linear Programme', 'Simulation', 'Out sourcing', 'Dynamic Programming', 'Out sourcing', 'R'),
(59, 'Following is not a agro industry', 'Sugar', 'Poultry', 'Paper', 'Jute', 'Paper', 'R'),
(60, 'The quality of product made for Liberalization and Globalization', 'ISO-2001', 'ISO-2000', 'ISO-9010', 'ISO-9000', 'ISO-9000', 'R');

-- --------------------------------------------------------

--
-- Table structure for table `q_temp`
--

CREATE TABLE `q_temp` (
  `q_tid` int(11) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `q_id` int(11) NOT NULL,
  `c_ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q_temp`
--

INSERT INTO `q_temp` (`q_tid`, `s_id`, `q_id`, `c_ans`) VALUES
(2586, '1700180212', 14, 'performance of employees'),
(2587, '1700180212', 17, 'Paints'),
(2588, '1700180212', 6, 'Directing'),
(2589, '1700180212', 4, 'Fair'),
(2590, '1700180212', 59, 'Poultry'),
(2591, '1700180212', 47, 'Authority'),
(2592, '1700180212', 49, 'Planning is thinking after failures'),
(2593, '1700180212', 41, 'Banking Industry'),
(2594, '1700180212', 27, 'Service'),
(2595, '1700180212', 25, 'plane of authority'),
(2596, '1700180212', 32, '14'),
(2597, '1700180212', 35, 'staffing'),
(2598, '1700180161', 10, 'polythene'),
(2599, '1700180161', 7, 'Thinking after doing'),
(2600, '1700180161', 2, ''),
(2601, '1700180161', 3, 'Organizing'),
(2602, '1700180161', 55, 'business sector'),
(2603, '1700180161', 54, 'F W taylor'),
(2604, '1700180161', 59, 'Paper'),
(2605, '1700180161', 57, 'Management'),
(2606, '1700180161', 30, 'Physiological'),
(2607, '1700180161', 38, 'Scalar chain'),
(2608, '1700180161', 25, 'authority'),
(2609, '1700180161', 21, 'Organising');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` varchar(10) NOT NULL,
  `s_name` text NOT NULL,
  `s_mo_no` varchar(10) NOT NULL,
  `s_clg_name` text NOT NULL,
  `s_present_status` varchar(1) NOT NULL DEFAULT 'A',
  `s_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_mo_no`, `s_clg_name`, `s_present_status`, `s_password`) VALUES
('1700180158', 'Tejas Mandora', '9890188969', 'GPJ', 'A', '1700180158'),
('1700180159', 'Patil Mayur', '8329529438', 'GPJ', 'A', '1700180159'),
('1700180160', 'Narkhede Ajinkya', '8208183251', 'GPJ', 'L', '1700180160'),
('1700180161', 'Chaudhari Umesh', '8669794604', 'GPJ', 'C', '1700180161'),
('1700180163', 'Tayde Rajshri ', '9579058205', 'GPJ', 'A', '1700180163'),
('1700180169', 'Randhir Gauri', '7057040269', 'GPJ', 'A', '1700180169'),
('1700180172', 'Narkhede Prerana', '7773930001', 'GPJ', 'A', '1700180172'),
('1700180173', 'Patil Ashwini', '9657201323', 'GPJ', 'A', '1700180173'),
('1700180175', 'Badgujar Pratiksha', '9561956918', 'GPJ', 'A', '1700180175'),
('1700180176', 'Bagul Vaishnavi', '7796499040', 'GPJ', 'A', '1700180176'),
('1700180177', 'Bhoi Vijaya', '9922520533', 'GPJ', 'A', '1700180177'),
('1700180178', 'Kolte Bharati', '9284789970', 'GPJ', 'A', '1700180178'),
('1700180179', 'Ingale Durgesh', '9403385762', 'GPJ', 'A', '1700180179'),
('1700180182', 'Rathod Priyanka', '7875419235', 'GPJ', 'A', '1700180182'),
('1700180183', 'Bhirud Nikita', '9527662256', 'GPJ', 'A', '1700180183'),
('1700180186', 'Behere Yadnyali', '7709401078', 'GPJ', 'A', '1700180186'),
('1700180187', 'Badgujar Janhavi', '9579443150', 'GPJ', 'A', '1700180187'),
('1700180189', 'Chaudhari Hetal', '7709966369', 'GPJ', 'A', '1700180189'),
('1700180191', 'Patil Disha', '9511775550', 'GPJ', 'A', '1700180191'),
('1700180192', 'Lambole Vaibhavi', '9834504079', 'GPJ', 'A', '1700180192'),
('1700180193', 'Chaudhari Chaitali', '8805830616', 'GPJ', 'A', '1700180193'),
('1700180194', 'Patil Komal', '9028123960', 'GPJ', 'A', '1700180194'),
('1700180195', 'Chaudhari Shraddha', '7796311039', 'GPJ', 'A', '1700180195'),
('1700180197', 'Dandage Durgesh', '7038323908', 'GPJ', 'A', '1700180197'),
('1700180199', 'Jagtap Akshay', '9130850349', 'GPJ', 'A', '1700180199'),
('1700180201', 'Chavan  Rahul', '7262954089', 'GPJ', 'A', '1700180201'),
('1700180203', 'Yadav Arya', '8007967627', 'GPJ', 'A', '1700180203'),
('1700180204', 'Harne Jagruti', '9359224374', 'GPJ', 'A', '1700180204'),
('1700180205', 'Bhamare Shubham', '9834536323', 'GPJ', 'A', '1700180205'),
('1700180208', 'Patil Pooja', '9423490665', 'GPJ', 'A', '1700180208'),
('1700180209', 'Shastri Manasi', '7218476936', 'GPJ', 'A', '1700180209'),
('1700180210', 'Patil Pallavi', '9552256533', 'GPJ', 'A', '1700180210'),
('1700180212', 'Patil Bhavesh', '8623040462', 'GPJ', 'C', '1700180212'),
('1700180214', 'Koli Harshal', '9421139988', 'GPJ', 'P', '1700180214'),
('1700180219', 'Patil Vaishnavi', '8329174421', 'GPJ', 'A', '1700180219'),
('1800180603', 'Jadhav Krushnali', '7744924275', 'GPJ', 'A', '1800180603');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- Indexes for table `quetion_answer`
--
ALTER TABLE `quetion_answer`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_temp`
--
ALTER TABLE `q_temp`
  ADD PRIMARY KEY (`q_tid`),
  ADD KEY `q_tq` (`q_id`),
  ADD KEY `tq_s` (`s_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `quetion_answer`
--
ALTER TABLE `quetion_answer`
  MODIFY `q_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;

--
-- AUTO_INCREMENT for table `q_temp`
--
ALTER TABLE `q_temp`
  MODIFY `q_tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2610;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `q_temp`
--
ALTER TABLE `q_temp`
  ADD CONSTRAINT `q_tq` FOREIGN KEY (`q_id`) REFERENCES `quetion_answer` (`q_id`),
  ADD CONSTRAINT `tq_s` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
