-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando datos para la tabla laravel21.sectors: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `sectors` DISABLE KEYS */;
INSERT INTO `sectors` (`id`, `ipmonitoring`, `ippublic`, `pci`, `frecuency`, `earfcn`, `bandwidth`, `ssid`, `password`, `position`, `direction`, `comments`, `created_at`, `updated_at`) VALUES
	(1, '10.16.13.80', '0', 60, 0, 40090, 0, '0', '0', 'GALAXY', 'SEMU', '0', '2021-06-21 09:08:52', '2021-06-21 09:08:52');
/*!40000 ALTER TABLE `sectors` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
