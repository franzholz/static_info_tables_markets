#
# Table structure for table "static_markets"
#
CREATE TABLE static_markets (
  uid int(11) auto_increment,
  pid int(11) default '0',
  country int(11) default '0',
  mic varchar(4) default '',
  institution_description varchar(90) default '',
  acronym varchar(30) default '',
  city varchar(30) default '',
  url varchar(90) default '',
  PRIMARY KEY (uid),
  KEY parent (pid)
);
