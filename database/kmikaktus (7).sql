-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2019 pada 10.28
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmikaktus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `kode_artikel` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` int(11) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`kode_artikel`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(16, 'Fakta Mengejutkan ini Membuat Tumbuhan Hidup Seperti Layakny', '<p>Sejak lama kita selalu menganggap tumbuhan sebagai rantai pertama dari jaring-jaring makanan. Mereka adalah produsen yang akan selalu dimakan oleh organisme herbivora dan omnivora termasuk manusia dan hewan. Namun dalam beberapa tahun belakangan, ilmuwan telah menemukan banyak sekali fakta tentang tumbuhan yang sebelumnya tak terpikirkan. Tumbuhan dikatakan memiliki otak seperti hewan, meski tak berbentuk organ. Selain itu tumbuhan juga dikatakan bisa melihat sesuatu hal dan memiliki sebuah memori dalam tubuhnya.</p>\r\n<p>1. Tumbuhan Memiliki Otak</p>\r\n<p>Mungkin yang dimaksud otak pada tumbuhan bukan otak dalam wujud organ sebenarnya. Otak pada tumbuhan berupa ujung akar dan juga bagian meristem yang mengatur semua kerja sel saat menyangkut bahan makanan, lalu mengolah dan menyebarkan hasilnya ke seluruh bagian batang hingga menjadi bunga dan buah.Sebuah penelitian terbaru dari Daniel Chamovitz menemukan fakta jika beberapa gen pada tumbuhan memiliki kemiripan pada manusia. Bahkan tumbuhan mampu memproduksi neurotransmitter seperti dopamine dan serotonin yang ada pada manusia.</p>\r\n<p>2. Mampu Melindungi Diri Sendiri di Alam Liar</p>\r\n<p>Salah satu kemampuan yang dimiliki oleh manusia dan hewan adalah mampu melindungi dirinya sendiri. Jika ada bahaya mereka akan menghindar atau memangkasnya dengan sekuat tenaga. Hal-hal semacam ini ternyata juga dimiliki oleh beberapa tumbuhan di alam liar. Misal mawar yang memiliki duri untuk pertahanan diri. Selain ini, beberapa tumbuhan juga memiliki pertahanan diri berupa lendir atau bahkan lem. Tumbuhan yang memiliki lendir atau lem ini adalah kubis Brussel. Jika ada serangga meletakkan telor di atas daunnya, maka secara otomatis lendir mengubah komposisi kimianya. Dampaknya, telor tak akan bisa menetas karena mengalami kerusakan sel.</p>\r\n<p>3. Mampu Mengirim Sinyal Bahaya ke Populasinya</p>\r\n<p>Salah satu tumbuhan yang mampu hidup di lingkungan yang sangat ekstrem adalah akasia. Tumbuhan ini biasanya hidup di lingkungan liar seperti gurun hingga sabana. Akasia yang sering dimakan oleh jerapah ini biasanya akan langsung mengirim sinyal bahaya kepada tumbuhan akasia di sekitarnya. Saat jerapah mulai makan, sebuah zat tannin akan keluar untuk melindungi dirinya. Setelah beberapa saat, tannin akan menyebar dibawa angin, lalu memberi tahu akasia lain untuk segera memproduksi zat ini. Selain akasia, tumbuhan maple juga melakukan hal yang sama. Jika mendadak ada predator menyerang ia segara mengeluarkan semacam zat kimia yang menyebar di udara. Zat kimia ini akan diterima pohon maple lain hingga mereka langsung dalam mode siaga.</p>\r\n<p>4. Memiliki Mata Untuk Menerima Cahaya</p>\r\n<p>Barangkali kita selalu beranggapan jika sesuatu yang bisa melihat pasti memiliki mata. Manusia, dan segala jenis hewan yang melihat pasti memiliki mata. Tanpa organ ini melihat adalah sesuatu&nbsp; yang sangat mustahil. Namun tumbuhan yang tak memiliki mata secara nyata juga melihat sebuah cahaya yang datang dan mengenai batangnya. Tumbuhan memiliki banyak sekali reseptor cahaya yang bekerja dengan sangat baik. Reseptor ini akan membuat tumbuhan mampu tumbuh dengan baik atau tumbuh dengan mengalami kelainan. Selain itu, reseptor ini juga bertugas mengumpulkan cahaya matahari untuk digunakan sebagai bahan bakar fotosintesis.</p>\r\n<p>5. Memiliki Memori</p>\r\n<p>Seorang ilmuwan bernama Monica Gaglio melakukan percobaan dengan tumbuhan putri malu. Ia memegang tumbuhan itu beberapa kali hingga mengerut. Hal ini diulang beberapa kali hingga membuat tanaman putri malu ini berhenti menguncup meski beberapa kali disentuh oleh Monica. Akhirnya ia membuat sebuah dugaan jika tumbuhan sebenarnya memiliki sebuah memori. Sesuatu yang diulang-ulang dan terbukti tak memberikan bahaya akan diabaikan oleh putri malu. Ia menyimpan memori instan itu hingga saat ada rangsangan baru yang masuk ia bisa tahu apakah itu berbahaya atau tidak.</p>\r\n<p>6. Mampu Berkomunikasi</p>\r\n<p>Kita mungkin menganggap jika tumbuhan tak bisa berkomunikasi karena tak bisa bergerak atau bahkan bicara. Namun nyatanya tumbuhan mampu melakukan komunikasi dengan baik kepada sesamanya. Mereka kadang mengeluarkan semacam feromon untuk memberitahu akan adanya bahaya. Selain itu, mereka juga kadang mengeluarkan enzim tertentu yang merupakan wujud dari sebuah tangisan. Jika tumbuhan menangis dengan caranya (manusia tidak mendengar), maka predator seperti serangga akan menghindar. Mereka akan pergi dan beralih ke tumbuhan lainnya. Selain menangis, mereka juga bisa berteriak dengan sangat kencang dan membuat banyak sekali serangga untuk pergi.</p>\r\n<p>7. Memiliki Sebuah Perasaan</p>\r\n<p>Disadari atau pun tidak, tumbuhan sebenarnya memiliki sebuah perasaan sama halnya dengan manusia dan hewan. Beberapa tumbuhan bisa mengalami stres jika mengalami perlakukan yang tidak baik. Misal, tumbuhan dicabut dan akan ditempatkan ke lokasi yang baru. Mereka akan mengalami stres dan tidak mau berbunga hingga berbuah. Beberapa tanaman kadang ada yang mendadak mati jika mengalami situasi yang tak baik. Mereka menerima rangsangan dari luar lalu memprosesnya dalam tubuh hingga akhirnya bisa memberikan apa yang namanya respons. Itulah fakta yang menunjukkan jika tumbuhan ternyata mirip juga seperti manusia dan hewan. Mereka bisa melindungi diri hingga punya sebuah perasaan.</p>', 1557821218, 'TF1.jpg'),
(17, 'Kaktus dan Segala Manfaatnya', '<p>Kaktus (Cactaceae) adalah tanaman yang memiliki batang berduri dan dikenal hidup dicuaca panas dan kering, duri pada kaktus itu merupakan daun kaktus yang berubah bentuk menjadi duri sebagai penyesuaian diri untuk menghemat air. Biasanya kita mengenal kaktus itu hidup di gurun padahal tidak semua jenis kaktus itu hidup di gurun ada juga beberapa jenis kaktus yang hidup di daerah tropis. Tanaman kaktus saat ini juga digunakan sebagai tanaman hias, beraneka ragam jenis tanaman kaktus sekarang dijual dipasaran. Jenis tanaman kaktus yang populer adalah ariocarpus,haworhia attenuata, ferocactus, Echinofossulocactus, echinocactud grussoni, Cereus Tetragonous. Cara perawatan tanaman kaktus yang tergolong mudah menjadi salah satu sebab tanaman kaktus populer dikalangan pecinta tamanan hias. Kaktus tidak hanya bermanfaat untuk menghias rumah atau ruangan, sekarang kaktus juga sudah diolah menjadi berbagai produk kecantikan, berikut manfaat kaktus :</p>\r\n<p>1. Menjadikan udara ruangan bebas dari polusi</p>\r\n<p>Kaktus dapat membuat udara ruangan lebih bersih karena tumbuhan ini dapat menangkap polusi disekitarnya. Duri kaktus berfungsi untuk menangkap debu disekitar ruangan</p>\r\n<p>2. Meningkatkan kadar oksigen diruangan</p>\r\n<p>Tanaman kaktus berbeda dari tanaman lain. Tanaman kaktus pada malam hari akan menyerap karbondioksida dan melepaskan oksigen, sehingga kadar oksigen yang ada di ruangan akan meningkat.</p>\r\n<p>3. Mengatasi radiasi dan gelombang elektromagnetik</p>\r\n<p>Gelombang elektromagnetik yang dihasilkan dari computer, televisi, handphone, dan berbagai alat elektronik lainnya juga menghasilkan radiasi yang tidak baik bagi tubuh. Tanaman kaktus dapat menetralisir gelombang elektromagnetik dan menyerap radiasi yang dipaparkan oleh alat elektronik tersebut.</p>\r\n<p>4. Mencegah penuaan dini</p>\r\n<p>Tanaman kaktus mengandung anti-oksidan yang melimpah, sehingga kaktus mampu mencegah munculnya tanda-tanda penuaan dini. Kaktus juga kaya dengan vitamin E yang dapat membantu mempercepat regenerasi sel kulit. Produk kosmetik yang memiliki bahan dasar kaktus sekarang sudah ada di pasaran, biasanya berbentuk gel.</p>\r\n<p>5. Memperbaiki sel kulit yang rusak</p>\r\n<p>Kandungan anti oksidan yang tinggi pada tanaman kaktus juga bisa membuat regenerasi kulit menjadi lebih cepat sehingga kulit akan tampak lebih sehar dan segar.</p>\r\n<p>6. Melawan radikal bebas</p>\r\n<p>Radikal bebas berasal dari radiasi sinar UV, polusi udara, dan asap rokok dapat menyebabkan kerusakan pada jaringa kulit. Molekul radikal bebas dapat dilawan dengan menggunakan antioksidan. Oleh karena itu tanaman kaktus yang kaya akan kandungan anti oksidan, flavonoid dan vitamin E dapat melawan radikal bebas</p>\r\n<p>7. Mengatasi gejala alergi</p>\r\n<p>Batang kaktus dapat digunakan untuk mengatasi gejala alergi seperti ruam dan rasa gatal. Karena kaktus memiliki kandungan flavonoid yang berfungsi untuk meredakan gejala alergi.</p>', 1557824883, 'TF2.jpg'),
(18, 'Mengenal Jenis-jenis Tanah dan Komoditas yang Cocok Ditanam', '<p>Walaupun di jaman sekarang banyak teknik budi daya yang berkembang, seperti akuaponik dan hidroponik, namun tanah tetap menjadi media tanam utama untuk pertanian. Oleh sebab itu, kecocokan tanah untuk budi daya adalah hal paling vital dalam bertani. Semakin baik kualitas tanah yang ada, maka akan semakin baik pula hasil yang didapatkan. Dalam bidang pertanian, tanah dikatakan ideal jika memenuhi syarat seperti halnya:</p>\r\n<p>- Tidak terdapat bagian padasnya karena akan mengganggu gerak dari akar.</p>\r\n<p>- Mempunyai tingkat kelembaban yang cukup baik walaupun pada saat musim panas sekalipun.</p>\r\n<p>- Tidak mudah memadat dan juga mengeras ketika sudah ditanami.</p>\r\n<p>- Terdapat kandungan unsur yang bersifat organik di dalam tanah.</p>\r\n<p>- Kondisi pH netral (sekitar 7).</p>\r\n<p>Jika tanah pertanian memenuhi kriteria tersebut sudah bisa dipastikan bahwa tanah tersebut cocok untuk digunakan.</p>\r\n<p>Setiap jenis-jenis tanah pada dasarnya memiliki sifat yang berbeda satu sama lain dan karakter yang berbeda pula. Tanaman yang cocok ditanam pada setiap jenis tanah pun berbeda-beda karena tanaman juga memiliki sifat dan karakter yang berbeda-beda pula. Berikut contoh tanah yang cocok digunakan untuk bercocok tanam yang akan dijelaskan secara detail, penjelasannya sebagai berikut:</p>\r\n<p>Alluvial</p>\r\n<p>Tanah alluvial ialah jenis tanah yang terjadi karena endapan lumpur. Umumnya merupakan endapan lumpur yang terbawa karena aliran sungai. Karena terbawa dari hulu, tanah alluvial sering ditemukan di daerah hilir. Tanahnya sendiri biasanya bewarna coklat hingga kelabu dengan struktur sedikit lepas-lepas. Tanah alluvial sangat cocok dimanfaatkan sebagai lahan pertanian baik pertanian padi maupun palawija, tembakau, jagung, tebu, buah-buahan dan jenis tanaman lainnya. Karena tekstur tanahnya yang lembut dan mudah digarap sehingga tidak membutuhkan kerja yang ekstra untuk menjadikannya sebagai lahan perrtanian. Tanah aluvial banyak tersebar daerah di Indonesia dari Kalimantan, Sumatra, Sulawesi, Jawa dan Papua.</p>\r\n<p>Andosol</p>\r\n<p>Tanah andosol ialah salah satu jenis tanah vulkanik yang terbentuk akibat dari adanya proses vulkanisme yang ada pada gunung berapi. Tanah Andosol sangat subur dan baik untuk tanaman. Warna dari tanah andosol coklat ke abu-abuan. Tanah ini sangat kaya dengan mineral, unsur hara dan air sehingga sangat baik untuk tanaman. Tanah andosol juga sangat cocok untuk segala jenis tanaman yang ada di dunia. Untuk daerah pesebarannya, tanah andosol banyak terdapat di daerah yang dekat dengan gunung berapi. Daerah di Indonesia yang banyak terdapat tanah andosol adalah daerah di Jawa, Sumatra, Bali, dan Nusa Tenggara.</p>\r\n<p>Entisol</p>\r\n<p>Tanah entisol ialah saudara dari tanah andosol tetapi umumnya merupakan hasil pelapukan dari material yang dikeluarkan oleh letusan gunung berapi seperti pasir, debu,lapili, dan lahar. Tanah Entisol juga termasuk tanah yang subur dan merupakan tipe tanah yang tergolong masih muda. Tanah entisol biasanya ditemukan tidak jauh dari area gunung berapi dapat berupa permukaan tanah tipis yang belum memiliki lapisan tanah dan berupa gundukan pasir seperti yang ada di pantai parangtritis Jogjakarta. Persebaran tanah entisol biasanya terdapat disekitar gunung berapi seperti di pantai Parangtritis Jogjakarta, dan daerah Jawa lainnya yang mempunyai gunung berapi.</p>\r\n<p>Grumusol</p>\r\n<p>Tanah grumusol memiliki tekstur tanah yang kering dan mudah pecah terutama saat musim kemarau. Warna dari tanah grumusol sendiri adalah hitam. Tanah grumusol biasanya berada di permukaan yang kurang dari 300 meter dari permukaan laut dan mempunyai bentuk topografi tanah yang datar hingga bergelombang. Perubahan suhu yang dialami pada daerah bertanah grumusol sangat nyata ketika hujan dan panas. Karena memiliki teksturnya yang kering maka akan sangat bagus apabila ditanami vegetasi kuat seperti kayu jati, jagung, tebu, tembakau, kapas, kedelai dan padi. Persebaran tanah grumusol di Indonesia banyak dijumpai di daerah Jawa seperti di Jawa Tengah (Demak, Jepara, Pati, Rembang dan Blora), Jawa Timur (Ngawi, Madiun) dan ada juga di Nusa Tenggara Timur.</p>\r\n<p>Organosol</p>\r\n<p>Tanah organosol terbentuk dari pelapukan bahan organik. Tanah ini biasa ditemui di daerah rawa atau daerah yang bayak tergenang air. Tanah organosol ini terbagi menjadi dua macam, yaitu tanah humus dan tanah gambut.</p>\r\n<p>Tanah humus adalah tanah hasil pelapukan bahan organik, khususnya dari tanaman yang sudah mati. Humus sangat subur untuk pertanian karena memiliki kandungan bahan organik tinggi sehingga warna tanah ini menjadi hitam. Humus cocok untuk tanaman seperti kelapa, nanas dan padi. Tanah humus terdapat di daerah yang ada banyak hutan. Persebaran humus di Indonesia meliputi daerah Kalimantan, Sumatera, Papua, Jawa dan sebagian wilayah dari Sulawesi.</p>\r\n<p>Tanah gambut adalah tanah hasil pembusukan bahan organik. Gambut tidak sesubur humus. Pembusukan bahan organik pada tanah gambut berlangsung dalam keadaan tergenang sehingga tanah menjadi anaerob dan terlalu masam. Gambut dapat ditanami tanaman seperti kelapa sawit, nanas, palawija, karet dan padi.</p>\r\n<p>Inseptisol</p>\r\n<p>Tanah Inseptol ialah tanah yang terbentuk dari batuan sedimen atau metamorf dengan warna yang agak kecoklatan dan kehitaman serta campuran warna agak keabu-abuan. Tanah inseptisol</p>\r\n<p>juga dapat menopang pengadaan hutan yang asri. Tanah inseptisol cocok jika dimanfaatkan sebagai lahan perkebunan seperti perkebunan karet ataupun sebagai lahan perkebunan lain seperti kelapa sawit. Tanah inseptisol banyak tersebar di berbagai derah di Indonesia seperti di Kalimantan, Sumatera dan Papua.</p>\r\n<p>Latosol</p>\r\n<p>Tanah latosol/laterit ialah tanah yang memiliki warna merah bata karena banyaknya kandungan zat besi dan aluminium yang terdapat dalam tanah ini. Tanah latosol/laterit termasuk ke dalam jajaran tanah yang sudah tua sehingga kurang cocok untuk ditanami tumbuhan apapun dan juga kandungan yang terdapat di dalam tanah tersebut. Namun beberapa jenis tanaman masih bisa tumbuh pada tanah jenis ini, di antaranya adalah cengkeh, kopi, kelapa sawit, kakao, padi, palawija, buah dan sayuran lainnya. Jenis tanah seperti ini memiliki ph mendekati netral sehingga bisa diatur kesuburannya dengan sedikit penambahan pupuk. Persebaran tanah latosol/laterit di Indonesia meliputi Lampung, Sumatra Utara, Kalimantan, Jawa Timur, dan Jawa Barat, Jawa Tengah dan Papua.</p>\r\n<p>Regosol</p>\r\n<p>Tanah regosol terbentuk dari material yang dikeluarkan letusan gunung berapi yang belum mengalami perkembangan sempurna. Tanah jenis ini bertekstur kasar dan berbahan organik rendah. Sifat demikian membuat tanah tidak dapat menampung air dan mineral yang dibutuhkan tanaman dengan baik. Tanah regosol lebih cocok untuk tanaman palawija, tebu, tembakau, sayuran dan padi. Tanah ini tersebar di Jawa, Bali, Bengkulu, Sumatera dan Nusa Tenggara</p>\r\n<p>Litosol</p>\r\n<p>Tanah litosol adalah tanah yang memiliki tekstur berbatu-batu. Jenis tanah ini hampir mirip dengan tanah regosol karena sama-sama terbentuk dari aktivitas gunung Merapi. Tanah ini memiliki kedalaman yang dangkal dan peka terhadap erosi. Kandungan bahan organik tanah ini masih rendah. Tanah litosol cocok untuk tanaman seperti palawija, rumput ternak dan tanaman keras. Tanah ini tersebar di Jawa, Sumatera, Nusa Tenggara, Maluku Selatan dan Papua. Sebelum memulai bercocok tanam baik bunga, sayuran, buah, palawija maupun tanaman perkebunan serta tanaman keras lainnya, mengidentifikasi jenis tanah menjadi sangat penting. Sebab tentunya, media tanam yang digunakan (jenis tanah) menjadi dasar utama keberhasilan dalam bercocok tanam.</p>', 1557841660, 'T1.jpg'),
(19, 'Perkembangan Tanaman Hias di Indonesia', '<p>Tak hanya fashion, tanaman hias juga mengenal tren. Di saat tren sedang berlangsung harga tanaman hias bisa jadi sangat tinggi dan akan turun saat tren yang baru atau berikutnya berlangsung. Tak heran banyak pecinta tanaman yang beralih profesi untuk menjual tanaman koleksinya karena bisnis tanaman hias cukup menjanjikan. Beberapa jenis tanaman hias yang popular di kalangan masyarakat Indonesia adalah :</p>\r\n<p>- Bonsai, Bonsai adalah contoh tanaman yang sempat sangat popular beberapa tahun yang lalu. Bonsai adalah tanaman yang dikerdilkan dan memiliki bentuk yang unik dengan beberapa bagian tanaman yang ditonjolkan. Image bonsai sangat elit dan tanaman ini merupakan tanaman favorit seniman dan kalangan atas.</p>\r\n<p>- Pakis monyet, Inilah tren tanaman hias terbaru yang berasal dari Tiongkok. Sekilas tanaman ini seperti akar serabut kelapa namun sebenarnya adalah tanaman serumpun dnegan pakis. Disebut pakis monyet karena memang bentuk tanaman ini mirip dengan seekor monyet yang sedang duduk di atas pot. Tanaman ini didatangkan dari Palembang. Sebelum daunnya tumbuh, tanaman ini memiliki batang yang menjulang yang mirip dengan ekor monyet.</p>\r\n<p>- Adenium, Adenium adalah jenis dari kamboja namun berukuran kecil dnegan warna bermacam-macam yang menarik yang sempat menjadi tren para kolektor tanaman. Perawatannya tidaklah susah dan dapat dengan mudah dikembangbiakkan melalui biji yang bila tumbuh nantinya biji tersbeut dapat menjadi bonggol yang menjadi daya tarik tanaman ini selain warnanya. Adenium dapat ditanam melalui media pasir yang dicampur dengan pupuk. Bila menanam letakkanlah di tempat dengan terik matahari yang cukup banyak supaya bunganya dapat keluar dengan lebih banyak. Warna bunga adenium dapat dikembangkan dengan cara stek.</p>\r\n<p>- Aglaonema, Sejenis talas dengan daun yang pendek dan tidak punya kambium. Di pasaran, harga Aglaonema dihitung berdasarkan. Aglaonema yang nilainya tinggi adalah tanaman yang memiliki warna daun berbeda.</p>\r\n<p>- Euphorbia , Euphorbia berbentuk seperti kaktus berduri dan memiliki daun. Tanaman ini tidak tahan air sehingga penyiraman harus dilakukan dengan jarang-jarang. Media tanamnya adalah pasir dan pupuk kandang.</p>\r\n<p>- Bunga-bungaan, Selain berbagai jenis tanaman di atas, jenis tanaman hias lainnya yang tidak tergantung dnegan tren adalah jenis bunga bungaan. Seperti yang kita tahu, berbagai jenis bunga yang dijual selalu laris tanpa mengenal waktu. Jenis jenis bunga tersebut juga memiliki tingkatan harga walaupun sejenis. Beberapa jenis bunga juga menjadi tanaman industry yang dijual melalui floris atau toko bunga untuk disalurkan ke industry perhotelan, perkantoran ataupun industry lainnya. Beberapa jenis bunga yang menjadi tanaman industry adalahmawar, gladiol, krisan, tulip, dan lain lain.</p>', 1557843189, 'THIAS2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(20) NOT NULL,
  `ip` varchar(12) NOT NULL,
  `kode_produk` char(5) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` char(5) NOT NULL,
  `nama_pembeli` varchar(40) DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(35) DEFAULT NULL,
  `kabupaten` varchar(35) DEFAULT NULL,
  `provinsi` varchar(35) DEFAULT NULL,
  `kodepos` char(5) NOT NULL,
  `alamat_lengkap` varchar(50) DEFAULT NULL,
  `catatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `no_telp`, `email`, `kecamatan`, `kabupaten`, `provinsi`, `kodepos`, `alamat_lengkap`, `catatan`) VALUES
('PB4', 'Ari', '08761234666', 'arinurcahya@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', 'coba yaa'),
('PM001', 'Wahyu Shofian', '085200554942', 'wahyushofian@gmail.com', 'Nitikan', 'Bantul', 'Yogyakarta', '55571', 'Jl. Nitikan, Bantul, DIY', 'Jangan kirim barang second ya gan'),
('PM002', 'Faadihilah Ahnaf Faiz', '08577432571', 'fadhfaiz@gmail.com', 'Sewon', 'Bantul', 'Yogyakarta', '53718', 'Widoro, Bangunharjo, Mbantul', 'Jangan kirim dompet kulit ya gan'),
('PM003', 'Intan Destiyanti', '082132454333', 'idestiyanti@gmail.com', 'Umbulharjo', 'Bantul', 'Yogyakarta', '53218', 'Jl. Dr. Soepomo, Umbulharjo', 'Packing mantap gan'),
('PM004', 'Ari', '08761234666', 'arinurcahya@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', 'Koral yang putih'),
('PM005', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', '123123123'),
('PM006', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', '123123123'),
('PM007', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', '123123123'),
('PM008', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', '123123123'),
('PM009', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', '123123123'),
('PM010', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', ''),
('PM011', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', ''),
('PM012', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', ''),
('PM013', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', ''),
('PM014', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', ''),
('PM015', 'Oko', '08761234666', 'okocarono@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', ''),
('PM016', 'Insan', '08761234666', 'insankamil002@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', ''),
('PM017', 'Insan', '08761234666', 'insankamil002@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', ''),
('PM018', 'Insan', '08761234666', 'insankamil002@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', ''),
('PM019', 'Insan', '08761234666', 'insankamil002@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '55164', 'hdgskjdaslkh.kjdg', ''),
('PM020', 'Maya', '082242112405', 'mayalistyawardani@gmail.com', 'Kalasan', 'Sleman', 'Yogyakarta', '55571', 'Dhuri', 'yang bagus ya potnya'),
('PM021', 'jk', '027832590661', 'intandesti25@gmail.com', 'dfhkjdf', 'jasgdkjsa', 'njhdf', '1234', 'sjlkshls', '6789696'),
('PM022', 'jk', '027832590661', 'intandesti25@gmail.com', 'dfhkjdf', 'jasgdkjsa', 'njhdf', '1234', 'sjlkshls', '6789696'),
('PM023', 'gdjf', '097832590662', 'intandesti25@gmail.com', 'dfhkjdf', 'mfcmdfv', 'njhdf', '1234', 'hkhskd', 'nothing'),
('PM024', 'gdjf', '097832590662', 'intandesti25@gmail.com', 'dfhkjdf', 'mfcmdfv', 'njhdf', '1234', 'hkhskd', 'nothing'),
('PM025', 'gdjf', '097832590662', 'intandesti25@gmail.com', 'dfhkjdf', 'mfcmdfv', 'njhdf', '1234', 'hkhskd', 'nothing'),
('PM026', 'gdjf', '097832590662', 'intan.destiyanti@yahoo.com', 'dfhkjdf', 'mfcmdfv', 'jgdmf', '1234', 'sjlkshls', 'nothing'),
('PM027', 'gdjf', '097832590662', 'intan.destiyanti@yahoo.com', 'dfhkjdf', 'mfcmdfv', 'jgdmf', '1234', 'sjlkshls', 'nothing'),
('PM028', 'gdjf', '097832590662', 'intan.destiyanti@yahoo.com', 'dfhkjdf', 'mfcmdfv', 'jgdmf', '1234', 'sjlkshls', 'nothing'),
('PM029', 'gdjf', '097832590662', 'intan.destiyanti@yahoo.com', 'dfhkjdf', 'mfcmdfv', 'jgdmf', '1234', 'sjlkshls', 'nothing'),
('PM030', 'kh', '087832590663', 'intan.destiyanti@yahoo.com', 'dfhkjdf', 'mfcmdfv', 'njhdf', '1234', 'hkhskd', 'nothing'),
('PM031', 'kh', '087832590663', 'intan.destiyanti@yahoo.com', 'dfhkjdf', 'mfcmdfv', 'njhdf', '1234', 'hkhskd', 'nothing'),
('PM032', 'gdjf', '097832590662', 'intan.destiyanti@yahoo.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '63634', 'hkhskd', 'nothing'),
('PM033', 'gdjf', '097832590662', 'intan.destiyanti@yahoo.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '63634', 'hkhskd', 'nothing'),
('PM034', 'jk', '097832590662', 'intan.destiyanti@yahoo.com', 'dfhkjdf', 'mfcmdfv', 'jgdmf', '63634', 'hkhskd', 'nothing'),
('PM035', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM036', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM037', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM038', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM039', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM040', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM041', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM042', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM043', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM044', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM045', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM046', 'jkdfh', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '6363', 'hkhskd', 'sndfnh'),
('PM047', 'idestiyanti', '087832590663', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '12345', 'hkhskd', '6789696'),
('PM048', 'jk', '097832590662', 'intan.destiyanti@yahoo.com', 'dfhkjdf', 'jasgdkjsa', 'njhdf', '1234', 'hkhskd', 'nothing'),
('PM049', 'idestiyanti', '097832590662', 'intan.destiyanti@yahoo.com', 'dfhkjdf', 'mfcmdfv', 'njhdf', '1234', 'hkhskd', '6789696'),
('PM050', 'jk', '087832590663', 'intandesti25@gmail.com', 'dfhkjdf', 'mfcmdfv', 'jgdmf', '1234', 'hkhskd', 'nothing'),
('PM051', 'gdjf', '097832590662', 'intandesti25@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'njhdf', '63634', 'djf', '6789696'),
('PM052', 'jkdfh', '087832590663', 'intan.destiyanti@yahoo.com', 'dfhkjdf', 'mfcmdfv', 'jgdmf', '1234', 'sjlkshls', 'nothing'),
('PM053', 'jk', '087832590663', 'gjdgfjkdg@gmail.com', 'hnsdfhsd', 'mfcmdfv', 'jgdmf', '1234', 'sjlkshls', '6789696'),
('PM054', 'idestiyanti', '087832590661', 'intandesti25@gmail.com', 'dfhkjdf', 'jasgdkjsa', 'njhdf', '63634', 'hkhskd', 'nothing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` char(1) NOT NULL,
  `nama_penjual` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `email`, `no_telp`, `username`, `password`) VALUES
