-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table demo.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.departments: ~20 rows (approximately)
INSERT INTO `departments` (`id`, `Name`, `Location`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Joe Purdy', 'Iowa', NULL, NULL, NULL),
	(2, 'Vincenza Hauck', 'Massachusetts', NULL, NULL, NULL),
	(3, 'Dr. Lacey Baumbach I', 'New Mexico', NULL, NULL, NULL),
	(4, 'Ezra Rodriguez', 'Iowa', NULL, NULL, NULL),
	(5, 'Kiana Grimes', 'Wisconsin', NULL, NULL, NULL),
	(6, 'Dr. Major Grant', 'Nevada', NULL, NULL, NULL),
	(7, 'Ashton Swaniawski', 'Kansas', NULL, NULL, NULL),
	(8, 'Ms. Madalyn Kris DVM', 'Alabama', NULL, NULL, NULL),
	(9, 'Jay Fisher', 'New Jersey', NULL, NULL, NULL),
	(10, 'Bradley Mayert', 'Arizona', NULL, NULL, NULL),
	(11, 'Alfreda Bode', 'New Hampshire', NULL, NULL, NULL),
	(12, 'Malvina Vandervort', 'Texas', NULL, NULL, NULL),
	(13, 'Lizzie Batz', 'Wisconsin', NULL, NULL, NULL),
	(14, 'Veda Douglas', 'New Jersey', NULL, NULL, NULL),
	(15, 'Luigi Moen', 'Nevada', NULL, NULL, NULL),
	(16, 'Elenor Emmerich', 'Indiana', NULL, NULL, NULL),
	(17, 'Trudie Franecki', 'Nevada', NULL, NULL, NULL),
	(18, 'Rolando Zieme', 'Delaware', NULL, NULL, NULL),
	(19, 'Prof. Concepcion Pagac', 'Arizona', NULL, NULL, NULL),
	(20, 'Giles Hill', 'Nevada', NULL, NULL, NULL);

-- Dumping structure for table demo.dependents
CREATE TABLE IF NOT EXISTS `dependents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `Relationship` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.dependents: ~0 rows (approximately)

-- Dumping structure for table demo.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Gender` enum('Male','Female','Other') DEFAULT NULL,
  `Address` varchar(255) NOT NULL,
  `Dob` date NOT NULL,
  `Doj` date NOT NULL,
  `department_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employees_department_id_foreign` (`department_id`),
  CONSTRAINT `employees_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.employees: ~20 rows (approximately)
INSERT INTO `employees` (`id`, `Name`, `Gender`, `Address`, `Dob`, `Doj`, `department_id`, `created_at`, `updated_at`) VALUES
	(1, 'Macy Maggio DDS', 'Female', 'Hawaii', '1982-11-18', '1993-04-26', 10, NULL, NULL),
	(2, 'Dr. Harold Skiles', 'Male', 'Florida', '1972-09-22', '2016-05-29', 12, NULL, NULL),
	(3, 'Prof. Walton Schimmel', 'Female', 'Colorado', '1984-10-19', '1988-01-13', 16, NULL, NULL),
	(4, 'Dr. Tyreek Crona V', 'Male', 'Montana', '1998-01-06', '1994-04-11', 1, NULL, NULL),
	(5, 'Dr. Elroy Lehner I', 'Male', 'New Hampshire', '2002-10-14', '1986-07-07', 18, NULL, NULL),
	(6, 'Miss Marielle Altenwerth II', 'Female', 'Louisiana', '2014-11-09', '1974-06-21', 16, NULL, NULL),
	(7, 'Chelsea Tillman DVM', 'Other', 'Mississippi', '2003-11-13', '1973-01-22', 4, NULL, NULL),
	(8, 'Lauretta Hammes', 'Male', 'Vermont', '1982-09-25', '2002-10-11', 3, NULL, NULL),
	(9, 'Jo Cruickshank', 'Other', 'Michigan', '1976-01-27', '2017-02-20', 1, NULL, NULL),
	(10, 'Tatyana Towne', 'Female', 'Nebraska', '2002-10-09', '1990-10-28', 8, NULL, NULL),
	(11, 'Jazmyne Strosin', 'Male', 'Florida', '2012-01-12', '1978-05-28', 12, NULL, NULL),
	(12, 'David Stanton II', 'Male', 'South Carolina', '2013-01-24', '2004-03-06', 13, NULL, NULL),
	(13, 'Mr. Coleman Von DDS', 'Female', 'Alaska', '1981-05-07', '1984-11-01', 20, NULL, NULL),
	(14, 'Prof. Sonia Kuhn DVM', 'Female', 'Kansas', '2004-01-12', '1984-06-09', 18, NULL, NULL),
	(15, 'Kitty Parisian', 'Male', 'Minnesota', '1992-03-12', '2005-08-17', 13, NULL, NULL),
	(16, 'Keith Olson', 'Female', 'Wyoming', '2019-04-06', '1999-05-21', 4, NULL, NULL),
	(17, 'Dr. Moriah Ullrich II', 'Female', 'Maine', '2022-10-28', '1995-04-12', 1, NULL, NULL),
	(18, 'Margie Parisian', 'Female', 'Rhode Island', '1999-11-28', '1995-09-04', 9, NULL, NULL),
	(19, 'Emmanuelle Schoen II', 'Male', 'Nevada', '1971-10-10', '1989-10-06', 13, NULL, NULL),
	(20, 'Nayeli Lemke', 'Female', 'Vermont', '2005-10-28', '2017-09-26', 12, NULL, NULL);

-- Dumping structure for table demo.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table demo.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.migrations: ~8 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_06_18_111226_create_departments_table', 1),
	(6, '2023_06_18_111236_create_employees_table', 1),
	(7, '2023_06_18_111243_create_projects_table', 1),
	(8, '2023_06_18_111300_create_dependents_table', 1);

-- Dumping structure for table demo.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table demo.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table demo.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `department_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_department_id_foreign` (`department_id`),
  CONSTRAINT `projects_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.projects: ~20 rows (approximately)
INSERT INTO `projects` (`id`, `Name`, `Location`, `department_id`, `created_at`, `updated_at`) VALUES
	(1, 'Dortha Boyer', 'South Carolina', 7, NULL, NULL),
	(2, 'Laverna Kerluke V', 'Wisconsin', 6, NULL, NULL),
	(3, 'Mr. Mallory Hirthe', 'Utah', 8, NULL, NULL),
	(4, 'Mrs. Rosie Tillman II', 'Rhode Island', 19, NULL, NULL),
	(5, 'Malvina Osinski PhD', 'Georgia', 9, NULL, NULL),
	(6, 'Mrs. Ora McDermott DDS', 'Wisconsin', 13, NULL, NULL),
	(7, 'Sophie Stokes', 'Maine', 4, NULL, NULL),
	(8, 'Darlene Aufderhar', 'Massachusetts', 6, NULL, NULL),
	(9, 'Carson Bernier', 'Pennsylvania', 11, NULL, NULL),
	(10, 'Norberto Lehner IV', 'Michigan', 16, NULL, NULL),
	(11, 'Rashawn Witting Jr.', 'Texas', 5, NULL, NULL),
	(12, 'Skyla Rogahn', 'Michigan', 11, NULL, NULL),
	(13, 'Prof. Rosalinda Borer', 'Oklahoma', 10, NULL, NULL),
	(14, 'Vinnie Sawayn', 'Michigan', 17, NULL, NULL),
	(15, 'Mr. Dejon McCullough', 'Tennessee', 20, NULL, NULL),
	(16, 'Loren McDermott IV', 'New York', 19, NULL, NULL),
	(17, 'Keara Dicki', 'Georgia', 18, NULL, NULL),
	(18, 'Christine Brakus I', 'California', 8, NULL, NULL),
	(19, 'Edna Heaney', 'North Dakota', 12, NULL, NULL),
	(20, 'Dimitri Schiller', 'Alaska', 9, NULL, NULL);

-- Dumping structure for table demo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
