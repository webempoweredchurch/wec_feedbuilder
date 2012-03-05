
DROP TABLE IF EXISTS tx_wecfeedbuilder_domain_model_feedtype;

CREATE TABLE tx_wecfeedbuilder_domain_model_feedtype (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	
	
	name tinytext,
	fullname tinytext,
	classname tinytext,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(30) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3_origuid int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);


INSERT INTO tx_wecfeedbuilder_domain_model_feedtype (uid,name,fullname,classname) VALUES(1, "video","Videos", "Tx_WecFeedbuilder_Domain_Model_VideoSermonTab"); 
INSERT INTO tx_wecfeedbuilder_domain_model_feedtype (uid,name,fullname,classname) VALUES(2, "audio","Audio", "Tx_WecFeedbuilder_Domain_Model_AudioSermonTab"); 
INSERT INTO tx_wecfeedbuilder_domain_model_feedtype (uid,name,fullname,classname) VALUES(3, "news","News", "Tx_WecFeedbuilder_Domain_Model_NewsTab"); 
INSERT INTO tx_wecfeedbuilder_domain_model_feedtype (uid,name,fullname,classname) VALUES(4, "blog","Blog", "Tx_WecFeedbuilder_Domain_Model_BlogTab"); 
INSERT INTO tx_wecfeedbuilder_domain_model_feedtype (uid,name,fullname,classname) VALUES(5, "prayer","Prayer Connector", "Tx_WecFeedbuilder_Domain_Model_PrayerTab"); 
INSERT INTO tx_wecfeedbuilder_domain_model_feedtype (uid,name,fullname,classname) VALUES(6, "stream","Live Streaming", "Tx_WecFeedbuilder_Domain_Model_StreamTab"); 
INSERT INTO tx_wecfeedbuilder_domain_model_feedtype (uid,name,fullname,classname) VALUES(7, "events","Events", "Tx_WecFeedbuilder_Domain_Model_EventsTab"); 
INSERT INTO tx_wecfeedbuilder_domain_model_feedtype (uid,name,fullname,classname) VALUES(8, "home","Home tab", "Tx_WecFeedbuilder_Domain_Model_HomeTab"); 
INSERT INTO tx_wecfeedbuilder_domain_model_feedtype (uid,name,fullname,classname) VALUES(9, "about","About tab", "Tx_WecFeedbuilder_Domain_Model_AboutTab"); 
INSERT INTO tx_wecfeedbuilder_domain_model_feedtype (uid,name,fullname,classname) VALUES(10, "website","Website", "Tx_WecFeedbuilder_Domain_Model_WebsiteTab"); 
