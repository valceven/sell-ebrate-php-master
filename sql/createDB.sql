  CREATE TABLE tblUserProfile (
    userId BIGINT AUTO_INCREMENT PRIMARY KEY,
    firstname TEXT,
    lastname TEXT,
    gender ENUM('male', 'female'),
    birthdate DATETIME,
    CONSTRAINT CHK_Gender CHECK ('gender' IN ('male', 'female'))
  );

CREATE TABLE tblUserAccount (
  acctId BIGINT,
  emailAdd TEXT,
  username TEXT,
  password TEXT,
  usertype ENUM('customer', 'seller'),
  FOREIGN KEY (acctId) REFERENCES tblUserProfile(userId),
  CONSTRAINT CHK_TYPE CHECK (usertype IN ('customer', 'seller'))
);

