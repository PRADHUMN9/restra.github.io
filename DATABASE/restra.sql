-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 08:03 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `email`, `password`) VALUES
(1, 'ajay', 'ajaychaubey95@gmail.com', 12),
(2, 'pathak', 'pathak@gmail.com', 12);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(50) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_price` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `quantity`, `product_price`, `username`, `status`, `date`) VALUES
(12, 67, 1, 60, 'pa', 'true', '2018-05-15 12:29:15'),
(13, 115, 1, 38, 'pa', 'true', '2018-05-15 12:29:21'),
(14, 65, 1, 100, '', 'true', '2018-05-15 12:52:28'),
(15, 96, 1, 405, '', 'true', '2018-05-26 02:17:56'),
(16, 26, 1, 138, 'pa', 'true', '2018-05-26 02:19:23'),
(17, 90, 1, 50, '', 'true', '2018-05-31 17:07:45'),
(18, 46, 1, 250, '', 'true', '2018-06-10 10:33:44'),
(19, 78, 1, 81, 'pa', 'true', '2018-06-10 10:35:27'),
(20, 35, 1, 148, 'pa', 'true', '2018-06-10 10:53:06'),
(21, 72, 1, 395, 'pa', 'true', '2018-06-10 10:53:20'),
(22, 87, 1, 57, 'pa', 'true', '2018-06-10 10:54:28'),
(23, 91, 1, 46, '', 'true', '2018-06-10 10:56:10'),
(24, 32, 1, 133, '', 'true', '2018-06-10 11:00:07'),
(25, 66, 1, 95, 'pa', 'true', '2018-06-10 11:00:23'),
(26, 29, 1, 124, '', 'true', '2018-06-10 11:03:46'),
(27, 33, 1, 138, 'pa', 'true', '2018-06-10 11:04:02'),
(28, 26, 1, 138, '', 'true', '2018-06-10 15:53:09'),
(29, 84, 1, 171, 'pa', 'true', '2018-06-11 12:04:35'),
(30, 86, 1, 162, 'pa', 'true', '2018-06-11 12:04:56'),
(31, 36, 1, 148, 'pa', 'true', '2018-06-11 12:05:14'),
(32, 109, 1, 148, 'Manish', 'true', '2018-06-12 06:59:08'),
(33, 27, 1, 81, '', 'true', '2018-06-12 08:10:09'),
(34, 10, 1, 157, '', 'true', '2018-06-12 08:15:35'),
(35, 82, 1, 219, 'pradhumn', 'true', '2018-06-12 08:16:08'),
(36, 73, 1, 571, 'pradhumn', 'true', '2018-06-12 08:16:14'),
(37, 24, 1, 176, '', 'true', '2018-08-17 16:48:18'),
(38, 116, 1, 38, 'dubey', 'true', '2018-08-17 16:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'THALI ITEMS'),
(2, 'DOSA AND APPAMS'),
(3, 'SHADI KI BIRYANI'),
(4, 'NORTH INDIAN VEG (GRAVY)'),
(5, 'VEGETABLE DISHES'),
(6, 'FISH ITEM (SEASONAL)'),
(7, 'NORTH INDIAN NONVEG (GRAVY)'),
(8, 'NORTH INDIAN NONVEG (DRY)'),
(9, 'ICE CREAM'),
(10, 'BIRYANI AND RICE'),
(11, 'FRIED RICE'),
(12, 'ROTIS(TANDOORI)'),
(13, 'TANDOORI DRY'),
(14, 'SOFT DRINKS'),
(15, 'NOODLES'),
(16, 'SOUP'),
(18, 'pathak');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `contact`, `sub`, `message`) VALUES
(2, '1', '1', '1', '1', ''),
(3, 'Ajay', 'ajaychaubey256@gmail.com', '8052655949', 'fdkjalj', ''),
(4, 'aj ', 'ajaychaubey95@gmail.com', '8418898414', 'fjkdjfklj', 'jkdlfajsd f;kjdfakj ;dakldjfkdl jfd;'),
(5, 'fkndjkdfk', 'fdkjkdfk@afd', '805265da', 'dadjklk', 'dklafjdl'),
(6, 'fkndjkdfk', 'fdkjkdfk@afd', '805265da', 'dadjklk', 'dklafjdl'),
(12, 'Ajay ChaubeyA', 'ajaychaubey2@gmail.com', '8418898418', 'jfkdkdnf ', 'jafdlmdknflfd'),
(13, 'ajy', 'ajaychaubey2567@gmail.com', '8418896574', 'afikjlk', 'fkdjlmmkfjd kdj'),
(14, 'pradhumn', 'p@gmail.com', '9506928066', 'project llll', 'asjahdjjd'),
(15, 't', 't@gmail.com', '96385527410', 'jwehdkh', 'wdiiuwed');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `review` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `review`) VALUES
('pradhumn pathak', 'p@gmail.com', 'very good project');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_title` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`product_id`, `category_id`, `date`, `product_title`, `product_img`, `product_price`, `product_desc`, `product_keyword`, `status`) VALUES
(1, 1, '2018-05-09 11:52:53', 'Fish Thaliiiii', 'fish thali.jpg', 222, '', '', 'on'),
(2, 1, '2018-05-09 11:54:47', 'Take Away Thali (Non Veg)', 'takeawaythalinonveg.jpg', 229, 'Ghee Rice, Coin Parota, Chicken Kebab, Chilli Chicken, Butter Chicken, Mutton Kurma, and Dhal Fry, Poriyal, Curd, Sweet and Pickle', '', 'on'),
(3, 1, '2018-05-09 11:57:24', 'DINNER THALI', 'dinner thali.jpg', 229, 'Ghee Rice, Tandoor Roti, Chicken Tikka, Kalmi Kabab, Butter Chicken, Mutton Kurma, Dhal Fry, Veg Kurma, Curd and Pickle', '', 'on'),
(4, 1, '2018-05-09 11:58:51', 'TAKE AWAY THALI(VEG)', 'takeawaythaliveg.jpg', 229, 'Ghee Rice, Coin Parota, Gobi Manchurian, Paneer Chilli Dry, Veg Kurma, Dhal Fry, Poriyal, Curd, Sweet and Pickle', '', 'on'),
(5, 2, '2018-05-09 12:02:54', 'SEMIYA MUTTON KEEMA', 'semiyamuttonKema.jpg', 200, 'String Hoppers (Semiya) along Mutton Kheema gravy.', '', 'on'),
(6, 2, '2018-05-09 12:04:48', 'APPAM (SINGLE)', 'single uppa.jpg', 24, 'Plain Appam', '', 'on'),
(7, 2, '2018-05-09 12:07:03', 'ONION DOSA CHICKEN', 'oniondosa.jpg', 195, 'Set of 2 Onion Dosa, accompanied with two Chicken gravyï¿½s.', '', 'on'),
(8, 2, '2018-05-09 12:09:51', 'CHICKEN KEEMA DOSA', 'chicken keema dosa.jpg', 152, 'Spicy thick Chicken Kheema gravy spread over a crispy dosa, a perfect snack.!', '', 'on'),
(9, 2, '2018-05-09 12:14:15', 'SET DOSA PRAWNS', 'dosa prawns_.jpg', 157, 'Set Dosa accompanied with Prawns.', '', 'on'),
(10, 2, '2018-05-09 12:17:15', 'APPAM CHICKEN', 'APPAM CHICKEN.jpg', 157, 'Appam with delicious Chicken gravy, a perfect combination.', '', 'on'),
(11, 2, '2018-05-09 12:18:32', 'APPAM VEG', 'APPAM VEG.jpg', 124, 'Appam and Veg gravy for the vegetarian lovers.', '', 'on'),
(12, 2, '2018-05-09 12:19:45', 'EGG DOSA', 'EGG DOSA.jpg', 90, 'Normal Dosa with an egg spread over, looks like an Indian Pizza..!', '', 'on'),
(13, 2, '2018-05-09 12:21:49', 'EGG DOSA CHICKEN', 'EGG DOSA CHICKEN.jpg', 200, 'Dosa with an egg spread over along a combination of two Chicken gravyï¿½s', '', 'on'),
(14, 2, '2018-05-09 12:23:33', 'DOSA CHICKEN', 'DOSA CHICKEN.jpg', 171, 'A set of 2 Dosa with a combination of two deliciously prepared Chicken gravyï¿½s.', '', 'on'),
(15, 2, '2018-05-09 12:24:22', 'VEG DOSA', 'veg dosa.jpg', 162, 'Set of 2 Dosa, accompanied with two Veg gravyï¿½s.', '', 'on'),
(16, 3, '2018-05-09 12:27:32', 'SHAADI KI BIRIYANI (HALF KG)', 'SHAADI KI BIRIYANI (HALF KG).jpg', 938, 'Half kg Rs. 750 Small family pack (3-4 persons) Accompaniments of Khatta + Meeta + Raita', '', 'on'),
(17, 3, '2018-05-09 12:28:53', 'SHAADI KI BIRIYANI (1KG)', 'SHAADI KI BIRIYANI (1KG).JPG', 1676, '1kg Rs. 1400 Medium family pack (6-8 persons) Accompaniments of Khatta + Meeta + Raita', '', 'on'),
(18, 3, '2018-05-09 12:30:50', 'SHAADI KI BIRIYANI', 'SHAADI KI BIRIYANI.jpg', 243, 'Authentic wedding style ï¿½Dum Mutton Biryaniï¿½ cooked on firewood the traditional way. Available in different portions:', '', 'on'),
(19, 4, '2018-05-09 12:33:38', 'ALOO VARUTHARACHATHU', 'ALOO VARUTHARACHATHU.jpg', 138, 'A simple and tasty potato dish made in Kerala Style which is aromatic and goes well with rotis.', '', 'on'),
(20, 4, '2018-05-09 12:34:37', 'CHETINADU VEG CURRY', 'CHETINADU VEG CURRY.jpg', 138, 'A mixed vegetable curry with coconut and mild spices. Perfect to be served with chapatis or rotis.', '', 'on'),
(21, 4, '2018-05-09 12:42:06', 'DAL PALAK', 'dal palak.jpg', 138, '\r\nA delicious combination of protein rich assorted lentils and spinach, tempered ghee and spices.', '', 'on'),
(22, 4, '2018-05-09 14:39:18', 'PANEER PASANDA', 'paneerpasanda.jpeg', 176, 'Paneer Pasanda is a delicacy consisting of stuffed paneer in rich creamy gravy', '', 'on'),
(23, 4, '2018-05-09 14:41:01', 'VEG JALFREZI', 'VEG JALFREZI.jpg', 138, 'Veg jalfrezi is a spicy tangy mix vegetable recipe with a sweet and sour flavor from the peppers.', '', 'on'),
(24, 4, '2018-05-09 14:44:22', 'KADAI PANEER', 'kadai paneer.jpeg', 176, 'Paneer cooked in onion tomato gravy with kadai masala and with yogurt or cream.', '', 'on'),
(25, 4, '2018-05-09 14:45:00', 'MATAR PANEER', 'matar paneer.jpg', 138, 'A north Indian veg dish made of peas and paneer in a tomato based sauce, spiced with garam masala.', '', 'on'),
(26, 4, '2018-05-09 14:45:38', 'ALOO PALAK', 'aloo palak.jpeg', 138, 'Aloo Palak is a recipe with a combination of cubed potatoes and chopped spinach in a rich creamy gravy.', '', 'on'),
(27, 5, '2018-05-09 14:58:09', 'GREEN SALAD', 'green salad.jpeg', 81, 'Freshly sliced onions, tomatoes, carrots and cucumber.', '', 'on'),
(28, 5, '2018-05-09 14:58:54', 'TOMATO FRY', 'tomato fry.jpeg', 124, 'A tasty dish made of crushed tomatoes and simmered with Indian spices.', '', 'on'),
(29, 5, '2018-05-09 14:59:35', 'CHENNA MASALA', 'cheena masala.jpeg', 124, 'Chana masala or chole masala is a semi gravy goes well with roti.', '', 'on'),
(30, 5, '2018-05-09 15:00:21', 'PAPPAD', 'papad.jpeg', 29, 'A thin Indian wafer, sometimes described as a cracker or flatbread.', '', 'on'),
(31, 5, '2018-05-09 15:00:56', 'ALOO GOBI', 'aloo gobhi.jpeg', 138, 'Aloo gobi is a dry Indian dish made with potatoes, cauliflower and Indian spices.', '', 'on'),
(32, 5, '2018-05-09 15:01:35', 'GREEN PEAS MASALA', 'green peas masala.jpeg', 133, 'Pressure cooked green peas fried with tomatoes, onions and spices.', '', 'on'),
(33, 5, '2018-05-09 15:02:15', 'VEG KOFTA CURRY', 'veg kofta curry.jpeg', 138, 'A thick curd based curry with crispy vegetable pakode is cooked and flavored with Indian spices.', '', 'on'),
(34, 5, '2018-05-09 15:02:41', 'DAL THADAKA', 'dal thadaka.jpeg', 138, 'Creamy, rich and smooth, dal fry is the perfect accompaniment for rice or roti.', '', 'on'),
(35, 5, '2018-05-09 15:03:27', 'BABYCORN MASALA', 'babycorn masala.jpeg', 148, 'A typical North Indian curry made in rich gravy with cream and butter.', '', 'on'),
(36, 5, '2018-05-09 15:04:04', 'BABYCORN CHILLY DRY', 'babycorn chilly dry.jpeg', 148, 'Crispy, crunchy and a perfect starter or a side dish for fried rice.', '', 'on'),
(37, 5, '2018-05-09 15:04:42', 'PANEER CHILLY DRY', 'paneerchillydry.jpeg', 148, 'Deep fried cottage cheese cubes made into a stir fry of garnished with green chili.', '', 'on'),
(38, 5, '2018-05-09 15:05:21', 'BABYCORN MANCHURIAN DRY', 'babycorn manchrian dry.jpeg', 148, 'Crispy, crunchy and a perfect starter or a side dish for fried rice.', '', 'on'),
(39, 5, '2018-05-09 15:05:56', 'ALOO MASALA', 'aloo masala.jpeg', 138, 'A tangy semi gravy and lip-smacking side dish.', '', 'on'),
(40, 5, '2018-05-09 15:06:28', 'RAITHA', 'raitha.jpeg', 86, 'Made with dahi together with raw or cooked vegetables.', '', 'on'),
(41, 5, '2018-05-09 15:07:18', 'PANEER BUTTER MASALA', 'paneerbuttermasala.jpeg', 148, 'A typical North Indian curry made in rich gravy with cream and butter.', '', 'on'),
(42, 5, '2018-05-09 15:08:06', 'VEG KURMA', 'vegkurma.jpeg', 148, 'South Indian style kurma made with mixed veggies, coconut and spices', '', 'on'),
(43, 5, '2018-05-09 15:08:37', 'VEG CURRY', 'vegcurry.jpeg', 148, 'Mixed vegetables cooked and tempered with spices into thick gravy.', '', 'on'),
(44, 5, '2018-05-09 15:09:12', 'PALAK PANEER', 'palakpaneer.jpeg', 148, 'A Punjab dish of paneer in a thick paste made from purï¿½ed spinach seasoned spices.', '', 'on'),
(45, 6, '2018-05-09 15:23:32', 'PRAWNS ROAST', 'PRAWNS ROAST.jpg', 200, 'Prawns roast is a yummy dish which goes well with rice, chappathi or idiyappam.', '', 'on'),
(46, 6, '2018-05-09 15:24:50', 'FISH ONION ROAST', 'FISH ONION ROAST.jpg', 250, 'Kerala Style Fried fish roasted in Onions and Tomatoes.', '', 'on'),
(47, 6, '2018-05-09 15:25:58', 'FISH VARUTHARACHATHU', 'FISH VARUTHARACHATHU.jpg', 200, 'Fish cooked in spicy coconut mixture with tamarind pulp which makes it simply irresistible.', '', 'on'),
(48, 6, '2018-05-09 15:27:23', 'MALABAR FISH CURRY', 'MALABAR FISH CURRY.jpg', 200, 'This is a traditional Kerala special hot and spicy fish curry and goes well with rice.', '', 'on'),
(49, 6, '2018-05-09 15:28:12', 'PRAWNS VARUTHARACHATHU', 'prawns vartharachathu.jpeg', 200, 'Prawns cooked in a roasted masala gravy Kerala style. A perfect side dish.!', '', 'on'),
(50, 7, '2018-05-09 16:06:35', 'KADAI MUTTON BONELESS (GRAVY)', 'kadaimatonboneless.jpg', 290, 'No Description Available', '', 'on'),
(51, 7, '2018-05-09 16:07:28', 'KADAI PRAWNS (GRAVY)', 'kadaiprawns gravy.jpg', 252, 'This tasty prawns is very creamy. A delightful lip smacking gravy coats the prawns to make it juicy and tasty.', '', 'on'),
(52, 7, '2018-05-09 16:08:10', 'KADAI CHICKEN BONELESS (GRAVY)', 'kadaichickenboneless.jpg', 229, 'Kadai boneless Chicken well known for its spicy taste. Goes well with biryani or rotis.', '', 'on'),
(53, 7, '2018-05-09 16:09:04', 'HYDERABADI CHICKEN BONELESS (GRAVY)', 'hyderabadgravy.jpg', 238, 'Chicken cooked in tilli-phalli masala and a classic recipe native to Hyderabad.', '', 'on'),
(54, 7, '2018-05-09 16:09:51', 'CHICKEN MASALA BONELESS', 'chicken masala boneless.jpg', 210, 'No Description Available', '', 'on'),
(55, 7, '2018-05-09 16:10:32', 'CHICKEN MUGHLAI', 'chickenmughlai.jpg', 229, 'A dish with full of creamy rich flavor of yogurt and all the nutty ingredients and spices.', '', 'on'),
(56, 7, '2018-05-09 16:11:09', 'KADAI MUTTON (GRAVY)', 'kadaimutton.jpg', 252, 'Lamb pieces nicely cooked until luscious in aromatic and flavorful spicy gravy.', '', 'on'),
(57, 7, '2018-05-09 16:11:52', 'KADAI CHICKEN (GRAVY)', 'kadaichicke.jpeg', 190, 'Kadai Chicken well known for its for its spicy taste. Goes well with biryani or rotis.', '', 'on'),
(58, 7, '2018-05-09 16:12:31', 'BOILED EGG (2 NOS)', 'boiledegg.jpg', 33, 'Boiled egg', '', 'on'),
(59, 7, '2018-05-09 16:13:03', 'EGG OMELETTE', 'eggomlete.jpg', 95, 'Simple omelet with diced onions.', '', 'on'),
(60, 8, '2018-05-09 16:22:02', 'KADAI PRAWNS (DRY)', 'kadaiprawns.jpg', 252, 'Kadai Prawns is an easy prawn curry with capsicum and spices. Goes well with rice and rotis.', '', 'on'),
(61, 8, '2018-05-09 16:22:35', 'HYDERABADI CHICKEN BONELESS (DRY)', 'hyderabaddry.jpg', 229, 'Hyderabadi chicken fry is different from the North Indian Chicken fry. This dish is dry and so it can be enjoyed like a starter too.', '', 'on'),
(62, 8, '2018-05-09 16:23:23', 'KADAI CHICKEN BONELESS (DRY)', 'kadaichickenbonelessdry.jpg', 229, 'Kadai Chicken is a very famous non-veg delight. This North Indian recipe tastes juicy with distinct flavors of bell pepper', '', 'on'),
(63, 8, '2018-05-09 16:24:09', 'KADAI CHICKEN (DRY)', 'kadaichickedry.jpeg', 190, 'Kadai Chicken is a very famous non-veg delight. This North Indian recipe tastes juicy with distinct flavors of bell pepper.', '', 'on'),
(64, 8, '2018-05-09 16:24:37', 'KADAI MUTTON BONELESS (DRY)', 'kadaimuttonbonelessdry.jpg', 276, 'No Description Available', '', 'on'),
(65, 9, '2018-05-09 16:28:42', 'BLACK CURRENT(SINGLE)', 'blackcurren.jpg', 100, 'No Description Available', '', 'on'),
(66, 9, '2018-05-09 16:29:14', 'PINACOLADA', 'pincoloda.jpg', 95, 'No Description Available', '', 'on'),
(67, 9, '2018-05-09 16:29:52', 'KULFI', 'kulfi.jpg', 60, 'No Description Available', '', 'on'),
(68, 9, '2018-05-09 16:30:46', 'FRUIT SALAD(WITH ICECREAM)', 'fruitsalad.jpg', 90, 'No Description Available', '', 'on'),
(69, 9, '2018-05-09 16:31:09', 'GUDBUD (WITH ICE CREAM)', 'gudbud.jpg', 90, 'No Description Available', '', 'on'),
(70, 10, '2018-05-09 16:41:11', 'FULL GRILL BIRIYANI', 'fullgrillbiriyani.jpg', 724, 'Grill Chicken Biryani is a meal for a small family which is finger licking deliciously spicy and aromatic', '', 'on'),
(71, 10, '2018-05-09 16:41:48', 'FULL RAAN BIRIYANI', 'fullraanbiryani.jpg', 1090, 'A whole leg piece of well done Mutton Raan in spiced Biryani rice with accompaniments', '', 'on'),
(72, 10, '2018-05-09 16:42:26', 'HALF GRILL BIRIYANI', 'halfgrillbiryani.jpg', 395, 'Grill Chicken Biryani is a meal for a small family which is finger licking deliciously spicy and aromatic.', '', 'on'),
(73, 10, '2018-05-09 16:43:23', 'HALF RAAN BIRIYANI', 'halfraanbiriyani.jpg', 571, 'Well done Mutton Raan in spiced Biryani rice with accompaniments.', '', 'on'),
(74, 10, '2018-05-09 16:43:56', 'MUTTON BIRIYANI(BONELESS)', 'muttonbiryani.jpg', 300, 'Boneless Mutton chunks marinated and cooked along with rice and left on slow fire. Served with accompaniments', '', 'on'),
(75, 10, '2018-05-09 16:44:31', 'CURD RICE', 'curdrice.jpg', 114, 'Curd rice also called yogurt rice is a dish of India. It is very popular in the South', '', 'on'),
(76, 10, '2018-05-09 16:45:09', 'LEMON RICE', 'lemonrice.jpg', 114, 'This is one of the most commonly made south Indian rice dish, usually eaten alone or with yogurt, raita, chutney.', '', 'on'),
(77, 10, '2018-05-09 16:46:17', 'BIRIYANI RICE (NON VEG)', 'biryanirice.jpg', 119, 'Plain Biryani without vegetables made in south Indian or Muslim style.', '', 'on'),
(78, 10, '2018-05-09 16:46:43', 'GHEE RICE', 'gheerice.jpg', 81, 'A famous south Indian rice dish, very aromatic with spices and goes great with dal fry.', '', 'on'),
(79, 10, '2018-05-09 16:47:14', 'PLAIN RICE', 'plainrice.jpg', 62, 'Simple and plain white rice, served with lentils, dal, or a gravy-based dish.', '', 'on'),
(80, 10, '2018-05-09 16:48:59', 'JEERA RICE', 'jeerarice.jpg', 86, 'Jeera rice or Zeera rice is an Indian dish consisting of rice and cumin seeds and tastefully cooked.', '', 'on'),
(81, 11, '2018-05-09 16:56:55', 'MUTTON FRIED RICE', 'muttonbiryani.jpg', 219, 'This is a recipe made with vegetables and mutton pieced mixed together and stir fried.', '', 'on'),
(82, 11, '2018-05-09 16:57:36', 'PRAWNS FRIED RICE', 'prawnsfriedrice.jpg', 219, 'A super fried rice made with a combination of rice, vegetables and prawn.', '', 'on'),
(83, 11, '2018-05-09 16:58:14', 'CHICKEN FRIED RICE', 'chickenfriedrice.jpg', 200, 'Rice stir fried with chicken strips, veggies and sauces for that extra taste.', '', 'on'),
(84, 11, '2018-05-09 16:59:27', 'EGG FRIED RICE', 'eggfriedrice.jpg', 171, 'Egg Fried Rice is a main dish having its root in the Chinese cuisine. Simple and delicious fried rice made with eggs and vegetables.', '', 'on'),
(85, 11, '2018-05-09 17:00:32', 'MIX FRIED RICE', 'mixedfried.jpg', 224, 'Mixed fried rice is a combination of rice with vegetables and non veg all mixed together and stir fried.', '', 'on'),
(86, 11, '2018-05-09 17:01:21', 'VEG FRIED RICE', 'vegfriedrice.jpg', 162, 'A super fried rice made with a combination of rice, vegetables and prawn.', '', 'on'),
(87, 12, '2018-05-09 17:11:13', 'MASALA NAAN', 'masalanaan.jpg', 57, 'A typical Punjabi recipe, kulcha is a type of leavened bread famous in India and is usually eaten with chole.', '', 'on'),
(88, 12, '2018-05-09 17:11:47', 'TANDOORI PAROTTA', 'tandooriparotta.jpg', 38, 'Tandoori Parotta is a sure hit. Oil is usually added to the flour to make a smooth and soft dough.', '', 'on'),
(89, 12, '2018-05-09 17:12:55', 'PLAIN KULCHA', 'plainkulch.jpg', 50, 'No Description Available', '', 'on'),
(90, 12, '2018-05-09 17:12:56', 'PLAIN KULCHA', 'plainkulch.jpg', 50, 'No Description Available', '', 'on'),
(91, 12, '2018-05-09 17:13:32', 'GARLIC NAAN', 'garlicnaan.jpg', 46, 'No Description Available', '', 'on'),
(92, 12, '2018-05-09 17:14:06', 'ROMALI ROTI', 'romaliroti.jpg', 33, 'Rumali roti is a thin flatbread originating from the Indian subcontinent and enjoyed with Tandoori dishes.', '', 'on'),
(93, 12, '2018-05-09 17:14:44', 'TANDOORI ROTI', 'tandooriroti.jpg', 38, 'Rumali roti is a thin flatbread originating from the Indian subcontinent and enjoyed with Tandoori dishes.', '', 'on'),
(94, 12, '2018-05-09 17:17:22', 'KULCHA', 'butterkulch.jpg', 43, '\r\nKulcha is cooked over direct flame to give it a tandoor like burnt effect taste.', '', 'on'),
(96, 13, '2018-05-09 17:32:10', 'ASSORTED CHICKEN', 'assortedchicken.jpg', 405, 'A delicious assortment of chicken tikka, and malai kebab served on a platter with sauces and salad.', '', 'on'),
(97, 13, '2018-05-09 17:33:02', 'CHICKEN HARIYALI(HALF)', 'chickenhariyali.jpg', 219, 'Chicken is marinated overnight in a spicy yogurt marinade then grilled in this authentic recipe for tandoori chicken.', '', 'on'),
(98, 13, '2018-05-09 17:33:45', 'KALMI KABAB (3PCS)', 'kalmikabab.jpg', 157, 'Kalmi kabab is a popular snack and a delicious side dish. It is juicy and tender and a very tasty dish.', '', 'on'),
(99, 13, '2018-05-09 17:34:42', 'CHICKEN TANDOORI MASALA', 'chickentandoori.jpg', 235, 'Well marinated tandoori chicken in a flavored masala rich & spicy.', '', 'on'),
(100, 13, '2018-05-09 17:35:26', 'CHICKEN TANDOORI (FULL)', 'chickentandoorifull.jpg', 352, 'No Description Available', '', 'on'),
(101, 16, '2018-05-09 17:48:18', 'CHICKEN SOUP', 'chickensoup.jpg', 124, 'Made from chicken stock with diced chicken and simmered various other ingredients.', '', 'on'),
(102, 16, '2018-05-09 17:48:48', 'MUTTON SOUP', 'muttonsoup.jpg', 138, 'Mutton stock with diced mutton and simmered with various other ingredients.', '', 'on'),
(103, 16, '2018-05-09 17:49:19', 'VEG SOUP', 'vegsoup.jpg', 114, 'Vegetable stock simmered with mixed vegetables and cream.', '', 'on'),
(104, 16, '2018-05-09 17:50:13', 'CHICKEN SWEET CORN SOUP', 'chickensoup.jpg', 138, 'Chicken stock with diced chicken and corn simmered with various other ingredients', '', 'on'),
(105, 16, '2018-05-09 17:50:38', 'VEG SWEET CORN SOUP', 'vegsweetcorn.jpg', 138, 'Vegetable stock simmered with mixed vegetables and corn.', '', 'on'),
(106, 15, '2018-05-09 18:02:38', 'PRAWNS NOODLES', 'prawnsnoodles.jpg', 200, 'Noodles tossed with prawns and abundance of vegetables in chilli garlic sauce.', '', 'on'),
(107, 15, '2018-05-09 18:03:25', 'CHICKEN NOODLES', 'chickennoodles.jpg', 186, 'Chicken and an abundance of vegetables are tossed with noodles and served with sauces.', '', 'on'),
(108, 15, '2018-05-09 18:03:53', 'MIX NOODLES', 'mixnoodles.jpg', 214, 'Mixed noodles are always cooked with a choice of shredded meat and vegetables.', '', 'on'),
(109, 15, '2018-05-09 18:04:29', 'VEG NOODLES', 'vegnoodles.jpg', 148, 'Vegetable noodles are a very popular Indo Chinese dish although there are various versions around.', '', 'on'),
(110, 15, '2018-05-09 18:05:09', 'EGG NOODLES', 'eggnoodles.jpg', 148, 'Egg Noodles is a yummy Chinese recipe made in Indian style using locally available ingredients.', '', 'on'),
(112, 14, '2018-05-09 18:23:38', 'MINERAL WATER', 'minerwater.jpg', 18, 'No Description Availab', '', 'on'),
(113, 14, '2018-05-09 18:24:15', 'STING ENERGYy', 'sting.jpg', 47, '', '', 'on'),
(114, 14, '2018-05-09 18:24:51', 'TIN SOFT DRINKS', 'TIN SOFT DRINKS.jpg', 48, 'No Description Available', '', 'on'),
(115, 14, '2018-05-09 18:25:48', '600ML SOFT DRINK (PEPSI)', '600ML SOFT DRINK (PEPSI).jpg', 38, 'No Description Available', '', 'on'),
(116, 14, '2018-05-09 18:26:16', '600ML SOFT DRINK ( 7UP)', '600ML SOFT DRINK ( 7UP).jpg', 38, 'No Description Available', '', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `uname`, `email`, `password`) VALUES
(3, 'Ajay', 'ajaychaubey256@gmail.com', '12'),
(4, 'pradhumn', 'pradhumn@gmail.com', '12'),
(9, 'Manish', 'manish@gmail.com', '12'),
(10, 'sonu', 'sonu@gmail.com', '12'),
(11, 'dubey', 'dubey@gmail.com', 'dubey');

-- --------------------------------------------------------

--
-- Table structure for table `table_res`
--

CREATE TABLE `table_res` (
  `id` int(255) NOT NULL,
  `people` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_res`
--

INSERT INTO `table_res` (`id`, `people`, `date`, `time`) VALUES
(30, '3', '2018-05-08', '14'),
(31, '5', '2018-05-14', '4'),
(32, '4', '2018-04-30', '4'),
(33, '7', '2018-05-16', '7'),
(34, '1', '2018-06-11', '23'),
(35, '1', '2018-06-11', '23'),
(36, '1', '2018-06-11', '23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_res`
--
ALTER TABLE `table_res`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_res`
--
ALTER TABLE `table_res`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
