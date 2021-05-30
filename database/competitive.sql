-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 07:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `competitive`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` int(10) NOT NULL,
  `bookName` varchar(100) NOT NULL,
  `bookDescription` varchar(4096) NOT NULL,
  `bookIssueDate` date NOT NULL DEFAULT current_timestamp(),
  `fileName` varchar(100) NOT NULL,
  `last_update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `bookName`, `bookDescription`, `bookIssueDate`, `fileName`, `last_update`) VALUES
(0, 'new book name', 'book for Furious at the ridiculous rules in the afterlife, Tilly risks her own damnation in a search for justice. She sets out on a quest through Heaven and Hell—one that makes her the accidental face of a rebellion and leads her to an ultimate showdown with Lucifer and Death himself.Tilly’s death isn’t going very well. She’s been assigned the last job anyone wants: escorting souls to Hell. Worse, the afterlife is run on an automated system of justice based on arbitrary rules and three-strike punishments, and despite her best intentions, her strikes are running out.\r\n\r\n', '2021-03-25', 'stringart(IMPORTANT).pdf', '2021-03-25'),
(1, 'General English', 'If you are looking for an English practice book for beginners or for those who want to do the second revision of English, this book will be a good choice to go for. The book comprises of over 10,000 questions on words and sentence structure that will make sure that you do not make any mistake in the English section of your exam. It has more than 600 practice exercises that will make you strong in the concepts of English if you practice properly using this book.', '2021-03-23', 'second.pdf', '2021-03-24'),
(2, 'Second Book', 'Become familiar with how other writers within your genre handle the back cover book Tilly’s death isn’t going very well. She’s been assigned the last job anyone wants: escorting souls to Hell. Worse, the afterlife is run on an automated system of justice based on arbitrary rules and three-strike punishments, and despite her best intentions, her strikes are running out.\r\n\r\ndescription. See for yourself how the title, cover illustrations and book description work together, to make the reader want to know what lies within the pages.', '2021-03-24', 'second.pdf', '2021-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `examid` int(10) NOT NULL,
  `examName` varchar(100) NOT NULL,
  `examDescription` varchar(4096) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `categoryPercentage` varchar(100) NOT NULL,
  `availableSheets` int(10) NOT NULL,
  `startDateRegistration` date NOT NULL,
  `endDateRegistration` date NOT NULL,
  `createDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`examid`, `examName`, `examDescription`, `qualification`, `categoryPercentage`, `availableSheets`, `startDateRegistration`, `endDateRegistration`, `createDate`) VALUES
(1, 'STAFF SELECTION COMMISSION', 'Staff Selection Commission conducted Computer Based Examination for Stenographer Grade ‘C’ & ‘D’ - Examination, 2019 from 22.12.2020 to 24.12.2020 at various centers all over the country.2. As the Computer Based Examination was conducted in multiple shifts, marks scored by candidates have been normalized as per the formula published by the Commission on its website on 07.02.2019.\r\n As per the provisions under Para -12 (d) of the Notice of the Examination, normalized marks of the candidates have been used for processing the result to qualify the candidates for the next stage of Examination (i.e. Skill Test).3.\r\n Based on the performance of the candidates in the Computer Based Examination, 1215 candidates have provisionally qualified for appearing in the Skill Test for the post of Stenographer Grade ‘C’ and 7792 candidates have provisionally qualified for appearing in the Skill Test for the post of Stenographer Grade ‘D’.', 'Higher secondary', '(SC, ST, ETC : 20%) (GENERAL, OBC : 25%)', 582, '2020-03-27', '2020-05-09', '2021-03-22'),
(2, 'STAF SELECTION COMMITION', 'As the Computer Based Examination was conducted in multiple shifts, marks scored \r\nby candidates have been normalized as per the formula published by the Commission on its \r\nwebsite on 07.02.2019. As per the provisions under Para -12 (d) of the Notice of the \r\nExamination, normalized marks of the candidates have been used for processing the result \r\nto qualify the candidates for the next stage of Examination (i.e. Skill Test). \r\n3. Based on the performance of the candidates in the Computer Based Examination, \r\n1215 candidates have provisionally qualified for appearing in the Skill Test for the post of \r\nStenographer Grade ‘C’ and 7792 candidates have provisionally qualified for appearing in \r\nthe Skill Test for the post of Stenographer Grade ‘D’.', 'Higher Secondary', '(SC, ST, ETC : 15%) (GENERAL, OBC : 35%)', 4562, '2021-03-27', '2021-04-21', '2021-03-22'),
(3, 'CONSTABLE', 'As the Computer Based Examination was conducted in multiple shifts, marks scored \r\nby candidates have been normalized as per the formula published by the Commission on its \r\nwebsite on 07.02.2019. As per the provisions under Para -12 (d) of the Notice of the \r\nExamination, normalized marks of the candidates have been used for processing the result \r\nto qualify the candidates for the next stage of Examination (i.e. Skill Test). \r\n3. Based on the performance of the candidates in the Computer Based Examination, \r\n1215 candidates have provisionally qualified for appearing in the Skill Test for the post of \r\nStenographer Grade ‘C’ and 7792 candidates have provisionally qualified for appearing in \r\nthe Skill Test for the post of Stenographer Grade ‘D’.', 'graduate', '(SC, ST, ETC : 40%) (GENERAL, OBC : 15%)', 7521, '2021-03-24', '2021-04-28', '2021-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqId` int(10) NOT NULL,
  `question` varchar(512) NOT NULL,
  `answer` varchar(8192) NOT NULL,
  `qDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faqId`, `question`, `answer`, `qDate`) VALUES
