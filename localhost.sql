-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 14 fév. 2019 à 14:53
-- Version du serveur :  5.7.19
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rocknpop`
--
DROP DATABASE IF EXISTS `rocknpop`;
CREATE DATABASE IF NOT EXISTS `rocknpop` DEFAULT CHARACTER SET utf32 COLLATE utf32_general_ci;
USE `rocknpop`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'MichelPolnareff', '$2y$10$FXvpdQaWG/LWsH88JuDmIO39id168TxzcaHDFeXs9sVfiTSOWIama'),
(2, 'admin', '$2y$10$Gc//MFE.8LwVNLPZ8Ys3Z.A5Knrt2IZMMnT0wZLY52cEiNpUmG0fy');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `painting` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `artist_presentation` text NOT NULL,
  `artist_article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `painting`, `artist_name`, `artist_presentation`, `artist_article`) VALUES
(1, '../images/Pop-art/Nurse_roy.jpg', 'Andy Warhol', 'Nurse de Roy est cool', '<p style=\"text-align:center\">f,nbvcvbnj,k;l:mlkjihugyfcxgcfhjbkl,m;kjihuygfcgnvbnk,lmokijuygtfrcgnvbhjkiouytrfdxfcnvbjhytrsdwxfcgvhjytredstwdxgchvjbhoiytrdywfjhbkhgfc</p>\r\n'),
(2, '../images/Pop-art/roy_lichtenstein_woman_with_flowered_hat.jpg', 'Roy Lichtenstein', 'La femme au chapeau fleuri', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span style=\"color:#c0392b\"><strong>Aliquam eget tortor sapien</strong></span>. Aenean vitae sem eget nibh varius hendrerit iaculis non ligula. Integer ultrices, odio eget sodales aliquet, leo orci semper nibh, quis suscipit libero felis id sapien. Ut mollis eu massa sit amet euismod. Curabitur dictum tortor accumsan, imperdiet elit vitae, bibendum enim. <strong><span style=\"color:#c0392b\">Nunc commodo at mauris ac lobortis</span></strong>. Vestibulum aliquam euismod velit sed interdum. Nulla sapien orci, convallis quis lectus ut, vulputate porttitor tellus. Sed blandit risus turpis, et placerat mauris volutpat vulputate. Ut eget vestibulum sem.</p>\r\n\r\n<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. <em><strong>Mauris sodales nec mauris at sagittis</strong></em>. Aliquam felis neque, hendrerit nec condimentum nec, aliquet vitae nulla. Praesent lectus est, tincidunt nec nisl quis, posuere tempor neque. In erat risus, condimentum vitae consectetur mattis, hendrerit a diam. Fusce ex tortor, tristique eget fermentum vel, blandit eget est. Maecenas scelerisque ipsum ut consectetur condimentum. Aliquam malesuada fermentum maximus. Quisque imperdiet consequat purus. <strong><span style=\"color:#c0392b\">Interdum et malesuada</span></strong> fames ac ante ipsum primis in faucibus. Donec metus lectus, vehicula vitae porta ac, volutpat eget sapien. Donec ultrices posuere dictum. Duis libero erat, porta ut erat sed, bibendum laoreet leo. Maecenas molestie imperdiet tellus non scelerisque.</p>\r\n\r\n<p>Vivamus mattis sem vel quam placerat aliquam. Sed viverra lacinia nisi, quis pulvinar nisi venenatis id. Suspendisse porta ullamcorper mi, a varius risus luctus et. Pellentesque tristique libero in interdum tincidunt. Nunc hendrerit semper rutrum. Suspendisse purus odio, hendrerit quis fermentum eu, lacinia in ligula. Aliquam nisi lorem, pulvinar eu vehicula et, maximus id elit.</p>\r\n'),
(3, '../images/turquoise_marilyn_andy_warhol.jpg', 'Andy Warhol', 'Marilyn Turquoise', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula ante ut mauris tincidunt porttitor. Pellentesque tristique ut arcu ut molestie. Nunc vel ex dolor. Duis malesuada sapien nec quam elementum, in pharetra dolor porta. Morbi vestibulum lacus dolor, et auctor ante tristique pretium. Morbi eget gravida erat, nec sagittis turpis. Sed imperdiet sed lorem ac molestie. Nulla eu turpis posuere, pharetra sem vel, vestibulum neque. Aenean ullamcorper ornare dignissim. Aliquam tincidunt dignissim risus quis convallis. Vivamus molestie risus eu sem pellentesque rhoncus. Mauris vel leo et purus luctus interdum. Vestibulum id risus tincidunt, feugiat nulla quis, vehicula lorem. Quisque ultrices dui at turpis ultrices, eu feugiat risus tincidunt.</p>\r\n\r\n<p>Maecenas consequat velit nisi, vel laoreet leo vehicula sit amet. Aliquam tempus luctus mi sit amet hendrerit. Nullam sollicitudin eros eu est vulputate efficitur. Phasellus ut est sed augue ultrices malesuada. Suspendisse dolor lectus, imperdiet in magna non, convallis faucibus justo. Sed metus est, facilisis quis mi eget, pulvinar laoreet tortor. Morbi placerat blandit iaculis. Donec est libero, suscipit et augue sit amet, consectetur cursus tortor. In orci lectus, vulputate sit amet leo vel, elementum interdum quam. Nulla fermentum aliquet orci, id imperdiet diam ultrices sit amet. Phasellus ultricies dapibus ligula molestie ornare. Donec leo leo, facilisis sit amet auctor id, accumsan eget mauris. Phasellus et turpis elementum, vestibulum justo in, semper enim. Nullam tellus sapien, consequat sed lacus non, volutpat semper neque. Morbi non hendrerit metus, eu accumsan lectus. Nunc porta nibh dui, ac ultricies elit ornare quis.</p>\r\n'),
(4, '../images/Au-fait-quest-ce-qui-diffÃ©rencie-et-rend-les-foyers-daujourdhui-si-attirants.jpg', 'David Hamilton', 'Â« Au fait, quâ€™est-ce qui diffÃ©rencie et rend les foyers dâ€™aujourdâ€™hui si attirants Â»', '<p>In sodales ex lorem, quis pretium libero posuere ut. Nam vitae lorem porta, rutrum sem vitae, vehicula sapien. Ut ut vestibulum odio, non hendrerit justo. Vivamus id convallis est. Nulla vel erat non nulla interdum congue. Donec purus sem, tempus non ipsum vitae, semper pretium felis. Duis nulla dolor, mollis ac metus sed, tempus cursus eros. Mauris gravida fermentum ornare. Integer ac nunc aliquam, cursus ipsum et, condimentum lorem.</p>\r\n\r\n<p>Praesent faucibus est nec lacus molestie, non blandit orci semper. Integer facilisis massa ac nisl placerat, at dictum sem luctus. Mauris commodo nibh eget rhoncus consequat. Sed vestibulum arcu nec orci vulputate, id feugiat dui varius. Duis porta magna ac ipsum vestibulum tincidunt. Fusce pulvinar justo quis condimentum mattis. Suspendisse sed elit at ipsum suscipit malesuada. Donec egestas quam at dolor dapibus sagittis. Phasellus dolor arcu, tristique ac blandit quis, consectetur sit amet lacus. Sed ut dictum leo, at dapibus mi. Duis convallis purus sem, eu pellentesque turpis ultrices sit amet. Sed vehicula scelerisque ultrices. Nunc ut eleifend magna. Quisque efficitur metus sit amet augue bibendum dictum. Fusce tempor elit vel dapibus posuere.</p>\r\n'),
(5, '../images/in-the-car-lichtenstein.jpg', 'Pascal', 'lorem lorem lorem lorem lorem', '<p>fgklm&ugrave;*<br />\r\nljhrrghjklmlkjhgfghjk</p>\r\n'),
(6, '../images/in-the-car-lichtenstein.jpg', 'Roy Lichtenstein', 'L\'oeuvre reprÃ©sente une femme et un homme dans une voiture.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio leo, finibus porttitor mi id, tempus maximus diam. Integer eget tristique odio. Sed eleifend a odio ut sodales. Praesent finibus laoreet dignissim. Suspendisse eu facilisis leo. Nunc malesuada euismod mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur a consequat turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean ac facilisis augue. Cras convallis rhoncus nunc.</p>\r\n\r\n<p>Pellentesque erat justo, bibendum ut rhoncus vitae, malesuada a dolor. Aenean ac eros volutpat, eleifend neque quis, rutrum risus. Curabitur est nunc, fermentum eget massa molestie, tempus iaculis ex. Praesent eros sem, varius eu eros ut, aliquet mollis ante. Duis lacinia massa nibh, ac laoreet velit imperdiet at. In aliquet, sem condimentum convallis pellentesque, sapien elit tincidunt sapien, non sodales sem tortor ut dolor. Duis arcu neque, vehicula mattis purus non, maximus laoreet ipsum. Nunc aliquam, nibh vitae convallis malesuada, neque elit condimentum lectus, vitae rhoncus lacus velit id urna. Vestibulum in blandit magna, ac congue tellus. Curabitur viverra sodales dictum. Suspendisse iaculis faucibus ipsum sit amet lobortis. Pellentesque dapibus eleifend turpis, vitae porttitor nisl scelerisque ut.</p>\r\n\r\n<p>Sed facilisis pellentesque efficitur. Fusce blandit laoreet nunc, sit amet euismod justo scelerisque at. Praesent congue metus ac accumsan condimentum. Fusce pretium suscipit congue. Aliquam porttitor, lacus ac tincidunt porta, tellus est ullamcorper leo, non auctor ante neque at nulla. Pellentesque blandit aliquet risus ut lobortis. Integer sit amet efficitur orci. Mauris finibus arcu velit, ornare dignissim urna laoreet sit amet. Suspendisse nibh sapien, dignissim et consequat id, pretium quis justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec quis maximus mi. Nunc elementum nulla in orci maximus dictum. Nam vehicula sem odio, vel dapibus nisl rhoncus non. Quisque tincidunt ornare neque, eget consectetur ex laoreet in. Nulla magna tortor, tincidunt eget vehicula efficitur, finibus et libero.</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `musics`
--

DROP TABLE IF EXISTS `musics`;
CREATE TABLE `musics` (
  `id` int(51) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `artiste` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `annee` int(51) NOT NULL,
  `link` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `musics`
--

INSERT INTO `musics` (`id`, `titre`, `artiste`, `album`, `annee`, `link`, `thumb`) VALUES
(20, 'Let It Be', 'The Beatles', 'Let It Be', 1970, '../musics/the_beatles/let_it_be/let_it_be_remastered_2009.mp3', '../images/the_beatles/let_it_be/thumb_d7da9b64d9a2417cfcf47ec579764bc9bf0ef9ff.jpg'),
(21, 'Knockin\' on Heaven\'s Door', 'Guns & Roses', 'Use your Illusion II', 1991, '../musics/guns_roses/use_your_illusion_ii/04_knockin_on_heaven_s_door.mp3', '../images/guns_roses/use_your_illusion_ii/thumb_1b618e37f9af7462b4455d39c40018e0c292e35f.jpg'),
(22, 'Killer Queen', 'Queen', 'Sheer Heart Attack', 1974, '../musics/queen/sheer_heart_attack/queen_killer_queen_top_of_the_pops_1974.mp3', '../images/queen/sheer_heart_attack/thumb_e38f891e53535749c8422d0bcf77bf2016952aa0.jpg'),
(23, 'Don\'t Cry (Alternate)', 'Guns & Roses', 'Use your Illusion II', 1991, '../musics/guns_roses/use_your_illusion_ii/13_don_t_cry_alternate_lyrics_.mp3', '../images/guns_roses/use_your_illusion_ii/thumb_c70a1080de546756c5b2d40e8d4844f179b7f3b2.jpg'),
(24, 'Perfect Life', 'Steven Wilson', 'Hand. Cannot. Erase', 2015, '../musics/steven_wilson/hand._cannot._erase/04._perfect_life.mp3', '../images/steven_wilson/hand._cannot._erase/thumb_e9dfad913b9ccc979340ee22d3cec8925ae13c35.jpg'),
(25, 'Space Oddity', 'David Bowie', 'Space Oddity', 1969, '../musics/david_bowie/space_oddity/david_bowie_space_oddity_official_video.mp3', '../images/david_bowie/space_oddity/thumb_d623414863de3232975e28fddb02dfeca8aeffc2.jpg'),
(26, 'Yesterdays', 'Guns & Roses', 'Use your Illusion II', 1991, '../musics/guns_roses/use_your_illusion_ii/03_yesterdays.mp3', '../images/guns_roses/use_your_illusion_ii/thumb_69475b79fa79bc5aff1d0ce771981c6e31594440.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `musics`
--
ALTER TABLE `musics`
  MODIFY `id` int(51) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
