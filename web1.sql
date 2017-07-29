-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2017 at 04:39 AM
-- Server version: 10.2.3-MariaDB-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web1`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama_kontak` varchar(255) NOT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama_kontak`, `telp`, `user_id`) VALUES
(1, 'Kontak', '082336695669', 2),
(4, 'Kontak', '082333669566', 1),
(5, 'a', '018233669566', 2);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `jumlah` varchar(11) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama_paket`, `jumlah`, `harga`) VALUES
(2, 'Ab', '10', '10000'),
(3, 'B', '20', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `user_id`, `paket_id`, `tgl`) VALUES
(1, 2, 2, '0000-00-00'),
(2, 2, 3, '2017-07-28'),
(3, 3, 2, '2017-07-28'),
(4, 3, 2, '2017-07-28'),
(5, 3, 2, '2017-07-29'),
(6, 3, 2, '2017-07-29'),
(7, 3, 2, '2017-07-29'),
(8, 2, 2, '2017-07-29'),
(9, 2, 3, '2017-07-29'),
(10, 2, 2, '2017-07-29'),
(11, 2, 2, '2017-07-29'),
(12, 2, 2, '2017-07-29'),
(13, 2, 2, '2017-07-29'),
(14, 2, 2, '2017-07-29'),
(15, 2, 2, '2017-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `alamat` varchar(12) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `alamat`, `judul`, `isi`, `tgl`, `user_id`, `status`) VALUES
(3, '081', 'tes', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-27', 1, 1),
(4, '082', 'tes', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-27', 1, 1),
(5, '082336695669', 'Judul', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-27', 1, 1),
(6, '081', 'tes', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-27', 1, 1),
(7, '082336695669', 'aaaa', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-27', 1, 0),
(8, '081', 'tes', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-28', 2, 1),
(9, '081', 'tes', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-28', 2, 1),
(10, '09', 'tes', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-28', 1, 1),
(11, '081', 'Judul 2', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-28', 1, 1),
(12, '87', 'tt', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-28', 2, 1),
(13, '008', 'tes', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-28', 1, 1),
(14, '12', 'a', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-28', 2, 1),
(15, '081', 'tes', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-28', 2, 1),
(16, '12', 'a', '<u>Heading Of Message</u>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>', '2017-07-29', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `email`, `level`, `credits`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin@admin.comw', 'Admin', 0),
(2, 'member', '28b662d883b6d76fd96e4ddc5e9ba780', 'Member', 'member@member.com', 'Member', 117),
(3, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes1', 'tes@tes.com', 'Member', 49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user.id` (`user_id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paket_id` (`paket_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kontak`
--
ALTER TABLE `kontak`
  ADD CONSTRAINT `kontak_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_ibfk_2` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
