-- phpMyAdmin SQL Dump

-- version 5.2.1

-- https://www.phpmyadmin.net/

--

-- Host: localhost:3306

-- Gegenereerd op: 23 apr 2024 om 11:33

-- Serverversie: 8.0.35-cll-lve

-- PHP-versie: 8.1.25


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;


--

-- Database: `hollenbe_vesuvio`

--


-- --------------------------------------------------------


--

-- Tabelstructuur voor tabel `orderrules`

--


CREATE TABLE `orderrules` (

  `id` int NOT NULL,

  `order_id` int NOT NULL,

  `part_id` int NOT NULL,

  `packed` int NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


--

-- Gegevens worden geëxporteerd voor tabel `orderrules`

--


INSERT INTO `orderrules` (`id`, `order_id`, `part_id`, `packed`) VALUES

(2, 1, 1, 0),

(3, 1, 2, 0),

(4, 1, 3, 0),

(5, 1, 4, 0),

(6, 2, 3, 0),

(7, 2, 4, 0),

(8, 2, 5, 0),

(9, 3, 1, 0),

(10, 3, 2, 0),

(11, 3, 3, 0),

(12, 4, 6, 0),

(13, 4, 7, 0);


-- --------------------------------------------------------


--

-- Tabelstructuur voor tabel `orders`

--


CREATE TABLE `orders` (

  `id` int NOT NULL,

  `date` date NOT NULL,

  `company_name` varchar(255) COLLATE utf8mb4_bin NOT NULL,

  `recipient` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,

  `addressline1` varchar(255) COLLATE utf8mb4_bin NOT NULL,

  `addressline2` varchar(255) COLLATE utf8mb4_bin NOT NULL,

  `country` varchar(255) COLLATE utf8mb4_bin NOT NULL,

  `status` varchar(255) COLLATE utf8mb4_bin NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


--

-- Gegevens worden geëxporteerd voor tabel `orders`

--


INSERT INTO `orders` (`id`, `date`, `company_name`, `recipient`, `addressline1`, `addressline2`, `country`, `status`) VALUES

(1, '2024-03-01', '', 'Anthonie Soprano', 'Idonotgiveaflane 203', '1454 AB New York', 'United States of America', ''),

(2, '2024-03-02', 'Al\'s Liquor', 'Al Capone', 'Barrelrum 304', '2424 AL California', 'United States of America', ''),

(3, '2024-04-13', '', 'Willem Alexander', 'Kasteellaan 12', '1422 AB Wassenaar', 'Nederland', ''),

(4, '2024-03-24', 'Engelen van de hemel', 'Sjaak Boonstra', 'Brommerweg 12-A', '1244 AB Hilversum', 'Nederland', '');


-- --------------------------------------------------------


--

-- Tabelstructuur voor tabel `parts`

--


CREATE TABLE `parts` (

  `id` int NOT NULL,

  `part` varchar(255) COLLATE utf8mb4_bin NOT NULL,

  `purchase_price` decimal(10,2) NOT NULL,

  `sell_price` decimal(10,2) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


--

-- Gegevens worden geëxporteerd voor tabel `parts`

--


INSERT INTO `parts` (`id`, `part`, `purchase_price`, `sell_price`) VALUES

(1, 'Polini uitlaat zwanenhals model', 40.00, 99.00),

(2, 'Motorblok 70cc', 110.00, 129.00),

(3, 'Grote sticker met een blad van een kruidige plant', 0.39, 4.99),

(4, 'Gele scooterhelm aka Bob de Bouwer\r\nmet veiligheidscertificaat', 18.00, 49.00),

(5, 'Begrenzer met afstandsbediening', 95.00, 125.00),

(6, 'Kettingslot ART4 1.5 meter', 3.00, 15.00),

(7, 'Kentekenspray, blijf onzichtbaar voor flitspalen', 0.00, 8.95),

(8, 'GPS tracking anti diefstal alarm \r\nlet op, wordt verkocht met abo', 229.00, 299.00);


--

-- Indexen voor geëxporteerde tabellen

--


--

-- Indexen voor tabel `orderrules`

--

ALTER TABLE `orderrules`

  ADD PRIMARY KEY (`id`),

  ADD UNIQUE KEY `order_id` (`order_id`,`part_id`),

  ADD KEY `part_id` (`part_id`);


--

-- Indexen voor tabel `orders`

--

ALTER TABLE `orders`

  ADD PRIMARY KEY (`id`);


--

-- Indexen voor tabel `parts`

--

ALTER TABLE `parts`

  ADD PRIMARY KEY (`id`);


--

-- AUTO_INCREMENT voor geëxporteerde tabellen

--


--

-- AUTO_INCREMENT voor een tabel `orderrules`

--

ALTER TABLE `orderrules`

  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;


--

-- AUTO_INCREMENT voor een tabel `orders`

--

ALTER TABLE `orders`

  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--

-- AUTO_INCREMENT voor een tabel `parts`

--

ALTER TABLE `parts`

  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


--

-- Beperkingen voor geëxporteerde tabellen

--


--

-- Beperkingen voor tabel `orderrules`

--

ALTER TABLE `orderrules`

  ADD CONSTRAINT `orderrules_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`id`);


--

-- Beperkingen voor tabel `orders`

--

ALTER TABLE `orders`

  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id`) REFERENCES `orderrules` (`order_id`);

COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;