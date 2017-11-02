-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Feb 2016 pada 08.10
-- Versi Server: 5.1.22-rc-community
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kotak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE IF NOT EXISTS `jawaban` (
  `TANGGAL` char(10) NOT NULL,
  `NO` int(11) DEFAULT NULL,
  `NOS` int(11) DEFAULT NULL,
  `NIK` char(9) NOT NULL,
  `jawab` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`TANGGAL`, `NO`, `NOS`, `NIK`, `jawab`) VALUES
('16-02-2016', 2, 1, 'P00001002', 'cepat'),
('16-02-2016', 2, 1, 'P00001002', 'cepat'),
('16-02-2016', 2, 1, 'P00001002', 'cepat'),
('16-02-2016', 1, 1, 'P00001001', 'cepat'),
('16-02-2016', 1, 1, 'P00001001', 'cepat'),
('16-02-2016', 1, 1, 'P00001001', 'cepat'),
('16-02-2016', 2, 1, 'P00001002', 'cepat'),
('16-02-2016', 2, 2, 'P00001002', 'cepat'),
('16-02-2016', 2, 3, 'P00001002', 'cepat'),
('16-02-2016', 3, 2, 'P00001003', 'tidak cepat'),
('16-02-2016', 3, 2, 'P00001003', 'tidak cepat'),
('16-02-2016', 4, 2, 'P00001004', 'cepat'),
('16-02-2016', 4, 3, 'P00001004', 'ramah'),
('16-02-2016', 3, 2, 'P00001003', 'cepat'),
('16-02-2016', 3, 3, 'P00001003', 'ramah'),
('17-02-2016', 5, 2, 'P00001005', 'cepat'),
('17-02-2016', 5, 3, 'P00001005', 'tidak ramah'),
('17-02-2016', 5, 2, 'P00001005', 'tidak cepat'),
('17-02-2016', 5, 3, 'P00001005', 'ramah'),
('17-02-2016', 6, 2, 'P00001006', 'tidak cepat'),
('17-02-2016', 6, 2, 'P00001006', 'cepat'),
('17-02-2016', 5, 1, 'P00001005', 'cepat'),
('17-02-2016', 6, 1, 'P00001006', 'tidak cepat'),
('17-02-2016', 4, 1, 'P00001004', 'tidak cepat'),
('17-02-2016', 4, 2, 'P00001004', 'ramah'),
('17-02-2016', 4, 2, 'P00001004', 'ramah'),
('17-02-2016', 4, 1, 'P00001004', 'tidak cepat'),
('17-02-2016', 4, 2, 'P00001004', 'tidak ramah'),
('17-02-2016', 4, 3, 'P00001004', 'tidak puas'),
('17-02-2016', 5, 1, 'P00001005', 'tidak cepat'),
('17-02-2016', 5, 2, 'P00001005', 'ramah'),
('17-02-2016', 5, 3, 'P00001005', 'puas'),
('17-02-2016', 2, 1, 'P00001002', 'tidak cepat'),
('17-02-2016', 2, 2, 'P00001002', 'tidak ramah'),
('17-02-2016', 2, 3, 'P00001002', 'tidak puas'),
('18-02-2016', 5, 1, 'P00001005', 'tidak cepat'),
('18-02-2016', 5, 2, 'P00001005', 'ramah'),
('18-02-2016', 5, 3, 'P00001005', 'puas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
  `NO` int(11) DEFAULT NULL,
  `NIK` char(9) DEFAULT NULL,
  `TANGGAL` char(10) DEFAULT NULL,
  `CEPAT` int(11) DEFAULT NULL,
  `TIDAK_CEPAT` int(11) DEFAULT NULL,
  `RAMAH` int(11) DEFAULT NULL,
  `TIDAK_RAMAH` int(11) DEFAULT NULL,
  `PUAS` int(11) DEFAULT NULL,
  `TIDAK_PUAS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`NO`, `NIK`, `TANGGAL`, `CEPAT`, `TIDAK_CEPAT`, `RAMAH`, `TIDAK_RAMAH`, `PUAS`, `TIDAK_PUAS`) VALUES
(1, 'P00001001', 'tgl', 3, 0, 0, 0, 0, 0),
(2, 'P00001002', 'tgl', 4, 0, 0, 0, 0, 0),
(3, 'P00001003', 'tgl', 0, 0, 0, 0, 0, 0),
(4, 'P00001004', 'tgl', 0, 0, 0, 0, 0, 0),
(5, 'P00001005', 'tgl', 0, 0, 0, 0, 0, 0),
(6, 'P00001006', 'tgl', 0, 0, 0, 0, 0, 0),
(1, 'P00001001', 'tgl', 0, 0, 0, 0, 0, 0),
(2, 'P00001002', 'tgl', 0, 0, 0, 0, 0, 0),
(3, 'P00001003', 'tgl', 0, 0, 0, 0, 0, 0),
(4, 'P00001004', 'tgl', 0, 2, 2, 1, 0, 1),
(5, 'P00001005', 'tgl', 1, 1, 1, 0, 1, 0),
(6, 'P00001006', 'tgl', 0, 1, 0, 0, 0, 0),
(2, 'P00001002', '17-02-2016', 0, 1, 0, 1, 0, 1),
(1, 'P00001001', '18-02-2016', 0, 0, 0, 0, 0, 0),
(5, 'P00001005', '18-02-2016', 0, 1, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loket`
--

CREATE TABLE IF NOT EXISTS `loket` (
  `NO` int(11) NOT NULL AUTO_INCREMENT,
  `NIK` char(9) DEFAULT NULL,
  `KETERANGAN` char(30) DEFAULT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `loket`
--

INSERT INTO `loket` (`NO`, `NIK`, `KETERANGAN`) VALUES
(1, 'P00001001', 'Loket 1'),
(2, 'P00001002', 'Loket 2'),
(3, 'P00001003', 'Loket 3'),
(4, 'P00001004', 'Loket 4'),
(5, 'P00001005', 'Loket 5'),
(6, 'P00001006', 'Loket 6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `NIK` char(9) NOT NULL,
  `NAMA` char(30) DEFAULT NULL,
  `JK` char(15) DEFAULT NULL,
  `ALAMAT` char(40) DEFAULT NULL,
  `JABATAN` char(25) DEFAULT NULL,
  PRIMARY KEY (`NIK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`NIK`, `NAMA`, `JK`, `ALAMAT`, `JABATAN`) VALUES
('P00001001', 'INDAH', 'P', 'LAMONGAN', 'PEGAWAI'),
('P00001002', 'SITI', 'P', 'LAMONGAN', 'PEGAWAI'),
('P00001003', 'HASANAH', 'P', 'LAMONGAN', 'PEGAWAI'),
('P00001004', 'YULI', 'P', 'LAMONGAN', 'PEGAWAI'),
('P00001005', 'NINA', 'P', 'LAMONGAN', 'PEGAWAI'),
('P00001006', 'BAGUS', 'L', 'LAMONGAN', 'PEGAWAI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan` (
  `NOS` int(11) NOT NULL AUTO_INCREMENT,
  `SOAL` char(255) DEFAULT NULL,
  PRIMARY KEY (`NOS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`NOS`, `SOAL`) VALUES
(1, 'Menurut Anda petugas loket yang Anda kunjungi memiliki pelayanan yang?'),
(2, 'Menurut Anda petugas loket yang Anda kunjungi memiliki pelayanan yang?'),
(3, 'Puaskah Anda terhadap pelayanan petugas loket yang Anda kunjungi?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
