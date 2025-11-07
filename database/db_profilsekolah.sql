-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2025 at 03:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_profilsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id_alumni` int(11) NOT NULL,
  `nama_alumni` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tahun_masuk` varchar(50) NOT NULL,
  `tahun_lulus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `nama_alumni`, `jk`, `nis`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `tahun_masuk`, `tahun_lulus`) VALUES
(14, 'AFRIDES RAMADHAN', 'lk', '14072', '9982492961', 'PULAI', '1998-12-17', '2014', '2017'),
(15, 'AGUS SETIAWAN', 'lk', '14105', '9952592477', 'BOJONEGORO', '1995-08-16', '2014', '2017'),
(16, 'AHMAD RIVAL', 'lk', '14001', '9975780326', 'TARATAK', '1997-11-23', '2014', '2017'),
(17, 'ALYU ZIAROVA', 'lk', '14002', '9992498502', 'TIMPEH', '1999-06-26', '2014', '2017'),
(18, 'ANANG SAFADRI', 'lk', '14025', '9982492368', 'MARGA MAKMUR', '1998-06-15', '2014', '2017'),
(19, 'ANDESTA PARSAULIAN', 'lk', '14026', '9968104797', 'TIMPEH', '1996-02-11', '2014', '2017'),
(20, 'ANDRE RAMA KURNIA', 'lk', '14075', '9973822332', 'BERINGIN SAKTI', '1997-01-20', '2014', '2017'),
(21, 'ANDRI MULLIADY', 'lk', '14028', '9987927548', 'TABEK PENYEBRANGAN', '1998-08-17', '2014', '2017'),
(22, 'ANGGID LUHUR PAMBUDI', 'lk', '14052', '9985924564', 'TANJUNG HARAPAN', '1998-09-21', '2014', '2017'),
(23, 'ANNISA', 'pr', '14053', '9995505578', 'PEMATANG DAMAR', '1999-12-29', '2014', '2017'),
(24, 'ARI SAPUTRA', 'lk', '14077', '9992498503', 'TIMPEH', '1999-03-27', '2014', '2017'),
(25, 'ARI TUMIATI', 'pr', '14054', '9972534395', 'MARGA MAKMUR', '1997-01-25', '2014', '2017'),
(26, 'ARIF SYAHPUTRA', 'lk', '14055', '9961646639', 'TIMPEH ABADI', '1996-10-13', '2014', '2017'),
(27, 'AYU FITRIANI', 'pr', '14030', '9992579616', 'SAWAHLUNTO/SIJUNJUNG', '1999-02-27', '2014', '2017'),
(28, 'AYUB ANGGORO', 'lk', '14078', '9982492372', 'MARGA MAKMUR', '1998-03-11', '2014', '2017'),
(29, 'BINTANG AGUS RIANTO', 'lk', '14079', '9992579618', 'PRABUMULIH', '1999-08-10', '2014', '2017'),
(30, 'DIKA ROZA LINDA', 'pr', '14003', '9992711755', 'KAMPUNG SURAU', '1999-04-09', '2014', '2017'),
(31, 'DIKI ALEX SANDER', 'lk', '14004', '9983309637', 'TABEK PENYEBRANGAN', '1998-09-05', '2014', '2017'),
(32, 'DWI SULATNO', 'lk', '14031', '9972614147', 'PINANG MAKMUR', '1997-05-20', '2014', '2017'),
(33, 'ELGI JULI SAPUTRA', 'lk', '14082', '9982492967', 'PULAI', '1998-07-13', '2014', '2017'),
(34, 'FANI FEBRIYALDO', 'lk', '14083', '9993017858', 'SAWAHLUNTO/SIJUNJUNG', '1999-02-21', '2014', '2017'),
(35, 'FAUZI LIZALDI', 'lk', '14084', '9942513290', 'TARATAK', '1999-08-17', '2014', '2017'),
(36, 'FEBRI TRIFANDA', 'lk', '14033', '0009080548', 'PANTAI', '2000-02-03', '2014', '2017'),
(37, 'FLORENSI RAFFLESIANDA NOVRITA', 'pr', '14034', '9975137147', 'MUARO TIMPEH', '1998-12-12', '2014', '2017'),
(38, 'GIAL HERMANTO', 'lk', '14035', '9972533687', 'TIMPEH', '1997-06-10', '2014', '2017'),
(39, 'GUSTI RANDA', 'lk', '14005', '9982570914', 'SAWAHLUNTO/SIJUNJUNG', '1998-02-15', '2014', '2017'),
(40, 'HARRY ANGGARA SAPUTRA', 'lk', '14086', '9962618630', 'SAWAHLUNTO/SIJUNJUNG', '1997-08-15', '2014', '2017'),
(41, 'HARRY KEBASTIAN', 'lk', '14087', '9972309156', 'BATU SANGKAR', '1997-10-01', '2014', '2017'),
(42, 'HARRYAN DHIKA LENARDO', 'lk', '14036', '9993017861', 'SAWAHLUNTO/SIJUNJUNG', '1999-05-03', '2014', '2017'),
(43, 'HENDRI FAUZI', 'lk', '14037', '9972534285', 'SAWAHLUNTO/SIJUNJUNG', '1997-05-30', '2014', '2017'),
(44, 'HENDRI GUNAWAN', 'lk', '14006', '9983481095', 'SAWAHLUNTO/SIJUNJUNG', '1998-07-09', '2014', '2017'),
(45, 'IKHSAN RAHMADI', 'lk', '14038', '9987569375', 'SAWAHLUNTO/SIJUNJUNG', '1998-10-12', '2014', '2017'),
(46, 'ILHAM SUWANDI', 'lk', '14059', '9992510017', 'PINANG MAKMUR', '1999-05-31', '2014', '2017'),
(47, 'IMAM RIZKI', 'lk', '14060', '9952592420', 'BERINGIN SAKTI', '1997-07-27', '2014', '2017'),
(48, 'JANURIYONO', 'lk', '14088', '9967192173', 'MARGA MAKMUR', '1996-01-17', '2014', '2017'),
(49, 'JEKI HANDRA', 'lk', '14007', '9972534406', 'MARGA MAKMUR', '1997-06-01', '2014', '2017'),
(50, 'KEVIN SUSANTO', 'lk', '14061', '9993199842', 'KUMBAYAU', '1999-06-02', '2014', '2017'),
(51, 'KHOLIFATUL MARLIKAH', 'lk', '14008', '9992499218', 'MARGA MAKMUR', '1999-05-19', '2014', '2017'),
(52, 'KRISMON DWI PAMUNGKAS', 'lk', '14039', '9992499220', 'MARGA MAKMUR', '1999-03-03', '2014', '2017'),
(53, 'LEGIN RAM AUDHIEFFA', 'lk', '14089', '9982570915', 'KOTO CENGAR', '1998-12-28', '2014', '2017'),
(54, 'M. FERI SETIAWAN', 'lk', '14009', '9982570918', 'SAWAHLUNTO/SIJUNJUNG', '1998-05-05', '2014', '2017'),
(55, 'MAULANA SUBHI', 'lk', '14010', '9977534582', 'PISANG REBUS', '1997-07-16', '2014', '2017'),
(56, 'MEUTHIA RAHMA CYNTHIA SEPTIANI', 'pr', '14011', '9982493093', 'SAWAHLUNTO/SIJUNJUNG', '1998-09-30', '2014', '2017'),
(57, 'MIMI SUSANTI', 'lk', '14062', '9953160863', 'MARGA MAKMUR', '1996-05-02', '2014', '2017'),
(58, 'MUHAMMAD DARAJAT', 'lk', '14012', '9972534410', 'MARGA MAKMUR', '1997-01-17', '2014', '2017'),
(59, 'MUHAMMAD HUSEN', 'lk', '14013', '9989848295', 'TRIMULYA', '1998-12-28', '2014', '2017'),
(60, 'MUHAMMAD JOHAN', 'lk', '14063', '9992579639', 'SWL / SJJ', '1999-05-03', '2014', '2017'),
(61, 'MUSLIM', 'lk', '14064', '9953098898', 'BERINGIN SAKTI', '1995-02-28', '2014', '2017'),
(62, 'NAFISYAH', 'pr', '14014', '9986584221', 'PEMATANG DAMAR', '1998-10-14', '2014', '2017'),
(63, 'NINING SITI RAHAYU WINASIS', 'pr', '14040', '9992579643', 'PINANG MAKMUR', '1999-02-28', '2014', '2017'),
(64, 'NOAN NOVRIJAL', 'lk', '14090', '9963151423', 'PULAU MAINAN', '1996-11-01', '2014', '2017'),
(65, 'NOSA PURNAMA SARI', 'lk', '14015', '9968001194', 'MARGA MAKMUR', '1996-03-12', '2014', '2017'),
(66, 'NOVIA HARIANI', 'pr', '14065', '9971414721', 'TIMPEH', '1997-10-23', '2014', '2017'),
(67, 'NOVRI YANTI', 'pr', '14041', '9992498514', 'TIMPEH', '1999-07-27', '2014', '2017'),
(68, 'PANJI NUGROHO', 'lk', '14091', '9982492384', 'MARGA MAKMUR', '1998-08-22', '2014', '2017'),
(69, 'PRAYOGA SAMIRA', 'lk', '14016', '9972735623', 'SILULUK', '1997-12-19', '2014', '2017'),
(70, 'PUJI DIAH ASTUTI', 'pr', '14042', '9988638634', 'PINANG MAKMUR', '1998-07-09', '2014', '2017'),
(71, 'RAFLI YENDI', 'lk', '14092', '9992499228', 'SAWAHLUNTO/SIJUNJUNG', '1999-01-13', '2014', '2017'),
(72, 'RAHMAT RIFAI', 'lk', '14017', '9982066338', 'KOTO AGUNG', '1998-03-11', '2014', '2017'),
(73, 'REDYAN HARISMON', 'lk', '14043', '9982690283', 'SITIUNG', '1998-03-01', '2014', '2017'),
(74, 'RIKA JULIA', 'lk', '14045', '9962618732', 'MARGA MAKMUR', '1998-07-19', '2014', '2017'),
(75, 'RIKI APRIYANDRA PUTRA', 'lk', '14095', '9992498739', 'SUNGAI RUMBAI', '1999-04-23', '2014', '2017'),
(76, 'RIMA SHOLIKHA', 'pr', '14018', '9982570927', 'PINANG MAKMUR', '1998-08-31', '2014', '2017'),
(77, 'SEFTIANDY ADE SAPUTRA', 'lk', '14099', '9962618650', 'BERINGIN SAKTI', '1996-09-12', '2014', '2017'),
(78, 'SEPTIONO', 'lk', '14047', '9982492390', 'MARGA MAKMUR', '1998-09-01', '2014', '2017'),
(79, 'SESMAWATI', 'pr', '14066', '9972533699', 'TIMPEH', '1997-02-23', '2014', '2017'),
(80, 'SISKA YUSMA YENTI', 'pr', '14021', '9972534423', 'TALANG', '1997-01-01', '2014', '2017'),
(81, 'SITI NUR ROHAYATI', 'pr', '14106', '9972534424', 'MARGA MAKMUR', '1997-06-11', '2014', '2017'),
(82, 'TAUFIT HIDAYAT', 'lk', '14069', '9975884670', 'PEKANBARU', '1997-11-11', '2014', '2017'),
(83, 'TRISNA KAMELIA', 'pr', '14022', '9982492391', 'SOLOK', '1998-11-20', '2014', '2017'),
(84, 'TURANGGA PRATAMA', 'lk', '14100', '9972535080', 'PINANG MAKMUR', '1997-06-25', '2014', '2017'),
(85, 'WAHYU SAPUTRA', 'lk', '14023', '9982570932', 'PINANG MAKMUR', '1998-10-10', '2014', '2017'),
(86, 'YULIANA UTAMI', 'pr', '14024', '9982690456', 'SAWAHLUNTO/SIJUNJUNG', '1999-07-01', '2014', '2017'),
(87, 'ZALDI ELKO ISMA SAPUTRA', 'lk', '14048', '9982492398', 'MARGA MAKMUR', '1998-03-14', '2014', '2017'),
(125, 'ADE FRANSISCA DURI', 'lk', '15107', '9992499210', 'SAWAHLUNTO SIJUNJUNG', '1999-06-16', '2015', '2018'),
(126, 'AFRINAL BERRY PRATAMA', 'lk', '15108', '9992499211', 'MARGA MAKMUR', '1999-03-31', '2015', '2018'),
(127, 'ALVIGA NOPIANDRI', 'lk', '15109', '9972534391', 'MARGA MAKMUR', '1997-07-07', '2015', '2018'),
(128, 'ANANG RIZKY ERICO', 'lk', '15139', '0006184131', 'LIPAT KAIN', '2000-05-05', '2015', '2018'),
(129, 'ANDI KURNIA', 'lk', '15110', '9982570906', 'PINANG MAKMUR', '1998-08-05', '2015', '2018'),
(130, 'ANDRES SULDIANTO', 'lk', '15140', '9982492370', 'MARGA MAKMUR', '1998-03-09', '2015', '2018'),
(131, 'ARI YUDISTIRA', 'lk', '15111', '9992499213', 'BUKIT TINGGI', '1999-10-11', '2015', '2018'),
(132, 'ARIF RAHMAD', 'lk', '15141', '9982992121', 'SAWAHLUNTO SIJUNJUNG', '1997-10-31', '2015', '2018'),
(133, 'ASEP SAPUTRA', 'lk', '15113', '9992510003', 'PINANG MAKMUR', '1999-05-15', '2015', '2018'),
(134, 'BENY ADRYANTO', 'lk', '14142', '0005062776', 'SUNGAI JERNIH', '2000-07-08', '2015', '2018'),
(135, 'DESMITA ALFIRA', 'lk', '15114', '9992579620', 'PINANG MAKMUR', '1999-12-31', '2015', '2018'),
(136, 'DIAN WIDIATI', 'lk', '15116', '9992579622', 'SIJUNJUNG', '1999-11-27', '2015', '2018'),
(137, 'DIKA FEBRA ANDILA', 'lk', '15117', '9992736914', 'SALIMPAT', '1999-09-24', '2015', '2018'),
(138, 'IDEAL PARAMATO INTAN', 'lk', '15119', '9992499216', 'MARGA MAKMUR', '1999-09-15', '2015', '2018'),
(139, 'ISKA JUNAIDI', 'lk', '15143', '9992498525', 'LUBUK LABU', '2001-04-16', '2015', '2018'),
(140, 'JULNAIDI', 'lk', '15120', '9982492399', 'MARGA JAYA', '1998-07-20', '2015', '2018'),
(141, 'LENNY SYOPHIANA', 'lk', '15121', '0001737825', 'PINANG MAKMUR', '2000-03-31', '2015', '2018'),
(142, 'MARIYOS SEFLI', 'lk', '15144', '9999993315', 'PINANG MAKMUR', '1999-03-14', '2015', '2018'),
(143, 'MELANNI APLIANA', 'lk', '15123', '9995809529', 'SAWAHLUNTO SIJUNJUNG', '1999-04-04', '2015', '2018'),
(144, 'MUHAMAD SIDIQ HENDARDI', 'lk', '15125', '0007564628', 'GUNUNG KIDUL', '2000-04-03', '2015', '2018'),
(145, 'MUHAMMAD FAUZI', 'lk', '15124', '9999540386', 'SOLOK', '1999-03-01', '2015', '2018'),
(146, 'MUHAMMAD IQBAL', 'lk', '15145', '9992499334', 'SAWAHLUNTO SIJUNJUNG', '1999-09-10', '2015', '2018'),
(147, 'OKTIKA SAPUTRI', 'pr', '15147', '9992499226', 'MARGA MAKMUR', '1999-10-25', '2015', '2018'),
(148, 'PINDO PUTRA PRATAMA', 'lk', '15128', '9989537038', 'SUMPUR KUDUS', '1998-03-09', '2015', '2018'),
(149, 'RANDA', 'lk', '15148', '0005903910', 'SAWAHLUNTO SIJUNJUNG', '2000-03-11', '2015', '2018'),
(150, 'RATNA SARI', 'pr', '15130', '9992499230', 'MARGA MAKMUR', '1999-03-25', '2015', '2018'),
(151, 'RISKA MARLINDA LESTARI', 'pr', '15131', '0002118762', 'MARGO MULYO', '2000-03-20', '2015', '2018'),
(152, 'RIZKI RAHMA PRIADI', 'lk', '15151', '0001799327', '', '2000-02-06', '2015', '2018'),
(153, 'ROMI ANGGRA', 'lk', '15150', '9982492310', 'SAWAHLUNTO SIJUNJUNG', '1998-09-14', '2015', '2018'),
(154, 'SELVIA HERMAYANTI', 'pr', '15133', '9992499235', 'MARGA MAKMUR', '1999-05-30', '2015', '2018'),
(155, 'TIA VERONIKA', 'pr', '15134', '9992499239', 'MARGA MAKMUR', '1999-07-02', '2015', '2018'),
(156, 'TRI MARTANTO', 'lk', '15152', '9998068938', 'MARGA MAKMUR', '1999-03-13', '2015', '2018'),
(157, 'UNTUNG SURYA DARMA', 'lk', '15136', '9984947742', 'KOTO AGUNG', '1998-12-08', '2015', '2018'),
(158, 'WIDYA NOVITA SARI', 'pr', '15137', '9992498519', 'TIMPEH', '1999-11-22', '2015', '2018'),
(159, 'YOS HENDRA', 'lk', '14071', '9979616208', 'MARGA JAYA', '1997-08-11', '2015', '2018'),
(160, 'ZAINAL SEFRIADI', 'lk', '15154', '9982492397', 'MARGA MAKMUR', '1998-09-07', '2015', '2018'),
(161, 'ZANDI DWINANDA PUTRA', 'lk', '15155', '0024239138', 'MUNGKA', '2000-02-14', '2015', '2018'),
(162, 'ADE FRANSISCA DURI', 'lk', '15107', '9992499210', 'SAWAHLUNTO SIJUNJUNG', '1999-06-16', '2015', '2018'),
(163, 'AFRINAL BERRY PRATAMA', 'lk', '15108', '9992499211', 'MARGA MAKMUR', '1999-03-31', '2015', '2018'),
(164, 'ALVIGA NOPIANDRI', 'lk', '15109', '9972534391', 'MARGA MAKMUR', '1997-07-07', '2015', '2018'),
(165, 'ANANG RIZKY ERICO', 'lk', '15139', '0006184131', 'LIPAT KAIN', '2000-05-05', '2015', '2018'),
(166, 'ANDI KURNIA', 'lk', '15110', '9982570906', 'PINANG MAKMUR', '1998-08-05', '2015', '2018'),
(167, 'ANDRES SULDIANTO', 'lk', '15140', '9982492370', 'MARGA MAKMUR', '1998-03-09', '2015', '2018'),
(168, 'ARI YUDISTIRA', 'lk', '15111', '9992499213', 'BUKIT TINGGI', '1999-10-11', '2015', '2018'),
(169, 'ARIF RAHMAD', 'lk', '15141', '9982992121', 'SAWAHLUNTO SIJUNJUNG', '1997-10-31', '2015', '2018'),
(170, 'ASEP SAPUTRA', 'lk', '15113', '9992510003', 'PINANG MAKMUR', '1999-05-15', '2015', '2018'),
(171, 'BENY ADRYANTO', 'lk', '14142', '0005062776', 'SUNGAI JERNIH', '2000-07-08', '2015', '2018'),
(172, 'DESMITA ALFIRA', 'lk', '15114', '9992579620', 'PINANG MAKMUR', '1999-12-31', '2015', '2018'),
(173, 'DIAN WIDIATI', 'lk', '15116', '9992579622', 'SIJUNJUNG', '1999-11-27', '2015', '2018'),
(174, 'DIKA FEBRA ANDILA', 'lk', '15117', '9992736914', 'SALIMPAT', '1999-09-24', '2015', '2018'),
(175, 'IDEAL PARAMATO INTAN', 'lk', '15119', '9992499216', 'MARGA MAKMUR', '1999-09-15', '2015', '2018'),
(176, 'ISKA JUNAIDI', 'lk', '15143', '9992498525', 'LUBUK LABU', '2001-04-16', '2015', '2018'),
(177, 'JULNAIDI', 'lk', '15120', '9982492399', 'MARGA JAYA', '1998-07-20', '2015', '2018'),
(178, 'LENNY SYOPHIANA', 'lk', '15121', '0001737825', 'PINANG MAKMUR', '2000-03-31', '2015', '2018'),
(179, 'MARIYOS SEFLI', 'lk', '15144', '9999993315', 'PINANG MAKMUR', '1999-03-14', '2015', '2018'),
(180, 'MELANNI APLIANA', 'lk', '15123', '9995809529', 'SAWAHLUNTO SIJUNJUNG', '1999-04-04', '2015', '2018'),
(181, 'MUHAMAD SIDIQ HENDARDI', 'lk', '15125', '0007564628', 'GUNUNG KIDUL', '2000-04-03', '2015', '2018'),
(182, 'MUHAMMAD FAUZI', 'lk', '15124', '9999540386', 'SOLOK', '1999-03-01', '2015', '2018'),
(183, 'MUHAMMAD IQBAL', 'lk', '15145', '9992499334', 'SAWAHLUNTO SIJUNJUNG', '1999-09-10', '2015', '2018'),
(184, 'OKTIKA SAPUTRI', 'pr', '15147', '9992499226', 'MARGA MAKMUR', '1999-10-25', '2015', '2018'),
(185, 'PINDO PUTRA PRATAMA', 'lk', '15128', '9989537038', 'SUMPUR KUDUS', '1998-03-09', '2015', '2018'),
(186, 'RANDA', 'lk', '15148', '0005903910', 'SAWAHLUNTO SIJUNJUNG', '2000-03-11', '2015', '2018'),
(187, 'RATNA SARI', 'pr', '15130', '9992499230', 'MARGA MAKMUR', '1999-03-25', '2015', '2018'),
(188, 'RISKA MARLINDA LESTARI', 'pr', '15131', '0002118762', 'MARGO MULYO', '2000-03-20', '2015', '2018'),
(189, 'RIZKI RAHMA PRIADI', 'lk', '15151', '0001799327', '', '2000-02-06', '2015', '2018'),
(190, 'ROMI ANGGRA', 'lk', '15150', '9982492310', 'SAWAHLUNTO SIJUNJUNG', '1998-09-14', '2015', '2018'),
(191, 'SELVIA HERMAYANTI', 'pr', '15133', '9992499235', 'MARGA MAKMUR', '1999-05-30', '2015', '2018'),
(192, 'TIA VERONIKA', 'pr', '15134', '9992499239', 'MARGA MAKMUR', '1999-07-02', '2015', '2018'),
(193, 'TRI MARTANTO', 'lk', '15152', '9998068938', 'MARGA MAKMUR', '1999-03-13', '2015', '2018'),
(194, 'UNTUNG SURYA DARMA', 'lk', '15136', '9984947742', 'KOTO AGUNG', '1998-12-08', '2015', '2018'),
(195, 'WIDYA NOVITA SARI', 'pr', '15137', '9992498519', 'TIMPEH', '1999-11-22', '2015', '2018'),
(196, 'YOS HENDRA', 'lk', '14071', '9979616208', 'MARGA JAYA', '1997-08-11', '2015', '2018'),
(197, 'ZAINAL SEFRIADI', 'lk', '15154', '9982492397', 'MARGA MAKMUR', '1998-09-07', '2015', '2018'),
(198, 'ZANDI DWINANDA PUTRA', 'lk', '15155', '0024239138', 'MUNGKA', '2000-02-14', '2015', '2018'),
(199, 'Achmad Fajrih', 'lk', '16158', '0008972580', 'Jakarta', '2000-07-13', '2016', '2019'),
(200, 'Aditya Julian', 'lk', '16159', '0014498668', 'Solok', '2001-07-11', '2016', '2019'),
(201, 'Agus Juwandra Solta', 'lk', '16160', '0003046806', 'KUMBAYAU', '2000-08-30', '2016', '2019'),
(202, 'Akmal Fauzi', 'lk', '16161', '0000820002', 'Timpeh', '2000-10-24', '2016', '2019'),
(203, 'Azizah Seprianti', 'pr', '16162', '0000788259', 'SAWAHLUNTO SIJUNJUNG', '2000-09-13', '2016', '2019'),
(204, 'Bagus Abdul Muhyi', 'lk', '16163', '0027967541', 'Lampung', '2002-05-29', '2016', '2019'),
(205, 'Danang Susilo', 'lk', '16164', '0014532191', 'SAWAHLUNTO SIJUNJUNG', '2000-04-28', '2016', '2019'),
(206, 'Defri Riski Anggara', 'lk', '16165', '0009641263', 'Sawahlunto SJJ', '2000-08-23', '2016', '2019'),
(207, 'Delvi Yona', 'pr', '16166', '9992848930', 'ANAU KADOK', '1999-07-29', '2016', '2019'),
(208, 'Dese Romadoni', 'lk', '16167', '9992847520', 'Sawahlunto Sijunjung', '1999-12-30', '2016', '2019'),
(209, 'Fajri Julianda', 'lk', '16169', '9992498508', 'Tanjung Ampalu', '1999-07-31', '2016', '2019'),
(210, 'Ganda Alamsyah', 'lk', '16201', '9992597273', 'TABEK PENYEBERANGAN', '1999-06-14', '2016', '2019'),
(211, 'Ilhamdi Hakima Syahrul Sidiq', 'lk', '16170', '0002586662', 'MARGA MAKMUR', '2000-04-17', '2016', '2019'),
(212, 'Kervan Evandel', 'lk', '16171', '0002586680', 'MARGA MAKMUR', '2000-09-07', '2016', '2019'),
(213, 'Megey Jayasva', 'lk', '16172', '9988889870', 'PADANG', '1998-06-19', '2016', '2019'),
(214, 'Melda Fransiska', 'pr', '16173', '9982491692', 'Solok', '1998-12-25', '2016', '2019'),
(215, 'Miftahul Saputra', 'lk', '16174', '9992847654', 'Pinang Makmur', '1999-08-07', '2016', '2019'),
(216, 'Monica Oktaria', 'pr', '16175', '0002586692', 'SAWAHLUNTO SIJUNJUNG', '2000-10-19', '2016', '2019'),
(217, 'Muhamad Herjuno Darmawan', 'lk', '16176', '0012682770', 'Pinang Makmur', '2001-07-19', '2016', '2019'),
(218, 'Novita Sari', 'pr', '16177', '9982571043', 'SAWAHLUNTO SIJUNJUNG', '1999-12-21', '2016', '2019'),
(219, 'Okse Kurnia Yulda', 'pr', '16178', '9982492383', 'MARGA MAKMUR', '1998-10-09', '2016', '2019'),
(220, 'Pega Novera Ningsih', 'pr', '16179', '9992499227', 'MARGA MAKMUR', '1999-11-29', '2016', '2019'),
(221, 'Rahma Wahyu Karlian', 'lk', '16180', '0014548143', 'Sungai Gading', '2001-11-21', '2016', '2019'),
(222, 'Redi Rizki Anto', 'lk', '16181', '0017832255', 'MARGA MAKMUR', '2001-03-30', '2016', '2019'),
(223, 'Rian Januar Arif', 'lk', '16182', '9982066335', 'MARGA MAKMUR', '1998-01-25', '2016', '2019'),
(224, 'Riko Sandika', 'lk', '16183', '0017832244', 'MARGA MAKMUR', '2000-10-09', '2016', '2019'),
(225, 'Rio Saputra', 'lk', '16199', '0006789437', 'Sawahlunto Sijunjung', '2000-06-24', '2016', '2019'),
(226, 'Rival Dwi Saputra', 'lk', '16184', '0008754612', 'Sawahlunto SJJ', '2000-10-03', '2016', '2019'),
(227, 'Rudi Saputra', 'lk', '16186', '0007723997', 'Pinang Makmur', '2000-09-19', '2016', '2019'),
(228, 'Sabrina Roselini', 'pr', '16187', '9992499234', 'MARGA MAKMUR', '1999-02-24', '2016', '2019'),
(229, 'Setyo Saputra', 'lk', '16188', '0008754567', 'DHARMASRAYA', '2000-07-02', '2016', '2019'),
(230, 'Siska Elvia Nora', 'pr', '16189', '9992499238', 'MARGA MAKMUR', '1999-06-20', '2016', '2019'),
(231, 'Siska Nilam Sari', 'pr', '16190', '9993017866', 'Taratak', '1999-11-13', '2016', '2019'),
(232, 'Syafri Yanto', 'lk', '16191', '9982492311', 'SWL/SJJ', '1998-10-12', '2016', '2019'),
(233, 'Syahfikri Nur Hidayat', 'lk', '16192', '0014498611', 'SIJUNJUNG', '2001-02-11', '2016', '2019'),
(234, 'TONY ALWARIS HASYIM', 'lk', '16193', '9993198371', 'Pekanbaru', '1999-10-22', '2016', '2019'),
(235, 'Varis Dwi Isnanto', 'lk', '16194', '0002586673', 'BANTUL', '2000-06-22', '2016', '2019'),
(236, 'Yoga Aldi Pratama', 'lk', '16200', '0014532541', 'PINANG MAKMUR', '2001-04-14', '2016', '2019'),
(237, 'Yon Feri Widia Putra', 'lk', '16195', '0001737503', 'MARGA MAKMUR', '2000-02-02', '2016', '2019'),
(238, 'Yulia Depi Saputra', 'lk', '16196', '9992499244', 'Marga Makmur', '1999-07-26', '2016', '2019'),
(239, 'Ady Herwansyah', 'L', '17231', '0014694044', 'Timpeh', '2001-11-14', '2017', '2020'),
(240, 'AZRI AMRIZAL', 'L', '17237', '0002586664', 'MARGA MAKMUR', '2000-10-05', '2017', '2020'),
(241, 'BAYU RESKI', 'L', '17238', '0017832239', 'MARGA MAKMUR', '2001-02-13', '2017', '2020'),
(242, 'Dandi Pratama', 'L', '17240', '9992703113', 'Surau Gading', '1999-07-02', '2017', '2020'),
(243, 'DEKI SETIAWAN SAPUTRA', 'L', '17241', '0017832242', 'Sawahlunto Sijunjung', '2001-01-16', '2017', '2020'),
(244, 'Deni Atam Rifai', 'L', '17242', '0000907241', 'Timpeh', '2000-11-30', '2017', '2020'),
(245, 'Diki Nafri', 'L', '17243', '0002564737', 'Beringin Sakti', '2000-06-13', '2017', '2020'),
(246, 'DWI NANDA YUNIANTO', 'L', '17244', '0017832267', 'MARGA MAKMUR', '2001-06-23', '2017', '2020'),
(247, 'FEBRINA TASYA', 'P', '17245', '0001737501', 'SAWAHLUNTO SIJUNJUNG', '2000-02-21', '2017', '2020'),
(248, 'Hendri Yusuf', 'L', '17247', '9991720321', 'SIJUNJUNG', '2000-06-12', '2017', '2020'),
(249, 'Irfan Noor Hidayat', 'L', '17249', '0024239143', 'Solok', '2002-01-09', '2017', '2020'),
(250, 'LIHANDOKO', 'L', '17251', '0017832282', 'MARGA MAKMUR', '2001-11-19', '2017', '2020'),
(251, 'M IBNU SUMARNA', 'L', '17252', '0009078542', 'SAWAHLUNTO', '2000-09-07', '2017', '2020'),
(252, 'M. YUKI', 'L', '17253', '0005144873', 'LUBUK KAMBING', '2000-12-18', '2017', '2020'),
(253, 'MUHAMMAD ADE PUTRA', 'L', '17255', '0020438701', 'MUARO SIJUNJUNG', '2002-05-22', '2017', '2020'),
(254, 'PAJRI', 'L', '17256', '0017819315', 'Sawahlunto Sijunjung', '2001-08-16', '2017', '2020'),
(255, 'RIFKI ILLAHI', 'L', '17257', '9992499231', 'SOLOK', '1999-06-14', '2017', '2020'),
(256, 'SISWANDI', 'L', '17259', '0002586697', 'MARGA MAKMUR', '2000-10-12', '2017', '2020'),
(257, 'Siti Aisa', 'P', '17260', '0012577374', 'Pekan Sabtu', '2001-05-23', '2017', '2020'),
(258, 'TRIOHADI PRAMUDHITO', 'L', '17261', '0016046514', 'MARGA MAKMUR', '2001-10-30', '2017', '2020'),
(259, 'VINGKY ANDRIKA SAPUTRA', 'L', '17262', '9992847504', 'SAWAHLUNTO SIJUNJUNG', '1999-09-16', '2017', '2020'),
(260, 'Zuliana Nurul Jannah', 'pr', '5054', '3679008762', 'KUDUS', '2003-06-23', '2015', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukutamu`
--

