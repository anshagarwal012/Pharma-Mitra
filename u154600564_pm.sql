-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2023 at 08:05 AM
-- Server version: 10.6.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u154600564_pm`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `a_title` varchar(255) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `button_name` varchar(255) NOT NULL,
  `button_link` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `ID` int(11) NOT NULL,
  `Hospital_ID` varchar(255) NOT NULL,
  `Blood_Group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`ID`, `Hospital_ID`, `Blood_Group`) VALUES
(8, '12', 'A+'),
(9, '18', 'A+'),
(10, '27', 'B-'),
(11, '33', 'AB+'),
(12, '15', 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `credintials`
--

CREATE TABLE `credintials` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dp` varchar(50) NOT NULL DEFAULT 'assets/img/avatar/avatar1.jpg',
  `is_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `credintials`
--

INSERT INTO `credintials` (`id`, `email`, `pass`, `name`, `dp`, `is_admin`) VALUES
(1, 'contact.us@pharmamitra.com', 'pharma@123', 'Pharma Mitra', 'assets/img/avatar/avatar1.jpg', 1),
(4, 'test@test.com', '123456', 'Ansh', 'assets/img/avatar/avatar1.jpg', 0),
(5, 'ansh@123.com', '123', 'test', 'assets/img/avatar/avatar1.jpg', 0),
(6, 'ansh@1212.com', '123', 'Ansh', 'assets/img/avatar/avatar1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(255) NOT NULL,
  `Address` longtext NOT NULL,
  `State` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`ID`, `Name`, `Email`, `Phone`, `Address`, `State`) VALUES
(12, 'Pristyn Care - Lucknow', 'abc@xyz.com', 2147483647, 'B -4/216 Vishal Khand 4 Gomti Nagar , Lucknow -', 'Andhra Pradesh'),
(13, 'Pristyn Care - Gomti Nagar', 'abc@xyz.com', 2147483647, 'Patrakarpuram Crossing Rd, Vikas Khand 1 Vishal Khand, Gomti Nagar , Lucknow - 226010', 'Arunachal Pradesh'),
(14, 'Garg OpthalMic', 'abc@xyz.com', 2147483647, 'B-54, Bans Mandi, Nirala Nagar , Lucknow - 226020', 'Assam'),
(15, 'Vaga Hospital', 'abc@xyz.com', 2147483647, 'KS-14, Aligunj Housing Scheme Sitapur Road , Lucknow -', 'Bihar'),
(16, 'Manju Hospital', 'abc@xyz.com', 2147483647, '14, 15, Sector 14, Indira Nagar, Lucknow, Uttar Pradesh 226016 , Lucknow -', 'Chhattisgarh'),
(17, 'Indus Lucknow', 'abc@xyz.com', 2147483647, 'OPD Chamber No 2, Gr Floor, Indus Heart And Medical Centre 1, Vineet Khand 1, Gomti Nagar, Lucknow, Uttar Pradesh 226010 , Lucknow -', 'Goa'),
(18, 'Nova/Ford Hospital', 'abc@xyz.com', 2147483647, '78, Jal Nigam Rd, Balaganj, Lucknow, Uttar Pradesh 226003 , Lucknow -', 'Gujarat'),
(19, 'Altis Hospital', 'abc@xyz.com', 2147483647, 'Madiyanva, Mutkkipur, Uttar Pradesh 226020 , Lucknow -', 'Haryana'),
(20, 'Tender Palm Hospital', 'abc@xyz.com', 2147483647, 'Amar Shaheed Path, Sector 7, Gomti Nagar, Lucknow, Uttar Pradesh 226001 , Lucknow -', 'Himachal Pradesh'),
(21, 'Trinetra Advanced Eye Care Centre', 'abc@xyz.com', 2147483647, 'Fims College Road, Vibhav Khand-4, Gomti Nagar , Lucknow - 226010', 'Jharkhand'),
(22, 'Asia Hospital Lucknow', 'abc@xyz.com', 2147483647, 'B-2/1, Vikrant Khand- 2, Vikrant Khand, Gomti Nagar, Lucknow, Uttar Pradesh 226010 , Lucknow -', 'Karnataka'),
(23, 'Jivisha medical centre', 'abc@xyz.com', 2147483647, '4/216 ,Vishal Khand 4 Gomti Nagar near St Joseph hospital, Lucknow, Uttar Pradesh 226010 , Lucknow -', 'Kerala'),
(24, 'Pinnacle Plastic Surgery', 'abc@xyz.com', 2147483647, 'GF 1 and 2, Galaxy Health Centre, Vivek Khand 2, Gomti Nagar, Lucknow, Uttar Pradesh 226010 , Lucknow -', 'Madhya Pradesh'),
(25, 'Rajchandra hospital', 'abc@xyz.com', 2147483647, '554GA/256, VIP Road, Damodar Nagar, Alambagh, Lucknow, Uttar Pradesh 226005 , Lucknow -', 'Maharashtra'),
(26, 'Scope Hospital', 'abc@xyz.com', 2147483647, '10A/9, Vrindavan Yojna, Raebareli, Road, Amar Shaheed Path, Telibagh, Lucknow, Uttar Pradesh 226001 , Lucknow -', 'Manipur'),
(27, 'Indus Hospital', 'abc@xyz.com', 2147483647, '1/1 Vineet Khand Opp Jaipuria School Gomti Nagar , Lucknow -', 'Meghalaya'),
(28, 'Panacea Hospital', 'abc@xyz.com', 2147483647, '4C/176 Sec-4 Near Ekana internatinal Stadium Gomti Nagar Extension , Lucknow - 226010', 'Mizoram'),
(29, 'Indira IVF (Lucknow)', 'abc@xyz.com', 2147483647, 'Shalimar Logix, Rana Pratap Marg, Opposite National College, Hazratgunj , Lucknow - 226001', 'Nagaland'),
(30, 'Garg OpthalMic', 'abc@xyz.com', 2147483647, 'B-54, Bans Mandi, Nirala Nagar , Lucknow - 226020', 'Odisha'),
(31, 'Vaga Hospital', 'abc@xyz.com', 2147483647, 'KS-14, Aligunj Housing Scheme Sitapur Road , Lucknow -', 'Punjab'),
(32, 'Manju Hospital', 'abc@xyz.com', 2147483647, '14, 15, Sector 14, Indira Nagar, Lucknow, Uttar Pradesh 226016 , Lucknow -', 'Rajasthan'),
(33, 'Indus Lucknow', 'abc@xyz.com', 2147483647, 'OPD Chamber No 2, Gr Floor, Indus Heart And Medical Centre 1, Vineet Khand 1, Gomti Nagar, Lucknow, Uttar Pradesh 226010 , Lucknow -', 'Sikkim'),
(34, 'Nova/Ford Hospital', 'abc@xyz.com', 2147483647, '78, Jal Nigam Rd, Balaganj, Lucknow, Uttar Pradesh 226003 , Lucknow -', 'Tamil Nadu'),
(35, 'Altis Hospital', 'abc@xyz.com', 2147483647, 'Madiyanva, Mutkkipur, Uttar Pradesh 226020 , Lucknow -', 'Telangana'),
(36, 'Tender Palm Hospital', 'abc@xyz.com', 2147483647, 'Amar Shaheed Path, Sector 7, Gomti Nagar, Lucknow, Uttar Pradesh 226001 , Lucknow -', 'Tripura'),
(37, 'Trinetra Advanced Eye Care Centre', 'abc@xyz.com', 2147483647, 'Fims College Road, Vibhav Khand-4, Gomti Nagar , Lucknow - 226010', 'Uttarakhand'),
(38, 'Asia Hospital Lucknow', 'abc@xyz.com', 2147483647, 'B-2/1, Vikrant Khand- 2, Vikrant Khand, Gomti Nagar, Lucknow, Uttar Pradesh 226010 , Lucknow -', 'Uttar Pradesh'),
(39, 'Jivisha medical centre', 'abc@xyz.com', 2147483647, '4/216 ,Vishal Khand 4 Gomti Nagar near St Joseph hospital, Lucknow, Uttar Pradesh 226010 , Lucknow -', 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Price` varchar(255) NOT NULL,
  `Manufacture` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Image`, `Price`, `Manufacture`, `Description`) VALUES
(1, 'Augmentin 625 Duo Tablet', 'uploads/medicine.png', '223.42', 'Glaxo SmithKline Pharmaceuticals Ltd', 'Amoxycillin (500mg) Clavulanic Acid (125mg)'),
(2, 'Azithral 500 Tablet', 'uploads/medicine.png', '132.36', 'Alembic Pharmaceuticals Ltd', 'Azithromycin (500mg)'),
(3, 'Ascoril LS Syrup', 'uploads/medicine.png', '118', 'Glenmark Pharmaceuticals Ltd', 'Ambroxol (30mg/5ml) Levosalbutamol (1mg/5ml)'),
(4, 'Allegra 120mg Tablet', 'uploads/medicine.png', '218.81', 'Sanofi India  Ltd', 'Fexofenadine (120mg)'),
(5, 'Avil 25 Tablet', 'uploads/medicine.png', '10.96', 'Sanofi India  Ltd', 'Pheniramine (25mg)'),
(6, 'Allegra-M Tablet', 'uploads/medicine.png', '241.48', 'Sanofi India  Ltd', 'Montelukast (10mg) Fexofenadine (120mg)'),
(7, 'Amoxyclav 625 Tablet', 'uploads/medicine.png', '223.27', 'Abbott', 'Amoxycillin (500mg) Clavulanic Acid (125mg)'),
(8, 'Azee 500 Tablet', 'uploads/medicine.png', '132.38', 'Cipla Ltd', 'Azithromycin (500mg)'),
(9, 'Atarax 25mg Tablet', 'uploads/medicine.png', '85.5', 'Dr Reddy\'s Laboratories Ltd', 'Hydroxyzine (25mg)'),
(10, 'Ascoril D Plus Syrup Sugar Free', 'uploads/medicine.png', '129', 'Glenmark Pharmaceuticals Ltd', 'Phenylephrine (5mg) Chlorpheniramine Maleate (2mg)'),
(11, 'Aciloc 150 Tablet', 'uploads/medicine.png', '40.94', 'Cadila Pharmaceuticals Ltd', 'Ranitidine (150mg)'),
(12, 'Alex Syrup', 'uploads/medicine.png', '129', 'Glenmark Pharmaceuticals Ltd', 'Phenylephrine (5mg/5ml) Chlorpheniramine Maleate (2mg/5ml)'),
(13, 'Anovate Cream', 'uploads/medicine.png', '134.2', 'USV Ltd', 'Phenylephrine (0.10% w/w) Beclometasone (0.025% w/w)'),
(14, 'Augmentin Duo Oral Suspension', 'uploads/medicine.png', '67.2', 'Glaxo SmithKline Pharmaceuticals Ltd', 'Amoxycillin (200mg) Clavulanic Acid (28.5mg)'),
(15, 'Ambrodil-S Syrup', 'uploads/medicine.png', '30.2', 'Aristo Pharmaceuticals Pvt Ltd', 'Ambroxol (15mg/5ml) Salbutamol (1mg/5ml)'),
(16, 'Arkamin Tablet', 'uploads/medicine.png', '72.65', 'Torrent Pharmaceuticals Ltd', 'Clonidine (100mcg)'),
(17, 'Avomine Tablet', 'uploads/medicine.png', '55.98', 'Abbott', 'Promethazine (25mg)'),
(18, 'Asthakind-DX Syrup Sugar Free', 'uploads/medicine.png', '70.4', 'Mankind Pharma Ltd', 'Phenylephrine (5mg/5ml) Chlorpheniramine Maleate (2mg/5ml)'),
(19, 'Allegra 180mg Tablet', 'uploads/medicine.png', '251.2', 'Sanofi India  Ltd', 'Fexofenadine (180mg)'),
(20, 'Albendazole 400mg Tablet', 'uploads/medicine.png', '9.58', 'Cadila Pharmaceuticals Ltd', 'Albendazole (400mg)'),
(21, 'Asthalin Syrup', 'uploads/medicine.png', '19.04', 'Cipla Ltd', 'Salbutamol (2mg/5ml)'),
(22, 'Alprax 0.25 Tablet', 'uploads/medicine.png', '29', 'Torrent Pharmaceuticals Ltd', 'Alprazolam (0.25mg)'),
(23, 'Altraday Capsule SR', 'uploads/medicine.png', '128', 'Sun Pharmaceutical Industries Ltd', 'Aceclofenac (200mg) Rabeprazole (20mg)'),
(24, 'Ativan 2mg Tablet', 'uploads/medicine.png', '91.87', 'Pfizer Ltd', 'Lorazepam (2mg)'),
(25, 'Ascoril LS Junior Syrup', 'uploads/medicine.png', '96', 'Glenmark Pharmaceuticals Ltd', 'Ambroxol (15mg/5ml) Levosalbutamol (0.5mg/5ml)'),
(26, 'Asthalin 100mcg Inhaler', 'uploads/medicine.png', '157.85', 'Cipla Ltd', 'Salbutamol (100mcg)'),
(27, 'Almox 500 Capsule', 'uploads/medicine.png', '80.26', 'Alkem Laboratories Ltd', 'Amoxycillin (500mg)'),
(28, 'Atarax 10mg Tablet', 'uploads/medicine.png', '47.91', 'Dr Reddy\'s Laboratories Ltd', 'Hydroxyzine (10mg)'),
(62, 'Asthakind Expectorant Sugar Free', 'uploads/1680609767asthakind-sugarfree-expectorant-500x500.webp', '64', 'Mankind Pharma Ltd', 'Guaifenesin (50mg) Terbutaline (1.25mg)'),
(63, 'Azicip 500 Tablet', 'uploads/1680609896Azicip 500 Tablet.jpg', '79', 'Cipla Ltd', 'Azithromycin (500mg)'),
(64, 'Amoxycillin 500mg Capsule', 'uploads/1680610057Amoxycillin 500mg Capsule.jpg', '32', 'Jagsonpal Pharmaceuticals Ltd', 'Amoxycillin (500mg)'),
(65, 'Augmentin DDS Suspension', 'uploads/16806101354.jpg', '173', 'Glaxo SmithKline Pharmaceuticals Ltd', 'Amoxycillin (400mg/5ml) Clavulanic Acid (57mg/5ml)'),
(66, 'Althrocin 500 Tablet', 'uploads/16806102845.jpg', '110', 'Alembic Pharmaceuticals Ltd', 'Erythromycin (500mg)'),
(67, 'AB Phylline Capsule', 'uploads/16806103566.jpg', '162', 'Sun Pharmaceutical Industries Ltd', 'Acebrophylline (100mg)'),
(68, 'Azithral 200 Liquid', 'uploads/16806104327.jpg', '57', 'Alembic Pharmaceuticals Ltd', 'Azithromycin (200mg/5ml)'),
(70, 'Anafortan 25 mg/300 mg Tablet', 'uploads/16806106549.jpg', '125', 'Abbott', 'Camylofin (25mg) Paracetamol (300mg)'),
(71, 'Alex Junior Syrup', 'uploads/16806107548.jpg', '95', 'Glenmark Pharmaceuticals Ltd', 'Chlorpheniramine Maleate (2mg/5ml) Dextromethorphan Hydrobromide (5mg/5ml)'),
(72, 'Arachitol 6L Injection', 'uploads/168061095610.jpg', '408', 'Abbott', 'Vitamin D3 (600000IU'),
(73, 'Alprax 0.5mg Tablet', 'uploads/168061104511.jpg', '67', 'Torrent Pharmaceuticals Ltd', 'Alprazolam (0.5mg)'),
(74, 'Alfoo 10mg Tablet PR', 'uploads/168061112212.jpg', '688', 'Dr Reddy\'s Laboratories Ltd', 'Alfuzosin (10mg)'),
(75, 'Alkasol Oral Solution', 'uploads/168061124713.jpg', '122', 'Stadmed Pvt Ltd', 'Disodium Hydrogen Citrate (1.4gm/5ml)'),
(76, 'Ativan 1mg Tablet', 'uploads/168061136614.jpg', '76', 'Pfizer Ltd', 'Lorazepam (1mg)'),
(77, 'Axcer 90mg Tablet', 'uploads/168061143615.jpg', '420', 'Sun Pharmaceutical Industries Ltd', 'Ticagrelor (90mg)'),
(78, 'Amlokind-AT Tablet', 'uploads/168061153716.jpg', '45', 'Mankind Pharma Ltd', 'Amlodipine (5mg) Atenolol (50mg)'),
(79, 'Atarax Syrup', 'uploads/168061160317.jpg', '110', 'Dr Reddy\'s Laboratories Ltd', 'Hydroxyzine (10mg)'),
(80, 'Allegra Suspension Raspberry & Vanilla', 'uploads/168061166718.jpg', '189', 'Sanofi India Ltd', 'Fexofenadine (30mg/5ml)'),
(81, 'Aldactone Tablet', 'uploads/168061175219.jpg', '36', 'RPG Life Sciences Ltd', 'Spironolactone (25mg)'),
(82, 'Aciloc RD 20 Tablet', 'uploads/168061183920.jpg', '77', 'Cadila Pharmaceuticals Ltd', 'Domperidone (10mg) Omeprazole (20mg)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `credintials`
--
ALTER TABLE `credintials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `credintials`
--
ALTER TABLE `credintials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
