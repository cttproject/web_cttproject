CREATE DATABASE IF NOT EXISTS `ctt_project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ctt_project`;

CREATE TABLE `sys_menus` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sys_menus` (`id`, `label`, `title`, `link`) VALUES
(1, 'HOME', 'HOME', 'home.php'),
(2, 'LAPTOP', 'LAPTOP', 'laptop.php'),
(3, 'AKSESORIS', 'AKSESORIS', 'aksesoris.php');

ALTER TABLE `sys_menus`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `sys_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


--TABLE MENU LAPTOP
CREATE TABLE `sys_menu_laptop` (
  `id` int(11) NOT NULL,
  `label_brand` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sys_menu_laptop` (`id`, `label_brand`, `link`) VALUES
(1, 'ACER', '/web_cttproject/laptop/laptop.php'),
(2, 'APPLE', '/web_cttproject/laptop/laptop.php'),
(3, 'ASUS', '/web_cttproject/laptop/laptop.php'),
(4, 'MSI', '/web_cttproject/laptop/laptop.php'),
(5, 'LENOVO', '/web_cttproject/laptop/laptop.php'),
(6, 'TOSHIBA', '/web_cttproject/laptop/laptop.php');


ALTER TABLE `sys_menu_laptop`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sys_menu_laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;



--TABLE MENU PRINTER
CREATE TABLE `sys_menu_printer` (
  `id` int(11) NOT NULL,
  `label_brand` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sys_menu_printer` (`id`, `label_brand`, `link`) VALUES
(1, 'HP', '#'),
(2, 'EPSON', '#'),
(3, 'XEROX', '#'),
(4, 'SAMSUNG', '#'),
(5, 'CANON', '#');


ALTER TABLE `sys_menu_printer`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `sys_menu_printer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;



-- TABLE KATEGORY AKSESORIS
CREATE TABLE `sys_menu_accesoris` (
  `id` int(11) NOT NULL,
  `label_cat` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sys_menu_accesoris` (`id`, `label_cat`, `link`) VALUES
(1, 'LCD', '#'),
(2, 'MOUSE', '#');

ALTER TABLE `sys_menu_accesoris`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sys_menu_accesoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