CREATE TABLE `tb_bukutamu` (
  `id_bukutamu` int(11) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `komentar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_bukutamu`
--

INSERT INTO `tb_bukutamu` (`id_bukutamu`, `nama_tamu`, `email`, `alamat`, `komentar`) VALUES
(1, 'Zuliana Nurul Jannah', 'zuliananurul852@gmail.com', 'Bae Krajan 03/01', 'Sekolahnya bagus, bersih, nyaman, dan rapi.'),
(2, 'Rosvika Dwi', 'rosvikadwiumanisti@gmail.com', 'Samirejo RT 03 / RW 04', 'Sekolahnya indah , asri, dan banyak penghijauan.'),
(3, 'Nayla Desti Fitriani', 'nayla234@gmail.com', 'Samirejo RT 02 / RW 05', 'SD 3 Samirejo memiliki fasilitas yang memadai, tempatnya berisih dan nyaman.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ekstrakurikuler`
--

CREATE TABLE `tb_ekstrakurikuler` (
  `id_ekstrakurikuler` int(11) NOT NULL,
  `nama_ekstrakurikuler` varchar(50) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_ekstrakurikuler`
--

INSERT INTO `tb_ekstrakurikuler` (`id_ekstrakurikuler`, `nama_ekstrakurikuler`, `keterangan`) VALUES
(2, 'Pramuka', 'nonaktif'),
(3, 'TIK', 'nonaktif'),
(5, 'Tari', 'proses'),
(6, 'Voli', 'proses'),
(7, 'Sepak Bola', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ekstrakurikuler_siswa`
--

CREATE TABLE `tb_ekstrakurikuler_siswa` (
  `id_ekstrakurikuler_siswa` int(11) NOT NULL,
  `id_ekstrakurikuler` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_ekstrakurikuler_siswa`
--

INSERT INTO `tb_ekstrakurikuler_siswa` (`id_ekstrakurikuler_siswa`, `id_ekstrakurikuler`, `id_siswa`) VALUES
(7, 2, 54),
(8, 2, 57),
(9, 2, 53),
(10, 2, 55),
(11, 2, 52),
(12, 3, 54),
(13, 3, 57),
(14, 7, 52),
(15, 7, 55);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `jenis_fasilitas` varchar(128) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `jenis_fasilitas`, `foto`) VALUES
(14, 'pustaka', 'perpustakaan.jpg'),
(15, 'ruangan', 'kelas2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `jenis` varchar(10) NOT NULL COMMENT '1 untuk foto,\r\n2 untuk video',
  `foto` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `keterangan`, `jenis`, `foto`, `video`) VALUES
(15, 'Kelas 1', '1', 'kelas1.jpg', '0'),
(16, 'Kelas 2', '1', 'kelas2.jpg', '0'),
(17, 'Kelas 3', '1', 'kelas3.jpg', '0'),
(18, 'Kelas 4', '1', 'kelas 4.jpg', '0'),
(19, 'Kelas 5', '1', 'kelas5.jpg', '0'),
(20, 'Kelas 6', '1', 'kelas6.jpg', '0'),
(21, 'Guru, Staff, dan Siswa PKL', '1', 'guru.jpg', '0'),
(22, 'Foto Bersama', '1', 'fotobersama.jpg', '0'),
(23, 'Piala', '1', 'prestasi1.jpg', '0'),
(24, 'Upacara', '1', 'upacara.jpg', '0'),
(25, 'Senam Bersama', '1', 'senamm.jpg', '0'),
(26, 'Aksi Cleanup dan Pilah Sampah SD 3 Samirejo', '2', '0', 'Aksi Cleanup dan Pilah Sampah SD 3 Samirejo.mp4'),
(27, 'Deklarasi Sekolah Ramah Anak SD 3 Samirejo', '2', '0', 'Deklarasi Sekolah Ramah Anak SD 3 Samirejo (1).mp4'),
(29, 'Simulasi Pembelajaran Tatap Muka SD 3 Samirejo', '2', '0', 'Simulasi Pembelajaran Tatap Muka SD 3 Samirejo di Masa Pandemi Covid-19.mp4'),
(30, 'Vaksinasi Anak Usia 6-11 Tahun SD 3 Samirejo', '2', '0', 'Vaksinasi Anak Usia 6-11 Tahun SD 3 Samirejo.mp4'),
(33, 'Catatan Akhir Tahun SD 3 Samirejo 2024', '2', '0', 'Catatan Akhir Tahun SD 3 Samirejo 2024.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `nuptk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `foto`, `tgl_lahir`, `tempat_lahir`, `jk`, `nohp`, `email`, `jabatan`, `golongan`, `nuptk`) VALUES
(28, '197205172007012010', 'TUTIK SULASWATI. S.Pd', 'Bu TUTIK.jpg', '1972-05-17', 'KUDUS', 'pr', '081225659178', 'tutiksulaswati325@gmail.com', 'Kepala Sekolah', 'III/d', '5849750651300032'),
(29, '196706202006042005', 'SUPRIYATI, S.Pd.SD.', 'SUPRIYATI.jpg', '1967-06-20', 'KUDUS', 'pr', '086754327890', 'supriyati653@gmail.com', 'Guru Kelas', 'III/c', '9952745648300042'),
(30, '198708152009032003', 'AGUSTA WIJIARTI, S.pd.SD.', 'BU AGUSTA.jpg', '1987-08-15', 'KUDUS', 'pr', '085376694623', 'agusta45@gmail.com', 'Guru Kelas', 'III/b', '4147765666210093'),
(31, '198808252022212013', 'ETI ISROKAH, S,Pd.', 'BU ETI.jpg', '1988-08-25', 'KUDUS', 'pr', '08256734679', 'etiisrokah789@gmail.com', 'Guru Kelas', 'IX', '-'),
(32, '199512172019032015', 'WAHYU DWI PRASETIYANINGSIH, S.Pd.', 'WAHYU.jpg', '1995-12-17', 'KUDUS', 'pr', '085274700088', 'wahyudwipra258@gmail.com', 'Guru Kelas', 'III/a', '5549773674130013'),
(33, '199307192020121006', 'IQBAL AZIS PRIYANTO, S.Pd.', 'PAK IQBAL.jpg', '1993-07-19', 'KUDUS', 'lk', '082373066756', 'iqbalazispriyanto05@gmail.com', 'Guru Olahraga', 'III/a', '-'),
(34, '', 'FRISKA HILDA IQLIYAH, S.Pd.', 'FRISKA HILDA.jpg', '1993-02-15', 'KUDUS', 'pr', '081277750609', 'friskahildaiqliyah@gmail.com', 'Guru Kelas', '-', '-'),
(35, '', 'SUYATI, S.Pd.I.', 'SUYATI.jpg', '1994-06-12', 'KUDUS', 'pr', '081267480147', 'suyati72@gmail.com', 'Guru PAI', '-', '-'),
(36, '', 'M. IQBAL FAELANI AL-AMIN', 'user.png', '1999-03-03', 'KUDUS', 'lk', '085271697318', 'iqbalfaelanialalmin874@gmail.com', 'Guru Kelas', '-', '-'),
(50, '123', 'Ocean Arif', 'logo umk.jpg', '2000-07-29', 'SUMATRA', 'lk', '08567245678', 'aku123@gmail.com', 'Guru', 'III/a', '6789091006278');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `tgl_informasi` date NOT NULL,
  `isi_informasi` longtext NOT NULL,
  `jenis_informasi` varchar(10) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `judul_informasi`, `tgl_informasi`, `isi_informasi`, `jenis_informasi`, `foto`) VALUES
(4, 'SISWA SDN 3 SAMIREJO MENDAPATKAN JUARA 2 LOMBA SPRINT 60 M PUTRI', '2024-01-20', '<p>Riqza Habiba Maulida, siswa kelas 6 SDN 3 Samirejo, berhasil meraih prestasi membanggakan dengan menyabet Juara 2 dalam lomba sprint 60 meter putri. Kompetisi ini merupakan bagian dari Ajang Kreasi Siswa Berprestasi III (AKSI III) Tahun 2025 yang diselenggarakan oleh MTs NU Miftahul Falah Cendono Dawe, Kudus.</p>\r\n\r\n<p>Dalam ajang bergengsi tersebut, Habiba menunjukkan kemampuan luar biasa di bidang atletik, bersaing dengan peserta lain dari berbagai sekolah dasar tingkat Kabupaten Kudus. Dengan kecepatan dan ketekunannya, ia berhasil membawa pulang piala serta penghargaan berupa uang pembinaan sebesar Rp 200.000.</p>\r\n\r\n<p>Keberhasilan ini menjadi bukti nyata dari kerja keras Habiba dalam berlatih dan dukungan dari pihak sekolah serta keluarganya. Prestasi ini juga mengharumkan nama SDN 3 Samirejo di kancah pendidikan Kabupaten Kudus.</p>\r\n\r\n<p>Kepala Sekolah SDN 3 Samirejo menyampaikan rasa bangga atas prestasi yang diraih oleh Habiba. Beliau berharap, pencapaian ini dapat memotivasi siswa-siswi lain untuk terus berprestasi di berbagai bidang.</p>\r\n\r\n<p>&quot;Kami sangat bangga atas keberhasilan Habiba. Semoga ini menjadi langkah awal yang baik untuk prestasi-prestasi lain di masa depan,&quot; ujar beliau.</p>\r\n\r\n<p>Riqza Habiba Maulida juga menyampaikan rasa syukurnya atas pencapaian tersebut. &ldquo;Saya sangat bersyukur dan berterima kasih kepada guru, teman-teman, dan keluarga yang selalu mendukung saya. Saya akan terus berusaha untuk meraih prestasi lebih baik lagi di masa depan,&rdquo; ungkap Habiba.</p>\r\n\r\n<p>Dengan semangat dan dedikasi yang tinggi, diharapkan Habiba dapat terus mengembangkan potensi dan meraih lebih banyak penghargaan di masa depan. Prestasi ini menjadi inspirasi bagi siswa-siswi lain untuk tidak pernah berhenti berusaha dan bermimpi besar.</p>\r\n', 'berita', 'RiqzaHabiba1.jpg'),
(6, 'SDN 3 SAMIREJO MEMPERINGATI HARI ISRA MI\'RAJ NABI MUHAMMAD SAW', '2025-01-25', '<p>Pada Sabtu, 25 Januari 2025, bertepatan dengan 27 Rajab 1446 H, SDN 3 Samirejo menggelar acara peringatan Isra Mi\'raj Nabi Muhammad SAW. Acara ini dihadiri oleh seluruh siswa, guru, serta staf sekolah dengan penuh khidmat dan semangat.</P\r\n\r\n<p>Isra Mi\'raj merupakan peristiwa penting dalam sejarah Islam yang menjadi momen perjalanan spiritual Nabi Muhammad SAW dari Masjidil Haram di Mekkah ke Masjidil Aqsa di Yerusalem, lalu menuju Sidratul Muntaha di langit ketujuh. Peristiwa ini menjadi dasar diwajibkannya shalat lima waktu bagi umat Islam.</P>\r\n\r\n<p>Acara dimulai dengan pembacaan ayat suci Al-Qur\'an, dilanjutkan dengan ceramah agama yang disampaikan oleh Ibu Suyati, S.Pd. Dalam ceramahnya, beliau mengingatkan pentingnya menjaga shalat lima waktu sebagai wujud ketaatan kepada Allah SWT. Selain itu, beliau juga mengajak para siswa untuk meneladani akhlak mulia Nabi Muhammad SAW dalam kehidupan sehari-hari.</P>\r\n\r\n<p>Kepala Sekolah SDN 3 Samirejo, Ibu Tutik Sulaswati, S.Pd., dalam sambutannya menyampaikan harapan agar peringatan Isra Mi\'raj ini dapat menjadi momentum bagi siswa untuk semakin mendekatkan diri kepada Allah SWT serta mengamalkan nilai-nilai Islam dalam kehidupan sehari-hari.</P>\r\n\r\n<p>Acara ditutup dengan doa bersama, memohon keberkahan dan kemudahan dalam menjalani kehidupan yang penuh tantangan di masa depan. Dengan terselenggaranya kegiatan ini, diharapkan para siswa semakin memahami makna Isra Mi\'raj dan termotivasi untuk terus berbuat kebaikan.</p>\r\n', 'berita', 'artikel2.jpg'),
(7, 'SDN 3 SAMIREJO MELAKUKAN KEGIATAN ISTIQHOSAH DAN DOA BERSAMA', '2025-02-01', '<p>Pada hari Sabtu, 1 Februari 2025, SDN 3 Samirejo menyelenggarakan kegiatan istiqhosah dan doa bersama yang diikuti oleh seluruh elemen sekolah, mulai dari para guru, staf, siswa, hingga wali murid. Kegiatan yang dilaksanakan di sekolah ini bertujuan untuk mempererat hubungan antara sekolah dan masyarakat, serta memohon kepada Tuhan Yang Maha Esa agar memberikan berkah, keselamatan, dan kemudahan dalam setiap langkah kehidupan. Dengan semangat kebersamaan, para guru, staf, siswa, dan wali murid bersama-sama berdoa agar seluruh proses pendidikan di sekolah dapat berjalan lancar, memberikan hasil yang terbaik bagi generasi penerus, dan memohon perlindungan agar senantiasa diberikan kesehatan dan kebahagiaan.</p>\r\n\r\n<p>Acara ini bukan hanya sekadar doa bersama, tetapi juga menjadi momen yang memperkuat rasa kebersamaan, saling mendukung, dan menjaga hubungan harmonis antara sekolah dan keluarga. Semua yang hadir dalam kegiatan tersebut berharap agar doa yang dipanjatkan dapat membawa berkah, meningkatkan semangat dalam belajar, serta memajukan pendidikan di lingkungan SDN 3 Samirejo. Dengan doa yang tulus dan penuh harapan, kegiatan ini diakhiri dengan penuh rasa syukur, berharap agar keberkahan senantiasa menyertai setiap usaha yang dilakukan oleh seluruh pihak yang terlibat.</p>\r\n', 'berita', 'istiqosah2.jpg'),
(8, 'SDN 3 SAMIREJO MELAKUKAN KEGIATAN SENAM BERSAMA DI LAPANGAN', '2025-02-14', '<p><strong>SDN 3 Samirejo Gelar Kegiatan Senam Bersama di Lapangan</strong></p>\r\n\r\n<p>Samirejo, 14 Februari 2025 &ndash; SDN 3 Samirejo kembali mengadakan kegiatan senam bersama yang berlangsung meriah di lapangan sekolah pada Jumat pagi. Acara ini diikuti oleh seluruh siswa, guru, serta staf sekolah dengan penuh semangat dan antusiasme.</p>\r\n\r\n<p>Kegiatan senam bersama ini merupakan bagian dari program rutin sekolah yang bertujuan untuk meningkatkan kebugaran jasmani serta menanamkan gaya hidup sehat sejak dini kepada para siswa. Dengan iringan musik yang energik, peserta senam mengikuti gerakan yang dipandu oleh instruktur dengan penuh kegembiraan.</p>\r\n\r\n<p>Kepala SDN 3 Samirejo, Ibu Tutik Sulaswati, S.Pd., dalam sambutannya menyampaikan pentingnya olahraga bagi kesehatan tubuh serta manfaatnya dalam meningkatkan konsentrasi belajar. &ldquo;Senam bersama ini tidak hanya membuat tubuh lebih sehat, tetapi juga menjadi ajang untuk meningkatkan kebersamaan dan kekompakan di lingkungan sekolah,&rdquo; ujarnya.</p>\r\n\r\n<p>Selain senam, kegiatan ini juga diisi dengan permainan edukatif dan motivasi dari para guru untuk semakin menumbuhkan semangat belajar siswa. Tidak hanya itu, beberapa siswa yang menunjukkan gerakan senam terbaik juga mendapatkan apresiasi dari pihak sekolah.</p>\r\n\r\n<p>Dengan adanya kegiatan seperti ini, diharapkan para siswa SDN 3 Samirejo semakin menyadari pentingnya menjaga kesehatan dan kebugaran tubuh. Sekolah berencana untuk terus mengadakan kegiatan serupa secara rutin guna menciptakan lingkungan sekolah yang lebih sehat dan dinamis.</p>\r\n\r\n<p>Senam bersama di SDN 3 Samirejo pun ditutup dengan suasana gembira dan penuh semangat, meninggalkan kesan positif bagi seluruh peserta yang hadir.</p>\r\n', 'berita', 'senamm.jpg'),
(9, 'SDN 3 SAMIREJO MELAKUKAN UPACARA BENDERA ', '2025-02-18', '<p>Setelah hampir satu bulan tidak melaksanakan upacara bendera, SDN 3 Samirejo akhirnya kembali menggelar upacara pada Senin, 17 Februari 2025. Upacara ini diikuti oleh seluruh siswa, guru, dan staf sekolah dengan penuh khidmat.</p>\r\n\r\n<p>Sebelumnya, kegiatan upacara bendera di sekolah ini sempat terhenti akibat kondisi lapangan yang becek dan tidak memungkinkan untuk digunakan. Hujan yang terus mengguyur daerah Samirejo menyebabkan genangan air di lapangan, sehingga pihak sekolah harus menunda pelaksanaan upacara demi keselamatan dan kenyamanan para siswa.</p>\r\n\r\n<p>Kepala SDN 3 Samirejo, Ibu Tutik Sulaswati, S.Pd., mengungkapkan rasa syukurnya atas terlaksananya kembali upacara bendera. &quot;Kami sangat senang bisa kembali melaksanakan upacara bendera setelah sekian lama tertunda. Upacara ini bukan hanya sebagai bentuk penghormatan terhadap bendera, tetapi juga sebagai ajang pembentukan karakter disiplin dan rasa cinta tanah air bagi siswa,&quot; ujarnya.</p>\r\n\r\n<p>Dalam upacara tersebut, petugas upacara yang terdiri dari siswa kelas lima dan enam menjalankan tugasnya dengan baik. Sementara itu, dalam amanatnya, Kepala Sekolah mengingatkan para siswa untuk tetap semangat belajar meskipun sempat mengalami kendala akibat cuaca.</p>\r\n\r\n<p>Dengan kondisi lapangan yang kini sudah membaik, SDN 3 Samirejo berencana untuk kembali melaksanakan upacara bendera secara rutin setiap Senin. Semoga cuaca mendukung sehingga kegiatan ini bisa terus berjalan tanpa hambatan.</p>\r\n', 'berita', 'upacara.jpg'),
(14, 'PENGUMUMAN BELAJAR DI RUMAH', '2025-02-18', '<p><strong>Pemberitahuan</strong></p>\r\n\r\n<p>Kepada seluruh siswa/i,</p>\r\n\r\n<p>Pada hari <strong>Sabtu, 22 Februari 2025</strong>, siswa/i yang <strong>tidak mengikuti kegiatan Pesta Siaga</strong> diharapkan untuk <strong>belajar di rumah</strong> secara mandiri.</p>\r\n\r\n<p>Terima kasih atas perhatian dan kerja samanya.</p>\r\n\r\n<p>Hormat kami,</p>\r\n\r\n<p><br />\r\n[Kepala Sekolah SDN 3 Samirejo]</p>\r\n', 'pengumuman', 'depan.jpg'),
(16, 'PENGUMUMAN SUPPORTER LOMBA', '2025-02-19', '<p><strong>PENGUMUMAN</strong></p>\r\n\r\n<p>Kepada Yth. Bapak/Ibu Orang Tua/Wali Murid<br />\r\nSDN 3 Samirejo</p>\r\n\r\n<p>Dengan hormat,</p>\r\n\r\n<p>Diberitahukan bahwa:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Selasa, 25 Februari 2025</strong>, seluruh siswa/i kelas III - VI&nbsp;SDN 3 Samirejo <strong>diminta untuk menjadi supporter</strong> dalam <strong>Lomba Senam Lantai</strong> yang akan diselenggarakan di <strong>SD 1 dan SD 2 Dersalam</strong>.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Rabu, 26 Februari 2025</strong>, seluruh siswa/ kelas III - VI i juga <strong>diminta untuk menjadi supporter</strong> dalam <strong>Lomba Lari</strong> yang akan berlangsung di <strong>GOR Kudus</strong>.</p>\r\n	</li>\r\n	<li>\r\n	<p>Untuk kelas I dan II belajar dirumah selama 2 hari.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Para supporter <strong>wajib berkumpul di SDN 3 Samirejo</strong>, karena nantinya akan diangkut menggunakan mobil menuju lokasi kegiatan.</p>\r\n\r\n<p>Kami mengharapkan kehadiran dan partisipasi aktif seluruh siswa/i untuk mendukung jalannya perlombaan.</p>\r\n\r\n<p>Atas perhatian dan kerja sama Bapak/Ibu, kami ucapkan terima kasih.</p>\r\n\r\n<p><strong>Hormat kami,</strong></p>\r\n\r\n<p><br />\r\nPihak Sekolah</p>\r\n\r\n<p>SDN 3 Samirejo</p>\r\n', 'pengumuman', 'depan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(2, 'I'),
(3, 'II'),
(4, 'III'),
(5, 'IV'),
(6, 'V'),
(7, 'VI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendukungsekolah`
--

CREATE TABLE `tb_pendukungsekolah` (
  `id_pendukungsekolah` int(11) NOT NULL,
  `jenis_file` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pendukungsekolah`
--

INSERT INTO `tb_pendukungsekolah` (`id_pendukungsekolah`, `jenis_file`, `name`, `file`) VALUES
(66, 'akreditasi', 'Sertifikat Akreditasi SD 3 Samirejo', '../assets/sumber/file/Sertifikat Akreditasi SD 3 Samirejo.pdf'),
(69, 'kurikulum', 'Kurikulum SDN 3 Samirejo', '../assets/sumber/file/Kurikulum SDN 3 Samirejo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_saranaprasarana`
--

CREATE TABLE `tb_saranaprasarana` (
  `id_saranaprasarana` int(11) NOT NULL,
  `nama_saranaprasarana` varchar(50) NOT NULL,
  `jenis_saranaprasarana` varchar(50) NOT NULL,
  `jumlah_saranaprasarana` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_saranaprasarana`
--

INSERT INTO `tb_saranaprasarana` (`id_saranaprasarana`, `nama_saranaprasarana`, `jenis_saranaprasarana`, `jumlah_saranaprasarana`) VALUES
(5, 'Kantor Guru', 'prasarana', 1),
(6, 'Ruang Kelas', 'prasarana', 6),
(23, 'LCD/Proyektor', 'sarana', 1),
(22, 'Laptop', 'sarana', 3),
(20, 'Lapangan', 'prasarana', 1),
(19, 'Kantin Sekolah', 'prasarana', 1),
(17, 'Perpustakaan', 'prasarana', 1),
(21, 'Printer', 'sarana', 1),
(18, 'Unit Kesehatan Sekolah (UKS)', 'prasarana', 1),
(24, 'Papan Tulis Kelas ', 'sarana', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL,
  `sejarah_sekolah` longtext NOT NULL,
  `kata_sambutan` longtext NOT NULL,
  `foto_logo` varchar(255) NOT NULL,
  `foto_struktur` varchar(255) NOT NULL,
  `foto_utama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama_sekolah`, `visi`, `misi`, `sejarah_sekolah`, `kata_sambutan`, `foto_logo`, `foto_struktur`, `foto_utama`) VALUES
(5, 'SDN 3 Samirejo', 'Terwujudnya Peserta Didik yang Beriman dan Bertaqwa, Cerdas, Terampil, Berkarakter dan Berdaya Saing Global', '<ol>\r\n	<li>Membiasakan kegiatan yang mencerminkan karakter Profil Pelajar Pancasila.</li>\r\n	<li>Mengoptimalkan PBM dan bimbingan yang menerapkan PAKEM (Pembelajaran Aktif, Kreatif, Efektif dan Menyenangkan).</li>\r\n	<li>Melaksanakan pembelajaran yang melatih ketrampilan abad 21.</li>\r\n	<li>Melaksanakan program sekolah berbasis kearifan lokal.</li>\r\n	<li>Melaksanakan kegiatan pengelolaan dan pelestarian lingkungan hidup dalam menunjang sekolah bersih dan sehat.</li>\r\n</ol>\r\n', '<p>SDN 3 Samirejo adalah sebuah sekolah dasar negeri yang berlokasi di Jl. Kaliyitno Kulon No.370, Samirejo, Kec. Dawe, Kabupaten Kudus, Jawa Tengah 59353. SDN 3 Samirejo didirikan pada tanggal 10 Februari 1986 dengan tujuan memberikan pendidikan berkualitas kepada anak-anak. Sejak awal berdirinya, SDN 3 Samirejo berkomitmen untuk menjadi lembaga pendidikan yang mengembangkan potensi anak bangsa dengan nilai-nilai moral dan akademik yang baik. Sekolah ini berdiri sebagai bagian dari upaya pemerintah untuk menyediakan pendidikan dasar yang berkualitas bagi masyarakat di wilayah Samirejo dan sekitarnya.</p>\r\n\r\n<p>Sekolah ini telah berakreditasi A pada tanggal 4 Desember 2018, menunjukkan komitmennya dalam meningkatkan kualitas pendidikan. Dengan dukungan dari masyarakat dan pemerintah, SDN 3 Samirejo terus berupaya menjadi sekolah yang dihormati dan diandalkan di daerahnya, membentuk generasi muda yang cerdas dan berakhlak mulia.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><strong>Assalamu&#39;alaikum warahmatullahi wabarakatuh,<br />\r\nSalam sejahtera bagi kita semua,<br />\r\nOm Swastiastu,<br />\r\nNamo Buddhaya,<br />\r\nSalam Kebajikan.</strong></p>\r\n\r\n<p>Selamat datang di website resmi SDN 3 Samirejo!</p>\r\n\r\n<p>Puji syukur kita panjatkan kepada Tuhan Yang Maha Esa, karena atas izin dan rahmat-Nya, kami dapat mempersembahkan website ini sebagai salah satu sarana komunikasi dan informasi bagi seluruh keluarga besar SDN 3 Samirejo, mulai dari siswa, orang tua, tenaga pendidik, hingga masyarakat umum.</p>\r\n\r\n<p>Website ini hadir dengan tujuan untuk memberikan informasi yang lebih mudah diakses mengenai berbagai kegiatan, fasilitas, dan perkembangan yang ada di sekolah kami. Kami percaya bahwa teknologi memiliki peran yang sangat penting dalam mendukung proses pendidikan yang berkualitas, dan melalui platform ini, kami berharap dapat menjalin hubungan yang lebih dekat dengan orang tua serta masyarakat.</p>\r\n\r\n<p>SDN 3 Samirejo selalu berkomitmen untuk menyediakan pendidikan yang berkualitas, dengan pendekatan yang holistik untuk mendidik anak-anak bangsa yang cerdas, kreatif, dan berbudi pekerti luhur. Kami juga mengutamakan kerjasama yang erat antara pihak sekolah, orang tua, dan masyarakat untuk menciptakan lingkungan belajar yang menyenangkan dan mendukung perkembangan anak-anak.</p>\r\n\r\n<p>Kami berharap website ini dapat menjadi sumber informasi yang bermanfaat, baik untuk keperluan akademik, kegiatan ekstrakurikuler, maupun informasi lainnya yang berkaitan dengan sekolah. Kami juga mengajak seluruh pihak untuk terus berkolaborasi demi memajukan pendidikan di SDN 3 Samirejo dan menciptakan generasi penerus bangsa yang siap menghadapi tantangan global.</p>\r\n\r\n<p>Terima kasih atas perhatian dan dukungannya. Semoga keberadaan website ini dapat mempererat hubungan kita semua dan memberikan kontribusi positif bagi dunia pendidikan.</p>\r\n\r\n<p><strong>Wassalamu&#39;alaikum warahmatullahi wabarakatuh.</strong></p>\r\n', 'logo.png', 'Struktur Organisasi Guru.jpg', 'depan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nisn` varchar(16) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kelas` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nisn`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `id_kelas`) VALUES
(8, '678678', '68768', 'hgjhghkgjh', 'khjkhjk', '2021-06-22', 'pr', 'Komplek Perumahan ITP Blok A-2, Kelurahan Gurun Laweh,  Kecamatan Nanggalo Kota Padang.', 1),
(9, '9888', '8888', 'hhhh', 'PADANG', '2021-06-22', 'lk', 'ghfghfg', 1),
(10, '123', '', 'ZULIANA NURUL JANNAH', 'KUDUS', '2003-06-23', 'pr', 'Bae Krajan', 0),
(11, '123', '122', 'ZULIANA NURUL JANNAH', 'KUDUS', '2003-06-23', 'pr', 'Bae Krajan 03/01', 0),
(12, '123', '122', 'Elvan', 'KUDUS', '0000-00-00', 'lk', 'Bae Krajan', 0),
(24, '637', '3189773352', 'ADIBA SHAKILA ATMARANI', 'KUDUS', '2018-01-21', 'pr', 'Samirejo RT 03 / RW 05', 2),
(25, '638', '3174175372', 'APRILIA KHANZA AZAHRA', 'KUDUS', '2017-04-04', 'pr', 'Samirejo RT 01 / RW 06', 2),
(26, '639', '', 'FAIZAN AZRIL MUSYARY', 'KUDUS', '2019-06-21', 'lk', 'Samirejo RT 02 / RW 06', 2),
(27, '640', '', 'NALENDRA NAUFAL AKHTAR', 'KUDUS', '2019-08-28', 'lk', 'Samirejo RT 03 / RW 05', 2),
(30, '641', '', 'MUHAMMAD VIKIY ADIYANTO', 'KUDUS', '2019-12-07', 'lk', 'Samirejo RT 02 / RW 06', 2),
(31, '632', '3171040288', 'AHMAD ZAKKA MUSTHOFA SILMI', 'KUDUS', '2017-06-06', 'lk', 'Samirejo RT 03 / RW 05', 3),
(32, '622', '3160544851', 'DHANU AHMAD SYAPUTRA', 'KUDUS', '2016-10-17', 'lk', 'Samirejo RT 04 / RW 05', 3),
(33, '622', '3171956610', 'JASSMINE AYU WARDANI', 'KUDUS', '2017-03-15', 'pr', 'Samirejo RT 03 / RW 05', 3),
(34, '627', '3187052476', 'MUHAMMAD AL FATIH IBRAHIM', 'KUDUS', '2018-03-26', 'lk', 'Samirejo RT 01 / RW 06', 3),
(35, '623', '3179066405', 'MUHAMMAD LINTANG RAFAEL', 'KUDUS', '2017-01-16', 'lk', 'Cendono', 3),
(36, '626', '3177345924', 'MOHAMMAD MARSEL SULISTIYO', 'KUDUS', '2017-12-03', 'lk', 'Samirejo RT 05 / RW 02', 3),
(37, '634', '3172870967', 'MUHAMMAD RASYA ATHAYA RAMADHAN', 'KUDUS', '2017-05-31', 'lk', 'Samirejo RT 02 / RW 04', 3),
(38, '635', '3176888239', 'RAFEL RAYYAN ALFARIZI', 'KUDUS', '2017-07-04', 'lk', 'Samirejo RT 03 / RW 05', 3),
(39, '628', '3182892946', 'RISTA NAELA SARI', 'KUDUS', '2018-09-23', 'pr', 'Samirejo RT 01 / RW 06', 3),
(40, '629', '3178067844', 'SABRIYA ALMAHYRA', 'KUDUS', '2017-10-22', 'pr', 'Samirejo RT 02 / RW 06', 3),
(41, '630', '3173652313', 'WIBI ALFARUQ', 'KUDUS', '2017-12-19', 'lk', 'Samirejo RT 01 / RW 06', 3),
(42, '620', '3163744205', 'ARSYILA SHAQUEENA HUMAIRA', 'DEMAK', '2016-06-09', 'pr', 'Samirejo RT 02 / RW 04', 4),
(43, '621', '3160966252', 'AZILA ALFUN LAILA', 'KUDUS', '2016-06-23', 'pr', 'Samirejo RT 04 / RW 05', 4),
(44, '631', '3169490187', 'DINY AGUSTINA SAFITRI', 'KUDUS', '2016-08-10', 'pr', 'Samirejo RT 01 / RW 06', 4),
(45, '624', '3160886328', 'NALA SYAHRU ARDIANSYAH', 'KUDUS', '2016-06-07', 'lk', 'Samirejo RT 04 / RW 05', 4),
(46, '625', '3161525357', 'NASYITA NAURA ANGGRAINI', 'KUDUS', '2016-03-26', 'pr', 'Samirejo RT 01 / RW 05', 4),
(47, '629', '3159373639', 'ANISA SALSABILLA PUTRI', 'KUDUS', '2015-07-28', 'pr', 'Samirejo RT 01 / RW 05', 5),
(48, '618', '3158632291', 'MUHAMMAD RAMA SAPUTRA', 'KUDUS', '2015-03-31', 'lk', 'Samirejo RT 04 / RW 02', 5),
(49, '617', '3155089677', 'REJA AMELIA PUTRI', 'KUDUS', '2015-03-02', 'pr', 'Samirejo RT 02 / RW 05', 5),
(50, '617', '3150807872', 'RISMA DWI ANGGUN', 'KUDUS', '2015-09-10', 'pr', 'Samirejo RT 01 / RW 05', 5),
(51, '617', '3133246803', 'RIZKI AHMAD FARDANA', 'KUDUS', '2014-10-15', 'lk', 'Samirejo RT 03 / RW 04', 5),
(52, '612', '3145642056', 'AHMAD DAFIQ AL HIKAM', 'KUDUS', '2014-07-19', 'lk', 'Samirejo RT 04 / RW 05', 6),
(53, '613', '3140974156', 'AINUN MAHYA PUTRI', 'KUDUS', '2014-04-30', 'pr', 'Samirejo RT 02 / RW 06', 6),
(54, '614', '3140521971', 'BEAUTY ALAMANDA SAFITRI', 'KUDUS', '2014-08-06', 'pr', 'Samirejo RT 02 / RW 03', 6),
(55, '615', '3146917589', 'MUHAMMAD LUTHFIE ZAIDAN', 'KUDUS', '2014-03-13', 'lk', 'Samirejo RT 04 / RW 05', 6),
(56, '602', '0135631500', 'MARSHA SABRINA YUMNA WIJAYA', 'KUDUS', '2013-09-26', 'pr', 'Samirejo RT 04 / RW 02', 7),
(57, '597', '0136579757', 'RIQZA HABIBA MAULIDA', 'KUDUS', '2014-01-21', 'pr', 'Samirejo RT 04 / RW 05', 7),
(58, '604', '0133404547', 'SITI FADILAH PUTRI SUPRIYATNA', 'JAKARTA', '2013-05-08', 'pr', 'Susukan RT 01 / RW 06', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  ADD PRIMARY KEY (`id_bukutamu`);

--
-- Indexes for table `tb_ekstrakurikuler`
--
ALTER TABLE `tb_ekstrakurikuler`
  ADD PRIMARY KEY (`id_ekstrakurikuler`);

--
-- Indexes for table `tb_ekstrakurikuler_siswa`
--
ALTER TABLE `tb_ekstrakurikuler_siswa`
  ADD PRIMARY KEY (`id_ekstrakurikuler_siswa`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_pendukungsekolah`
--
ALTER TABLE `tb_pendukungsekolah`
  ADD PRIMARY KEY (`id_pendukungsekolah`);

--
-- Indexes for table `tb_saranaprasarana`
--
ALTER TABLE `tb_saranaprasarana`
  ADD PRIMARY KEY (`id_saranaprasarana`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  MODIFY `id_bukutamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ekstrakurikuler`
--
ALTER TABLE `tb_ekstrakurikuler`
  MODIFY `id_ekstrakurikuler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_ekstrakurikuler_siswa`
--
ALTER TABLE `tb_ekstrakurikuler_siswa`
  MODIFY `id_ekstrakurikuler_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pendukungsekolah`
--
ALTER TABLE `tb_pendukungsekolah`
  MODIFY `id_pendukungsekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tb_saranaprasarana`
--
ALTER TABLE `tb_saranaprasarana`
  MODIFY `id_saranaprasarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
