-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 06:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abctrveldb`
--
CREATE DATABASE IF NOT EXISTS `abctrveldb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `abctrveldb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_Id` int(10) NOT NULL,
  `admin_User_Name` varchar(50) NOT NULL,
  `admin_Name` varchar(50) NOT NULL,
  `admin_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_Id`, `admin_User_Name`, `admin_Name`, `admin_Password`) VALUES
(1, 'admin', 'Administrator', '$2y$10$UUEUs04Lea90wSGWp7vgP.DKpK1LEikKzFmrYHfJ1UKU.WEggM2hy');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_Id` int(10) NOT NULL,
  `user_Id` int(10) NOT NULL,
  `Package_Id` int(10) NOT NULL,
  `from_Date` date NOT NULL,
  `booking_TimeDate` datetime NOT NULL,
  `comment` text NOT NULL,
  `booking_state` enum('PENDING','ACCEPTED','DECLINED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_Image` varchar(500) NOT NULL,
  `package_Name` varchar(50) NOT NULL,
  `package_Type` varchar(20) NOT NULL,
  `package_Price` decimal(6,2) NOT NULL,
  `package_Details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_Image`, `package_Name`, `package_Type`, `package_Price`, `package_Details`) VALUES
(5, '.\\package_images\\5\\package1.png', 'Weekend Island Break with Colombo and Bentota', 'General', '232.20', 'Sri Lanka is bottled up with beautiful nature trails, stunning vistas and waterfalls, misty mountains rising into the clouds, golden beaches which is why it is known as the &quot;Teardrop of India&quot;, it gives a variety of holiday experiences from pristine sandy sea shores of Mirissa where you can surf and observe the waters teeming with marine life, from turtles to big blue whales, bask in the sunny beach with a quiet and secluded environment adrenaline pumping adventure sports at Bentota such as snorkelling, windsurfing, etc., pass through several small islands in this lovely Madu River covered with the mangroves and even witness the making of the favorite cinnamon spice and discover the vibrancy of Colombo and explore a variety of fascinating attractions, as well as interacting with its authentic people. Delve into the city’s cultural diversity as you traverse through the colorful streets of the lively market.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo - Bentota - Colombo\r\n\r\nDuration: 4 Days &amp; 3 Nights\r\n\r\nStart Point: Bandaranaike International Airport (Colombo)\r\n\r\nEnd Point: Bandaranaike International Airport (Colombo)\r\n\r\n\r\nInclusions:\r\n\r\n ➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 4 and Buffet Dinner from Day 1 to Day 3\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax\r\n\r\n\r\n\r\nHow To Reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city.The major airlines operating these routes are SriLankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.'),
(6, '.\\package_images\\6\\Screenshot 2022-05-22 202448.png', 'Sweet Escapade to Sri Lanka with Kandy for 6 Days', 'General', '328.95', 'Srilanka, is the pearl of the Indian ocean a trip to this mesmerizing island where you will get fascinated by the lush tea plantations &amp; waterfalls, tropical beaches, jaw-dropping wildlife, historical monuments &amp; temples.\r\n\r\nThe gateway to all of this hill-country action is Kandy and Sri Lanka’s second city and the island’s undisputed historical and cultural capital full of rich in heritage and culture of royal city Kandy. Skim the waves at speed and feel the splash against your sunkissed skin on the vast waters encompassing Bentota and participate in the Kosgoda Sea Turtle Conservation Project to have a close look into the process of rescuing and nurturing sea turtles. Surf through the waves, and spend your days enjoying fresh coconuts in your hammock at Mirissa, wander at the sprawling layout and complex history featuring a fascinating heritage and enticing architectural wonders of the dutch and British era.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo - Kandy - Bentota - Colombo\r\n\r\nDuration: 6 Days 5 Nights\r\n\r\nStart Point: Bandaranaike International Airport (Colombo)\r\n\r\nEnd Point: Bandaranaike International Airport (Colombo)\r\n\r\n\r\nInclusions:\r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 6 and Buffet Dinner from Day 1 to Day 5\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide.\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax.\r\n\r\n\r\n\r\nHow to Reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city. The major airlines operating these routes are SriLankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.'),
(7, '.\\package_images\\7\\Screenshot 2022-05-22 202719.png', 'Sri Lanka-Lap of luxury Taj Special', 'General', '561.15', 'Be pampered by our world-renowned Golden Keys Concierge and butlers, and enjoy sumptuous in-room dining experiences. Come, experience the magic of this palm-lined haven on the harbour. Enjoy every minute of it. Be it the ocean, the forest or even the city, you’ll be able to soak it all in, what makes the soul-satisfying everything make it a paradise that bedazzles everyone!\r\n\r\nAwaken the adventurous soul in you by indulging in a myriad of water sports for fun and thrill in Bentota from jet skiing, banana boat ride, parasailing, paramotoring, speed boat ride, yachting, canoeing, kayaking, to boating in the mangrove forests. Conclude this tour by visiting the Red Mosque, a stunning candy-like red and white striped mosque named ‘Jami Ul-Alfar’ is the most spectacular building in your entire trip in Colombo.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo - Bentota - Colombo\r\n\r\nDuration: 5 Days 4 Nights\r\n\r\nStart Point: Bandaranaike International Airport (Colombo)\r\n\r\nEnd Point: Bandaranaike International Airport (Colombo)\r\n\r\n\r\nInclusions:\r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 5 and Buffet Dinner from Day 1 to Day 4\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide.\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax.\r\n\r\n\r\n\r\nHow to Reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city. The major airlines operating these routes are SriLankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.'),
(8, '.\\package_images\\8\\Screenshot 2022-05-22 202851.png', '7 Days Scintillating Tropical Tour to Sri Lanka', 'General', '425.70', 'Sri Lanka is surrounded by elevated area lie sprawling plains the coastal areas are dotted with beautiful beaches and lagoons.Snuggled between the imposing mountains and verdant peaks Kandy is defined by the calmness and serenity. Spend your time at the holy relic of Buddha&#039;s tooth and surround yourself in the spiritual vibes,Often referred to as ‘Little England’, Nuwara Eliya is known for its colonial ambience where you can treasure trove of natural beauty and magnificent architectural buildings of Nuwara Eliya. The capital city is full of buildings and churches that are a majestic sight. Colombo flaunts a rich pilgrim legacy, highlighting a blend of races, religions and culture with sprawling bustling street markets. You will also get to visit other tourist hotspots like the Natural History Museum, Colombo Museum, Jami Ul-Alfar Mosque commonly referred as red mosque covered in elaborate stripes and patterns created by red and white painted bricks.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo - Kandy - Nuwara Eliya - Bentota - Colombo\r\n\r\nDuration: 7 Days &amp; 6 Nights\r\n\r\nStart Point: Bandaranaike International Airport (Colombo)\r\n\r\nEnd Point: Bandaranaike International Airport (Colombo)\r\n\r\n\r\nInclusions: \r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 5 and Buffet Dinner from Day 1 to Day 4\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide.\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax.\r\n\r\n\r\n\r\nHow to reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city.The major airlines operating these routes are Sri Lankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.'),
(9, '.\\package_images\\9\\Screenshot 2022-05-22 203006.png', 'Bonanza Casino Colombo Package', 'General', '316.05', 'A trip to this beautiful island nation that offers a wonderfully diverse holiday experience. One of the best things to do in Colombo is to explore the nightlife of them and make money in casinos. The fun you will have and the moments of tension and desperation that fills the air temporarily is worth to be cherished for a lifetime.\r\n\r\nCasinos are another attraction in Colombo which are very popular. This is a really exciting and addictive thing that you can get into the experience of casinos in Colombo is altogether different.\r\n\r\n\r\n\r\nNote:\r\n\r\nBooking period valid till 20th March 2022.\r\nDate of travel until 30th April 2022.\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo\r\n\r\nDuration: 3 Days &amp; 2 Nights\r\n\r\nStart Point: Colombo\r\n\r\nEnd Point: Colombo\r\n\r\n\r\nInclusions:\r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ LKR 30,000 worth of Casino Chips\r\n\r\n➔ Stay in hygienic and sanitized 5 star hotels\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 3\r\n\r\n➔ Return Airport Transfers\r\n\r\n➔ Mandatory COVID-19 travel insurance\r\n\r\n➔ RTPCR for departure purposes\r\n\r\n➔ Free to and fro transfers of Casinos\r\n\r\n➔ All taxes\r\n\r\n\r\n\r\nHow to Reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city. The major airlines operating these routes are Bangalore, Chennai, Delhi'),
(10, '.\\package_images\\10\\Screenshot 2022-05-22 203116.png', 'Sri Lanka Leisure Tour with Cinnamon Special', 'General', '434.73', 'Endowed with a diverse collection of landscapes, climates, natural features and infamous beaches Sri Lanka has been enticing visitors for many years. Offering a myriad range of fun, adventure, and romance, it is among the best destinations in the world for those looking for an exotic vacation with a luxrious stay at Cinnamon property. Enjoy every minute of it. Be it the ocean, the forest or even the city, you’ll be able to soak it all in, what makes the soul-satisfying everything make it a paradise that bedazzles everyone!\r\n\r\nBegin your amazing tour by visiting the Pinnawala Elephant Orphanage and watching the naughty elephants, yet adorable creatures bathe in the river near the orphanage where they engage in mischief, pull each other by their tails, and try to escape the hands of their caretakers in amusing ways. Awaken the adventurous soul in you by indulging in a myriad of water sports for fun and thrill in Bentota from jet skiing, banana boat ride, parasailing, paramotoring, speed boat ride, yachting, canoeing, kayaking, to boating in the mangrove forests. Conclude this tour by visiting the Red Mosque, a stunning candy-like red and white striped mosque named ‘Jami Ul-Alfar’ is the most spectacular building in your entire trip in Colombo.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo - Kandy - Bentota - Colombo\r\n\r\nDuration: 5 Days 4 Nights\r\n\r\nStart Point: Bandaranaike International Airport (Colombo)\r\n\r\nEnd Point: Bandaranaike International Airport (Colombo)\r\n\r\n\r\nInclusions:\r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 5 and Buffet Dinner from Day 1 to Day 4\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide.\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax.\r\n\r\n\r\n\r\nHow to Reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city. The major airlines operating these routes are SriLankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.'),
(11, '.\\package_images\\11\\Screenshot 2022-05-22 203219.png', '6 Days Thrilling Offbeat Tour to Sri Lanka with Da', 'General', '335.40', 'With its lush tea plantations &amp; waterfalls, tropical beaches, jaw-dropping wildlife, historical monuments &amp; temples Sri Lanka, an island escape awaiting for you. From ultra modern amenities, towering skyscrapers, shopping complexes, to a rocking nightlife, Colombo is the temple of all spoilt luxury.\r\n\r\nEnroute Dambulla, stop by and pay a visit to the home of abandoned Sri Lankan Elephants - The Pinnawala Elephant Orphanage and watch the naughty elephants, yet adorable creatures bathe in the river near the orphanage where they engage in mischief, pull each other by their tails, and try to escape the hands of their caretakers in amusing ways. Prepare yourself for a little challenge and conquer the 1200+ steps marked with good paths and stairs to reach the top of the Sigiriya Lion Rock. Capture glimpses of the incredible 360 degrees view over the whole area from above where every corner has its own unique view. Moving ahead, peek into some of the tea estates and welcome the fresh aroma of the tea and herbs in the rolling green hills offering breathtaking views in Nuwara Eliya. Conclude this tour by visiting the Red Mosque, a stunning candy-like red and white striped mosque named ‘Jami Ul-Alfar’ is the most spectacular building in your entire trip in Colombo.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo - Dambulla - Nuwara Eliya - Colombo\r\n\r\nDuration: 6 Days 5 Nights\r\n\r\nStart Point: Bandaranaike International Airport (Colombo)\r\n\r\nEnd Point: Bandaranaike International Airport (Colombo)\r\n\r\n\r\nInclusions:\r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 6 and Buffet Dinner from Day 1 to Day 5\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide.\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax.\r\n\r\n\r\n\r\nHow to Reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city. The major airlines operating these routes are SriLankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.'),
(12, '.\\package_images\\12\\Screenshot 2022-05-22 203354.png', '5 Days Delightful Tour to Sri Lanka', 'General', '335.40', 'Endowed with a diverse collection of landscapes, climates, natural features and infamous beaches Sri Lanka has been enticing visitors for many years. Offering a myriad range of fun, adventure, and romance, it is among the best destinations in the world for those looking for an exotic vacation. Right from beaches, hills, jungles, ancient monuments, culture, history to nightlife, wildlife, and excellent food a blend of all these is what makes the soul-satisfying everything make it a paradise that bedazzles everyone!\r\n\r\nBegin your amazing tour by visiting the Pinnawala Elephant Orphanage and watching the naughty elephants, yet adorable creatures bathe in the river near the orphanage where they engage in mischief, pull each other by their tails, and try to escape the hands of their caretakers in amusing ways. Awaken the adventurous soul in you by indulging in a myriad of water sports for fun and thrill in Bentota from jet skiing, banana boat ride, parasailing, paramotoring, speed boat ride, yachting, canoeing, kayaking, to boating in the mangrove forests. Conclude this tour by visiting the Red Mosque, a stunning candy-like red and white striped mosque named ‘Jami Ul-Alfar’ is the most spectacular building in your entire trip in Colombo.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo - Sigiriya - Kandy - Bentota - Colombo\r\n\r\nDuration: 5 Days 4 Nights\r\n\r\nStart Point: Bandaranaike International Airport (Colombo)\r\n\r\nEnd Point: Bandaranaike International Airport (Colombo)\r\n\r\n\r\nInclusions:\r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 5 and Buffet Dinner from Day 1 to Day 4\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide.\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax.\r\n\r\n\r\n\r\nHow to Reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city. The major airlines operating these routes are SriLankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.'),
(13, '.\\package_images\\13\\Screenshot 2022-05-22 203503.png', 'Jewels of Sri Lanka with Bentota', 'General', '270.90', 'Sri Lanka, a teardrop island-studded in the Indian Ocean characterized by its colonial architecture, and Buddhist temples, stunning beaches, is a perfect destination for spending some time with your loved ones. Take a moment and see the whopping range of activities and experiences it offers to everyone who set foot in its picture-perfect landscapes.\r\n\r\nBegin your amazing tour by visiting the Pinnawala Elephant Orphanage and watching the naughty elephants, yet adorable creatures bathe in the river near the orphanage where they engage in mischief, pull each other by their tails, and try to escape the hands of their caretakers in amusing ways. Awaken the adventurous soul in you by indulging in a myriad of water sports for fun and thrill in Bentota from jet skiing, banana boat ride, parasailing, paramotoring, speed boat ride, yachting, canoeing, kayaking, to boating in the mangrove forests. Conclude this tour by visiting the Red Mosque, a stunning candy-like red and white striped mosque named ‘Jami Ul-Alfar’ is the most spectacular building in your entire trip in Colombo.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Kandy - Bentota - Colombo\r\n\r\nDuration: 4 Days 3 Nights\r\n\r\nStart Point: Bandaranaike International Airport (Colombo)\r\n\r\nEnd Point: Bandaranaike International Airport (Colombo)\r\n\r\n\r\nInclusions:\r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 4 and Buffet Dinner from Day 1 to Day 3\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide.\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax.\r\n\r\n\r\n\r\nHow to Reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city. The major airlines operating these routes are SriLankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.'),
(14, '.\\package_images\\14\\Screenshot 2022-05-22 203607.png', 'Srilanka Tour Package From Chennai', 'General', '322.50', 'The small island of Sri Lanka sitting in the Indian Ocean is home to many big surprises. Be it the gushing waterfalls or pristine beaches, Sri Lanka has been offering a tropical paradise to many visitors from all over the world. This Srilanka tour package from Chennai will offset you a myriad of beautiful places to visit and a plethora of activities to try hands-on.\r\n\r\nBegin your tour with the Nuwara Eliya find yourself in the misty mountains rising into the clouds, hillsides covered with paddy fields and tea estates and the occasional peacock or deer crossing your path. As you move towards to lazy charm clinging on to the hills and floating by the gushing waves makes is a perfect destination to venture, explore, and contemplate Kandy is defined by calmness and serenity. Plunge into Colombo’s enticing street food scene, eat like a local, and immerse yourself in the sights, sounds and aromas of the whirling Pettah Bazaar and boasts a rich colonial heritage, featuring a melting pot of races, religions and cultures.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo - Nuwara Eliya - Kandy - Colombo\r\n\r\nDuration: 5 Days &amp; 4 Nights\r\n\r\nStart Point: Colombo\r\n\r\nEnd Point: Colombo\r\n\r\n\r\nInclusions: \r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 5 and Buffet Dinner from Day 1 to Day 4\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide.\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax.\r\n\r\n\r\n\r\nHow to reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city.The major airlines operating these routes are SriLankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.'),
(15, '.\\package_images\\15\\Screenshot 2022-05-22 203705.png', '5 Days Charming Sri Lanka Tour with Nuwara Eliya', 'General', '328.95', 'Sri Lanka’s abundance of flora and fauna means it has beautiful nature trails, with stunning vistas and waterfalls, ancient ruins, beautiful beaches, and amazing wildlife, the island nation has many other stories to uncover.\r\n\r\nBegin your tour with the Nuwara Eliya find yourself in the misty mountains rising into the clouds, hillsides covered with paddy fields and tea estates and the occasional peacock or deer crossing your path. As you move towards to lazy charm clinging on to the hills and floating by the gushing waves makes is a perfect destination to venture, explore, and contemplate Kandy is defined by calmness and serenity. Plunge into Colombo’s enticing street food scene, eat like a local, and immerse yourself in the sights, sounds and aromas of the whirling Pettah Bazaar and boasts a rich colonial heritage, featuring a melting pot of races, religions and cultures.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo - Nuwara Eliya - Kandy - Colombo\r\n\r\nDuration: 5 Days &amp; 4 Nights\r\n\r\nStart Point: Colombo\r\n\r\nEnd Point: Colombo\r\n\r\n\r\nInclusions: \r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 5 and Buffet Dinner from Day 1 to Day 4\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide.\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax.\r\n\r\n\r\n\r\nHow to reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city.The major airlines operating these routes are SriLankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.'),
(16, '.\\package_images\\16\\Screenshot 2022-05-22 203810.png', '6 Days Splendors of Sri Lanka with Mirissa', 'General', '354.75', 'Sri Lanks is a small island in a pearl shape, you could be riding the waves in the dawn and admiring the green carpeted mountains by dusk. Travel to marathon of elephant and feed them with your own hands at Pinnawala, get lost in the beauty of this laid-back charm which has a peaceful and balmy surroundings administrative and visit to the scared ornate golden-roofed temple houses the most important Buddhist relic in Sri Lanka - a tooth of Buddha brought to the island in the 4th century. Bentota has all the makings of a topnotch seaside getaway as it has stretches of golden sands lined by palm trees swaying gently in the breeze, crystal clear waters, a relatively untainted, tranquil and plenty of water sports. Lay in your beach chairs while enjoying your food and cocktails with the view of palm trees lined the outskirts, the color of water is at the incredible combination of blue and green, the unspoiled sandy beaches of Mirissa, and visit to some of the oldest cities with the skyscrapers buildings around you where you can taste the delicious street food, choose exotic spices, meander through market stalls, and visit the Red Mosque and spend time in the Fort area, Colombo’s most significant commercial hub.\r\n\r\n\r\n\r\nQuick Info:\r\n\r\nRoute: Colombo - Kandy - Nuwara Eliya - Bentota - Colombo\r\n\r\nDuration: 6 Days &amp; 5 Nights\r\n\r\nStart Point: Bandaranaike International Airport (Colombo)\r\n\r\nEnd Point: Bandaranaike International Airport (Colombo)\r\n\r\n\r\nInclusions:\r\n\r\n➔ Meeting and Assistance at the Airport\r\n\r\n➔ Stay in hygienic and sanitized hotels (As per the variant selected)\r\n\r\n➔ Buffet Breakfast from Day 2 to Day 6 and Buffet Dinner from Day 1 to Day 5\r\n\r\n➔ Sightseeing as mentioned above. (Without entrance fees)\r\n\r\n➔ Transport in an A/C Car/Flat Roof &amp; High Roof van with the service of an English-speaking chauffeur/ National Guide.\r\n\r\n➔ One complimentary water bottle (500ml) each person each day\r\n\r\n➔ Value-added tax.\r\n\r\n\r\n\r\n How to Reach:\r\n\r\nColombo city is connected with many international destinations by air. Colombo’s international airport, Bandaranaike International Airport, serves the city. The major airlines operating these routes are SriLankan Airlines, Himalaya Airlines, Qatar Airways, Malaysia Airlines, Emirates, Air India Express etc.');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_Id` int(10) NOT NULL,
  `user_Id` int(10) NOT NULL,
  `user_Name` varchar(50) NOT NULL,
  `review_Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_Id`, `user_Id`, `user_Name`, `review_Comment`) VALUES
(4, 4, 'Sheridan Finlay', 'Good value package but quite excruciating to book. Had to keep going backwards and forwards selecting different dates and rooms to see which were included in the &quot;bula bubble&quot; package as this wasn&#039;t immediately discernible. Flights sometimes included and other times not.\r\nAlso really disappointed that nobody notified us of the change in requirements for PCR from 72 to 48 hours on 01/01/22. Luckily I double checked this myself prior to paying $150 for the PCR. Could have been a disaster had we showed up to the airport with an out of date PCR and not been able to go.'),
(5, 4, 'Darren Paterson', 'Deals always tend to be hard to beat on travel online. We&#039;ve booked with them for years for this reason. On this occasion, it took a long while (many days) on a few occasions for travel online to return phone calls, we had to chase them up, and some minor details were incorrect on itineraries received (we had to make an adjustments which lengthened the process). Overall I would book again and recommend on the basis the deals are hard to pass up.'),
(6, 4, 'Erica B', 'Excellent! Very good service from beginning to end. Even with a COVID-related delay in the middle of it, Lisa stayed in contact with us and got us a reschedule with the utmost of ease. Thank you!'),
(7, 4, 'Trena Kennedy', 'TravelOnline was a great company to deal with.\r\nEverything was very simple, professional and we were given all the information we required.\r\nThank you for the great service'),
(8, 4, 'Lyndal Nankervis', 'I had to change my booking due to covid and I know your team was under the pump but I was always reassured and knew my booking was being looked after. We will definitely book other holidays through travel online.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_Id` int(11) NOT NULL,
  `user_Full_Name` varchar(60) NOT NULL,
  `user_Mobile_Number` int(10) NOT NULL,
  `user_Email` varchar(50) NOT NULL,
  `user_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_Id`, `user_Full_Name`, `user_Mobile_Number`, `user_Email`, `user_Password`) VALUES
(4, 'Shan Devinda', 765689339, 'shandevinda', '$2y$10$vLXg6b8r1KN25oD1QPaDyO55q9kpeiR8jJ9A4R9lsJLp0fRVGl83i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_Id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_Id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
