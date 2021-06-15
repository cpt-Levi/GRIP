SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE 'transactions'(
    'num' int(3) not null AUTO_INCREMENT,
    'sender' varchar(30) not null,
    'recepient' varchar(30) not null,
    'transAmt' int(11) not null,
    'timestamp' datetime not null default current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE 'customer_data'(
    'Customer_Name' varchar(30) primary key not null,
    'Customer_Email' varchar(30) not null,
    'Customer_Phone' varchar(20) unique not null,
    'Balance' int(11) not null,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `customer_data` (`Customer_Name`, `Customer_Email`, `Customer_Phone`, `Balance`) VALUES ('Gina Raut', 'ginarr21@omnimail.com', '8450002331', '848590')
INSERT INTO `customer_data` (`Customer_Name`, `Customer_Email`, `Customer_Phone`, `Balance`) VALUES ('Harry Sangha', 'harryXsangha@mymail.com', '2566331545', '8956003')
INSERT INTO `customer_data` (`Customer_Name`, `Customer_Email`, `Customer_Phone`, `Balance`) VALUES ('Ira Naga', 'naga.ira67@teramail.com', '8880031312', '787851')
INSERT INTO `customer_data` (`Customer_Name`, `Customer_Email`, `Customer_Phone`, `Balance`) VALUES ('Jack Silva', 'jacksil@mymail.com', '8996520145', '1235000')
INSERT INTO `customer_data` (`Customer_Name`, `Customer_Email`, `Customer_Phone`, `Balance`) VALUES ('John Stamos', 'stamos.john@teramail.com', '8652331545', '1500000')
INSERT INTO `customer_data` (`Customer_Name`, `Customer_Email`, `Customer_Phone`, `Balance`) VALUES ('Kelly Vadia', 'vadiakk@omnimail.com', '8600327474', '2563000')
INSERT INTO `customer_data` (`Customer_Name`, `Customer_Email`, `Customer_Phone`, `Balance`) VALUES ('Lila Silvers', 'lilaSil@keroram.com', '7742568623', '1233056')
INSERT INTO `customer_data` (`Customer_Name`, `Customer_Email`, `Customer_Phone`, `Balance`) VALUES ('Paula Will', 'will_paula@keroram.com', '9903036361', '856233')
INSERT INTO `customer_data` (`Customer_Name`, `Customer_Email`, `Customer_Phone`, `Balance`) VALUES ('Raman Jela', 'jelaramram@omnimail.com', '6565124037', '7815200')
INSERT INTO `customer_data` (`Customer_Name`, `Customer_Email`, `Customer_Phone`, `Balance`) VALUES ('Rohit Smith', 'smith_rohit67@keroram.com', '8500212136', '850026')

COMMIT;