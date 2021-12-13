-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 10:59 AM
-- Server version: 8.0.20
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `authors` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_published` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pages_count` smallint NOT NULL,
  `programming_language_id` int NOT NULL,
  `description` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(15,2) UNSIGNED NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `authors`, `date_published`, `pages_count`, `programming_language_id`, `description`, `price`, `link`, `cover`) VALUES
(1, 'The C programming', ' Brian Kernighan and  Dennis Ritchie ', '22/03/1988', 288, 1, 'Includes detailed coverage of the C language plus the official C language reference manual for at-a-glance help with syntax notation, declarations, ANSI changes, scope rules, and the list goes on and on.', '83.75', 'https://www.amazon.ca/Programming-Language-2nd-Brian-Kernighan/dp/0131103628', 'theC.jpg'),
(2, 'Learn C Programming', 'Jeff Szuhay', '26/06/2020', 646, 1, 'By the end of the book, you\'ll have developed basic programming skills in C, that you can apply to other programming languages and will develop a solid foundation for you to advance as a programmer.', '45.99', 'https://www.amazon.ca/Learn-Programming-beginners-programming-disciplined/dp/1789349915', 'learnC.jpg'),
(3, 'C++ Programming By Example', 'Sergey Skudaev', '17/01/2014', 145, 3, 'This book contains useful code examples that explain key computer programming concepts: functions, variable scope, pointers, arrays, data structure, classes, and linked list.', '11.49', 'https://www.amazon.ca/Programming-Example-computer-programming-beginners-ebook/dp/B00EUSMTUW/ref=sr_1_5_sspa?', 'c++.jpg'),
(4, 'C#: A Detailed Approach to Practical Coding', 'Nathan Clark', '25/11/2017', 163, 3, 'This book serves as a teaching guide and also a reference manual to accompany you through this wonderful world of programming. Author Nathan Clark shares his nearly 20 years’ experience in this clear, concise and easy to follow guide.', '21.45', 'https://www.amazon.ca/Detailed-Approach-Practical-Step-Step-ebook/dp/B077RMM7T3', 'csharp.jpg'),
(5, 'C# 9 and .NET 5', 'Mark J. Price', '10/11/2020', 822, 2, 'In C# 9 and .NET 5 – Modern Cross-Platform Development, Fifth Edition, expert teacher Mark J. Price gives you everything you need to start programming C# applications.', '58.99', 'https://www.amazon.ca/NET-Cross-Platform-Development-intelligent-Framework/dp/180056810X', '.net.jpg'),
(6, '100+ Solutions in Java', 'DHRUTI SHAH ', '12/11/2020', 614, 4, '100+ Solutions in Java is an easy-to-understand step-by-step guide that helps you develop applications using Java 8 and Java 9. It is for everyone, from beginners to professionals, who wish to begin development in Java. The content is designed as per increasing complexity and is explained in detail with appropriate examples.', '45.99', 'https://www.amazon.ca/100-Solutions-Java-Hands-Introduction/dp/9389845602', '100java.jpg'),
(7, 'Data Structures and Algorithms in Java', 'Michael T. Goodrich', '28/01/2014', 736, 4, 'The design and analysis of efficient data structures has long been recognized as a key component of the Computer Science curriculum', '173.55', 'https://www.amazon.ca/Data-Structures-Algorithms-Michael-Goodrich/dp/1118771338', 'dataalgo.jpg'),
(8, 'JAVA for beginners', 'Robert W. James', '6/07/2020', 76, 4, 'This book is geared towards people who have absolutely no idea about programming. You will learn programming concepts and nuances starting from the very fundamentals while you pick up on the details of Java Programming.', '16.44', 'https://www.amazon.ca/JAVA-beginners-First-programming-language-ebook/dp/B08CGGVPPM', 'javabeginner.jpg'),
(9, 'JavaScript and JQuery', '\r\nJon Duckett ', '30/06/2014', 640, 5, 'By the end of the book, not only will you be able to use the thousands of scripts, JavaScript APIs, and jQuery plugins that are freely available on the web, and be able to customize them - you will also be able to create your own scripts from scratch.', '47.51', 'https://www.amazon.ca/JavaScript-JQuery-Interactive-Front-End-Development/dp/1118531647', 'jandj.jpg'),
(10, 'Learn JavaScript Quickly', '	\r\nCode Quickly ', '10/11/2020', 174, 5, 'As with pursuing any new concept, learning how to program can be intimidating, especially for beginners. Even though JavaScript is incredibly beginner-friendly, it’s still complex enough for you to need a guide to lead you through the process of mastering it.', '22.95', 'https://www.amazon.ca/Learn-JavaScript-Quickly-Beginners-Programming/dp/1951791479', 'jquick.jpg'),
(11, 'PHP Programming for Beginners', '\r\nSergey Skudaev', '21/05/2018', 193, 6, 'Want to build an interactive website using PHP with MySQL or Oracle database? This book is for you, even if you are new to computer programming. In this book, you will learn key programming concepts that are essential for any programming language and find practical solutions that can be used for your own website.', '11.49', 'https://www.amazon.ca/PHP-Programming-Beginners-Concepts-databases/dp/1548980072', 'phpBeginner.jpg'),
(12, 'PHP Cookbook', 'David Sklar and Adam Trachtenberg', '05/07/2014', 818, 6, 'Each recipe includes code solutions that you can freely use, along with a discussion of how and why they work. Whether you’re an experienced PHP programmer or coming to PHP from another language, this book is an ideal on-the-job resource.', '62.36', 'https://www.amazon.ca/PHP-Cookbook-Solutions-Examples-Programmers/dp/144936375X', 'phpcookbook.jpg'),
(13, 'PHP for the Web', '\r\nLarry Ullman', '29/06/2016', 496, 6, 'Both beginning users, who want a thorough introduction to the technology, and more intermediate users, who are looking for a convenient reference, will find what they need here--in straightforward language and through readily accessible examples.', '55.99', 'https://www.amazon.ca/PHP-Web-Visual-QuickStart-Guide/dp/0134291255', 'phpweb_.jpg'),
(14, 'Python Programming', ' Andrew Park', '04/07/2021', 394, 7, '\"Python Programming\" consists of six incredibly important books to help you master Python through practical examples, exercises, Data Analysis, Machine Learning and Data Science.\r\n\r\n', '27.38', 'https://www.amazon.ca/Python-Programming-Beginners-Applications-Manuscripts/dp/B098H21CQC', 'pythonP.jpg'),
(15, 'Learning Python', '	\r\nMark Lutz ', '06/06/2013', 1648, 7, 'Complete with quizzes, exercises, and helpful illustrations, this easy-to-follow, self-paced tutorial gets you started with both Python 2.7 and 3.3— the latest releases in the 3.X and 2.X lines—plus all other releases in common use today. You’ll also learn some advanced language features that recently have become more common in Python code.', '58.89', 'https://www.amazon.ca/Learning-Python-Powerful-Object-Oriented-Programming/dp/1449355730', 'learnpython.jpg'),
(16, 'SQL QuickStart Guide', 'Walter Shields', '18/11/2018', 251, 10, 'This book shows you EXACTLY what you need to know to successfully use the SQL programming language to enhance your career!', '30.99', 'https://www.amazon.ca/SQL-QuickStart-Guide-Simplified-Manipulating/dp/1945051752', 'sqlqucik.jpg'),
(17, 'SQL All-in-One For Dummies Paperback', '	\r\nAllen G. Taylor', '23/04/2019', 38, 10, 'SQL All -In-One For Dummies, 3rd Edition, is a one-stop shop for everything you need to know about SQL and SQL-based relational databases. Everyone from database administrators to application programmers and the people who manage them will find clear, concise explanations of the SQL language and its many powerful applications.', '37.56', 'https://www.amazon.ca/All-One-Dummies-Allen-Taylor/dp/1119569613', 'sqlBook.jpg'),
(18, 'Visual Basic in easy steps', 'Mike McGrath ', '04/07/2019', 192, 8, 'Visual Basic in easy steps, 6th edition gives you code examples, screenshots, and step-by-step instructions that illustrate each aspect of Visual Basic so you\'ll be creating your own interactive applications in no time!.', '23.71', 'https://www.amazon.ca/Visual-Basic-easy-steps-Updated/dp/1840788720', 'vb.jpg'),
(19, 'Excel 2016 VBA ', 'Bill Jelen and Tracy Syrstad', '04/11/2015', 608, 9, 'Use this guide to automate virtually any routine task: save yourself hours, days, maybe even weeks! Make Excel do things you thought were impossible, discover macro techniques you won’t find anywhere else, and create automated reports that are amazingly powerful.', '49.99', 'https://www.amazon.ca/Excel-Macros-Content-Update-Program/dp/0789755858', 'vba.jpg'),
(20, 'Excel VBA Programming For Dummies ', 'Michael Alexander and John Walkenbach ', '06/11/2018', 416, 9, 'To take Excel to the next level, you need to understand and implement the power of Visual Basic for Applications (VBA). Excel VBA Programming For Dummies introduces you to a wide array of new Excel options, beginning with the most important tools and operations for the Visual Basic Editor.', '35.41', 'https://www.amazon.ca/Excel-Programming-Dummies-Michael-Alexander/dp/1119518172', 'vbaprog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

CREATE TABLE `book_order` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_order_details`
--

CREATE TABLE `book_order_details` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `book_id` int NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `unit_price` decimal(15,2) UNSIGNED NOT NULL,
  `discount` decimal(5,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` int NOT NULL,
  `cart_id` int NOT NULL,
  `book_id` int NOT NULL,
  `unit_price` decimal(15,2) NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `discount` decimal(5,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programming_language`
--

CREATE TABLE `programming_language` (
  `id` int NOT NULL,
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `programming_language`
--

INSERT INTO `programming_language` (`id`, `name`) VALUES
(1, 'C'),
(3, 'C#'),
(2, 'C++'),
(4, 'Java'),
(5, 'JavaScript'),
(6, 'PHP'),
(7, 'Python'),
(10, 'SQL'),
(8, 'VB'),
(9, 'VBA');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'admin', '$2y$10$ZN0Uh31mMkkILeBCVYXdBeVnWczGxF6zkvcq5Kl/AKNtIuIMxAWNi'),
(2, 'jashan', '$2y$10$M.RTpA46JtDRBBfAAe2kueG3zNRn4dqtjAcC09Fu3u/8.84V9FVmC'),
(5, 'aman', '$2y$10$lce/LCFHqMRWra0Zs1nl9eubFHsTVweXO5M6Qqcise5mo82bRhmpu'),
(6, 'amar', '$2y$10$dG9ldO1YvaOCiEUnWv/ap.OlAOEtseR2TTlZnsBJ4Ic5.0tgJsRGW'),
(7, 'joe', '$2y$10$ozGWF/yJ1DlVQwoKl5pPoOpBPgU3eamQTG4NyD4wa8Z08N.EpOjuG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_book_name` (`title`),
  ADD KEY `idx_book_date` (`date_published`),
  ADD KEY `idx_book_programming_language_id` (`programming_language_id`);

--
-- Indexes for table `book_order`
--
ALTER TABLE `book_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_order_details`
--
ALTER TABLE `book_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_order_details_order_id` (`order_id`),
  ADD KEY `idx_order_details_book_id` (`book_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_cart_user_id` (`user_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_cart_details_cart_id` (`cart_id`),
  ADD KEY `idx_cart_details_book_id` (`book_id`);

--
-- Indexes for table `programming_language`
--
ALTER TABLE `programming_language`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_programming_language_name` (`name`) USING BTREE;

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_role_name` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `book_order`
--
ALTER TABLE `book_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_order_details`
--
ALTER TABLE `book_order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programming_language`
--
ALTER TABLE `programming_language`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
