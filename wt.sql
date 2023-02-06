-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 02:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `anjanadevi`
--

CREATE TABLE `anjanadevi` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anjanadevi`
--

INSERT INTO `anjanadevi` (`regdno`) VALUES
('15331a1237'),
('15331a1238'),
('15331a1239'),
('15331a1241'),
('16331a1237'),
('16331a1238'),
('16331a1239'),
('16331a1240'),
('16331a1241'),
('17331a1223'),
('17331a1227'),
('17331a1238'),
('17331a1249'),
('17331a1254'),
('18331a1241'),
('18331a1242'),
('18331a1243'),
('18331a1244'),
('18331a1245'),
('19331a1247'),
('19331a1248'),
('19331a1249'),
('19331a1250'),
('19331a1251'),
('20331a12b3'),
('20331a12b4'),
('20331a12b5'),
('20331a12b6'),
('20331a12b7'),
('20331a12b8'),
('20331a12b9'),
('20331a12c0'),
('20331a12c1'),
('20331a12c2'),
('20331a12c3'),
('20331a12c4');

-- --------------------------------------------------------

--
-- Table structure for table `atchut`
--

CREATE TABLE `atchut` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE `counsellor` (
  `id` int(11) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counsellor`
--

INSERT INTO `counsellor` (`id`, `cname`, `password`) VALUES
(1, 'nagesh', 'nagesh'),
(2, 'srinivasa', 'srinivasa'),
(3, 'pavan kumar', 'pavan'),
(4, 'sobha rani', 'sobha'),
(5, 'santhosh kumar', 'santhosh'),
(6, 'nagendra kumar', 'nagendra'),
(7, 'jyothi', 'jyothi'),
(8, 'prasanna raju', 'prasanna'),
(9, 'satyanaraya reddy', 'satyanaraya'),
(10, 'anjanadevi', 'anjanadevi'),
(11, 'swarna', 'swarna'),
(12, 'atchut vardhan', 'atchut'),
(13, 'raja reddy', 'raja'),
(14, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `curricular`
--

CREATE TABLE `curricular` (
  `regdno` varchar(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `recognition` varchar(40) NOT NULL,
  `organization` varchar(40) NOT NULL,
  `eventtype` varchar(15) NOT NULL,
  `eventname` varchar(15) NOT NULL,
  `certificate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curricular`
--

INSERT INTO `curricular` (`regdno`, `name`, `startdate`, `enddate`, `recognition`, `organization`, `eventtype`, `eventname`, `certificate`) VALUES
('19331a1201', 'ganesh', '2022-06-01', '2022-06-02', 'participation', 'jntuk', 'ExtraCurricular', 'running', ''),
('19331a1201', 'ganesh', '2022-06-03', '2022-06-03', 'second', 'vizag', 'ExtraCurricular', 'swimming', ''),
('19331a1202', 'manasa', '2022-06-01', '2022-06-01', 'third', 'nss', 'ExtraCurricular', 'badminton', '');

-- --------------------------------------------------------

--
-- Table structure for table `jyothi`
--

CREATE TABLE `jyothi` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nagendra`
--

CREATE TABLE `nagendra` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nagendra`
--

INSERT INTO `nagendra` (`regdno`) VALUES
('18331a1221'),
('18331a1222'),
('18331a1223'),
('18331a1224'),
('18331a1225'),
('19331a1224'),
('19331a1225'),
('19331a1226'),
('19331a1227'),
('19331a1228'),
('19331a1229'),
('20331a1289'),
('20331a1290'),
('20331a1291'),
('20331a1292'),
('20331a1293'),
('20331a1294'),
('20331a1295'),
('20331a1296'),
('20331a1297'),
('20331a1298'),
('20331a1299'),
('20331a12a0');

-- --------------------------------------------------------

--
-- Table structure for table `nagesh`
--

CREATE TABLE `nagesh` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nagesh`
--

INSERT INTO `nagesh` (`regdno`) VALUES
('19335a1201'),
('19335a1202'),
('19335a1203'),
('19335a1204'),
('19335a1205'),
('20331a1201'),
('20331a1202'),
('20331a1203'),
('20331a1204'),
('20331a1205'),
('20331a1206'),
('20331a1207'),
('20331a1208'),
('20331a1209'),
('20331a1210'),
('20331a1211'),
('20331a1212');

-- --------------------------------------------------------

--
-- Table structure for table `pavan`
--

CREATE TABLE `pavan` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pavan`
--

INSERT INTO `pavan` (`regdno`) VALUES
('18331a1206'),
('18331a1207'),
('18331a1208'),
('18331a1209'),
('18331a1210'),
('19331a1207'),
('19331a1208'),
('19331a1209'),
('19331a1210'),
('19331a1211'),
('19331a1212'),
('20331a1213'),
('20331a1214'),
('20331a1215'),
('20331a1216'),
('20331a1217'),
('20331a1218'),
('20331a1219'),
('20331a1220'),
('20331a1221'),
('20331a1222'),
('20331a1223'),
('20331a1224');

-- --------------------------------------------------------

--
-- Table structure for table `prasanna`
--

CREATE TABLE `prasanna` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `raja`
--

CREATE TABLE `raja` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `santhosh`
--

CREATE TABLE `santhosh` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `santhosh`
--

INSERT INTO `santhosh` (`regdno`) VALUES
('18331a1216'),
('18331a1217'),
('18331a1218'),
('18331a1219'),
('18331a1220'),
('19331a1219'),
('19331a1220'),
('19331a1221'),
('19331a1222'),
('19331a1223');

-- --------------------------------------------------------

--
-- Table structure for table `satyanaraya`
--

CREATE TABLE `satyanaraya` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sobha`
--

CREATE TABLE `sobha` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sobha`
--

INSERT INTO `sobha` (`regdno`) VALUES
('18331a1211'),
('18331a1212'),
('18331a1213'),
('18331a1214'),
('18331a1215'),
('19331a1213'),
('19331a1214'),
('19331a1215'),
('19331a1216'),
('19331a1217'),
('19331a1218'),
('20331a1277'),
('20331a1278'),
('20331a1279'),
('20331a1280'),
('20331a1281'),
('20331a1282'),
('20331a1283'),
('20331a1284'),
('20331a1285'),
('20331a1286'),
('20331a1287'),
('20331a1288');

-- --------------------------------------------------------

--
-- Table structure for table `srinivasa`
--

CREATE TABLE `srinivasa` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srinivasa`
--

INSERT INTO `srinivasa` (`regdno`) VALUES
('18331a1201'),
('18331a1202'),
('18331a1203'),
('18331a1204'),
('18331a1205'),
('19331a1201'),
('19331a1202'),
('19331a1203'),
('19331a1204'),
('19331a1205'),
('19331a1206'),
('20331a1265'),
('20331a1266'),
('20331a1267'),
('20331a1268'),
('20331a1269'),
('20331a1270'),
('20331a1271'),
('20331a1272'),
('20331a1273'),
('20331a1274'),
('20331a1275'),
('20331a1276');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `regdno` varchar(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `fcontact` bigint(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regdno`, `name`, `password`, `DOB`, `email`, `fathername`, `contact`, `fcontact`, `photo`) VALUES
('19331a1201', 'ganesh', 'ganesh', '2002-06-01', 'ganesh@gmail.com', 'ganesh2', 9876543211, 9876543221, ''),
('19331a1208', 'hemanth', 'hemanth', '2002-07-13', 'challa.hemanth2001@gmail.com', 'krishna', 7036797256, 9876543218, 'uploaded_files/5035-photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `swarna`
--

CREATE TABLE `swarna` (
  `regdno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anjanadevi`
--
ALTER TABLE `anjanadevi`
  ADD PRIMARY KEY (`regdno`);

--
-- Indexes for table `atchut`
--
ALTER TABLE `atchut`
  ADD PRIMARY KEY (`regdno`);

--
-- Indexes for table `counsellor`
--
ALTER TABLE `counsellor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regdno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counsellor`
--
ALTER TABLE `counsellor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
