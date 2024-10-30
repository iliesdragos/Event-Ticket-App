-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 01:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event-ticket-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `titlu` varchar(255) NOT NULL,
  `descriere` text NOT NULL,
  `imagine` varchar(5000) NOT NULL,
  `data_ora` datetime NOT NULL,
  `adresa` text NOT NULL,
  `pret_bilet` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sponsori` varchar(255) NOT NULL,
  `parteneri` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `titlu`, `descriere`, `imagine`, `data_ora`, `adresa`, `pret_bilet`, `created_at`, `updated_at`, `sponsori`, `parteneri`, `contact`) VALUES
(4, 'FCSB-Dinamo', 'Meciurile dintre FCSB și Dinamo sunt caracterizate de tensiune, pasiune și rivalitate acerbă. Atmosfera din tribune este electrică, iar ambele echipe își doresc cu ardoare victoria în fața rivalei. Aceste confruntări aduc adesea la spectacole deosebite, cu momente de suspans și momente cheie care rămân în memoria fanilor.', 'https://www.playsport.ro/wp-content/uploads/2023/06/Programul-primelor-doua-etape-din-Superliga.-Cand-joaca-FCSB-si-Dinamo.jpg', '2023-12-15 21:45:00', 'National Arena, Bucuresti', 70.00, NULL, '2023-12-18 10:24:19', 'SUPERBET', 'Jandarmeria Bucuresti', 'superliga@yahoo.com / 0722341675'),
(5, 'Esports', 'Aceste evenimente adună jucători talentați, echipe, sponsori și fani din întreaga lume, creând un peisaj vibrant și dinamic în lumea jocurilor video.', 'https://cdn.sanity.io/images/zoz4y99f/production/63fe73d90694450859da70fe142d72e445a0a9cc-1600x900.jpg', '2024-02-14 20:00:00', 'BT Arena, Cluj-Napoca', 150.00, NULL, '2023-12-18 10:23:04', 'PRIME', 'Banca Transilvania', 'esportsCluj@yahoo.com / 0745623145'),
(6, 'Piesa de teatru Dona Juana', 'Piesa a fost adaptată și reinterpretată de mai mulți dramaturgi și regizori de-a lungul timpului. Una dintre cele mai cunoscute versiuni ale acestui personaj este \"Dona Juana\" de Tirso de Molina, scrisă în secolul al XVII-lea.', 'https://idei.adservio.ro/wp-content/uploads/2015/03/Teatru.jpg', '2024-09-19 16:40:00', 'Sala Palatului, Bucuresti', 25.60, NULL, '2023-12-18 10:25:53', 'Codin Maticiuc', 'DORNA', 'primariaBucuresti@yahoo.com / 0786543778'),
(7, 'Concert colinde', 'În cadrul acestui eveniment, coruri, soliști vocali sau ansambluri interpretează colinde tradiționale și melodii specifice sărbătorilor de Crăciun. Sala de concert se umple de o atmosferă încărcată de emoție și bucurie, unde luminițele blânde și ornamentale creează un decor cald și primitor.', 'https://www.activetravel.ro/poze/oferte-speciale-vacante-si-concedii-revelion-2024-craciun-2023-romania.jpg', '2023-12-20 17:20:00', 'Casa de cultura, Oradea', 17.25, NULL, '2023-12-18 10:21:51', 'PRO TV', 'Consiliul local Oradea', 'primariaOradea@yahoo.com / 0789654123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