('1', 'Dewi Soyusiawaty', 'my_soyus@yahoo.com', '085200554942', 'kaktuskmi', 'aglonema');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` char(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `stok_produk` int(3) NOT NULL,
  `diameter` int(3) NOT NULL,
  `tinggi` int(3) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `jenis_produk` varchar(30) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `harga_produk`, `stok_produk`, `diameter`, `tinggi`, `gambar`, `jenis_produk`, `catatan`, `tanggal`) VALUES
('KK01', 'Kaktus Rambut Kakek', 10000, 0, 10, 10, 'P17a.png', 'Sukulen', '', '2019-05-25 06:50:37'),
('KK010', 'Kaktus Zebra', 26000, 21, 26, 26, 'P34a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK011', 'Golden Barrel', 11000, 7, 11, 11, 'P19a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK012', 'Crassula Ovata', 14000, 10, 14, 14, 'P18a.png', 'Kaktus', '', '2019-05-25 06:34:36'),
('KK013', 'Hatiora Salicornioides', 12000, 8, 12, 12, 'P20a.png', 'Kaktus', '', '2019-05-24 20:20:55'),
('KK014', 'Sansivera Stuckyi', 13000, 9, 13, 13, 'P21a.png', 'Sansivera', '', '2019-05-24 20:20:55'),
('KK015', 'Haworthia Fasciata', 15000, 11, 15, 15, 'P22a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK016', 'Sansivera Stuckyi', 16000, 12, 16, 16, 'P23a.png', 'Sansivera', '', '2019-05-24 20:20:55'),
('KK017', 'Fairy Castle Cactus', 17000, 13, 17, 17, 'P24a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK018', 'Opuntia Cochenillivera', 18000, 14, 18, 18, 'P25a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK019', 'Euphorbia Lactea Cristata', 19000, 15, 19, 19, 'P26a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK02', 'Haworthia Cooperi', 2000, -2, 2, 2, 'P9a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK020', 'Hoya Kerri', 20000, 16, 20, 20, 'P27a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK021', 'Cryptanthus Red', 21000, 17, 21, 21, 'P29a.png', 'Kaktus', '', '2019-05-24 20:20:55'),
('KK022', 'Aglaonema Dud Anjamani', 22000, 18, 22, 22, 'P30a.png', 'Aglonema', '', '2019-05-24 20:20:55'),
('KK023', 'Capiapoa Tenuissima', 23000, 19, 23, 23, 'P31a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK024', 'Opuntia Quimilo', 24000, 20, 24, 24, 'P32a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK025', 'Mammillaria Grafting', 25000, 21, 25, 25, 'P33a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK026', 'Batu Koral Putih', 10000, 1, 2, 1, 'batu_koral_putih.jpg', 'Batu', '', '2019-05-24 20:20:55'),
('KK027', 'Batu Hias', 10000, 6, 2, 1, 'batu1.jpg', 'Batu', '', '2019-05-24 20:20:55'),
('KK028', 'Pot warna', 5000, 5, 5, 3, 'pot3.jpg', 'Pot', '', '2019-05-25 06:31:08'),
('KK029', 'kaktus mini', 5000, 1, 3, 3, 'pot1.jpg', 'Bibit', '', '2019-05-24 20:20:55'),
('KK03', 'Aglaonema Lipstik', 3000, -1, 3, 3, 'P10a.png', 'Aglonema', '', '2019-05-24 20:20:55'),
('KK04', 'Lobivia Oganmaru', 4000, 0, 4, 4, 'P11a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK05', 'Lobivia Oganmaru', 5000, 1, 5, 5, 'P12a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK06', 'Sansivera Trifasciata Laurenti', 6000, 2, 6, 6, 'P13a.png', 'Sansivera', '', '2019-05-24 20:20:55'),
('KK07', 'Haworthia Limifolia', 7000, 3, 7, 7, 'P14a.png', 'Sukulen', '', '2019-05-24 20:20:55'),
('KK08', 'Bambu Hoki', 8000, -2, 8, 8, 'P15a.png', 'Kaktus', '', '2019-05-24 20:20:55'),
('KK09', 'Euphorbia Lactea Cactus', 9000, 5, 9, 9, 'P16a.png', 'Sukulen', '', '2019-05-24 20:20:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbcounter`
--

