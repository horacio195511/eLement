/**Citizen RDB design, in eLement, each citizen have a career name, account, password. to access his/her own private data,  I provide an award mechanism, which would offer specific price to citizen according to their career stages.
 *Create and maintain by Daniel Lin since 2017
 *Right reserved by eLement.Ltd. 
 *Contact us if you want source.
**/
CREATE DATABASE 'eLement'
 DEFAULT CHARACTER SET utf8
CREATE TABLE 'Citizen'{
 'ID' TINYINT(4) USIGNED ZEROFILLED NOT NULL AUTO_INCREMENT PRIMARY KEY,
 'status' (10) CHARACTER SET utf8 collate utf8_unicode_ci NPT NULL,
 'account' VARCHAR(20) CHARACTER SET utf8 collate utf8_unicode_ci NPT NULL,
 'password' VARCHAR(10) CHARACTER SET utf8 collate utf8_unicode_ci NPT NULL,
 'email' VARCHAR(100) CHARACTER SET utf8 collate utf8_unicode_ci NPT NULL,
}
CREATE TABLE 'Order'{
  'Oreder ID' TINYINT(4) USIGNED ZEROFILLED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  'Owner ID' TINYINT(4) USIGNED ZEROFILLED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  'printer' 
}
CREATE TABLE 'Printer'{
  'Printer ID' TINYINT(4) USIGNED ZEROFILLED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  'Owner ID' TINYINT(4) USIGNED ZEROFILLED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  'Type' VARCHAR(10) CHARACTER SET utf8_unicode_ci NPT NULL,
  'Size' VARCHAR(10) CHARACTER SET utf8_unicode_ci NPT NULL,
  'AvailableMaterial' VARCHAR(10) CHARACTER SET utf8_unicode_ci NPT NULL
}