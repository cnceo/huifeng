TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `trig_recharge_update` AFTER UPDATE ON `ssc_member_recharge` FOR EACH ROW BEGIN\n	declare _gift float(10, 2);\n	-- 改变状态的update就是到账事件\n	IF OLD.state = 0 and NEW.state !=0 THEN\n		select `gift` into _gift from ssc_member_recharge where `id`=OLD.id;\n		-- 处理充值赠送\n		if _gift is not null and _gift>0 THEN\n			call setCoin(_gift, 0, OLD.uid, 88, 0, \'充值赠送T\', OLD.id, \'\', \'\');\n		end if;\n		\n		-- 处理充值佣金\n		call addRecharge(OLD.uid, OLD.username);\n	END IF;\nEND'
sql_modes=1342177280
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='gbk_chinese_ci'
