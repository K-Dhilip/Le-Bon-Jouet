-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2022 at 08:14 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbs_php_intermediare_karthikeyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_modeles`
--

CREATE TABLE `t_modeles` (
  `id_modele` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `fabricant` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `prix` varchar(4) NOT NULL,
  `Stock` enum('en vente','vendu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_modeles`
--

INSERT INTO `t_modeles` (`id_modele`, `image`, `titre`, `description`, `fabricant`, `categorie`, `prix`, `Stock`) VALUES
(1, 'https://www.autojauneparis.com/images/moyenne/m_77708.jpg', '159 Alfetta (jantes plastique)', 'Signe particulier : 10,2cm ; échelle 1/43 ; jantes en plastique de couleur rouge (rare version tardive !) ; belle qualité de peinture (brillante !) modèle en état exceptionnel ! neuf ! il manque juste un rabat à la boîte', 'Dinky Toys GB', 'voiture', '25 €', 'en vente'),
(2, 'https://www.autojauneparis.com/reservation/pourMoyenne.php?image=m_77750.jpg', '2cv camionette', 'Signe particulier : belle boîte vide ; l\'articulation d\'une languette renforcée à l\'intérieur avec du ruban adhésif; la boîte présente bien; le nom du premier propriétaire figure au crayon de papier sur une face !; tampon \"gris\"', 'Norev', 'camion', '15 €', 'vendu'),
(3, 'https://www.autojauneparis.com/images/moyenne/m_77478.jpg', 'Gak double cabine grande échelle pompier', 'Signe particulier : 11,2cm ; échelle 1/43 ; jantes de type artillerie en plastique de couleur ivoire; modèle réalisé en édition limitée; manque le bouchon de radiateur; belle peinture ; boîte complète', 'Dinky Toys France', 'camion', '28 €', 'en vente'),
(4, 'https://www.autojauneparis.com/images/moyenne/m_77633.jpg', 'limousine \"club Mercedes France\"', 'Signe particulier : 11,2cm ; échelle 1/43 ; jantes de type artillerie en plastique de couleur ivoire; modèle réalisé en édition limitée; manque le bouchon de radiateur; belle peinture ; boîte complète', 'Dinky Toys Fran', 'camion', '95 €', 'vendu'),
(5, 'https://www.autojauneparis.com/images/moyenne/m_77708.jpg', '159 Alfetta (jantes plastique)', 'Signe particulier : 10,2cm ; échelle 1/43 ; jantes en plastique de couleur rouge (rare version tardive !) ; belle qualité de peinture (brillante !) modèle en état exceptionnel ! neuf ! il manque juste un rabat à la boîte', 'Dinky Toys GB', 'voiture', '25 €', 'en vente'),
(6, 'https://www.autojauneparis.com/reservation/pourMoyenne.php?image=m_77750.jpg', '2cv camionette', 'Signe particulier : belle boîte vide ; l\'articulation d\'une languette renforcée à l\'intérieur avec du ruban adhésif; la boîte présente bien; le nom du premier propriétaire figure au crayon de papier sur une face !; tampon \"gris\"', 'Norev', 'camion', '15 €', 'vendu'),
(7, 'https://www.autojauneparis.com/images/moyenne/m_77478.jpg', 'Gak double cabine grande échelle pompier', 'Signe particulier : 11,2cm ; échelle 1/43 ; jantes de type artillerie en plastique de couleur ivoire; modèle réalisé en édition limitée; manque le bouchon de radiateur; belle peinture ; boîte complète', 'Dinky Toys France', 'camion', '28 €', 'en vente'),
(8, 'https://www.autojauneparis.com/reservation/pourMoyenne.php?image=m_77750.jpg', '2cv camionette', 'Signe particulier : belle boîte vide ; l\'articulation d\'une languette renforcée à l\'intérieur avec du ruban adhésif; la boîte présente bien; le nom du premier propriétaire figure au crayon de papier sur une face !; tampon \"gris\"', 'Norev', 'camion', '15 €', 'vendu'),
(9, 'https://www.autojauneparis.com/images/moyenne/m_77708.jpg', '159 Alfetta (jantes plastique)', 'Signe particulier : 10,2cm ; échelle 1/43 ; jantes en plastique de couleur rouge (rare version tardive !) ; belle qualité de peinture (brillante !) modèle en état exceptionnel ! neuf ! il manque juste un rabat à la boîte', 'Dinky Toys GB', 'voiture', '25 €', 'en vente'),
(10, 'https://www.autojauneparis.com/reservation/pourMoyenne.php?image=m_77750.jpg', '2cv camionette', 'Signe particulier : belle boîte vide ; l\'articulation d\'une languette renforcée à l\'intérieur avec du ruban adhésif; la boîte présente bien; le nom du premier propriétaire figure au crayon de papier sur une face !; tampon \"gris\"', 'Norev', 'camion', '15 €', 'vendu'),
(11, 'https://www.autojauneparis.com/images/moyenne/m_77478.jpg', 'Gak double cabine grande échelle pompier', 'Signe particulier : 11,2cm ; échelle 1/43 ; jantes de type artillerie en plastique de couleur ivoire; modèle réalisé en édition limitée; manque le bouchon de radiateur; belle peinture ; boîte complète', 'Dinky Toys France', 'camion', '28 €', 'en vente'),
(12, 'https://www.autojauneparis.com/reservation/pourMoyenne.php?image=m_77750.jpg', '2cv camionette', 'Signe particulier : belle boîte vide ; l\'articulation d\'une languette renforcée à l\'intérieur avec du ruban adhésif; la boîte présente bien; le nom du premier propriétaire figure au crayon de papier sur une face !; tampon \"gris\"', 'Norev', 'camion', '15 €', 'vendu'),
(13, 'https://www.autojauneparis.com/images/moyenne/m_77708.jpg', '159 Alfetta (jantes plastique)', 'Signe particulier : 10,2cm ; échelle 1/43 ; jantes en plastique de couleur rouge (rare version tardive !) ; belle qualité de peinture (brillante !) modèle en état exceptionnel ! neuf ! il manque juste un rabat à la boîte', 'Dinky Toys GB', 'voiture', '25 €', 'en vente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_modeles`
--
ALTER TABLE `t_modeles`
  ADD PRIMARY KEY (`id_modele`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_modeles`
--
ALTER TABLE `t_modeles`
  MODIFY `id_modele` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
