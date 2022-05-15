-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ece_user`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `admin_password`) VALUES
(1, 'ece', 'ece123123'),
(2, 'ecem', 'ecem123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adress`
--

CREATE TABLE `adress` (
  `adress_id` int(11) NOT NULL,
  `adres_name` varchar(11) NOT NULL,
  `city` varchar(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `id` int(10) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `adress`
--

INSERT INTO `adress` (`adress_id`, `adres_name`, `city`, `adress`, `id`, `deleted_at`) VALUES
(1, 'home', 'Izmir', 'home', 36, NULL),
(2, 'home', 'Izmir', 'home', 37, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `book`
--

CREATE TABLE `book` (
  `book_id` int(10) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_img` varchar(100) NOT NULL,
  `book_category` varchar(30) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `edition` int(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `page_count` bigint(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_img`, `book_category`, `author`, `publisher`, `edition`, `language`, `page_count`, `price`) VALUES
(1, 'Texture of the Universe', 'https://ib.dr.com.tr/image/03/40/22/texture-of-the-universe-yqIIR.jpg', 'Classics', 'Henry Vaughan', 'Gwasg Gregynog Ltd', 1, 'English', 592, 450),
(2, 'Emperor\'s Lion', 'https://m.media-amazon.com/images/I/51v8xkYioIL.jpg', 'Classics', 'Alex Gough', 'Canelo Adventure', 1, 'English', 303, 9),
(3, 'Great Book of King Arthur and His Knights of the Round Table', 'https://images-na.ssl-images-amazon.com/images/I/51oneGDCTeL._SX218_BO1,204,203,200_QL40_FMwebp_.jpg', 'Classics', 'John Matthews', 'HarperCollins Publishers', 2, 'English', 416, 30),
(4, 'Greatheart', 'https://ib.dr.com.tr/image/77/82/78/greatheart-k6QF8.jpg', 'Classics', 'Ethel M Dell', 'Zinc Read', 1, 'English', 215, 24),
(5, 'Knave of Diamonds', 'https://ib.dr.com.tr/image/14/83/78/knave-of-diamonds-4RmgG.jpg', 'Classics', 'Ethel M Dell', 'Zinc Read', 1, 'English', 243, 23),
(6, 'Lost Republic', 'https://ib.dr.com.tr/image/92/60/62/lost-republic-usqs2.jpg', 'Classics', 'James E. G. Zetzel', 'Oxford University Press Inc', 2, 'English', 384, 64),
(7, 'Gendered Politics in Sophocles\' Trachiniae', 'https://ib.dr.com.tr/image/13/03/26/gendered-politics-in-sophocles-trachiniae-QXci9.jpg', 'Classics', 'Dr Gesthimani Seferiadi', 'Bloomsbury Publishing PLC', 1, 'English', 116, 85),
(8, 'Aeneid', 'https://ib.dr.com.tr/image/15/08/81/aeneid-8mUWE.jpg', 'Classics', 'Virgil', 'Arcturus Publishing Ltd', 1, 'English', 442, 6),
(9, 'Iliad and the Odyssey', 'https://ib.dr.com.tr/image/76/11/22/iliad-and-the-odyssey-SoYkw.jpg', 'Classics', 'Homer', 'Wordsworth Editions Ltd', 1, 'English', 752, 32),
(10, 'Thirukkural', 'https://ib.dr.com.tr/image/08/64/55/thirukkural-Ebf16.jpg', 'Classics', 'Karan Goel', 'Notion Press', 3, 'English', 272, 15),
(11, 'Precarious Night', 'https://ib.dr.com.tr/image/83/12/84/precarious-night-1qOX9.jpg', 'Fantasy', 'Stanley Nesbitt', 'Independently Published', 1, 'English', 104, 4),
(12, 'Professor Spindlebrock\'s Little Blue Book of Traveling Spells', 'https://m.media-amazon.com/images/I/41eZAQposAL.jpg', 'Fantasy', 'Joseph D Lyman', 'Pinpoint Management LLC', 1, 'English', 332, 10),
(13, 'At the Mercy of Monsters', 'https://ib.dr.com.tr/image/01/04/63/at-the-mercy-of-monsters-UIkEX.jpg', 'Fantasy', 'Sophy L Ryser', 'Sophy Ryser', 2, 'English', 303, 19),
(14, 'Stealing', 'https://ib.dr.com.tr/image/82/26/25/stealing-kVrnF.jpg', 'Fantasy', 'S a Sutila', 'Advantage Media Group', 1, 'English', 273, 14),
(15, 'Male Mundi - 3', 'https://ib.dr.com.tr/image/13/65/20/male-mundi-3-r21do.jpg', 'Fantasy', 'Anelie Hart', 'Independently Published', 3, 'French', 524, 14),
(16, 'Last Tomb', 'https://ib.dr.com.tr/image/26/86/45/last-tomb-WGzU9.jpg', 'Fantasy', 'Edward W Robertson', 'Independently Published', 1, 'English', 212, 11),
(17, 'Forsaken Vale', 'https://ib.dr.com.tr/image/93/08/21/forsaken-vale-mlSdo.jpg', 'Fantasy', 'Janden Hale', 'Independently Published', 1, 'English', 139, 5),
(18, 'Biker Bears Redemption', 'https://ib.dr.com.tr/image/13/68/11/biker-bears-redemption-7o01f.jpg', 'Fantasy', 'Roxie Ray', 'Independently Published', 2, 'English', 204, 12),
(19, 'Prince Of The Dark Fae', 'https://ib.dr.com.tr/image/94/13/18/prince-of-the-dark-fae-iZ2PU.jpg', 'Fantasy', 'Lindsey Devin', 'Independently Published', 3, 'English', 297, 16),
(20, 'Ambrose', 'https://ib.dr.com.tr/image/86/73/58/ambrose-SQCAN.jpg', 'Fantasy', 'Valerie Claussen', 'Independently Published', 2, 'English', 264, 14),
(21, 'Teamwork', 'https://ib.dr.com.tr/image/68/90/52/teamwork-1mU32.jpg', 'Horror', 'Ray Wenck', 'Ray Wenck', 1, 'English', 308, 15),
(22, 'Haunted Collection', 'https://ib.dr.com.tr/image/56/84/65/haunted-collection-IrHx4.jpg', 'Horror', 'Vanessa Eve Caudillo', 'Independently Published', 1, 'English', 163, 23),
(23, 'Tusombras', 'https://ib.dr.com.tr/image/56/86/63/tusombras-Ak5TR.jpg', 'Horror', 'Luis Mayer', 'Independently Published', 2, 'Spanish', 273, 17),
(24, 'Ghost Games', 'https://m.media-amazon.com/images/I/41QoshsqWfL.jpg', 'Horror', 'Brooke MacKenzie', 'Fiction4all', 2, 'English', 216, 9),
(25, 'Forever in Dreams', 'https://ib.dr.com.tr/image/56/85/52/forever-in-dreams-VfYmI.jpg', 'Horror', 'C G Rucker', 'Createspace Independent Publishing Platform', 1, 'English', 244, 26),
(26, 'This Sublime Darkness', 'https://ib.dr.com.tr/image/12/04/97/this-sublime-darkness-kyy5V.jpg', 'Horror', 'Greg Chapman', 'Independently Published', 3, 'English', 109, 7),
(27, 'Epping Forest House', 'https://ib.dr.com.tr/image/25/54/44/epping-forest-house-tkTHY.jpg', 'Horror', 'Olga Morales', 'Independently Published', 1, 'English', 178, 5),
(28, 'White Fuzz', 'https://m.media-amazon.com/images/I/51zE7-LWU8L.jpg', 'Horror', 'William Pauley, III', 'Independently Published', 1, 'English', 122, 11),
(29, 'Haunting of Montgomery Inn', 'https://ib.dr.com.tr/image/22/66/20/haunting-of-montgomery-inn-H4mJk.jpg', 'Horror', 'Marie Wilkens', 'Independently Published', 2, 'English', 302, 11),
(30, 'Souls to Have', 'https://ib.dr.com.tr/image/04/71/72/souls-to-have-c84Bn.jpg', 'Horror', 'Peter Servidio', 'Independently Published', 1, 'English', 57, 5),
(31, 'Following Dreams', 'https://ib.dr.com.tr/image/59/79/77/following-dreams-pRNT0.jpg', 'Biography', 'Louis John Valente', 'Independently Published', 3, 'English', 428, 15),
(32, 'Rendezvous to Remember', 'https://ib.dr.com.tr/image/53/86/33/rendezvous-to-remember-mAjXW.jpg', 'Biography', 'Terry Marshall, Ann Garretson Marshall', 'Sandra Jonas Publishing House', 2, 'English', 378, 15),
(33, 'Tortuous Path', 'https://ib.dr.com.tr/image/16/33/30/tortuous-path-6qP7P.jpg', 'Biography', 'Christopher E. Pelloski', 'Createspace Independent Publishing Platform', 1, 'English', 286, 11),
(34, 'Landsknechte und Soeldnerfuhrer', 'https://ib.dr.com.tr/image/93/42/39/landsknechte-und-soeldnerfuhrer-0cbpu.jpg', 'Biography', 'Mario Kandil', 'Lulu.com', 1, 'German', 118, 25),
(35, 'Pull the Chocks, I\'m Launching', 'https://ib.dr.com.tr/image/35/00/92/pull-the-chocks-im-launching-QknmX.jpg', 'Biography', 'David E B (Deb) Ward', 'Gatekeeper Press', 1, 'English', 520, 11),
(36, 'tombe de l\'ermite', 'https://ib.dr.com.tr/image/30/90/69/tombe-de-lermite-bIzEt.jpg', 'Biography', 'Dominique Dominique Oury', 'Independently Published', 2, 'French', 86, 10),
(37, 'Forget Me Not', 'https://ib.dr.com.tr/image/20/08/85/forget-me-not-a2B2g.jpg', 'Biography', 'Jennifer Lowe-Anker', 'Mountaineers Books', 1, 'English', 256, 24),
(38, 'Words by Heart', 'https://ib.dr.com.tr/image/34/37/76/words-by-heart-h0SoE.jpg', 'Biography', 'Janani Ravi', 'Independently Published', 3, 'English', 180, 6),
(39, 'Yank Down Under', 'https://ib.dr.com.tr/image/71/79/96/yank-down-under-9EMau.jpg', 'Biography', '', 'Independently Published', 2, 'English', 164, 11),
(40, 'Metades Em Vidas', 'https://ib.dr.com.tr/image/93/73/58/metades-em-vidas-TqmdG.jpg', 'Biography', 'Ray Santos', 'Independently Published', 1, 'Portuguese', 69, 11),
(41, 'Heaven\'s River', 'https://images-na.ssl-images-amazon.com/images/I/61vmKTklqbL.jpg', 'Sci Fi', 'Dennis E Taylor', 'Ethan Ellenberg Literary Agency', 1, 'English', 640, 16),
(42, 'Guardian\'s Awakening', 'https://ib.dr.com.tr/image/80/86/79/guardians-awakening-wRrDM.jpg', 'Sci Fi', 'K M Carroll', 'Independently Published', 2, 'English', 212, 7),
(43, 'Legend of Koji', 'https://ib.dr.com.tr/image/80/85/03/legend-of-koji-TwY7Y.jpg', 'Sci Fi', 'J R Ryan', 'Independently Published', 2, 'English', 295, 9),
(44, 'Pax Machina', 'https://ib.dr.com.tr/image/07/55/85/pax-machina-pYygP.jpg', 'Sci Fi', 'Greg Sorber', 'Independently Published', 1, 'English', 402, 12),
(45, 'Sentry - The Jack Schilt Saga', 'https://ib.dr.com.tr/image/53/04/89/sentry-the-jack-schilt-saga-3wLpZ.jpg', 'Sci Fi', 'Michael Thiele', 'Independently Published', 2, 'German', 695, 16),
(46, 'In Die Bresche', 'https://ib.dr.com.tr/image/63/37/15/in-die-bresche-MImNn.jpg', 'Sci Fi', 'Jr Castle, Jonathan Yanez', 'Independently Published', 1, 'German', 520, 16),
(47, 'Price of Time', 'https://ib.dr.com.tr/image/94/24/07/price-of-time-zfMw0.jpg', 'Sci Fi', 'Bruce Walker', 'Independently Published', 3, 'English', 295, 12),
(48, 'Ancestor of War', 'https://ib.dr.com.tr/image/50/82/81/ancestor-of-war-Yqv9E.jpg', 'Sci Fi', 'G J Ogden', 'Independently Published', 2, 'English', 315, 12),
(49, 'Faceless', 'https://ib.dr.com.tr/image/38/79/66/faceless-pPTIE.jpg', 'Sci Fi', 'Dustin Sanchez', 'Createspace Independent Publishing Platform', 3, 'English', 410, 14),
(50, 'Hexenflug zum Jupiter', 'https://m.media-amazon.com/images/I/41ZKX4cExPL._AC_SY780_.jpg', 'Sci Fi', 'Kim Nexus', 'Kim Nexus Publishing', 1, 'German', 564, 19),
(51, 'Women, what Cosmo Didn\'t tell you', 'https://ib.dr.com.tr/image/26/76/89/women-what-cosmo-didnt-tell-you-zCRTM.jpg', 'Humour', 'Toni Verticelli', 'Independently Published', 1, 'English', 45, 5),
(52, 'Scambait', 'https://m.media-amazon.com/images/I/41myMKd8eeL.jpg', 'Humour', 'Ryan R Campbell', 'Cedarbrook Books', 1, 'English', 328, 12),
(53, 'Gags and Extracts', 'https://ib.dr.com.tr/image/75/12/03/gags-and-extracts-HpEMK.jpg', 'Humour', 'Santosh Kalwar', 'Lulu.com', 3, 'English', 54, 9),
(54, 'Book of Stickler Questions', 'https://ib.dr.com.tr/image/34/66/29/book-of-stickler-questions-Mpzmc.jpg', 'Humour', 'John Henry', 'Independently Published', 2, 'English', 211, 16),
(55, 'Splendeurs de la Democratie !', 'https://ib.dr.com.tr/image/46/44/88/splendeurs-de-la-democratie-vu3RV.jpg', 'Humour', 'Bernard Houot', 'Independently Published', 1, 'French', 142, 13),
(56, 'Vida de Suso', 'https://ib.dr.com.tr/image/68/43/35/vida-de-suso-tYdZa.jpg', 'Humour', 'Mercedes de Miguel', 'Independently Published', 3, 'Spanish', 148, 7),
(57, 'Weg zu Sieg und Freude', 'https://ib.dr.com.tr/image/08/10/99/weg-zu-sieg-und-freude-TBtSF.jpg', 'Humour', 'MR James', 'Independently Published', 2, 'German', 259, 11),
(58, 'Dictionnaire de l\'absurde aujourd\'hui en France', 'https://ib.dr.com.tr/image/42/27/39/dictionnaire-de-labsurde-aujourdhui-en-france-r9k02.jpg', 'Humour', 'Lukhotep Lukhotep', 'Books on Demand', 2, 'French', 293, 12),
(59, 'Adult Joke Book For Men', 'https://ib.dr.com.tr/image/59/16/16/adult-joke-book-for-men-iK9Dk.jpg', 'Humour', 'Team Golfwell', 'Pacific Trust Holdings Nz Ltd.', 1, 'English', 320, 14),
(60, 'Actuarial Fairy Tales', 'https://images-na.ssl-images-amazon.com/images/I/71z66JslslL.jpg', 'Humour', 'John Lee', 'Kingdom Collective Publishing', 1, 'English', 146, 15),
(61, 'Once a Bride', 'https://ib.dr.com.tr/image/36/36/06/once-a-bride-Xixs1.jpg', 'Literature', 'Amy Lillard', 'Independently Published', 1, 'English', 389, 11),
(62, 'Children of Grad', 'https://ib.dr.com.tr/image/30/10/24/children-of-grad-7mb0u.jpg', 'Literature', 'Maria Miniailo', 'Waterloo Press', 2, 'English', 215, 12),
(63, 'Gravity of Nothing', 'https://ib.dr.com.tr/image/86/11/63/gravity-of-nothing-yz0td.jpg', 'Literature', '', 'Independently Published', 2, 'English', 243, 10),
(64, 'If It Don\'t Kill You', 'https://ib.dr.com.tr/image/22/43/67/if-it-dont-kill-you-Ka7Tv.jpg', 'Literature', 'Tanika Monaee Fears', 'Ms. Tanika M Fears', 3, 'English', 284, 12),
(65, 'End Of The End', 'https://ib.dr.com.tr/image/51/36/02/end-of-the-end-6jxBk.jpg', 'Literature', 'Estee Shoesmyth', 'Createspace Independent Publishing Platform', 1, 'English', 684, 19),
(66, 'Racconti Asiatici', 'https://ib.dr.com.tr/image/20/22/00/racconti-asiatici-Jw40g.jpg', 'Literature', 'Stefano Romano', 'Lulu.com', 3, 'Italian', 184, 9),
(67, 'Every Window Filled with Light', 'https://ib.dr.com.tr/image/01/17/49/every-window-filled-with-light-u7fkc.jpg', 'Literature', 'Shelia Stovall', 'Elk Lake Publishing Inc', 2, 'English', 380, 12),
(68, 'Historias de un verano', 'https://ib.dr.com.tr/image/42/03/97/historias-de-un-verano-K8FF7.jpg', 'Literature', 'Autores de Legends Legends Founders', 'Independently Published', 2, 'Spanish', 98, 8),
(69, 'Comedy of the Insane', 'https://ib.dr.com.tr/image/46/41/53/comedy-of-the-insane-qPD4n.jpg', 'Literature', 'Marco Pennella', 'Independently Published', 2, 'English', 49, 4),
(70, 'Rejete Par Le Paradis', 'https://images-us.bookshop.org/ingram/9798432270177.jpg?height=500&v=v2', 'Literature', 'George Elite', 'Independently Published', 1, 'French', 316, 17),
(71, 'Morte Na Opera', 'https://ib.dr.com.tr/image/60/27/28/morte-na-opera-t6PTd.jpg', 'Mystery&Crime', 'Richardt Guitterzzi', 'Independently Published', 1, 'Portuguese', 68, 6),
(72, 'Rose Water', 'https://ib.dr.com.tr/image/89/08/10/rose-water-nOuu8.jpg', 'Mystery&Crime', 'Thomas Fincham', 'Independently Published', 1, 'English', 329, 9),
(73, 'Expert Witness', 'https://ib.dr.com.tr/image/17/74/24/expert-witness-t3Euo.jpg', 'Mystery&Crime', 'J Richardson', 'Createspace Independent Publishing Platform', 2, 'English', 282, 9),
(74, 'Wheels of Cady Grey', 'https://ib.dr.com.tr/image/65/54/86/wheels-of-cady-grey-zRSUr.jpg', 'Mystery&Crime', 'Paul L Arvidson', 'Independently Published', 1, 'English', 354, 12),
(75, 'Pumpkin Spice & Deadly Heist', 'https://ib.dr.com.tr/image/32/37/46/pumpkin-spice-deadly-heist-aEBb9.jpg', 'Mystery&Crime', 'Tanya R Taylor', 'Independently Published', 2, 'English', 176, 7),
(76, 'L\'escriptor', 'https://ib.dr.com.tr/image/33/63/02/lescriptor-PEF4G.jpg', 'Mystery&Crime', 'Josep Oliveras', 'Independently Published', 3, 'Catalan', 310, 14),
(77, 'Standoff! Cops and Robbers', 'https://ib.dr.com.tr/image/51/59/68/standoff-cops-and-robbers-xnkQZ.jpg', 'Mystery&Crime', 'Mark Barnard, Matt McGee, E W Farnsworth', 'Independently Published', 3, 'English', 254, 9),
(78, 'Artists of Death', 'https://ib.dr.com.tr/image/04/17/80/artists-of-death-0FzKd.jpg', 'Mystery&Crime', 'Jairo E Lopez', 'Independently Published', 3, 'English', 432, 7),
(79, 'Murder on Woof Way', 'https://ib.dr.com.tr/image/25/07/61/murder-on-woof-way-ISlun.jpg', 'Mystery&Crime', 'Cindy Bell', 'Independently Published', 1, 'English', 226, 8),
(80, 'Fight For Your Life', 'https://ib.dr.com.tr/image/31/31/61/fight-for-your-life-bpfjV.jpg', 'Mystery&Crime', 'C M Sutter', 'Independently Published', 1, 'English', 254, 11),
(81, 'Dragon Sword', 'https://ib.dr.com.tr/image/94/64/92/dragon-sword-376lx.jpg', 'Adventure', 'Griff Hosker', 'Independently Published', 1, 'English', 225, 8),
(82, 'Crimson Dawn', 'https://ib.dr.com.tr/image/51/05/96/crimson-dawn-bs0jc.jpg', 'Adventure', 'Sean Carless', 'Independently Published', 2, 'English', 183, 6),
(83, 'Resurgir del destino', 'https://ib.dr.com.tr/image/08/95/36/resurgir-del-destino-Lhw05.jpg', 'Adventure', 'M J Ramirez Garcia', 'Independently Published', 2, 'English, Spanish', 354, 12),
(84, 'Deuter Kronos', 'https://ib.dr.com.tr/image/23/80/41/deuter-kronos-Fw38e.jpg', 'Adventure', 'Giuseppe Belardo', 'Independently Published', 3, 'Italian', 280, 10),
(85, 'Veder Arts School of The Dark', 'https://ib.dr.com.tr/image/15/02/39/veder-arts-school-of-the-dark-X8Skg.jpg', 'Adventure', 'Sherrilli Carter', 'Independently Published', 3, 'English', 175, 6),
(86, 'Nine friends in siberia', 'https://ib.dr.com.tr/image/30/22/55/nine-friends-in-siberia-w83n2.jpg', 'Adventure', 'Domenico Zeziola', 'Independently Published', 3, 'English', 198, 18),
(87, 'Zula\'s first day of school', 'https://ib.dr.com.tr/image/67/21/75/zulas-first-day-of-school-nqSiH.jpg', 'Adventure', 'Vamorani Vera', 'Independently Published', 1, 'English', 251, 14),
(88, 'Simple Serendipity', 'https://ib.dr.com.tr/image/80/32/10/simple-serendipity-abenZ.jpg', 'Adventure', 'Santo J Triolo', 'Independently Published', 1, 'English', 154, 8),
(89, 'Between the Horns of the Bull', 'https://images-na.ssl-images-amazon.com/images/I/61-xNfxzeaL.jpg', 'Adventure', 'Grey Forrester', 'Independently Published', 2, 'English', 175, 7),
(90, 'Gun Down Under', 'https://ib.dr.com.tr/image/26/47/74/gun-down-under-EIb1A.jpg', 'Adventure', 'Frank Riley', 'Independently Published', 1, 'English', 97, 5),
(91, 'Anatomical Venus', 'https://ib.dr.com.tr/image/97/46/37/anatomical-venus-AHjoH.jpg', 'Poems', 'Helen Ivory', 'Bloodaxe Books Ltd', 2, 'English', 120, 9),
(92, 'Poesies amoureuses', 'https://ib.dr.com.tr/image/27/43/97/poesies-amoureuses-Q73di.jpg', 'Poems', 'Alice Mei Lan', 'Independently Published', 2, 'French', 146, 5),
(93, 'Eclosions poetiques', 'https://ib.dr.com.tr/image/31/62/97/eclosions-poetiques-LdCdx.jpg', 'Poems', 'Alice Mei Lan', 'Createspace Independent Publishing Platform', 1, 'French', 132, 5),
(94, 'Petal Storm', 'https://images-na.ssl-images-amazon.com/images/I/714nMhW28pL.jpg', 'Poems', 'Sandy Hiss', 'Createspace Independent Publishing Platform', 1, 'English', 108, 6),
(95, 'Scarlet Clock', 'https://ib.dr.com.tr/image/62/78/79/scarlet-clock-FhD9d.jpg', 'Poems', 'Kilayla Pilon', 'Resource Publications (CA)', 1, 'English', 285, 23),
(96, 'Poesie e Canzoni', 'https://ib.dr.com.tr/image/11/39/50/poesie-e-canzoni-7GtDJ.jpg', 'Poems', 'Filippo Rinaudo', 'Createspace Independent Publishing Platform', 3, 'Italian', 75, 4),
(97, 'Prosaic', 'https://images-na.ssl-images-amazon.com/images/I/21yuULXTlVL._SX333_BO1,204,203,200_.jpg', 'Poems', 'Hazel C', 'Independently Published', 3, 'English', 118, 5),
(98, 'In a Burst of Recycled Electrons', 'https://ib.dr.com.tr/image/49/57/42/in-a-burst-of-recycled-electrons-Ky2Vj.jpg', 'Poems', 'James Thomas Fletcher', 'Createspace Independent Publishing Platform', 2, 'English', 123, 9),
(99, 'Death In a Dream', 'https://images-na.ssl-images-amazon.com/images/I/617uwlw1qAL.jpg', 'Poems', 'Salma Malin', 'Independently Published', 3, 'English', 164, 7),
(100, 'Healing Is a Gift', 'https://ib.dr.com.tr/image/45/16/04/healing-is-a-gift-ZnUhR.jpg', 'Poems', 'Alexandra Vasiliu', 'Independently Published', 1, 'English', 195, 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `book_order`
--

CREATE TABLE `book_order` (
  `order_id` int(10) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `order_situation` varchar(255) NOT NULL,
  `id` int(10) NOT NULL,
  `adress_id` int(11) NOT NULL,
  `book_id` int(10) NOT NULL,
  `book_count` int(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `total_count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `book_order`
--

INSERT INTO `book_order` (`order_id`, `order_date`, `order_situation`, `id`, `adress_id`, `book_id`, `book_count`, `total_price`, `total_count`) VALUES
(500, '2022-05-06 15:28:46', 'Preparing', 12, 61, 11, 2, 38, 4),
(501, '2022-05-06 15:28:46', 'Preparing', 12, 61, 10, 2, 38, 4),
(502, '2022-05-07 13:26:09', 'Preparing', 12, 61, 4, 1, 72, 4),
(503, '2022-05-07 13:26:09', 'Preparing', 12, 61, 2, 1, 72, 4),
(504, '2022-05-07 13:26:09', 'Preparing', 12, 61, 3, 1, 72, 4),
(505, '2022-05-07 13:26:09', 'Preparing', 12, 61, 100, 1, 72, 4),
(506, '2022-05-09 20:06:16', 'Progressing', 12, 61, 3, 1, 30, 1),
(507, '2022-05-09 22:51:38', 'Progressing', 2, 0, 31, 1, 103, 8),
(508, '2022-05-09 22:51:38', 'Progressing', 2, 0, 32, 1, 103, 8),
(509, '2022-05-09 22:51:38', 'Progressing', 2, 0, 30, 1, 103, 8),
(510, '2022-05-09 22:51:38', 'Progressing', 2, 0, 29, 1, 103, 8),
(511, '2022-05-09 22:51:38', 'Progressing', 2, 0, 33, 1, 103, 8),
(512, '2022-05-09 22:51:38', 'Progressing', 2, 0, 34, 1, 103, 8),
(513, '2022-05-09 22:51:38', 'Progressing', 2, 0, 35, 1, 103, 8),
(514, '2022-05-09 22:51:38', 'Progressing', 2, 0, 36, 1, 103, 8),
(515, '2022-05-09 23:00:39', 'Progressing', 2, 0, 33, 1, 74, 7),
(516, '2022-05-09 23:00:39', 'Progressing', 2, 0, 34, 1, 74, 7),
(517, '2022-05-09 23:00:39', 'Progressing', 2, 0, 35, 1, 74, 7),
(518, '2022-05-09 23:00:39', 'Progressing', 2, 0, 36, 1, 74, 7),
(519, '2022-05-09 23:00:39', 'Progressing', 2, 0, 27, 2, 74, 7),
(520, '2022-05-09 23:00:39', 'Progressing', 2, 0, 42, 1, 74, 7),
(521, '2022-05-09 23:01:39', 'Progressing', 2, 0, 32, 2, 46, 3),
(522, '2022-05-09 23:01:39', 'Progressing', 2, 0, 54, 1, 46, 3),
(523, '2022-05-11 16:18:07', 'Progressing', 21, 0, 68, 1, 8, 1),
(524, '2022-05-11 16:23:59', 'Progressing', 21, 67, 68, 1, 8, 1),
(525, '2022-05-11 16:24:55', 'Progressing', 12, 61, 4, 1, 160, 8),
(526, '2022-05-11 16:24:55', 'Progressing', 12, 61, 3, 1, 160, 8),
(527, '2022-05-11 16:24:55', 'Progressing', 12, 61, 5, 2, 160, 8),
(528, '2022-05-11 16:24:55', 'Progressing', 12, 61, 98, 1, 160, 8),
(529, '2022-05-11 16:24:55', 'Progressing', 12, 61, 95, 2, 160, 8),
(530, '2022-05-11 16:24:55', 'Progressing', 12, 61, 90, 1, 160, 8),
(531, '2022-05-11 16:26:18', 'Progressing', 12, 61, 18, 1, 12, 1),
(532, '2022-05-11 17:52:19', 'Progressing', 12, 61, 91, 1, 9, 1),
(533, '2022-05-11 18:13:34', 'Progressing', 12, 61, 55, 1, 13, 1),
(534, '2022-05-11 18:20:46', 'Progressing', 12, 61, 55, 1, 20, 2),
(535, '2022-05-11 18:20:46', 'Progressing', 12, 61, 42, 1, 20, 2),
(536, '2022-05-11 18:21:42', 'Progressing', 12, 61, 89, 1, 7, 1),
(537, '2022-05-13 17:00:48', 'Progressing', 12, 61, 1, 1, 450, 1),
(538, '2022-05-13 17:05:43', 'Progressing', 12, 61, 16, 1, 11, 1),
(539, '2022-05-14 11:33:01', 'Progressing', 12, 61, 82, 1, 6, 1),
(540, '2022-05-14 12:45:54', 'Progressing', 21, 67, 3, 1, 94, 2),
(541, '2022-05-14 12:45:54', 'Progressing', 21, 67, 6, 1, 94, 2),
(542, '2022-05-14 12:46:21', 'Progressing', 21, 67, 3, 1, 113, 5),
(543, '2022-05-14 12:46:21', 'Progressing', 21, 67, 4, 1, 113, 5),
(544, '2022-05-14 12:46:21', 'Progressing', 21, 67, 5, 1, 113, 5),
(545, '2022-05-14 12:46:21', 'Progressing', 21, 67, 11, 1, 113, 5),
(546, '2022-05-14 12:46:21', 'Progressing', 21, 67, 9, 1, 113, 5),
(547, '2022-05-14 12:52:39', 'Progressing', 12, 61, 68, 1, 8, 1),
(548, '2022-05-14 13:01:53', 'Progressing', 12, 61, 12, 1, 10, 1),
(549, '2022-05-14 13:02:59', 'Progressing', 12, 61, 3, 1, 42, 2),
(550, '2022-05-14 13:02:59', 'Progressing', 12, 61, 83, 1, 42, 2),
(551, '2022-05-14 15:27:57', 'Progressing', 21, 68, 3, 4, 120, 4),
(552, '2022-05-14 15:29:19', 'Progressing', 21, 68, 3, 1, 30, 1),
(553, '2022-05-14 22:25:34', 'Preparing', 29, 69, 3, 3, 138, 8),
(554, '2022-05-14 22:25:34', 'Preparing', 29, 69, 73, 2, 138, 8),
(555, '2022-05-14 22:25:34', 'Preparing', 29, 69, 72, 1, 138, 8),
(556, '2022-05-14 22:25:34', 'Preparing', 29, 69, 76, 1, 138, 8),
(557, '2022-05-14 22:25:34', 'Preparing', 29, 69, 78, 1, 138, 8),
(558, '2022-05-15 12:10:26', 'Progressing', 30, 76, 42, 1, 7, 1),
(559, '2022-05-15 12:13:16', 'Progressing', 30, 76, 43, 1, 9, 1),
(560, '2022-05-15 12:49:55', 'Progressing', 30, 76, 4, 2, 48, 2),
(561, '2022-05-15 16:03:06', 'Progressing', 35, 77, 2, 2, 18, 2),
(562, '2022-05-15 16:07:22', 'Preparing', 36, 78, 3, 3, 108, 5),
(563, '2022-05-15 16:07:22', 'Preparing', 36, 78, 2, 2, 108, 5),
(564, '2022-05-15 16:20:08', 'Delivered to cargo', 37, 79, 2, 3, 177, 8),
(565, '2022-05-15 16:20:08', 'Delivered to cargo', 37, 79, 3, 5, 177, 8);


-- Tablo için tablo yapısı `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(10) NOT NULL,
  `comment_information` varchar(255) NOT NULL,
  `id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `deleted_at` date DEFAULT NULL,
  `situation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_information`, `id`, `book_id`, `deleted_at`, `situation`) VALUES
(44, 'very good', 36, 3, NULL, 'Your comment is not accepted.'),
(45, 'very good.', 37, 2, NULL, 'Published at corresponding book page');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `contact`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favorite_books`
--

CREATE TABLE `favorite_books` (
  `favorite_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `favorite_books`
--

INSERT INTO `favorite_books` (`favorite_id`, `id`, `book_id`) VALUES
(38, 17, 8),
(39, 17, 2),
(40, 19, 1),
(42, 21, 3),
(43, 12, 4),
(46, 12, 11),
(53, 29, 3),
(54, 29, 15),
(55, 29, 6),
(58, 30, 3),
(59, 35, 2),
(60, 36, 3),
(61, 37, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `score`
--

CREATE TABLE `score` (
  `score_id` int(10) NOT NULL,
  `score` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `score`
--

INSERT INTO `score` (`score_id`, `score`, `id`, `book_id`) VALUES
(1, 5, 36, 3),
(2, 4, 37, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `checking` tinyint(1) NOT NULL,
  `register_date` date NOT NULL DEFAULT current_timestamp(),
  `before_namelastname` varchar(20) DEFAULT NULL,
  `before_mail` varchar(50) DEFAULT NULL,
  `before_phone` bigint(10) DEFAULT NULL,
  `before_password` varchar(10) DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `mail`, `phone`, `password`, `checking`, `register_date`, `before_namelastname`, `before_mail`, `before_phone`, `before_password`, `update_date`) VALUES
(1, 'test', 'test', 'testing@hotmail.com', 1234567890, '1234567890', 0, '2022-05-15', 'test\"test', 'test@hotmail.com', 1234567890, '1234567890', '2022-05-15'),
(2, 'test', 'test', 'testt@hotmail.com', 1234567890, '1234567890', 0, '2022-05-15', 'test\"test', 'test@hotmail.com', 1234567890, '1234567890', '2022-05-15');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Tablo için indeksler `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`adress_id`),
  ADD KEY `id` (`id`) KEY_BLOCK_SIZE=1024 USING BTREE;

--
-- Tablo için indeksler `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Tablo için indeksler `book_order`
--
ALTER TABLE `book_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `id` (`id`),
  ADD KEY `adress_id` (`adress_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Tablo için indeksler `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `id` (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `favorite_books`
--
ALTER TABLE `favorite_books`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `id` (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- Tablo için indeksler `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`),
  ADD KEY `id` (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `mail_2` (`mail`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `adress`
--
ALTER TABLE `adress`
  MODIFY `adress_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Tablo için AUTO_INCREMENT değeri `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- Tablo için AUTO_INCREMENT değeri `book_order`
--
ALTER TABLE `book_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=566;

--
-- Tablo için AUTO_INCREMENT değeri `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Tablo için AUTO_INCREMENT değeri `favorite_books`
--
ALTER TABLE `favorite_books`
  MODIFY `favorite_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Tablo için AUTO_INCREMENT değeri `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=775;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `book_order`
--
ALTER TABLE `book_order`
  ADD CONSTRAINT `book_order_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `book_order_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);

--
-- Tablo kısıtlamaları `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Tablo kısıtlamaları `favorite_books`
--
ALTER TABLE `favorite_books`
  ADD CONSTRAINT `favorite_books_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `favorite_books_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Tablo kısıtlamaları `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
