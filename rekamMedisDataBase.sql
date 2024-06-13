-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 02:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `nomorSTR` bigint(20) NOT NULL,
  `nama_dokter` varchar(200) NOT NULL,
  `poli` varchar(200) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `nomorTelepon` int(16) NOT NULL,
  `emailDokter` varchar(50) NOT NULL,
  `mulaiKerja` time NOT NULL,
  `selesaiKerja` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`nomorSTR`, `nama_dokter`, `poli`, `pendidikan`, `nomorTelepon`, `emailDokter`, `mulaiKerja`, `selesaiKerja`) VALUES
(1234724408025762, 'Dr. Eka Putra', 'Poli Kandungan dan Kebidanan', 'S.Ked, Sp.OG', 2147483647, 'eka.putra@klinik.com', '13:00:00', '21:00:00'),
(1480594449457742, 'Dr. Farhan Iskandar', 'Poli THT', 'S.Ked, Sp.THT', 2147483647, 'farhan.iskandar@klinik.com', '14:00:00', '22:00:00'),
(2605290440811331, 'Dr. Rian Nugroho', 'Poli Endokrinologi', 'S.Ked, Sp.PD-KEMD', 2147483647, 'rian.nugroho@klinik.com', '11:00:00', '19:00:00'),
(2644037839101400, 'Dr. Dian Susanti', 'Poli Kulit dan Kelamin', 'S.Ked, Sp.KK', 2147483647, 'dian.susanti@klinik.com', '12:00:00', '20:00:00'),
(3408876324613314, 'Dr. Budi Santoso', 'Poli Anak', 'S.Ked, Sp.A', 2147483647, 'budi.santoso@klinik.com', '10:00:00', '18:00:00'),
(3767138929361684, 'Dr. Irfan Setiawan', 'Poli Saraf', 'S.Ked, Sp.N', 2147483647, 'irfan.setiawan@klinik.com', '17:00:00', '01:00:00'),
(3796155874082669, 'Dr. Putra Wibowo', 'Poli Ortopedi', 'S.Ked, Sp.OT', 2147483647, 'putra.wibowo@klinik.com', '09:00:00', '17:00:00'),
(4688807849021884, 'Dr. Taufik Hidayat', 'Poli Hematologi', 'S.Ked, Sp.PD-KHOM', 2147483647, 'taufik.hidayat@klinik.com', '13:00:00', '21:00:00'),
(4992535087691300, 'Dr. Maya Anggraini', 'Poli Psikiatri', 'S.Ked, Sp.KJ', 2147483647, 'maya.anggraini@klinik.com', '21:00:00', '05:00:00'),
(5341622325577358, 'Dr. Ahmad Sutrisno', 'Poli Umum', 'S.Ked, M.Ked', 2147483647, 'ahmad.sutrisno@klinik.com', '09:00:00', '17:00:00'),
(5458956251322929, 'Dr. Hana Pratiwi', 'Poli Jantung', 'S.Ked, Sp.JP', 2147483647, 'hana.pratiwi@klinik.com', '16:00:00', '00:00:00'),
(6284998798271870, 'Dr. Utami Kusuma', 'Poli Onkologi', 'S.Ked, Sp.ONK', 2147483647, 'utami.kusuma@klinik.com', '14:00:00', '22:00:00'),
(6619686857197788, 'Dr. Kartika Dewi', 'Poli Paru', 'S.Ked, Sp.P', 2147483647, 'kartika.dewi@klinik.com', '19:00:00', '03:00:00'),
(6940942896471451, 'Dr. Joko Prabowo', 'Poli Bedah', 'S.Ked, Sp.B', 2147483647, 'joko.prabowo@klinik.com', '18:00:00', '02:00:00'),
(6977364442100208, 'Dr. Nanda Firdaus', 'Poli Gizi', 'S.Gz, M.Gz', 2147483647, 'nanda.firdaus@klinik.com', '22:00:00', '06:00:00'),
(6996766841895648, 'Dr. Oktaviani Putri', 'Poli Penyakit Dalam', 'S.Ked, Sp.PD', 2147483647, 'oktaviani.putri@klinik.com', '23:00:00', '07:00:00'),
(7036549780168228, 'Dr. Clara Wijaya', 'Poli Gigi', 'S.KG, Sp.KG', 2147483647, 'clara.wijaya@klinik.com', '11:00:00', '19:00:00'),
(7483834997289139, 'Dr. Qori Handayani', 'Poli Urologi', 'S.Ked, Sp.U', 2147483647, 'qori.handayani@klinik.com', '10:00:00', '18:00:00'),
(7533507359570877, 'Dr. Leo Wicaksono', 'Poli Rehabilitasi Medis', 'S.Ked, Sp.KFR', 2147483647, 'leo.wicaksono@klinik.com', '20:00:00', '04:00:00'),
(8978892114774005, 'Dr. Vina Permata', 'Poli Infeksi dan Penyakit Tropis', 'S.Ked, Sp.PD-KPTI', 2147483647, 'vina.permata@klinik.com', '15:00:00', '23:00:00'),
(9258260331313081, 'Dr. Gita Lestari', 'Poli Mata', 'S.Ked, Sp.M', 2147483647, 'gita.lestari@klinik.com', '15:00:00', '23:00:00'),
(9331208833167543, 'Dr. Sari Lestari', 'Poli Geriatri', 'S.Ked, Sp.PD-KGer', 2147483647, 'sari.lestari@klinik.com', '12:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `inputdokter`
--

CREATE TABLE `inputdokter` (
  `record_number` varchar(20) NOT NULL,
  `namaPasien` varchar(50) NOT NULL,
  `nama_dokter` varchar(200) NOT NULL,
  `poliTujuan` varchar(20) NOT NULL,
  `keluhan` varchar(200) NOT NULL,
  `tindakan` varchar(200) NOT NULL,
  `diagnosis` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `riwayatPenyakit` varchar(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inputdokter`
--

INSERT INTO `inputdokter` (`record_number`, `namaPasien`, `nama_dokter`, `poliTujuan`, `keluhan`, `tindakan`, `diagnosis`, `status`, `riwayatPenyakit`, `catatan`, `created_at`) VALUES
('PA-06-2024-001', 'Ariel', 'Dr. Budi Santoso', 'PA', 'qq', 'qq', 'qq', 'qq', 'qq', 'qq', '2024-06-11 04:06:05'),
('PR-06-2024-001', 'Ariel', 'Dr. Leo Wicaksono', 'PR', 'fgfh', 'AA', 'AA', 'gf', 'dvs', 'SAS', '2024-06-11 04:21:02'),
('PS-06-2024-001', 'Dethia', 'Dr. Irfan Setiawan', 'PS', 'fgfh', 'fg', 'dvs', 'gf', 'ASA', 'gf', '2024-06-11 04:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kodeObat` varchar(15) NOT NULL,
  `namaObat` varchar(50) NOT NULL,
  `hargaObat` int(7) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kodeObat`, `namaObat`, `hargaObat`, `keterangan`) VALUES
('BU001', 'Ceftriaxone', 50000, 'Antibiotik untuk pencegahan infeksi pasca operasi.'),
('BU002', 'Tramadol', 5000, 'Untuk nyeri sedang hingga berat.'),
('EN001', 'Metformin', 20000, 'Untuk diabetes tipe 2.'),
('EN002', 'Levothyroxine', 18000, 'Untuk hipotiroidisme.'),
('EN003', 'Insulin', 150000, 'Untuk diabetes tipe 1 dan tipe 2.'),
('GD001', 'Chlorhexidine mouthwash', 50000, 'Untuk infeksi gusi.'),
('GI001', 'Omeprazole', 20000, 'Untuk GERD.'),
('GI002', 'Loperamide', 15000, 'Untuk diare.'),
('GI003', 'Mesalamine', 50000, 'Untuk penyakit inflamasi usus.'),
('GZ001', 'Multivitamin', 25000, 'Untuk kekurangan gizi.'),
('GZ002', 'Suplemen zat besi', 50000, 'Untuk anemia.'),
('GZ003', 'Suplemen kalsium', 75000, 'Untuk kesehatan tulang.'),
('HE001', 'Warfarin', 20000, 'Untuk mencegah pembekuan darah.'),
('HE002', 'Hydroxyurea', 40000, 'Untuk anemia sel sabit.'),
('HE003', 'Epoetin alfa', 1000000, 'Untuk anemia akibat penyakit ginjal kronis.'),
('KK001', 'Hidrokortison krim', 15000, 'Untuk peradangan kulit.'),
('KK002', 'Clotrimazole', 10000, 'Untuk infeksi jamur kulit.'),
('KK003', 'Doxycycline', 7000, 'Untuk jerawat parah.'),
('KR001', 'Amlodipine', 6000, 'Untuk tekanan darah tinggi.'),
('KR002', 'Atorvastatin', 25000, 'Untuk menurunkan kolesterol.'),
('KR003', 'Aspirin', 3000, 'Untuk pencegahan serangan jantung.'),
('MT001', 'Ciprofloxacin', 5000, 'Tetes mata antibiotik untuk infeksi mata.'),
('MT002', 'Prednisolone', 3000, 'Tetes mata steroid untuk peradangan.'),
('MT003', 'Tetes mata antihistamin', 10000, 'Untuk alergi mata.'),
('OB001', 'Asam folat', 25000, 'Untuk wanita hamil guna mencegah cacat lahir.'),
('OB002', 'Progesteron', 75000, 'Untuk dukungan kehamilan pada kasus tertentu.'),
('OB003', 'Metronidazole', 10000, 'Untuk infeksi bakteri vagina.'),
('ON001', 'Cisplatin', 500000, 'Kemoterapi untuk kanker.'),
('ON002', 'Anastrozole', 300000, 'Untuk kanker payudara.'),
('ON003', 'Ondansetron', 50000, 'Untuk mual akibat kemoterapi.'),
('OR001', 'Ibuprofen', 3500, 'Untuk nyeri dan peradangan sendi.'),
('OR002', 'Alendronate', 200000, 'Untuk osteoporosis.'),
('OR003', 'Acetaminophen', 35000, 'Untuk nyeri pasca operasi.'),
('PA001', 'Acetaminophen (Tylenol) anak', 35000, 'Untuk demam dan nyeri pada anak.'),
('PA002', 'Amoxicillin', 6000, 'Antibiotik untuk infeksi bakteri pada anak-anak.'),
('PA003', 'Albuterol', 150000, 'Untuk asma dan masalah pernapasan.'),
('PL001', 'Salbutamol inhaler', 130000, 'Untuk asma.'),
('PL002', 'Prednisone', 4000, 'Untuk peradangan paru-paru.'),
('PL003', 'Azithromycin', 25000, 'Antibiotik untuk infeksi paru-paru.'),
('PS001', 'Sertraline', 100000, 'Untuk depresi dan kecemasan.'),
('PS002', 'Olanzapine', 150000, 'Untuk skizofrenia.'),
('PS003', 'Lithium', 200000, 'Untuk gangguan bipolar.'),
('PU001', 'Paracetamol', 2800, 'Untuk demam dan nyeri ringan hingga sedang.'),
('PU002', 'Ibuprofen', 3500, 'Untuk peradangan dan nyeri.'),
('PU003', 'Amoxicillin', 6000, 'Antibiotik untuk infeksi bakteri.'),
('RM001', 'Baclofen', 10000, 'Untuk kejang otot.'),
('SR001', 'Gabapentin', 10000, 'Untuk nyeri saraf.'),
('SR002', 'Levodopa', 100000, 'Untuk penyakit Parkinson.'),
('SR003', 'Lamotrigine', 50000, 'Antikonvulsan untuk epilepsi.'),
('THT001', 'Loratadine', 3500, 'Untuk alergi.'),
('THT003', 'Mometasone', 200000, 'Spray hidung untuk rinitis alergi.'),
('UR001', 'Tamsulosin', 75000, 'Untuk pembesaran prostat.'),
('UR002', 'Sildenafil', 50000, 'Untuk disfungsi ereksi.');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kode_pasien` varchar(14) NOT NULL,
  `namaPasien` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `emailPasien` varchar(50) NOT NULL,
  `nomorTelepon` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kode_pasien`, `namaPasien`, `jenisKelamin`, `tanggalLahir`, `umur`, `pekerjaan`, `emailPasien`, `nomorTelepon`, `alamat`) VALUES
('11-06-2024-001', 'Dethia', 'Perempuan', '2001-07-22', 22, ' Mahasiswa', 'dethia.calista@gmail.com', '085777787712', 'Jl. Bumi Raya No. 21');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `kodepoli` varchar(10) NOT NULL,
  `namapoli` varchar(255) NOT NULL,
  `nama_dokter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`kodepoli`, `namapoli`, `nama_dokter`) VALUES
('PA', 'Poli Anak', 'Dr. Budi Santoso'),
('PE', 'Poli Endokrinologi', 'Dr. Rian Nugroho'),
('PG', 'Poli Gigi', 'Dr. Clara Wijaya'),
('PGZ', 'Poli Gizi', 'Dr. Nanda Firdaus'),
('PH', 'Poli Hematologi', 'Dr. Taufik Hidayat'),
('PJ', 'Poli Jantung', 'Dr. Hana Pratiwi'),
('PK', 'Poli Kandungan dan Kebidanan', 'Dr. Eka Putra'),
('PKK', 'Poli Kulit dan Kelamin', 'Dr. Dian Susanti'),
('PM', 'Poli Mata', 'Dr. Gita Lestari'),
('PO', 'Poli Ortopedi', 'Dr. Putra Wibowo'),
('POK', 'Poli Onkologi', 'Dr. Utami Kusuma'),
('PP', 'Poli Paru', 'Dr. Kartika Dewi'),
('PPK', 'Poli Psikiatri', 'Dr. Maya Anggraini'),
('PR', 'Poli Rehabilitasi Medis', 'Dr. Leo Wicaksono'),
('PS', 'Poli Saraf', 'Dr. Irfan Setiawan'),
('PTHT', 'Poli THT', 'Dr. Farhan Iskandar'),
('PU', 'Poli Umum', 'Dr. Ahmad Sutrisno'),
('PUR', 'Poli Urologi', 'Dr. Qori Handayani');

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `record_number` varchar(20) NOT NULL,
  `namaPasien` varchar(50) NOT NULL,
  `kode_pasien` varchar(14) NOT NULL,
  `nama_dokter` varchar(200) NOT NULL,
  `waktuPemeriksaan` datetime NOT NULL DEFAULT current_timestamp(),
  `keluhan` varchar(200) NOT NULL,
  `tindakan` varchar(200) NOT NULL,
  `diagnosis` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `riwayatPenyakit` varchar(200) NOT NULL,
  `poliTujuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekammedis`
--

INSERT INTO `rekammedis` (`record_number`, `namaPasien`, `kode_pasien`, `nama_dokter`, `waktuPemeriksaan`, `keluhan`, `tindakan`, `diagnosis`, `status`, `riwayatPenyakit`, `poliTujuan`) VALUES
('', 'Dethia', '11-06-2024-001', '', '2024-06-11 11:12:47', '', '', '', '', '', ''),
('PS-06-2024-001', 'Dethia', '', 'Dr. Irfan Setiawan', '2024-06-11 11:13:18', 'fgfh', 'fg', 'dvs', 'gf', 'ASA', 'PS'),
('PR-06-2024-001', 'Ariel', '', 'Dr. Leo Wicaksono', '2024-06-11 11:21:02', 'fgfh', 'AA', 'AA', 'gf', 'dvs', 'PR');

-- --------------------------------------------------------

--
-- Table structure for table `transaksipengambilanobat`
--

CREATE TABLE `transaksipengambilanobat` (
  `record_number` varchar(20) NOT NULL,
  `kodeObat` varchar(10) NOT NULL,
  `namaObat` varchar(50) NOT NULL,
  `resep` tinyint(1) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksipengambilanobat`
--

INSERT INTO `transaksipengambilanobat` (`record_number`, `kodeObat`, `namaObat`, `resep`, `status`) VALUES
('PU-06-2024-001', 'PS002', 'Olanzapine', 1, 'diracik/diproses'),
('PU-06-2024-001', 'BU002', 'Tramadol', 1, 'dalam antrian'),
('PU-06-2024-001', 'PU001', 'Paracetamol', 0, 'menunggu pengambilan'),
('PA-06-2024-002', 'EN003', 'Insulin', 1, 'diracik/diproses'),
('PA-06-2024-003', 'PU001', 'Paracetamol', 1, 'menunggu pengambilan'),
('PA-06-2024-001', 'PU001', 'Paracetamol', 1, 'menunggu pengambilan'),
('PS-06-2024-001', 'EN003', 'Insulin', 1, 'diracik/diproses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`nomorSTR`);

--
-- Indexes for table `inputdokter`
--
ALTER TABLE `inputdokter`
  ADD PRIMARY KEY (`record_number`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kodeObat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kode_pasien`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`kodepoli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
