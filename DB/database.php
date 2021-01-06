
<?php


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "admin";/* put your database name here */

/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 


/* sql query to create table */
$sql = "CREATE TABLE `customers` (
  `id` int(11) NOT NULL  PRIMARY KEY AUTO_INCREMENT,
  `first-name` varchar(25) NOT NULL,
  `last-name` varchar(25) NOT NULL,
  `user-name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql="
INSERT INTO `customers` (`id`, `first-name`, `last-name`, `user-name`, `password`) VALUES
(23, 'omer', 'ben david', 'omer123', '123456'),
(24, 'omer', 'levi', 'levi343', '12345665'),
(25, 'liron', 'argi', 'lironi23', '12345'),
(26, 'popo', 'koko', 'popo232', '123'),
(27, 'chelsea', 'koki', 'koki54', '123456'),
(28, 'liora', 'machloof', 'liora_m', '1234567'),
(29, 'yarin', 'zino', 'zino80', '123456'),
(30, 'may', 'haGbi', 'may123', '123456'),
(31, 'liran', 'liori', 'liran45', '123456')";
if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql="CREATE TABLE `shops` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `max-capacity` int(11) NOT NULL DEFAULT '20',
  `category` varchar(50) NOT NULL,
  `user-name` varchar(25) NOT NULL,
  `real-time` int(11) NOT NULL DEFAULT '0',
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `opening` time NOT NULL DEFAULT '08:00:00',
  `closing` time NOT NULL DEFAULT '21:00:00',
   FULLTEXT KEY (`name`,`address`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql="INSERT INTO `shops` (`id`, `name`, `address`, `city`, `max-capacity`, `category`, `user-name`, `real-time`, `lat`, `lng`, `opening`, `closing`) VALUES
(20, 'זארה גרנד', 'David Tuviyahu Ave\r\n34\r\nBeer sheba\r\nSouth District\r\nIsrael', 'Beer sheba', 25, 'clothing', 'gunr121', 25, 31.244848, 34.790573, '08:00:00', '21:00:00'),
(21, 'nike', 'Yitzhack I. Rager Boulevard\r\n13\r\n\r\nSouth District\r\nIsrael', 'Beer sheba', 25, 'clothing', 'gunr121', 18, 31.245264, 34.795837, '08:00:00', '21:00:00'),
(22, 'super lon', 'Moshe Vilenski Street\r\n35\r\nBeer sheba\r\nSouth District\r\nIsrael', 'Beer sheba', 25, 'clothing', 'gunr121', 9, 31.245071, 34.759720, '08:00:00', '21:00:00'),
(23, 'כלי זמר', 'Dizengoff Street\r\n90\r\nTel Aviv-Yafo\r\nTel Aviv District\r\nIsrael', 'Tel Aviv-Yafo', 25, 'Music', 'nadav32', 0, 32.077202, 34.774525, '08:00:00', '21:00:00'),
(24, 'mac', 'Rothschild Boulevard\r\n45\r\nTel Aviv-Yafo\r\nTel Aviv District\r\nIsrael', 'Tel Aviv-Yafo', 20, 'other', 'nadav32', 0, 32.064281, 34.774555, '08:00:00', '21:00:00'),
(25, 'apple store', 'Ben Yehuda Street\r\n45\r\nTel Aviv-Yafo\r\nTel Aviv District\r\nIsrael', 'Tel Aviv-Yafo', 25, 'Electronics', 'nadav32', 0, 32.078156, 34.768532, '08:00:00', '21:00:00'),
(26, 'ivory', 'Kakal Street\r\n34\r\nBeer sheba\r\nSouth District\r\nIsrael', 'Beer sheba', 25, 'Computers', 'koko43', 0, 31.237984, 34.791897, '08:00:00', '21:00:00'),
(27, 'zara', 'Dizengoff Street\r\n39\r\nTel Aviv-Yafo\r\nTel Aviv District\r\nIsrael', 'Tel Aviv-Yafo', 35, 'clothing', 'sofi_li', 12, 32.074562, 34.776497, '08:00:00', '21:00:00'),
(28, 'fox home', 'HaYarkon Street\r\n45\r\nTel Aviv-Yafo\r\nTel Aviv District\r\nIsrael', 'Tel Aviv-Yafo', 35, 'Home & Garden', 'gunr121', 0, 32.073139, 34.765873, '11:00:00', '21:00:00');";

if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
	
 }
$sql="
CREATE TABLE `workers` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `first-name` varchar(25) NOT NULL,
  `last-name` varchar(25) NOT NULL,
  `buisness-name` varchar(25) NOT NULL,
  `user-name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `aproove` varchar(25) NOT NULL DEFAULT 'no') ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql="
INSERT INTO `workers` (`id`, `first-name`, `last-name`, `buisness-name`, `user-name`, `password`, `aproove`) VALUES
(1, 'reuven', 'hadad', '27', 'reuven332', '1234567', 'yes'),
(2, 'shaked', 'turgeman ', '21', 'shaked123', '1234567', 'yes'),
(3, 'roni', 'levi', '22', 'roni32', '123456', 'yes'),
(4, 'koko', 'akof ', '22', 'koko34', '123456', 'no'),
(5, 'kiko', 'lala ', '23', 'kiko32', '123456', 'no'),
(6, 'bijo', 'zaza ', '23', 'bijo23', '123123', 'no')";
if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql="
CREATE TABLE `managers` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `first-name` varchar(25) NOT NULL,
  `last-name` varchar(25) NOT NULL,
  `user-name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql="
INSERT INTO `managers` (`id`, `first-name`, `last-name`, `user-name`, `password`) VALUES
(1, 'עומר', 'בן דוד', 'gunr121', '440912'),
(2, 'nadav', 'biton', 'nadav32', '123456'),
(3, 'ronen', 'cohen', 'ronen231', '123456'),
(4, 'koko', 'akof', 'koko43', '123456'),
(5, 'sofia', 'sheyn', 'sofi_li', '123456'),
(6, 'ehud', 'banano', 'banano90', '123123')";

if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql="CREATE TABLE `ratings` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user-name` varchar(50) NOT NULL,
    `rating` int(11) NOT NULL DEFAULT '0'
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
 
 
 if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql="INSERT INTO `ratings` (`id`, `user-name`, `rating`) VALUES
(1, 'gunr121', 5),
(5, 'koko34', 5),
(6, 'omer123', 4),
(7, 'koki54', 5),
(8, 'zino80', 5),
(9, 'liran45', 5),
(10, 'roni32', 5);";

if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>