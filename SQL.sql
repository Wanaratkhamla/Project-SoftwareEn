CREATE TABLE Member(
IDCard VARCHAR(13) NOT NULL,
Fname VARCHAR(50),
Lname VARCHAR(50),
Address VARCHAR(200),
Tel VARCHAR(10),
Email VARCHAR(100),
Username VARCHAR(16),
Password VARCHAR(300),
Province VARCHAR(30),
Didtrict VARCHAR(30),
Postcode VARCHAR(5),
CONSTRAINT Member_pri PRIMARY KEY (IDCard)
);
INSERT INTO `member` (`IDCard`, `Fname`, `Lname`, `Address`, `Tel`, `Email`, `Username`, `Password`, `Province`, `Didtrict`, `Postcode`) VALUES ('1330800246735', 'วนราช', 'คำหล้า', '118', '0827505687', 'wanarat_k@kkumail.com', 'admin', 'admin12345', 'ขอนแก่น', 'เมือง', '40000');
