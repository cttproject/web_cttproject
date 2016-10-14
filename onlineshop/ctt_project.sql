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
  
 
-- TABLE PRODUCT
  CREATE TABLE `sys_product` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `price` int(100) DEFAULT NULL,
  `brand_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `time` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sys_product` (`id`, `label`, `price`, `brand_id`, `cat_id`, `time`, `description`, `images`) VALUES
(1, 'Asus Zenfone 5', 50000, 3, 1, '2016-09-01', 'comming soon', NULL),
(2, 'Kipas Angin', 25000, 2, 1, '2016-09-01', 'Adem', NULL),
(3, 'Tempat Sampah', 500000, 3, 2, '2016-09-02', 'Muat Banyak', NULL);

ALTER TABLE `sys_product`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `sys_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


--TABLE SIGNUP >>> UBAH KE sys_user/sys_account aja
CREATE TABLE `sys_signup` (
  `id` int(8) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `birthtime` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `sys_signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `sys_signup`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--TABLE NEWS
CREATE TABLE `sys_news` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `judul` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `gambar` longtext NOT NULL,
  `isi_berita` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `sys_news`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sys_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `sys_news` (`id`, `date`, `judul`, `sinopsis`, `gambar`, `isi_berita`) VALUES
(1, '2016-10-05', 'RI Terlalu Fokus ke Daratan, Susi: Disuruh Menggambar Pasti Bikin Gunung Bukan Laut', 'Menteri Kelautan dan Perikanan, Susi Pudjiastuti, menyebut bangsa Indonesia terlalu berorientasi kepada daratan dalam mengembangkan sesuatu.', 'images/img1.jpg', 'Menteri Kelautan dan Perikanan, Susi Pudjiastuti, menyebut bangsa Indonesia terlalu berorientasi kepada daratan dalam mengembangkan sesuatu. Padahal, wilayah RI paling luas adalah lautan.\r\n\r\nMenurut Susi, Indonesia juga selama 70 tahun terakhir didoktrin untuk mengembangkan agrikultur bukan maritim atau perikanan.\r\n\r\n"Kita ini didoktrin selama 70 tahun untuk land based. Agriculture, bukan marine atau sea oriented, tapi lebih ke land based development," kata Susi, dalam Kuliah Umum dengan tema ''Membangun Kedaulatan Perikanan Melalui Pemberantasan Illegal Fishing'' di Auditorium Andi Hakim Nasoetion, Kampus IPB Darmaga, Bogor, Kamis (13/10/2016).\r\n\r\n"Coba saja kalau anak kecil disuruh menggambar pemandangan. Saya yakin dari 10 anak pasti hampir semuanya menggambar pemandangan gunung. Mungkin hanya satu saja yang bikin pemandangan laut," ujarnya.\r\n\r\n"Kenapa bisa begitu? Karena kita tidak terbiasa untuk hidup di laut, Mayoritas penduduk kita hidup di Jawa, tidak mengenal lautnya," tambahnya.\r\n\r\nMaka dari itu, lanjut Susi, rencana Presiden Joko Widodo (Jokowi) untuk menjadikan Indonesia poros maritim dunia bisa dibilang ambisius.\r\n\r\n"Visi pemerintah ini ambisius ya memang, ini sesuatu yang kompleks. Misi ini mengharuskan kita membuat sesuatu yang ekstrem. Mengubah orientasi dari agrikultur ke bahari," ungkapnya.'),
(2, '2016-10-05', '\r\nKapal Pesiar Tak Selamanya Soal Liburan Mewah', 'Kapal pesiar identik dengan liburan mewah. Tapi ternyata, di lain sisi justru liburan dengan cara ini dinilai menghemat biaya.', 'images/img1.jpg', 'Kapal pesiar identik dengan liburan mewah. Tapi ternyata, di lain sisi justru liburan dengan cara ini dinilai menghemat biaya.\r\n\r\n"Cruise adalah cara liburan murah dengan tujuan berbagai destinasi dalam sekali perjalanan," kata Johnny Judianto, Cruise Consultan pada detikTravel, Kamis (13/10/2016) dalam acara pembukaan cruise fair 2016 yang bekerja sama dengan Singapore Tourism Board di Restoran Meradelima, Jakarta, Kamis (13/10/2016).\r\n\r\nMenurut Johnny, presepsi tentang cruise adalah liburan mewah salah besar. Traveler justru akan menghemat budget dan waktu perjalanan dengan cruise.\r\n\r\n"Kalau perjalanan darat, dari kota ke kota bisa memakan waktu seharian. Tidak seperti cruise. Cruise akan terus berlayar tanpa ada kendala kemacetan. Sangat efisien," ujar Johnny.\r\n\r\nHal inilah yang menjadi keunggulan liburan dengan kapal pesiar. Traveler bisa mengunjungi berbagai destinasi dengan perbandingan budget sekali perjalanan darat atau udara. Hemat!\r\n\r\nBukan hanya itu, cruise biasanya tidak mengenakan biaya untuk anak di bawah umur 14 tahun. Biaya yang dikeluarkan hanya untuk asuransi dan tax.\r\n\r\n"Banyak orang berpikir kalau di cruise itu hanya memandangi laut," ungkap Johnny.\r\n\r\nDi dalam cruise sudah di sediakan banyak event untuk menghibur para tamu. Semua fasilitas gratis. Mulai dari makan, karaoke, dansa, renang, wall climbing sampai wifi. Kalau ingin menekan budget, traveler bisa membawa bekal dari cruise dan menikmatinya saat sedang jalan-jalan. Tapi kalau mau makan di luar dengan biaya tambahan sendiri juga dipersilakan kok.\r\n\r\nCruise fair yang akan diadakan pada tanggal 15-16 Oktober 2016 ini kiranya merubah presepsi masyarakat tentang kapal pesiar. Nantinya akan ada promosi beli satu tiket gratis satu.\r\n\r\n"Destinasi pilihan yang banyak dipilih adalah Phuket, Penang, Malaka dan Singapura," jelas Johnny.\r\n\r\nPilihan waktunya pun 3-5 hari, sangat cocok dengan traveler yang bekerja di kantoran. Traveler juga bebas mengunjungi destinasi pilihan tanpa perlu memikirkan barang bawaan atau penginapan. Traveler sering kali lupa bahwa liburan bukan hanya sekedar singgah di suatu destinasi dan berfoto. Tapi juga menikmati suasana, kultur dan kulinernya dengan leluasa'),
(3, '2016-10-10', '\r\nSandiaga Sudah Habiskan Rp 29,3 M untuk Maju Cawagub DKI', 'Bakal cagub DKI Sandiaga Uno menghabiskan Rp 29,3 miliar dalam 10 bulan terakhir. Untuk apa saja?', 'images/img1.jpg', 'Bakal cagub DKI Sandiaga Uno memenuhi janjinya untuk transparan terkait dana yang digunakan untuk kepentingannya menuju kontestasi Pilgub DKI 2017. Sandi mengungkap sudah habiskan Rp 29,3 miliar dalam 10 bulan terakhir. Untuk apa saja?\r\n\r\n"Semua totalnya Rp 29,3 miliar," ucap Sandiaga dalam jumpa pers di Posko Melawai Blok M Jalan Melawai Raya Kebayoran Baru, Jaksel, Kamis (13/10/2016).\r\n\r\nDana itu dihabiskan Sandi sejak November 2015 sampai September 2016 atau sekitar 10 bulan. Secara rinci, dari total Rp 29,3 miliar itu, sebanyak Rp 25,6 miliar (87%) dana habis untuk media, observasi sosial, dan akseptabilitas, Rp 1,9 miliar (7%) untuk teritori, jaringan dan logistik. Sisanya Rp 1,8 miliar (6%) untuk advokasi, hukum dan data.\r\n\r\n"Ini dananya secara konkret. Sumber dana ini semua dari dana tabungan, dana pribadi, yang saya hasilkan dari sumber halal, dari dunia usaha, pecahin celengan. Semua totalnya Rp 29,3 miliar. Celengan ayam yang itu tu, tapi dalamnya isinya logam logam mulia. Ha...ha.." papar Sandiaga berkelakar.\r\n\r\nSandi mengucapkan terima kasih kepada parpol-parpol yang sebelumnya melakukan komunikasi dengan dia, sampai akhirnya diusung sebagai bakal cawagub oleh Gerindra dan PKS berpasangan dengan Anies Baswedan.\r\n\r\n"Selama 12 bulan ada 7 partai yang saya aktif berkomunikasi, PDIP, Gerindera, PKS, Demokrat, PPP, PKB, dan PAN adalah mitra yang sangat baik dan sangat berkomitmen terhadap pembangunan demokrasi Indonesia," terang Sandi.\r\n\r\n"Saya ingin menyatakan tidak ada serupiah pun dana yang diminta parpol dan diberikan dan dikategorikan sebagai mahar oleh parpol tersebut," imbuhnya.');
