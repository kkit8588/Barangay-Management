-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 07:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'troilussedoguio@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ar_tbl`
--

CREATE TABLE `ar_tbl` (
  `id` int(11) NOT NULL,
  `Surname` text NOT NULL,
  `FirstName` text NOT NULL,
  `MiddleName` text NOT NULL,
  `PlaceofBirth` text NOT NULL,
  `Birthday` text NOT NULL,
  `Age` text NOT NULL,
  `weights` text NOT NULL,
  `Sex` text NOT NULL,
  `CivilStatus` text NOT NULL,
  `Citizenship` text NOT NULL,
  `Religion` text NOT NULL,
  `Occupation` text NOT NULL,
  `EducationAttainment` text NOT NULL,
  `Address` text NOT NULL,
  `HouseNo` text NOT NULL,
  `zsp` text NOT NULL,
  `hm` text NOT NULL,
  `fam_stat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ar_tbl`
--

INSERT INTO `ar_tbl` (`id`, `Surname`, `FirstName`, `MiddleName`, `PlaceofBirth`, `Birthday`, `Age`, `weights`, `Sex`, `CivilStatus`, `Citizenship`, `Religion`, `Occupation`, `EducationAttainment`, `Address`, `HouseNo`, `zsp`, `hm`, `fam_stat`) VALUES
(97, 'Sedoguio', 'Troilus', 'A', 'palawan', '2023-11-29', '0', '', 'Male', '', 'asd', 'asd', 'dasd', 'Not Applicable', 'Dolores, Santa Cruz, Marinduque', 'asd', 'asd', '', ''),
(98, 'jon', 'seds', 'a', 'palawan', '2023-11-29', '0', '', 'Male', 'Married', 'asd', 'christian', 'asd', 'Not Applicable', 'Devilla, Santa Cruz, Marinduque', 'asd', 'asd', '', ''),
(99, 'asd', ' asd ', 'asd', 'palawan', '2023-11-29', '0', '', 'Male', 'Single', 'asd', 'christian', 'freelancer', 'Not Applicable', 'Dolores, Santa Cruz, Marinduque', 'asd', 'langaray street', '', ''),
(100, 'asd', 'asd', 'asd', 'asd', '2023-11-07', '0', '', 'Male', 'Married', 'adad', 'dadad', 'asd', 'Not Applicable', 'Alobo, Santa Cruz, Marinduque', 'adasd', 'sddd', '', ''),
(101, 'asdas', 'dasda', 'dasdsa', 'asd', '2023-11-29', '0', '', 'Male', 'Single', 'asd', 'asd', 'asd', 'Not Applicable', 'Alobo, Santa Cruz, Marinduque', 'asd', 'asd', '', ''),
(102, 'heyhey', 'heyhey', 'heyhey', 'heyhey', '2023-11-29', '0', '', 'Male', 'Single', 'heyhey', 'heyhey', 'heyhey', 'Not Applicable', 'Devilla, Santa Cruz, Marinduque', 'heyhey', 'heyhey', '', ''),
(103, 'Sedoguio', 'Troilus', 'A', 'palawan', '2023-11-29', '0', '', 'Male', 'Single', 'filipino', 'asd', 'asd', 'Elementary Graduate', 'Dolores, Santa Cruz, Marinduque', 'n/a', 'langaray street', '', ''),
(104, 'asd', 'Troilus', 'A', 'palawan', '2023-11-29', '0', '', 'Male', 'Single', 'asd', 'christian', 'freelancer', 'Not Applicable', 'Haguimit, Santa Cruz, Marinduque', 'asd', 'langaray street', '', ''),
(105, 'asd', 'hgf', 'hgf', 'fghd', '2023-11-30', '0', '', 'Male', 'Married', 'ghf', 'gfhg', 'ghfhgfh', 'Not Applicable', 'Dating Bayan, Santa Cruz, Marinduque', '234', 'langaray street', '', ''),
(106, 'asd', 'hgf', 'hgf', 'fghd', '2023-11-30', '', '', 'Male', 'Married', 'ghf', 'gfhg', 'ghfhgfh', 'Not Applicable', 'Dating Bayan, Santa Cruz, Marinduque', '234', 'langaray street', '', ''),
(107, 'Sedoguio', 'Troilus', 'A', 'nghj', '2023-11-30', '0', '', 'Male', 'Married', 'asd', 'ghfhg', 'ghf', 'Not Applicable', 'Devilla, Santa Cruz, Marinduque', '234', 'langaray street', '', ''),
(108, 'Sedoguio', 'Troilus', 'A', 'nghj', '2023-11-30', '', '', 'Male', 'Married', 'asd', 'ghfhg', 'ghf', 'Not Applicable', 'Devilla, Santa Cruz, Marinduque', '234', 'langaray street', '', ''),
(109, 'Sedoguio', 'Troilus', 'asd', '', '2018-03-24', '5', '23', 'Male', '', '', '', '', '', '', '', '', '', ''),
(110, 'Sedoguio', 'Troilus', 'asd', '', '2017-02-24', '6', '22', 'Male', 'Single', '', '', '', '', '', '', '', '', ''),
(111, '', '', 'asd', '', '', '22', '', '', '', '', '', '', '', '', '', '', '', ''),
(112, '', '', '', '', '2019-02-24', '4', '', '', '', '', '', '', '', '', '', '', '', ''),
(113, 'asdd', '', '', '', '2023-12-26', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(114, 'ddd', '', '', '', '2023-12-26', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(115, 'addsdsds', '', '', '', '2018-02-26', '5', '', '', '', '', '', '', '', '', '', '', '', ''),
(116, 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(117, 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(118, 'asdd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(119, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(120, 'asdd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(121, 'asdd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(122, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(124, 'asdd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(125, 'Sedoguio', 'Troilus', 'A', '', '2019-02-26', '4', '10', '', '', '', '', '', '', '', '', '', '', ''),
(126, 'Sedoguio', 'Troilus', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(127, 'asdasd', '', '', '', '1946-10-28', '77', '', '', '', '', '', '', '', '', '', '', '', ''),
(128, 'aasddsa', 'das', '', '', '1958-02-28', '65', '', '', '', '', '', '', '', '', '', '', '', ''),
(129, 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(130, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(131, 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(132, 'asd', 'asd', 'asd', '', '1937-03-28', '86', '', '', '', '', '', '', '', '', '', '', '', ''),
(133, 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(134, 'asddd', 'dddd', 'awwww', '', '1945-06-28', '78', '', 'Female', '', '', '', '', '', '', '', '', '', ''),
(135, 'new', 'new', 'new', '', '1947-06-28', '76', '', 'Male', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_count`
--

CREATE TABLE `brgy_count` (
  `id` int(11) NOT NULL,
  `brgy_name` text NOT NULL,
  `brgy_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brgy_count`
--

INSERT INTO `brgy_count` (`id`, `brgy_name`, `brgy_count`) VALUES
(1, 'Angas, Santa Cruz, Marinduque', 7),
(2, 'Balogo, Santa Cruz, Marinduque', 1),
(3, 'Bagong Silang Pob. (2nd Zone), Santa Cruz, Marinduque', 2),
(5, 'Alobo, Santa Cruz, Marinduque', 3),
(6, 'Taytay, Santa Cruz, Marinduque', 1),
(7, 'Tawiran, Santa Cruz, Marinduque', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dr_tbl`
--

CREATE TABLE `dr_tbl` (
  `id` int(11) NOT NULL,
  `ResidenceName` text NOT NULL,
  `HouseholdMembers` text NOT NULL,
  `Barangay` text NOT NULL,
  `Age` text NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_tbl`
--

INSERT INTO `dr_tbl` (`id`, `ResidenceName`, `HouseholdMembers`, `Barangay`, `Age`, `latitude`, `longitude`) VALUES
(17, 'jethrop', '23', 'Baguidbirin, Santa Cruz, Marinduque', '65', '13.4758', '122.0275'),
(18, 'genggeng', '23', 'Baguidbirin, Santa Cruz, Marinduque', '23', '13.4758', '122.0275'),
(19, 'alexander', '34', 'Angas, Santa Cruz, Marinduque', '23', '13.4368248', '122.1076608'),
(20, 'lapu', '45', 'Bagong Silang Pob. (2nd Zone), Santa Cruz, Marinduque', '23', '13.4758', '122.0275'),
(21, 'asd', '23', 'Bagong Silang Pob. (2nd Zone), Santa Cruz, Marinduque', '23', '13.4758', '122.0275'),
(22, 'john doe', '4', 'Angas, Santa Cruz, Marinduque', '54', '13.4368248', '122.1076608'),
(23, 'troilus', '4', 'Angas, Santa Cruz, Marinduque', '23', '13.4368248', '122.1076608'),
(24, 'troilus sedoguio', '', '', '', '', ''),
(25, 'troilus sedoguio', '', '', '', '', ''),
(26, '', '', 'Angas, Santa Cruz, Marinduque', '', '13.4368248', '122.1076608'),
(27, 'genggeng', '', 'Angas, Santa Cruz, Marinduque', '', '13.4368248', '122.1076608'),
(28, 'troilus sedoguio', '4', 'Alobo, Santa Cruz, Marinduque', '23', '13.4737728', '122.0960201'),
(29, 'troilus sedoguio', '5', 'Alobo, Santa Cruz, Marinduque', '23', '13.4737728', '122.0960201'),
(30, 'asdas', '2', 'Taytay, Santa Cruz, Marinduque', '2', '13.4157126', '122.079974'),
(31, 'john doe', '5', 'Tawiran, Santa Cruz, Marinduque', '3', '13.4157126', '122.079974'),
(32, 'new newen', '4', 'Alobo, Santa Cruz, Marinduque', '45', '13.4737728', '122.0960201');

-- --------------------------------------------------------

--
-- Table structure for table `feed_tbl`
--

CREATE TABLE `feed_tbl` (
  `id` int(11) NOT NULL,
  `ResidentName` text NOT NULL,
  `NutritionProgramme` text NOT NULL DEFAULT 'Malnourished',
  `Sex` text NOT NULL,
  `Age` text NOT NULL,
  `currentDate` date NOT NULL DEFAULT current_timestamp(),
  `weights` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feed_tbl`
--

INSERT INTO `feed_tbl` (`id`, `ResidentName`, `NutritionProgramme`, `Sex`, `Age`, `currentDate`, `weights`) VALUES
(21, 'asdd', 'Malnourished', '', '0', '2023-12-26', ''),
(22, 'addsdsds', 'Malnourished', '', '5', '2023-12-26', ''),
(23, 'TroilusASedoguio', 'Malnourished', '', '4', '2023-12-26', '10');

-- --------------------------------------------------------

--
-- Table structure for table `filter_tbl`
--

CREATE TABLE `filter_tbl` (
  `id` int(11) NOT NULL,
  `location` text NOT NULL,
  `activity` text NOT NULL,
  `createdDate` date NOT NULL DEFAULT current_timestamp(),
  `createdTime` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filter_tbl`
--

INSERT INTO `filter_tbl` (`id`, `location`, `activity`, `createdDate`, `createdTime`) VALUES
(11, 'kakakak', 'kakakak', '2023-10-10', '18:20:17'),
(12, 'kakakak', 'kakakak', '2023-10-10', '18:20:19'),
(13, 'kakakak', 'kakakak', '2023-10-10', '18:20:20'),
(14, 'troilus a seoduiog', 'kakakak', '2023-10-10', '18:20:51'),
(15, 'kakakak kakakak', 'kakakak', '2023-10-10', '18:21:00'),
(16, 'kakakas kakakas', 'kakakak', '2023-10-10', '18:21:10'),
(18, 'kakakak', 'kakakak', '2023-10-10', '18:24:12'),
(19, 'kakakakasdjhaskd', 'kakakak', '2023-10-10', '18:24:24'),
(20, 'kakakakas', 'kakakak', '2023-10-10', '18:24:29'),
(21, 'jajajaj', 'jajajaj', '2023-10-10', '18:25:05'),
(22, 'gwapo', 'gwapo', '2023-10-10', '18:26:00'),
(23, 'kakakak', 'kakakak', '2023-10-10', '18:26:34'),
(24, 'kjhjghfhghj', 'hgfhjk', '2023-10-10', '18:27:20'),
(25, 'Banahaw Pob. (3rd Zone Pob.)', 'kakakak', '2023-10-10', '18:50:02'),
(26, 'Alobo', 'lkjhgh', '2023-09-15', '18:56:56'),
(27, 'Alobo', 'jkhgf', '2023-10-10', '19:17:58'),
(28, 'Alobo', 'activity', '2023-11-07', '12:04:23'),
(29, 'Angas', 'namigay ng relief goods', '2023-11-07', '12:05:15'),
(30, 'Alobo', 'namigay ng relief goods', '2023-11-18', '20:25:13'),
(31, 'Pulong-Parang', 'namigay ng relief goods', '2023-12-28', '14:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `hm_tbl`
--

CREATE TABLE `hm_tbl` (
  `id` int(11) NOT NULL,
  `ResidenceName` text NOT NULL,
  `MonitoringType` text NOT NULL,
  `Sex` text NOT NULL,
  `Age` text NOT NULL,
  `currentDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hm_tbl`
--

INSERT INTO `hm_tbl` (`id`, `ResidenceName`, `MonitoringType`, `Sex`, `Age`, `currentDate`) VALUES
(20, '  asd', '', '', '', '2023-12-28'),
(21, 'dddd awwww asddd', 'Hypertension', 'Female', '78', '2023-12-28'),
(22, 'new new new', 'Hypertension', 'Male', '76', '2023-12-28'),
(23, 'jajaja jajaja jajaja', 'Hypertension', 'Female', '20', '2023-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `home_tbl`
--

CREATE TABLE `home_tbl` (
  `id` int(11) NOT NULL,
  `mission` text NOT NULL,
  `vision` text NOT NULL,
  `objectives` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_tbl`
--

INSERT INTO `home_tbl` (`id`, `mission`, `vision`, `objectives`) VALUES
(1, 'new asdasda ', 'another visionasd', 'another  Objectivesasd');

-- --------------------------------------------------------

--
-- Table structure for table `log_tbl`
--

CREATE TABLE `log_tbl` (
  `lognumber` int(11) NOT NULL,
  `logdate` date NOT NULL DEFAULT current_timestamp(),
  `logtime` time NOT NULL DEFAULT current_timestamp(),
  `activity` text NOT NULL,
  `performed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_tbl`
--

INSERT INTO `log_tbl` (`lognumber`, `logdate`, `logtime`, `activity`, `performed`) VALUES
(10000, '2023-10-08', '16:19:09', 'Admin Logged In', 'admin'),
(10001, '2023-10-08', '16:19:21', 'Admin Logged In', 'admin'),
(10002, '2023-10-08', '16:19:09', 'Admin Logged In', 'admin'),
(10003, '2023-10-08', '16:19:21', 'Admin Logged In', 'admin'),
(10013, '2023-10-08', '17:04:31', 'admin Edit the data of Residence', 'admin'),
(10014, '2023-10-08', '17:06:03', 'admin Update the Organization Chart', 'admin'),
(10015, '2023-10-08', '17:08:01', 'admin Add New Residence', 'admin'),
(10016, '2023-10-09', '09:14:07', 'Admin Logged In', 'admin'),
(10017, '2023-10-09', '09:19:31', 'admin Update the Organization Chart', 'admin'),
(10018, '2023-10-09', '09:19:40', 'admin Update the Organization Chart', 'admin'),
(10019, '2023-10-09', '09:31:36', 'Admin Logged In', 'admin'),
(10020, '2023-10-09', '09:32:08', 'admin Add New Residence', 'admin'),
(10021, '2023-10-09', '09:32:51', 'admin Edit the data of Residence', 'admin'),
(10022, '2023-10-09', '09:33:24', 'admin Update the Organization Chart', 'admin'),
(10023, '2023-10-09', '09:34:04', 'admin Input on Disaster Risk Form', 'admin'),
(10024, '2023-10-09', '09:35:00', 'admin Input on Pregnancy Form', 'admin'),
(10025, '2023-10-09', '14:21:32', 'Admin Logged In', 'admin'),
(10026, '2023-10-09', '14:22:31', 'admin Update the Mission, Vision and Objectives ', 'admin'),
(10027, '2023-10-09', '14:22:37', 'admin Update the Mission, Vision and Objectives ', 'admin'),
(10028, '2023-10-09', '14:25:34', 'admin Update the Mission, Vision and Objectives ', 'admin'),
(10029, '2023-10-09', '14:25:40', 'admin Update the Mission, Vision and Objectives ', 'admin'),
(10030, '2023-10-09', '18:50:23', 'admin Add New Residence', 'admin'),
(10151, '2023-11-08', '19:44:40', 'Admin Logged In', 'admin'),
(10152, '2023-11-08', '19:46:36', 'Admin Logged In', 'admin'),
(10153, '2023-11-09', '20:51:35', 'Admin Logged In', 'admin'),
(10154, '2023-11-09', '21:00:47', 'Admin Logged In', 'admin'),
(10155, '2023-11-09', '21:01:28', 'Admin Logged In', 'admin'),
(10156, '2023-11-09', '21:18:22', 'Admin Logged In', 'admin'),
(10157, '2023-11-11', '13:09:31', 'Admin Logged In', 'admin'),
(10158, '2023-11-11', '13:09:47', 'Admin Logged In', 'admin'),
(10159, '2023-11-11', '13:10:29', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10160, '2023-11-11', '16:40:30', 'Admin Logged In', 'admin'),
(10161, '2023-11-11', '16:40:58', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10162, '2023-11-14', '13:13:53', 'Admin Logged In', 'admin'),
(10163, '2023-11-14', '13:14:28', 'Admin Logged In', 'admin'),
(10164, '2023-11-15', '11:26:04', 'Admin Logged In', 'admin'),
(10165, '2023-11-15', '16:12:26', 'Admin Logged In', 'admin'),
(10166, '2023-11-15', '16:49:33', 'admin Add New Residence', 'admin'),
(10167, '2023-11-15', '17:23:55', 'admin Add New Residence', 'admin'),
(10168, '2023-11-16', '22:10:35', 'Admin Logged In', 'admin'),
(10169, '2023-11-17', '15:28:52', 'Admin Logged In', 'admin'),
(10170, '2023-11-18', '20:19:38', 'Admin Logged In', 'admin'),
(10171, '2023-11-18', '20:19:53', 'admin Update the Mission, Vision and Objectives ', 'admin'),
(10172, '2023-11-18', '20:20:18', 'admin Add New Residence', 'admin'),
(10173, '2023-11-18', '20:22:44', 'admin Input on Disaster Risk Form', 'admin'),
(10174, '2023-11-21', '23:35:16', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10175, '2023-11-21', '23:57:28', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10176, '2023-11-21', '23:57:43', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>33</b><br /> Input on Vaccination Form', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>32</b><br />'),
(10177, '2023-11-22', '21:56:53', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10178, '2023-11-23', '19:00:47', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10179, '2023-11-23', '19:07:01', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>260</b><br /> Input on Disaster Risk Form', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>259</b><br />'),
(10180, '2023-11-23', '19:14:20', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>260</b><br /> Input on Disaster Risk Form', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>259</b><br />'),
(10181, '2023-11-23', '19:16:54', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>260</b><br /> Input on Disaster Risk Form', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>259</b><br />'),
(10182, '2023-11-28', '16:21:22', 'Admin Logged In', 'admin'),
(10183, '2023-11-28', '16:21:30', 'admin Add New Residence', 'admin'),
(10184, '2023-11-29', '14:01:44', 'Admin Logged In', 'admin'),
(10185, '2023-11-29', '14:04:38', 'admin Add New Residence', 'admin'),
(10186, '2023-11-29', '14:07:26', 'admin Add New Residence', 'admin'),
(10187, '2023-11-29', '14:10:03', 'admin Add New Residence', 'admin'),
(10188, '2023-11-29', '14:13:01', 'admin Add New Residence', 'admin'),
(10189, '2023-11-29', '14:13:07', 'admin Add New Residence', 'admin'),
(10190, '2023-11-29', '14:13:28', 'admin Add New Residence', 'admin'),
(10191, '2023-11-29', '14:15:38', 'admin Add New Residence', 'admin'),
(10192, '2023-11-29', '14:16:59', 'admin Add New Residence', 'admin'),
(10193, '2023-11-29', '14:17:03', 'admin Add New Residence', 'admin'),
(10194, '2023-11-29', '14:18:04', 'admin Add New Residence', 'admin'),
(10195, '2023-11-29', '14:18:08', 'admin Add New Residence', 'admin'),
(10196, '2023-11-29', '14:18:24', 'admin Add New Residence', 'admin'),
(10197, '2023-11-29', '14:19:52', 'admin Add New Residence', 'admin'),
(10198, '2023-11-29', '14:20:34', 'admin Add New Residence', 'admin'),
(10199, '2023-11-29', '14:20:34', 'admin Add New Residence', 'admin'),
(10200, '2023-11-29', '14:20:34', 'admin Add New Residence', 'admin'),
(10201, '2023-11-29', '14:20:35', 'admin Add New Residence', 'admin'),
(10202, '2023-11-29', '14:20:45', 'admin Add New Residence', 'admin'),
(10203, '2023-11-29', '14:23:02', 'admin Add New Residence', 'admin'),
(10204, '2023-11-29', '14:26:45', 'admin Add New Residence', 'admin'),
(10205, '2023-11-29', '14:26:51', 'admin Add New Residence', 'admin'),
(10206, '2023-11-29', '14:29:21', 'admin Add New Residence', 'admin'),
(10207, '2023-11-29', '14:29:35', 'admin Add New Residence', 'admin'),
(10208, '2023-11-29', '14:30:14', 'admin Add New Residence', 'admin'),
(10209, '2023-11-29', '14:31:34', 'admin Add New Residence', 'admin'),
(10210, '2023-11-29', '14:31:51', 'admin Add New Residence', 'admin'),
(10211, '2023-11-29', '14:31:53', 'admin Add New Residence', 'admin'),
(10212, '2023-11-29', '14:33:35', 'admin Add New Residence', 'admin'),
(10213, '2023-11-29', '14:33:39', 'admin Add New Residence', 'admin'),
(10214, '2023-11-29', '14:33:43', 'admin Add New Residence', 'admin'),
(10215, '2023-11-29', '14:33:53', 'admin Add New Residence', 'admin'),
(10216, '2023-11-29', '14:35:45', 'admin Add New Residence', 'admin'),
(10217, '2023-11-29', '14:35:47', 'admin Add New Residence', 'admin'),
(10218, '2023-11-29', '14:35:55', 'admin Add New Residence', 'admin'),
(10219, '2023-11-29', '14:36:04', 'admin Add New Residence', 'admin'),
(10220, '2023-11-29', '14:36:14', 'admin Add New Residence', 'admin'),
(10221, '2023-11-29', '14:37:04', 'admin Add New Residence', 'admin'),
(10222, '2023-11-29', '14:37:07', 'admin Add New Residence', 'admin'),
(10223, '2023-11-29', '14:37:09', 'admin Add New Residence', 'admin'),
(10224, '2023-11-29', '14:37:11', 'admin Add New Residence', 'admin'),
(10225, '2023-11-29', '14:38:31', 'admin Add New Residence', 'admin'),
(10226, '2023-11-29', '14:38:37', 'admin Add New Residence', 'admin'),
(10227, '2023-11-29', '14:39:53', 'admin Add New Residence', 'admin'),
(10228, '2023-11-29', '14:40:04', 'admin Add New Residence', 'admin'),
(10229, '2023-11-29', '14:40:05', 'admin Add New Residence', 'admin'),
(10230, '2023-11-29', '14:40:28', 'admin Add New Residence', 'admin'),
(10231, '2023-11-29', '14:40:29', 'admin Add New Residence', 'admin'),
(10232, '2023-11-29', '14:40:29', 'admin Add New Residence', 'admin'),
(10233, '2023-11-29', '14:41:37', 'admin Add New Residence', 'admin'),
(10234, '2023-11-29', '14:43:24', 'admin Add New Residence', 'admin'),
(10235, '2023-11-29', '14:44:10', '', ''),
(10236, '2023-11-29', '14:46:03', 'admin Add New Residence', 'admin'),
(10237, '2023-11-29', '14:46:04', 'admin Add New Residence', 'admin'),
(10238, '2023-11-29', '14:46:14', 'admin Add New Residence', 'admin'),
(10239, '2023-11-29', '14:46:31', 'admin Add New Residence', 'admin'),
(10240, '2023-11-29', '14:48:42', 'admin Add New Residence', 'admin'),
(10241, '2023-11-29', '14:49:41', 'admin Add New Residence', 'admin'),
(10242, '2023-11-29', '14:54:00', 'admin Add New Residence', 'admin'),
(10243, '2023-11-29', '14:54:29', 'admin Add New Residence', 'admin'),
(10244, '2023-11-29', '14:54:30', 'admin Add New Residence', 'admin'),
(10245, '2023-11-29', '14:55:56', 'admin Add New Residence', 'admin'),
(10246, '2023-11-29', '14:57:18', 'admin Add New Residence', 'admin'),
(10247, '2023-11-29', '14:57:44', 'admin Add New Residence', 'admin'),
(10248, '2023-11-29', '15:01:51', 'admin Add New Residence', 'admin'),
(10249, '2023-11-29', '15:07:47', 'admin Add New Residence', 'admin'),
(10250, '2023-11-29', '15:08:30', 'admin Add New Residence', 'admin'),
(10251, '2023-11-29', '15:08:58', 'admin Add New Residence', 'admin'),
(10252, '2023-11-29', '17:37:38', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>33</b><br /> Input on Vaccination Form', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>32</b><br />'),
(10253, '2023-11-29', '17:37:46', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>129</b><br /> Input on Feeding Form', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAssistance-Category.php</b> on line <b>128</b><br />'),
(10254, '2023-12-13', '14:05:00', 'Admin Logged In', 'admin'),
(10255, '2023-12-23', '21:49:40', 'Admin Logged In', 'admin'),
(10256, '2023-12-24', '16:14:19', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10257, '2023-12-24', '16:15:10', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10258, '2023-12-24', '16:17:34', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10259, '2023-12-24', '16:18:29', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10260, '2023-12-26', '15:03:00', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10261, '2023-12-26', '15:04:20', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10262, '2023-12-26', '15:04:40', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10263, '2023-12-26', '15:34:57', '', ''),
(10264, '2023-12-26', '15:37:12', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10265, '2023-12-26', '15:37:27', '', ''),
(10266, '2023-12-26', '15:37:28', '', ''),
(10267, '2023-12-26', '15:37:29', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10268, '2023-12-26', '21:58:49', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10269, '2023-12-26', '22:14:02', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10270, '2023-12-28', '14:27:03', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10271, '2023-12-28', '14:28:06', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10272, '2023-12-28', '14:28:22', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10273, '2023-12-28', '14:28:23', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10274, '2023-12-28', '14:28:35', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10275, '2023-12-28', '14:29:26', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10276, '2023-12-28', '14:31:00', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10277, '2023-12-28', '14:32:39', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>21</b><br /> Add New Residence', '<br /><b>Warning</b>:  Undefined variable $admin in <b>C:xampphtdocsBarangay-ManagementadminAdd-Resident.php</b> on line <b>20</b><br />'),
(10278, '2023-12-28', '14:40:15', 'Admin Logged In', 'admin'),
(10279, '2023-12-28', '14:41:18', 'admin Add New Residence', 'admin'),
(10280, '2023-12-28', '14:41:45', 'admin Add New Residence', 'admin'),
(10281, '2023-12-28', '14:42:42', 'admin Input on Disaster Risk Form', 'admin'),
(10282, '2023-12-28', '14:44:51', 'admin Edit the data of Residence', 'admin'),
(10283, '2023-12-28', '14:48:09', 'admin Update the Mission, Vision and Objectives ', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `org_tbl`
--

CREATE TABLE `org_tbl` (
  `id` int(11) NOT NULL,
  `mayor` text NOT NULL,
  `bc` text NOT NULL,
  `bt` text NOT NULL,
  `bs` text NOT NULL,
  `bk1` text NOT NULL,
  `bk2` text NOT NULL,
  `bk3` text NOT NULL,
  `bk4` text NOT NULL,
  `bk5` text NOT NULL,
  `bk6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `org_tbl`
--

INSERT INTO `org_tbl` (`id`, `mayor`, `bc`, `bt`, `bs`, `bk1`, `bk2`, `bk3`, `bk4`, `bk5`, `bk6`) VALUES
(4, 'Mayor Troilus', 'kagawad', 'kagawad troilus', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `preg_tbl`
--

CREATE TABLE `preg_tbl` (
  `id` int(11) NOT NULL,
  `ParentsNameMother` text NOT NULL,
  `BloodType` text NOT NULL,
  `Age` text NOT NULL,
  `Height` text NOT NULL,
  `Weights` text NOT NULL,
  `Birth` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preg_tbl`
--

INSERT INTO `preg_tbl` (`id`, `ParentsNameMother`, `BloodType`, `Age`, `Height`, `Weights`, `Birth`) VALUES
(87, 'asd', 'A type', '43', '54', '45', '2023-11-29'),
(88, '', '', '', '', '', '0000-00-00'),
(89, 'asd', '', '', '', '', '2023-11-29'),
(90, 'asd', 'A type', '43', '54', '45', '2023-11-29'),
(91, 'Ashton Cox', 'A type', '43', '5\'2', '45', '2023-11-30'),
(92, '', '', '', '', '', '0000-00-00'),
(93, '', '', '', '', '', '0000-00-00'),
(94, '', '', '', '', '', '0000-00-00'),
(95, '', '', '', '', '', '0000-00-00'),
(96, '', '', '', '', '', '0000-00-00'),
(97, '', '', '', '', '', '0000-00-00'),
(98, '', '', '', '', '', '0000-00-00'),
(99, '', '', '', '', '', '0000-00-00'),
(100, '', '', '', '', '', '0000-00-00'),
(101, '', '', '', '', '', '0000-00-00'),
(102, '', '', '', '', '', '0000-00-00'),
(103, '', '', '', '', '', '0000-00-00'),
(104, '', '', '', '', '', '0000-00-00'),
(105, '', '', '', '', '', '0000-00-00'),
(106, '', '', '', '', '', '0000-00-00'),
(107, '', '', '', '', '', '0000-00-00'),
(108, '', '', '', '', '', '0000-00-00'),
(109, '', '', '', '', '', '0000-00-00'),
(110, '', '', '', '', '', '0000-00-00'),
(111, '', '', '', '', '', '0000-00-00'),
(112, '', '', '', '', '', '0000-00-00'),
(113, '', '', '', '', '', '0000-00-00'),
(114, '', '', '', '', '', '0000-00-00'),
(115, '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `relief_tbl`
--

CREATE TABLE `relief_tbl` (
  `id` int(11) NOT NULL,
  `ResidenceName` text NOT NULL,
  `HouseholdMembers` text NOT NULL,
  `Sex` text NOT NULL,
  `Age` text NOT NULL,
  `hm` text NOT NULL,
  `fam_stat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relief_tbl`
--

INSERT INTO `relief_tbl` (`id`, `ResidenceName`, `HouseholdMembers`, `Sex`, `Age`, `hm`, `fam_stat`) VALUES
(30, 'asdd', '', '', '', 'Head', ''),
(31, 'asdd', '', '', '', 'Head', ''),
(32, 'TroilusASedoguio', '', '', '', 'Head', '');

-- --------------------------------------------------------

--
-- Table structure for table `vac_tbl`
--

CREATE TABLE `vac_tbl` (
  `id` int(11) NOT NULL,
  `ResidenceName` text NOT NULL,
  `VaccineType` text NOT NULL,
  `Sex` text NOT NULL,
  `Age` text NOT NULL,
  `inputDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vac_tbl`
--

INSERT INTO `vac_tbl` (`id`, `ResidenceName`, `VaccineType`, `Sex`, `Age`, `inputDate`) VALUES
(111, 'troilus sedoguio', '', '', '', '0000-00-00'),
(115, 'troilus sedoguio', 'vaccine', 'Male', '23', '0000-00-00'),
(116, 'asd', 'asd', 'Male', '23', '2023-11-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ar_tbl`
--
ALTER TABLE `ar_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_count`
--
ALTER TABLE `brgy_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dr_tbl`
--
ALTER TABLE `dr_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_tbl`
--
ALTER TABLE `feed_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter_tbl`
--
ALTER TABLE `filter_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_tbl`
--
ALTER TABLE `hm_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_tbl`
--
ALTER TABLE `home_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_tbl`
--
ALTER TABLE `log_tbl`
  ADD PRIMARY KEY (`lognumber`);

--
-- Indexes for table `org_tbl`
--
ALTER TABLE `org_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preg_tbl`
--
ALTER TABLE `preg_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relief_tbl`
--
ALTER TABLE `relief_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vac_tbl`
--
ALTER TABLE `vac_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ar_tbl`
--
ALTER TABLE `ar_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `brgy_count`
--
ALTER TABLE `brgy_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dr_tbl`
--
ALTER TABLE `dr_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `feed_tbl`
--
ALTER TABLE `feed_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `filter_tbl`
--
ALTER TABLE `filter_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `hm_tbl`
--
ALTER TABLE `hm_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `home_tbl`
--
ALTER TABLE `home_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_tbl`
--
ALTER TABLE `log_tbl`
  MODIFY `lognumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10284;

--
-- AUTO_INCREMENT for table `org_tbl`
--
ALTER TABLE `org_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `preg_tbl`
--
ALTER TABLE `preg_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `relief_tbl`
--
ALTER TABLE `relief_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `vac_tbl`
--
ALTER TABLE `vac_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
