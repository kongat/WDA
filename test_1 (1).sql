-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 31 Οκτ 2017 στις 20:35:41
-- Έκδοση διακομιστή: 10.1.28-MariaDB
-- Έκδοση PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `test_1`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `post_data`
--

CREATE TABLE `post_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `post_data`
--

INSERT INTO `post_data` (`id`, `name`, `email`, `message`) VALUES
(1, 'kon', 'gat', 'sdgfgdgegerg'),
(2, 'kongat', 'kongat', 'kongat'),
(3, 'erystgert', 'fhrthrth@dfgdfg.gr', 'dfghsdgsegg'),
(4, 'fgbhdfgbfdg', 'dfgfdg@rgre.bb', 'sgdrgdrgregergerg'),
(5, 'Panos Panou', 'panou@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt elementum pellentesque. Curabitur pharetra ultrices luctus. Praesent tincidunt arcu sem, ac blandit nibh iaculis nec. Nunc justo leo, consectetur vel mi eu, efficitur dapibus est. Mauris bibendum eget felis a placerat.'),
(6, 'dtyjtrjytrjh', 'ethyth4yj4y@thtrh.kk', 'tjryjryueueyjdtyh'),
(7, '', '', ''),
(8, 'ygcitctygvy', 'jggvgycity@jdjjf.jjj', 'hjffcitycytikfufulclutxltuxlutxultxutxu  jbhcvjhcvjgcjg j,g jg g g .kh hhhfcyyfyig'),
(9, '', '', ''),
(10, 'gdegegert', 'eweferf@dsfdg.kk', 'dhsregsrtysrhstrhsdhdh'),
(11, '', '', ''),
(12, 'dfsfseffwef', 'fewefwefwe@fdsf.kk', 'sgfsagfarrgfarf'),
(13, 'fth', '', ''),
(14, '', '', ''),
(15, 'yugygyb', 'chdfht@fdgr.kk', 'fhsfyhysrusrtustdsthtysrdyhsrth'),
(16, 'yugygyb', 'chdfht@fdgr.kk', 'fhsfyhysrusrtustdsthtysrdyhsrth'),
(17, 'ghjfgjghh', 'dgdfg@ff.ll', 'sdgsdgsgsgsefgewf'),
(18, 'ghjfgjghh', 'dgdfg@ff.ll', 'sdgsdgsgsgsefgewf'),
(19, 'setwetert4et', 'ertertretr@fff.lll', 'ghdfhdhdhdhd'),
(20, 'dfgdfgdf', 'dgdgdg@dd.ll', 'gfswgwetewterter'),
(21, 'fdhfghftgh', 'fghgfhft@ff.kk', 'dsgergergtaegtrte'),
(22, 'dfgdfgfdgf', 'dfgfdg@ff.kk', 'dfgdfgdfgdfgdg'),
(23, 'konstantinos', 'gatis@gmail.com', 'dasdsadadasdassadasdsadsadsada'),
(24, 'konstantinos', 'gatis@gmail.com', 'dasdsadadasdassadasdsadsadsada'),
(25, 'konstantinoszxcxz', 'gatis@gmail.com', 'dasdsadadasdassadasdsadsadsadazxcxzcxczxc'),
(26, 'xcxzcxzcxzc', 'zxcxzcxzcxxz@fffff.ll', 'dsgsdfdssdfdssdf'),
(27, '', '', ''),
(28, '', '', ''),
(29, 'cvxcvxcv', 'xcvxcvcx@dddd.ll', 'jdththyth'),
(30, 'sfsdffsdfsdf', 'sdfffsftha@tisga.ddd', 'sdsdsfsdfdsfwefwcsc'),
(31, '', '', ''),
(32, '', '', ''),
(33, '', '', ''),
(34, 'czcxzxcxzc', 'zcxzczx@fvff.kk', 'rthytrshyrth'),
(35, 'czcxzxcxzc', 'zcxzczx@fvff.kk', 'rthytrshyrth'),
(36, '', '', ''),
(37, 'trdteter', 'drgergret@fff.kk', 'dertertertret'),
(38, 'trdteter', 'drgergret@fff.kk', 'dertertertret'),
(39, 'trd', 'drgergret@fff.kk', 'dertertertret'),
(40, '', '', ''),
(41, 'erteryregt', 'dfgdfg@dfd.kk', 'dgdfgfdgdgdfg'),
(42, 'cdddddd', 'dddd@kk.vvn', 'sdfsdfsdfdssdfds'),
(43, '', '', ''),
(44, 'fdgdfhgdgdg', 'dgdgdg@fff.ll', 'gkjghjtyjtyjty'),
(45, 'dfhthrtyhrt', 'trhrthtrhrt@dddd.lll', 'ktyktyktyk'),
(46, 'gjgtjtyjtyjt', 'xvxcvzcv@ggg.lll', 'vxvxsvxsvxcvxv'),
(47, 'yur67iur67i', 'ykykyukuy@nn.ll', 'yuuku6kukj57uj75'),
(48, 'thththty', 'ytjtyhjhy@fff.llll', 'nyjyujyujuyjuy'),
(49, 'thththty', 'ytjtyhjhy@fff.llll', 'nyjyujyujuyjuy'),
(50, 'thththty', 'ytjtyhjhy@fff.llll', 'nyjyujyujuyjuy'),
(51, 'scsadcsad', 'csdacsad@deee.lll', 'zcsdafasfcasxcxcx'),
(52, 'scsadcsad', 'csdacsad@deee.lll', 'zcsdafasfcasxcxcx'),
(53, 'scsadcsad', 'csdacsad@deee.lll', 'zcsdafasfcasxcxcx'),
(54, 'rghege', 'dgderger@ggg.lll', 'rgergdgd'),
(55, 'rghege', 'dgderger@ggg.lll', 'rgergdgd'),
(56, 'rghege', 'dgderger@ggg.lll', 'rgergdgd'),
(57, 'efewfefwe', 'rhteht@fbfdfh.lll', 'sgfdgdgdg'),
(58, 'sdgsg', 'gsger@dfff.kkk', 'rhrthtrh'),
(59, 'dggedge', 'gdrgdgrr@ghhh.lll', 'ghjghjhgnhg'),
(60, 'fghstfhdfhh', 'fhfghfhfrh@ffff', 'ehftrhrtfhgtrf'),
(61, 'zxvsxdvd', 'sdvsdvsdv@dfgfdg.tyjghj', 'frthfthftrhthtr'),
(62, 'dgdrgrdg', 'dgdrgdr@ddd.ll', 'rgrgrg'),
(63, 'fbhdhdfg', 'dgdfg@eded.kk', 'rrrrrrrr'),
(64, 'sdgsdfd', 'fgfdgd@dff.kkk', 'csccdc'),
(65, 'YUKYUKU', 'YUKYUJKYUK@hhhh.kkk', 'dffghjrtfjrtikgjl.y.,jgk,tum'),
(66, 'khkyukyukj', 'yujyujyn@dddd.ll', 'yukukukuik'),
(67, 'uiluiluill', 'lhfgtrhrtyjhn@fff.lll', 'uiluiluililiul'),
(68, 'sfsgfrgdge', 'gergergre@fefwfref.fgfff', 'dfhgfhtrfhtrf'),
(69, 'kfkfkfyuk', 'yukukyuky@ddd.lll', 'yukykuyk5yrujdfxghsttr rtyrty 54y54 y5 y  5 y54yh5g'),
(70, 'dfvdffdvdfsddvdv ', 'dfvdfvdfvfd@ddd.gkgkgk', 'dvcdvmkdvmdfkvndvjodanc jndaojfvncaodvmcodaamcodsmcds'),
(71, 'xscsdcdw', 'sdcdwcdwc@ddd.fflflfl', ';lmcsdlpcmsdpvmkdvmdkpvmdpvmsdcddmc,dk kdcmdscmdskcmdpkc pfkmepofmepcmpemc powefkepokcme'),
(72, 'wdkwldmwkdm', 'mkdsmcdkcjd@mjdjd.ll', 'x,xmxmxmxd  dknckdcndkkn odmcdcmdck d cnkdcmdockmdock'),
(73, 'sdhrsdyhryeryre', 'tujrtjut@ffff.ll', 'drhdrhyrereyrt'),
(74, '', '', ''),
(75, '', '', ''),
(76, '', '', ''),
(77, '', '', ''),
(78, '', '', ''),
(79, 'sdbgergherg', 'erhrturyhgtrg@rgdgh.lll', 'tykytikytik67k6yuk'),
(80, 'sdgsdgse', 'dfgdrgr@sfgfdgr.fthfhd', 'dfhdfghdfgdfg'),
(81, 'ghmghhjg', 'fgjtfhtrf@fgggggggggggggggggggg.ll', 'tyjtyjtyjtyj'),
(82, '', '', ''),
(83, '', '', ''),
(84, '', '', ''),
(85, 'fgdrgderg', 'hgdfgergreg@ffgg.kkujjt', 'ergergerg'),
(86, 'fgdrgderg', 'hgdfgergreg@ffgg.kkujjt', 'ergergerg'),
(87, 'rgregreg', 'rgergreg@grgreg.luykjgyj', 'rhdhtrhrthtrh'),
(88, 'fdbgfdbfdb', 'dfbfdbed@gregreg.ukyujuy', 'rthgtrhrthrthtrhtrh'),
(89, 'rgregreg', 'rgergreg@grgreg.luykjgyj', 'rhdhtrhrthtrh'),
(90, 'hvhvv', 'scascsa@dsdg.hhh', 'hhhhhhh'),
(91, 'hvhvv', 'scascsa@dsdg.hhh', 'hhhhhhh'),
(92, 'hvhvv', 'scascsa@dsdg.hhh', 'hhhhhhh'),
(93, 'hvhvv', 'scascsa@dsdg.hhh', 'hhhhhhh'),
(94, 'hvhvv', 'scascsa@dsdg.hhh', 'hhhhhhh'),
(95, 'hvhvv', 'scascsa@dsdg.hhh', 'hhhhhhh'),
(96, 'hvhvv', 'scascsa@dsdg.hhh', 'hhhhhhh'),
(97, 'sdgsdfsdf', 'sdgsdfds@ewewfefw.llllll', 'rtytrhrthhtrhuuuuuuuuuuuuuuuuuuuuuuu'),
(98, 'drgrdhregrthg', 'rthrthtr@333333333333333333.llllll', 'dhrthrtjrtjhrtjhtrjtr'),
(99, 'tyjtyjty6j', 'tyjtyjyytj@grger.lllllllllllllllllll', 'loooooooooooooooooooooooooooooooooeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(100, 'rtuetjetyujteyj', 'tyjtyjeyjetyjetjt@wwwwwwwww.llllllll', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(101, 'sdbdfgdf', 'dfbdfbdfoooooo@oooooo.looooo', 'oooooooooooooooooo'),
(102, 'ffefewfewf', 'ewfwef@fff.kk', 'efewfewfewfwegf'),
(103, 'gggg', 'ggg@gg.gg', 'gggggggggggggggggg'),
(104, 'fffff', 'efefefe@dvfg.llll', '0uuhuh'),
(105, 'efefefe', 'efefef@fffff.lllll', 'fgjfgjgfjg');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `post_data`
--
ALTER TABLE `post_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `post_data`
--
ALTER TABLE `post_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
