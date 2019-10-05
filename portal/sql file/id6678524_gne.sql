-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 05:29 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6678524_gne`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `achievement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `achievement_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `achievement`, `achievement_type`, `year`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'National Award', 'achievement', '2018', 'abc', 'abcd', '123', '05/08/20018'),
(2, '', 'award', '2018', 'xyz', 'xyz', '45', '05/08/2018'),
(3, 'fgvhybju', 'cfghh', 'cfgyh', 'cfgvhyu', 'cfgv', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `activities_organized`
--

CREATE TABLE `activities_organized` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major_sponsor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activities_organized`
--

INSERT INTO `activities_organized` (`id`, `title`, `duration_from`, `duration_to`, `major_sponsor`, `level`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'abc', 'july', 'august', 'abc', 'national', 'abc', 'abcd', '123', '05/08/2018'),
(2, 'xyz', 'july', 'aug', 'xyz', 'state', 'xyz', 'xyz', '67', '05/08/2018'),
(3, 'hgvhhjb', 'hgjb', 'fchgvjb', 'cvhbj', 'vhghb', 'cfhvgh', 'fcvhhjb', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `btech_project`
--

CREATE TABLE `btech_project` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `univ_roll_no` int(255) NOT NULL,
  `supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submission_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `btech_project`
--

INSERT INTO `btech_project` (`id`, `student_name`, `univ_roll_no`, `supervisor`, `co_supervisor`, `project_title`, `session`, `current_status`, `submission_date`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'abc', 148, 'abc', 'abc', 'abc', 'august', 'ongoing', '05/08/2018', 'abc', 'abc', '14', '05/08/2018'),
(2, 'xyz', 123, 'xyz', 'xyz', 'xyz', 'dec', 'ongoing', '05/08/2018', 'xyza', 'xyz', '123', '05/08/2018'),
(3, 'gcfhgvjhb', 56, 'xdcfvgbhn', 'xcvbn', 'fgh bjn', 'tfygbhunji', 'cfvgbhnj', 'ytgbuhnij', 'hello !!', 'tcrfvygbuh', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `consultancy`
--

CREATE TABLE `consultancy` (
  `id` int(11) NOT NULL,
  `project_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commencement_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `consultancy`
--

INSERT INTO `consultancy` (`id`, `project_title`, `cost`, `position`, `sponsor`, `commencement_date`, `duration_from`, `duration_to`, `status`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'abc', '20', 'first', 'abc', '05/08/2018', 'july', 'august', 'completed', 'abc', 'abcfgh', '123', '05/08/2018'),
(2, 'xyz', '23', 'second', 'xyz', '05/08/2018', 'july', 'september', 'completed', 'xyz', 'xyz', '34', '05/08/2018'),
(3, 'fvhgbj', '0', 'fcgvhbj', 'fcgvhbj', 'cfgvhbju', 'fcghbj', 'fcgvh', 'fcgvhbj', 'cfgvhbj', 'vhbj', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `extra_work`
--

CREATE TABLE `extra_work` (
  `id` int(11) NOT NULL,
  `team_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assignment_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completion_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `extra_work`
--

INSERT INTO `extra_work` (`id`, `team_name`, `position`, `assignment_date`, `completion_date`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'abc', 'first', '05/08/2018', '30/08/2018', 'abc', 'abcfg', '123', '05/08/2018'),
(2, 'xyz', 'second', '05/08/2018', '20/08/2018', 'xyz', 'xyz', '23', '05/08/2018'),
(4, 'hvghyu', 'hgvhybu', 'hgjb', 'hgj', 'hgvhjb', 'hgvjhb', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `instructional_work`
--

CREATE TABLE `instructional_work` (
  `id` int(11) NOT NULL,
  `semester` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hrs_engaged_pw_l` int(255) NOT NULL,
  `hrs_engaged_pw_t` int(255) NOT NULL,
  `hrs_engaged_pw_p` int(255) NOT NULL,
  `class_strength` int(255) NOT NULL,
  `result_pass_percent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `instructional_work`
--

INSERT INTO `instructional_work` (`id`, `semester`, `course_no`, `title`, `session_from`, `session_to`, `hrs_engaged_pw_l`, `hrs_engaged_pw_t`, `hrs_engaged_pw_p`, `class_strength`, `result_pass_percent`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(6, '7', '7', '7', '7', '7', 7, 77, 7, 7, '7', '7', '7', '7', '7'),
(7, '8', 'vhbnj', 'bhnj', 'vbn', 'bnm', 89, 98, 98, 98, 'vbn', 'bn', 'bn', '14', 'vbnjh'),
(8, '6', 'fcvyguyhi', 'vguhbyij', 'fgvhb', 'gvhbj', 0, 0, 0, 56, 'fgvhb', '', 'fgvhb', 'vghn', ''),
(9, '5', 'cfgvhbj', 'cvghb', 'vghbjn', 'fgvhbj', 0, 0, 0, 4, 'fgvhbj', '', 'cfgvhb', 'fgvhb', ''),
(10, '5', 'tcrfvyg', 'ctfvghb', 'tcfvgyb', 'tvgybh', 0, 0, 0, 65, 'fgvhbn', '', 'cfgvhb', '123', ''),
(12, '4', 'dcfgvbh', 'tcrvybuhn', 'ctfvygbhuy', 'rtygu', 0, 0, 0, 98, 'fcgvhbjn', '', 'fcgvhbj', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `ID` int(11) NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`ID`, `teacher_id`, `teacher_password`, `post`, `add_date`) VALUES
(1, 'admin', 'admin', 'admin', ''),
(2, 'teacher', 'teacher', 'teacher', ''),
(3, 'hod', 'hod', 'hod', '');

-- --------------------------------------------------------

--
-- Table structure for table `mtech_thesis`
--

CREATE TABLE `mtech_thesis` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registeration_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submission_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enrollment_no` int(255) NOT NULL,
  `thesis_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `research_area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `affiliation_to_university` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mtech_thesis`
--

INSERT INTO `mtech_thesis` (`id`, `student_name`, `registeration_date`, `supervisor`, `co_supervisor`, `current_status`, `submission_date`, `enrollment_no`, `thesis_title`, `research_area`, `affiliation_to_university`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'abc', '05/08/2018', 'abc', 'abc', 'completed', '05/08/2018', 56, 'abc', 'abc', 'abc', 'abc', 'abcd', '123', '05/08/2018'),
(2, 'xyz', '05/08/2018', 'xyz', 'xyz', 'completed', '05/08/2018', 34, 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', '67', '05/08/2018');

-- --------------------------------------------------------

--
-- Table structure for table `participation_organized`
--

CREATE TABLE `participation_organized` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `participation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `participation_organized`
--

INSERT INTO `participation_organized` (`id`, `title`, `participation`, `duration_from`, `duration_to`, `institution`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'abc', 'participation', 'july', 'dec', 'abc', 'abcdfgh', 'abcgfh', '123', '05/08/2018'),
(2, 'xyz', 'organized', 'july', 'aug', 'xyz', 'xyz', 'xyz', '45', '05/08/2018'),
(4, 'dxfgchjj', 'fchgvhjbhk', 'fchgvjhk', 'fchgvjhbkj', 'fchgvjbk', 'hgvhjbk', 'hgvjbk', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `highest_qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `joining_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `present_post_held_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experience_within_inst` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `name`, `date_of_birth`, `designation`, `highest_qualification`, `department`, `joining_date`, `present_post_held_from`, `experience_within_inst`, `total_experience`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'abc', '05/08/2018', 'abc', 'abc', 'it', '05/08/2018', '05/08/2018', '2', '4', 'abc', 'abc', '123', '05/08/2018'),
(2, 'xyz', '05/08/2018', 'xyz', 'xyz', 'it', '05/08/2018', '05/08/2018', '4', '5', 'xyz', 'xyz', '67', '05/08/2018');

-- --------------------------------------------------------

--
-- Table structure for table `phd_thesis`
--

CREATE TABLE `phd_thesis` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registeration_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submission_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enrollment_no` int(255) NOT NULL,
  `thesis_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `research_area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `affiliation_to_university` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phd_thesis`
--

INSERT INTO `phd_thesis` (`id`, `student_name`, `registeration_date`, `current_status`, `submission_date`, `enrollment_no`, `thesis_title`, `research_area`, `supervisor`, `co_supervisor`, `affiliation_to_university`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'fyg', 'xdfcgvyh', 'cyvtugyh', 'xfcygtuy', 78, 'gfchvjbu', 'dfcgvhyb', 'dgfchvyh', 'dfcgyuh', 'dfcgv', 'abc', 'cd', '123', '05/08/2018'),
(2, 'xyz', '05/08/2018', 'ongoing', '05/08/2018', 34, 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', '67', '05/08/2018'),
(3, 'fyg', 'xdfcgvyh', 'cyvtugyh', 'xfcygtuy', 78, 'gfchvjbu', 'dfcgvhyb', 'dgfchvyh', 'dfcgyuh', 'dfcgv', '', 'cde', '123', ''),
(4, 'fyg', 'xdfcgvyh', 'cyvtugyh', 'xfcygtuy', 78, 'gfchvjbu', 'dfcgvhyb', 'dgfchvyh', 'dfcgyuh', 'dfcgv', '', 'cd', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `publication_conference`
--

CREATE TABLE `publication_conference` (
  `id` int(11) NOT NULL,
  `first_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `third_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `third_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weblinks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conference_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conference_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publication_conference`
--

INSERT INTO `publication_conference` (`id`, `first_author`, `first_author_affiliation`, `second_author`, `second_author_affiliation`, `third_author`, `third_author_affiliation`, `fourth_author`, `fourth_author_affiliation`, `title`, `level`, `publisher`, `issn`, `isbn`, `pages`, `weblinks`, `doi`, `conference_name`, `conference_place`, `country`, `start_date`, `end_date`, `academic_year`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'abc', 'abc', 'xyz', 'xyz', 'pqr', 'pqr', 'trs', 'trs', 'abc', 'national', 'abc', '23', '56', '100', 'abc', '23', 'abc', 'abc', 'india', '05/08/2018', '05/08/2018', '2018', 'abc', 'abchvgbj', '123', '05/08/2018'),
(2, 'xyz', 'xyz', 'qwe', 'qwe', 'rty', 'rty', 'tyu', 'tyu', 'xyz', 'international', 'xyz', '45', '56', '120', 'xyz', '67', 'xyz', 'xyz', 'canada', '05/08/2018', '05/08/2018', '2015', 'xyz', 'xyz', '34', '05/08/2018'),
(3, 'cfgvhbj', 'tytguyhu', 'tryui', 'dfghjertyu', 'dfghjk', 'fghjk', 'dfghj', 'ertyu', 'rtyui', 'rtyui', 'dfghjk', 'fdghj', 'dfgh', 'dfghu', 'dftyu', 'dfrtyui', 'rttyui', 'cvghj', 'cgvfhj', 'dfghj', 'dfghj', 'cgfhj', 'cvhgj', 'cghj', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `publication_journal`
--

CREATE TABLE `publication_journal` (
  `id` int(11) NOT NULL,
  `first_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `third_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `third_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_author_affiliation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `journal_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `volume` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weblinks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `referred` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `indexing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `impact_factor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publication_journal`
--

INSERT INTO `publication_journal` (`id`, `first_author`, `first_author_affiliation`, `second_author`, `second_author_affiliation`, `third_author`, `third_author_affiliation`, `fourth_author`, `fourth_author_affiliation`, `title`, `level`, `journal_name`, `publisher`, `issn`, `volume`, `issue`, `pages`, `weblinks`, `doi`, `publication_month`, `publication_year`, `referred`, `indexing`, `impact_factor`, `academic_year`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'abc', 'ghh', 'xyz', 'ghh', 'pqr', 'pqr', 'str', 'str', 'abc', 'national', 'abc', 'abc', '45', '56', '56', '100', 'abc', '23', 'august', '2018', 'abc', 'abc', '45', '2018', 'abc', 'abcdf', '123', '05/08/2018'),
(2, 'xyz', 'xyz', 'ads', 'afs', 'ahg', 'ags', 'tyu', 'tyu', 'xyz', 'state', 'xyz', 'xyz', '34', '56', '67', '190', 'xyz', '56', 'december', '2018', 'xyz', 'xyz', '45', '2015', 'xyz', 'xyz', '123', '05/08/2018'),
(3, 'cfgvh', 'cgfvhbj', 'cfgvhbj', 'fcgvhbj', 'cfgvhbj', 'cfgvhbj', 'fcgvhbj', 'cfgvhbj', 'cfghbj', 'cfgvhbj', 'fcgvhbj', 'cgvhbj', 'ghh', 'fgvhbj', 'fcgvhb', 'gfvhbj', 'gvhbj', 'gvh', 'bjfcgv', 'hbfgvhb', 'jcfgvhbj', 'fcgvhbj', 'cvhb', 'hcfgvhbj', 'cgvhbj', 'vghbj', '123', ''),
(4, 'cfhgjb', 'cfghjb', 'cfhgvjhb', 'fchgvjhb', 'hgvjhbjk', 'vgjhbk', 'vgjhbk', 'rtyu', 'fgvhbj', 'dxfcgvhb', 'xdtcfyvgub', 'dtcfyvgbu', '', 'ctfvgy', 'xdcftvg', 'xdrcftvgy', 'dcftvgyb', 'xdtcfgvyhb', 'cftvgyb', 'dxctfvygb', 'xdcftvgy', 'dcftvg', 'ctfvgyb', 'xctfvyg', 'xdcfvgy', 'ctfvgybhuy', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `q`
--

CREATE TABLE `q` (
  `id` int(11) NOT NULL,
  `fac_id` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `qual` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `inst` varchar(255) NOT NULL,
  `uni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q`
--

INSERT INTO `q` (`id`, `fac_id`, `pass`, `qual`, `year`, `inst`, `uni`) VALUES
(0, '123', '123', 'P.H.D. in Computer Science', 2018, 'IIT, Delhi', '24050834 04 Aug 2018 05:26:08pm'),
(14, 'hod', '123', 'Matriculation', 2014, 'New S.M.D Senior Secondary School, Ludhiana', '7187782 04 Aug 2018 06:35:33pm'),
(22, 'admin', '123', 'MTech.', 2020, 'GNDU', '41351302 05 Aug 2018 05:43:15am');

-- --------------------------------------------------------

--
-- Table structure for table `sponsored_projects`
--

CREATE TABLE `sponsored_projects` (
  `id` int(11) NOT NULL,
  `project_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ext_funds_received` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commencement_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sponsored_projects`
--

INSERT INTO `sponsored_projects` (`id`, `project_title`, `ext_funds_received`, `position`, `sponsor`, `commencement_date`, `duration_from`, `duration_to`, `status`, `others`, `remarks`, `fac_id`, `add_date`) VALUES
(1, 'abc', '2566', 'first', 'abc', '05/08/2018', 'july', 'august', 'ongoing', 'abc', 'abc', '56', '05/08/2018'),
(2, 'xyz', '45', 'second', 'xyz', '05/08/2018', 'july', 'dec', 'completed', 'xyz', 'xyzasda', '123', '05/08/2018'),
(5, 'ghbj', 'gvhbj', 'gvhbj', 'cfgvhb', 'fghyju', 'fcghju', 'cfghbj', 'fgchjb', 'cfghj', 'fcgvh', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities_organized`
--
ALTER TABLE `activities_organized`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btech_project`
--
ALTER TABLE `btech_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultancy`
--
ALTER TABLE `consultancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_work`
--
ALTER TABLE `extra_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructional_work`
--
ALTER TABLE `instructional_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `mtech_thesis`
--
ALTER TABLE `mtech_thesis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participation_organized`
--
ALTER TABLE `participation_organized`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phd_thesis`
--
ALTER TABLE `phd_thesis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication_conference`
--
ALTER TABLE `publication_conference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication_journal`
--
ALTER TABLE `publication_journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `q`
--
ALTER TABLE `q`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsored_projects`
--
ALTER TABLE `sponsored_projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `activities_organized`
--
ALTER TABLE `activities_organized`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `btech_project`
--
ALTER TABLE `btech_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `consultancy`
--
ALTER TABLE `consultancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `extra_work`
--
ALTER TABLE `extra_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instructional_work`
--
ALTER TABLE `instructional_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mtech_thesis`
--
ALTER TABLE `mtech_thesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `participation_organized`
--
ALTER TABLE `participation_organized`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phd_thesis`
--
ALTER TABLE `phd_thesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publication_conference`
--
ALTER TABLE `publication_conference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publication_journal`
--
ALTER TABLE `publication_journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `q`
--
ALTER TABLE `q`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sponsored_projects`
--
ALTER TABLE `sponsored_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
