-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2015 at 09:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gestemploye_stage`
--

-- --------------------------------------------------------

--
-- Table structure for table `conge`
--

CREATE TABLE IF NOT EXISTS `conge` (
  `id_conge` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_conge` int(11) NOT NULL,
  `periode` int(2) NOT NULL,
  `date_debut` date NOT NULL,
  `statute_paiement` varchar(20) NOT NULL,
  `statut` varchar(15) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_conge`),
  KEY `cons1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CIN` int(8) NOT NULL,
  `Matricule` varchar(12) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Skype` varchar(100) NOT NULL,
  `Telephone` int(15) NOT NULL,
  `Num_post` int(3) NOT NULL,
  `id_grade` int(11) NOT NULL,
  `RIB` int(4) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_naissane` date NOT NULL,
  `date_embauche` date NOT NULL,
  `privilege` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`,`login`),
  UNIQUE KEY `login` (`login`),
  KEY `id_grade` (`id_grade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id`, `CIN`, `Matricule`, `Nom`, `Prenom`, `Adresse`, `sexe`, `Mail`, `Skype`, `Telephone`, `Num_post`, `id_grade`, `RIB`, `login`, `password`, `date_naissane`, `date_embauche`, `privilege`) VALUES
(4, 14017045, '21', 'smith', 'jack', 'london ', 'homme', 'jacksmith@gmail.com', 'jacksmith123', 213698, 2, 1, 2000, 'smith', 'aze', '1987-07-30', '2010-07-30', 0),
(7, 14213070, '123', 'amri', 'asma', 'sidi bouzid', 'Femme', 'amriasma2016@gmail.com', 'asma', 26368280, 2, 2, 1230, 'asmaamri2016', 'asma', '1992-09-13', '2015-08-15', 1),
(8, 14458796, 'ab12', 'ali', 'mohamed', 'Riadh sousse', 'Homme', 'alimohamed@hotmail.fr', 'mohamed ali', 98563214, 5, 3, 900, 'ali', 'mohallah', '1989-08-15', '2014-07-08', NULL),
(9, 14785, 'lkklj', 'azs', 'aze', 'jkn', 'Homme', 'lkkl@jj.lk', 'dgfg', 258, 2, 3, 12547, 'lkj', '789', '0000-00-00', '0000-00-00', NULL),
(11, 12, 'zdsd', 'nn', 'as', 'as', 'Homme', 'jhhb@o.l', 'ds', 145, 2, 3, 125, 'h', 'sdf', '0000-00-00', '0000-00-00', NULL),
(12, 1478523, 's25', 'bouaziz', 'amrou', 'sfax', 'Homme', 'amrou@gmail.com', 'amrou', 20125478, 54, 3, 1245, 'amrou', 'asq', '0000-00-00', '2013-08-05', NULL),
(13, 78945632, 'cdlsd', 'mohamed', 'karim', 'qdhdg', 'Homme', 'karim@gmail.com', 'karim med', 5458322, 547, 3, 1425, 'kak', 'aqc', '1990-12-04', '2011-06-14', NULL),
(14, 78945623, 'kiu41', 'chebbi', 'wafa', 'siliana', 'Femme', 'wafa@hotmail.com', '', 98563214, 54, 5, 1000, 'wafachebbi', 'aqw', '0000-00-00', '0000-00-00', NULL),
(15, 1254, '457ml', 'azs', 'aze', 'hhj', 'Homme', 'poi@jh.fr', '', 15345, 47, 3, 4587, 'oiu', 'jjkh', '0000-00-00', '0000-00-00', NULL),
(16, 47895123, '4785', 'mohi', 'hanen', 'sousse', 'Femme', 'hanen@gmail.com', '', 23698547, 7, 3, 789, 'hanen', '456', '0000-00-00', '0000-00-00', NULL),
(17, 78945632, '4785', 'barhoumi', 'samia', 'tunis', 'Femme', 'samia@gmail.com', '', 23654789, 8, 3, 896, 'samia', 'ssss', '0000-00-00', '0000-00-00', NULL),
(18, 78948956, '458', 'barhoumi', 'alia', 'tunis', 'Femme', 'alia@gmail.com', '', 22568974, 9, 3, 896, 'alia', 'cc', '0000-00-00', '0000-00-00', NULL),
(19, 14569872, 'ou4', 'amri', 'olfa', 'sousse', 'Femme', 'olfa@gmail.com', 'olfa', 87963541, 23, 3, 1445, 'olfa', 'poi', '0000-00-00', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `id_grade` int(11) NOT NULL AUTO_INCREMENT,
  `type_grade` varchar(100) NOT NULL,
  PRIMARY KEY (`id_grade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id_grade`, `type_grade`) VALUES
(1, 'adminestrateur'),
(2, 'responsable'),
(3, 'employe'),
(4, 'directeur'),
(5, 'securtaire');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `id_dest` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `mail_dst` varchar(100) NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pointage`
--

CREATE TABLE IF NOT EXISTS `pointage` (
  `id_pointage` int(11) NOT NULL AUTO_INCREMENT,
  `Date_pointage` datetime NOT NULL,
  `heure_entre` time NOT NULL,
  `heure_sortie` datetime NOT NULL,
  `id` int(11) NOT NULL,
  `Note` varchar(200) NOT NULL,
  `statut_p` varchar(8) NOT NULL,
  PRIMARY KEY (`id_pointage`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type_conge`
--

CREATE TABLE IF NOT EXISTS `type_conge` (
  `id_type_conge` int(11) NOT NULL AUTO_INCREMENT,
  `type_conge` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_type_conge`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `type_conge`
--

INSERT INTO `type_conge` (`id_type_conge`, `type_conge`, `description`) VALUES
(1, 'SICK LEAVE(SL)', '1. 7 days of Sick Leave (SL) in a calendar year.\r\n2. A minimum of half SL can be availed & a maximum of whatever is required or whatever is available, whichever is lesser\r\n3. If SL extends beyond 3 days, it has to be accompanied with a Doctor’s certificate\r\n4. In case adequate number of SL are not available with an employee, he can club EL with it. If EL is also not available, then it will be treated as LOP.\r\n5. Intervening National / Festival / Declared holidays will be counted as part of the leave.\r\n6. Balanced SL remaining unutilized as on 31st December will be carried forward to the next year\r\n7. A total of 30 SL can be accumulated after which it will start lapsing\r\n8. Inability to attend office because of any sickness should be notified to the respective HODs on the same day through phone.\r\n9. Approved leave application should reach the HR department within 3 working days of rejoining.'),
(2, 'EARNED LEAVE (EL)', 'ELIGIBILITY\r\n\r\n   - All permanent staff.\r\n    -EL is calculated for the days worked during the previous calendar year.\r\n\r\nENTITLEMENT\r\n   \r\n- 1 EL for every 20 working days\r\n    -EL will be credited to permanent staff only on completion of one year of service with the company.\r\n    -The days served under probation will be taken into account for EL eligibility.\r\n    -EL can be availed only on prior approval.\r\n    -National / declared / festival / weekly off days can be prefixed and / or suffixed to EL.\r\n    -Intervening National / declared / festival / weekly off days will NOT BE counted as part of the leave.\r\n    -Half day of EL cannot be taken.\r\n    -Balanced EL remaining unutilized as on 31st December can be carried forward.\r\n    -EL can be accumulated for a maximum of 90days.\r\n    -Accumulated EL over and above 90 days can be encashed at the rate of last basic pay drawn on the 31st of March or during final settlement in case of resignation / retirement / termination.\r\n    -At the time of resignation / retirement / termination the balance EL will be encashed at the basic pay rate as on the day of resignation / retirement.\r\n    -Any absence of more than the number of EL sanctioned will be treated as leave without pay, unless given valid reasons to the management.\r\n\r\n\r\n\r\n'),
(3, 'MATERNITY LEAVE (ML)', 'ELIGIBILITY:\r\n-All married female staff\r\n\r\nENTITLEMENT:\r\n\r\n        -84 days of paid Maternity Leave is allowed to females who have to deliver a child\r\n        -A female employee can adjust this leave before and after the delivery of child totaling it to 84 days\r\n        -Before availing this leave, a certificate from the gynaecologist has to be submitted mentioning the expected date of delivery\r\n        -Intervening National / declared / festival / weekly off days will be counted as part of leave\r\n       - If, because of any complication, leave has to be extended, it can be done but will fall under LOP\r\n'),
(4, 'LOSS OF PAY (LOP)', '1. LOP can be applied by an employee when no other leave is available.\r\n2. During the period of LOP, the employee is not entitled for any pay or allowance.\r\n3. A maximum of 3 months of LOP can be availed on the approval of the management.\r\n4. If the employee fails to report to duty on the specified date after the sanctioned LOP, it is deemed that the employee has abandoned his service with the company on his own accord.\r\n5. LOP can be implicated on disciplinary grounds with regard to attendance by the management regardless to the availability of the other types of leave.\r\n6. LOP days will not be taken for EL eligibility.');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nbr_connect` tinyint(1) NOT NULL DEFAULT '0',
  `dates` datetime NOT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `login`, `password`, `nbr_connect`, `dates`, `id`) VALUES
(1, 'asmaamri2016', 'asma', 0, '0000-00-00 00:00:00', 7),
(3, 'smith', 'aze', 0, '0000-00-00 00:00:00', 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `conge`
--
ALTER TABLE `conge`
  ADD CONSTRAINT `conge_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employe` (`id`),
  ADD CONSTRAINT `cons1` FOREIGN KEY (`id`) REFERENCES `employe` (`id`);

--
-- Constraints for table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`id_grade`) REFERENCES `grade` (`id_grade`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employe` (`id`);

--
-- Constraints for table `pointage`
--
ALTER TABLE `pointage`
  ADD CONSTRAINT `pointage_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employe` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