CREATE TABLE `tbcounter` (
  `ip` varchar(2050) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbcounter`
--

INSERT INTO `tbcounter` (`ip`, `date`, `hits`) VALUES
('10.88.25.1', '2016-01-16', 11),
('10.88.25.2', '2016-01-16', 3),
('10.88.25.3', '2016-01-17', 4),
('10.88.25.4', '2016-01-16', 11),
('10.88.25.5', '2016-02-16', 3),
('10.88.25.6', '2016-02-17', 4),
('10.88.25.10', '2016-02-23', 2),
('10.88.25.15', '2016-02-23', 1),
('10.88.25.13', '2016-03-16', 11),
('10.88.25.1', '2016-03-16', 3),
('10.88.25.5', '2016-03-17', 4),
('10.88.25.8', '2016-03-16', 11),
('10.88.25.10', '2016-03-16', 3),
('10.88.25.19', '2016-03-17', 4),
('10.88.25.27', '2016-04-23', 2),
('10.88.25.50', '2016-04-23', 1),
('10.88.25.6', '2016-04-16', 3),
('10.88.25.9', '2016-05-17', 4),
('10.88.25.11', '2016-05-23', 2),
('10.88.25.12', '2016-05-23', 1),
('10.88.25.16', '2016-05-16', 11),
('10.88.25.20', '2016-05-16', 3),
('10.88.25.32', '2016-06-17', 4),
('10.88.25.1', '2016-06-16', 11),
('10.88.25.35', '2016-06-16', 3),
('10.88.25.36', '2016-07-17', 4),
('10.88.25.26', '2016-07-23', 2),
('10.88.25.6', '2016-07-16', 3),
('10.88.25.9', '2016-08-17', 4),
('10.88.25.11', '2016-08-23', 2),
('10.88.25.12', '2016-08-23', 1),
('10.88.25.16', '2016-08-16', 11),
('10.88.25.20', '2016-08-06', 3),
('10.88.25.32', '2016-09-17', 4),
('10.88.25.1', '2016-09-16', 11),
('10.88.25.35', '2016-09-16', 3),
('10.88.25.36', '2016-09-17', 4),
('10.88.25.26', '2016-09-23', 2),
('10.88.25.16', '2016-10-16', 11),
('10.88.25.20', '2016-10-16', 3),
('10.88.25.32', '2016-10-17', 4),
('10.88.25.1', '2016-10-16', 11),
('10.88.25.35', '2016-11-16', 3),
('10.88.25.36', '2016-11-17', 4),
('10.88.25.26', '2016-11-23', 2),
('10.88.25.15', '2016-11-23', 1),
('10.88.25.13', '2016-12-16', 11),
('10.88.25.1', '2016-12-16', 3),
('10.88.25.5', '2016-12-17', 4),
('10.88.25.8', '2016-12-16', 11),
('10.88.25.10', '2016-12-16', 3),
('10.88.25.19', '2016-12-17', 4),
('10.88.25.27', '2016-12-23', 2),
('10.88.25.50', '2016-12-23', 1),
('10.88.25.6', '2016-12-16', 3),
('10.88.25.9', '2016-12-17', 4),
('10.88.25.11', '2016-12-23', 2),
('10.88.25.12', '2016-12-23', 1),
('10.88.25.20', '2016-12-25', 1),
('::1', '2019-05-08', 5),
('::1', '2019-05-11', 3),
('::1', '2019-05-12', 6),
('::1', '2019-05-14', 16),
('::1', '2019-05-15', 15),
('::1', '2019-05-16', 6),
('::1', '2019-05-17', 1),
('::1', '2019-05-20', 7),
('::1', '2019-05-21', 4),
('::1', '2019-05-22', 10),
('::1', '2019-05-23', 35),
('::1', '2019-05-24', 22),
('::1', '2019-05-25', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_pesanan` int(11) NOT NULL,
  `kode_unik` varchar(5) NOT NULL,
  `id_pembeli` char(5) DEFAULT NULL,
  `kode_produk` char(5) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `ongkir` int(10) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `jumlah_produk` int(3) DEFAULT NULL,
  `tanggal_beli` int(11) NOT NULL,
  `tanggal_verifikasi` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `penjualan_barang` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
	UPDATE produk set stok_produk = stok_produk-NEW.jumlah_produk
    WHERE kode_produk = NEW.kode_produk;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kode_artikel`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `id_pembeli` (`id_pembeli`,`kode_produk`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `kode_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kode_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