(1, 'What is the procedure for one time Registration?', 'For one time registration, click on ‘Register Now’ link provided in login section. Meticulously follow the instructions given in the Registration webpage.\r\n', '2021-03-26'),
(2, 'Is Registration mandatory for applying to the examinations of the Commission?', 'Yes, One-Time Registration with the Commission is a mandatory prerequisite. On completion of One-Time Registration, candidates can apply online for any examination of the Commission. ', '2021-03-27'),
(3, 'I did not receive registration number and password on the email.', 'You may check the ‘Spam’ folder in your e-mail. If email is not received even in the Spam folder, it is likely that you have entered wrong email-id. You may contact Helpline of the concerned Regional Office through a call or email.', '2021-03-27'),
(4, 'How to reprint my offline bank challan?', 'Login using your ‘Login Id’ and ‘Password’ in the login section of the website. Click on the ‘Download Offline Challan\'.', '2021-03-27'),
(5, 'I am unable to upload my photo and signature while applying for one time Registration.', 'Check format of photograph and signature files. Scanned color passport size photograph should be in JPEG formate or pnd formate ', '2021-03-27'),
(7, 'How many vacancies are there for a particular SSC Exam?', 'The tentative vacancies of various examinations as reported by the User Ministries/ Departments concerned are available on the website of the Commission under the heading of “Candidates Corner”. Vacancy status for different examinations is updated from time to time.', '2021-03-27'),
(8, 'What are the provisions for reservation of SC, ST, OBC etc. and Persons with Disabilities/ Divyangjan candidates?', 'The number of Vacancies reserved for various Categories are decided by the User Departments and the Commission has no role in the matter. The Commission makes recruitment only on the basis of vacancies intimated by the various User Departments.', '2021-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `register_exam`
--

CREATE TABLE `register_exam` (
  `reId` int(10) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `eQualification` varchar(100) NOT NULL,
  `userid` int(10) NOT NULL,
  `registerExamDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_exam`
--

INSERT INTO `register_exam` (`reId`, `exam_name`, `eQualification`, `userid`, `registerExamDate`) VALUES
(1, 'STAFF SELECTION COMMISSION', 'graduate', 1, '2021-03-28'),
(2, 'STAFF SELECTION COMMISSION', '', 1, '2021-03-28'),
(3, 'STAFF SELECTION COMMISSION', '', 1, '2021-03-28'),
(4, 'STAFF SELECTION COMMISSION', 'graduate', 1, '2021-03-28'),
(5, 'STAFF SELECTION COMMISSION', 'graduate', 1, '2021-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `examboard` varchar(100) NOT NULL,
  `passingyear` int(10) NOT NULL,
  `rollno` int(25) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(512) NOT NULL,
  `adharcard` bigint(20) NOT NULL,
  `loginid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `imagefile` varchar(256) NOT NULL,
  `signfile` varchar(256) NOT NULL,
  `status` varchar(10) NOT NULL,
  `lastupdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `fathername`, `mothername`, `birthdate`, `gender`, `state`, `city`, `examboard`, `passingyear`, `rollno`, `qualification`, `email`, `phone`, `address`, `adharcard`, `loginid`, `password`, `imagefile`, `signfile`, `status`, `lastupdate`) VALUES
(1, 'Gajendra', 'mahendrabhai', 'chetnaben', '1992-10-10', 'Male', 'Rajasthan', 'JAIPUR', 'central board of secondary education (CBSE)', 2008, 684214, 'graduate', 'shalin@gmail.com', 9852146370, 'Building name:Makarand,Jawahar Circle, Jaipur, Rajasthan 302015', 785412369520, '512256512', '10241024', 'footer.png', 'footer.png', 'married', '2021-03-22'),
(4, 'sima', 'mukeshbhai', 'pravinaben', '1996-12-25', 'Female', 'Gujrat', 'RAJKOT', 'Gujrat secondary and higher secondary board', 2011, 845125, 'graduate', 'megha2@gmail.com', 7531489620, 'Rudra Apartment, Blockno.13, Ring Road, Rjkot 360001', 456321078912, '789456456', '12312300', 'footer.png', 'footer.png', 'single', '2021-03-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqId`);

--
-- Indexes for table `register_exam`
--
ALTER TABLE `register_exam`
  ADD PRIMARY KEY (`reId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `examid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register_exam`
--
ALTER TABLE `register_exam`
  MODIFY `reId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
