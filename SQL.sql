CREATE TABLE Member(
IDCard VARCHAR(13) NOT NULL,
Fname VARCHAR(50),
Lname VARCHAR(50),
Address VARCHAR(200),
Tel VARCHAR(10),
Email VARCHAR(100),
Password VARCHAR(300),
Province VARCHAR(30),
Didtrict VARCHAR(30),
Postcode VARCHAR(5),
Qmember int(1),
Ansmember VARCHAR(150),
memberType int(1),
CONSTRAINT Member_pri PRIMARY KEY (IDCard)
);

CREATE TABLE donateType(
donateTypeSendID int(1) NOT NULL,
donateTypeName VARCHAR(50),
CONSTRAINT donatetype_Pri PRIMARY KEY (donateTypeSendID)
);


CREATE TABLE donate(
donateID int NOT NULL AUTO_INCREMENT,
IDCard VARCHAR(13),
donateName VARCHAR(50),
donateLength VARCHAR(20),
donatewidth VARCHAR(20),
donateweight VARCHAR(20),
donateEA VARCHAR(20),
donatecondition VARCHAR(10),
donatecolor VARCHAR(100),
donateType VARCHAR(50),
donateDetail VARCHAR(500),
donatePathIMG VARCHAR(500),
donateTypeSendID int(1),
donatesendDetail VARCHAR(500),
donateTimestamp DATETIME,
CONSTRAINT donate_Pri PRIMARY KEY (donateID),
CONSTRAINT donate_foreign FOREIGN KEY (IDCard) REFERENCES Member(IDCard),
CONSTRAINT donate_foreign2 FOREIGN KEY (donateTypeSendID) REFERENCES donateType(donateTypeSendID)
);





INSERT INTO `donateType` (`donateTypeSendID` , `donateTypeName`) VALUES (1,'ส่งไปรษณีย์');
INSERT INTO `donateType` (`donateTypeSendID` , `donateTypeName`) VALUES (2,'รับที่องค์กร');
INSERT INTO `donateType` (`donateTypeSendID` , `donateTypeName`) VALUES (3,'นัดรับที่');



INSERT INTO `member` (`IDCard`, `Fname`, `Lname`, `Address`, `Tel`, `Email`, `Password`, `Province`, `Didtrict`, `Postcode` , `Qmember` , `Ansmember` , `memberType`) VALUES
('1330800246735', 'วนราช', 'คำหล้า', '118 ถนนศรีสุนทร ต.ในเมือง', '08-2750-56', 'wanarat_k@kkumail.com', '7d1fdab96428260175221521a4859b429e093ce1d537abd0008c4a94454855db', 'เมือง', 'ขอนแก่น', '40000', 1 , 'หมาและแมว' , 1);
