<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_area`;");
E_C("CREATE TABLE `dede_area` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `reid` int(10) unsigned NOT NULL DEFAULT '0',
  `disorder` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3118 DEFAULT CHARSET=gbk");
E_D("replace into `dede_area` values('1','������','0','0');");
E_D("replace into `dede_area` values('102','������','1','2');");
E_D("replace into `dede_area` values('126','������','1','0');");
E_D("replace into `dede_area` values('104','������','1','0');");
E_D("replace into `dede_area` values('105','������','1','0');");
E_D("replace into `dede_area` values('106','������','1','0');");
E_D("replace into `dede_area` values('107','��̨��','1','0');");
E_D("replace into `dede_area` values('108','ʯ��ɽ��','1','0');");
E_D("replace into `dede_area` values('109','��ͷ����','1','0');");
E_D("replace into `dede_area` values('110','��ɽ��','1','0');");
E_D("replace into `dede_area` values('111','ͨ����','1','0');");
E_D("replace into `dede_area` values('112','˳����','1','0');");
E_D("replace into `dede_area` values('113','��ƽ��','1','0');");
E_D("replace into `dede_area` values('114','������','1','0');");
E_D("replace into `dede_area` values('115','ƽ����','1','0');");
E_D("replace into `dede_area` values('116','������','1','0');");
E_D("replace into `dede_area` values('117','������','1','0');");
E_D("replace into `dede_area` values('118','������','1','0');");
E_D("replace into `dede_area` values('2','�Ϻ���','0','0');");
E_D("replace into `dede_area` values('201','������','2','0');");
E_D("replace into `dede_area` values('202','¬����','2','0');");
E_D("replace into `dede_area` values('203','�����','2','0');");
E_D("replace into `dede_area` values('204','������','2','0');");
E_D("replace into `dede_area` values('205','������','2','0');");
E_D("replace into `dede_area` values('206','������','2','0');");
E_D("replace into `dede_area` values('207','բ����','2','0');");
E_D("replace into `dede_area` values('208','�����','2','0');");
E_D("replace into `dede_area` values('209','������','2','0');");
E_D("replace into `dede_area` values('210','��ɽ��','2','0');");
E_D("replace into `dede_area` values('211','������','2','0');");
E_D("replace into `dede_area` values('212','�ζ���','2','0');");
E_D("replace into `dede_area` values('213','�ֶ�����','2','0');");
E_D("replace into `dede_area` values('214','�ɽ���','2','0');");
E_D("replace into `dede_area` values('215','��ɽ��','2','0');");
E_D("replace into `dede_area` values('216','������','2','0');");
E_D("replace into `dede_area` values('217','�ϻ���','2','0');");
E_D("replace into `dede_area` values('218','������','2','0');");
E_D("replace into `dede_area` values('219','������','2','0');");
E_D("replace into `dede_area` values('3','�����','0','0');");
E_D("replace into `dede_area` values('301','��ƽ��','3','0');");
E_D("replace into `dede_area` values('302','�Ӷ���','3','0');");
E_D("replace into `dede_area` values('303','������','3','0');");
E_D("replace into `dede_area` values('304','�Ͽ���','3','0');");
E_D("replace into `dede_area` values('305','�ӱ���','3','0');");
E_D("replace into `dede_area` values('306','������','3','0');");
E_D("replace into `dede_area` values('307','������','3','0');");
E_D("replace into `dede_area` values('308','������','3','0');");
E_D("replace into `dede_area` values('309','�����','3','0');");
E_D("replace into `dede_area` values('310','������','3','0');");
E_D("replace into `dede_area` values('311','������','3','0');");
E_D("replace into `dede_area` values('312','������','3','0');");
E_D("replace into `dede_area` values('313','������','3','0');");
E_D("replace into `dede_area` values('314','������','3','0');");
E_D("replace into `dede_area` values('315','������','3','0');");
E_D("replace into `dede_area` values('316','������','3','0');");
E_D("replace into `dede_area` values('317','������','3','0');");
E_D("replace into `dede_area` values('318','����','3','0');");
E_D("replace into `dede_area` values('4','������','0','0');");
E_D("replace into `dede_area` values('401','������','4','0');");
E_D("replace into `dede_area` values('402','��ɿ���','4','0');");
E_D("replace into `dede_area` values('403','������','4','0');");
E_D("replace into `dede_area` values('404','ɳƺ����','4','0');");
E_D("replace into `dede_area` values('405','��������','4','0');");
E_D("replace into `dede_area` values('406','�ϰ���','4','0');");
E_D("replace into `dede_area` values('407','������','4','0');");
E_D("replace into `dede_area` values('408','��ʢ��','4','0');");
E_D("replace into `dede_area` values('409','˫����','4','0');");
E_D("replace into `dede_area` values('410','�山��','4','0');");
E_D("replace into `dede_area` values('411','������','4','0');");
E_D("replace into `dede_area` values('412','������','4','0');");
E_D("replace into `dede_area` values('413','������','4','0');");
E_D("replace into `dede_area` values('414','ǭ����','4','0');");
E_D("replace into `dede_area` values('415','������','4','0');");
E_D("replace into `dede_area` values('416','�ϴ���','4','0');");
E_D("replace into `dede_area` values('417','������','4','0');");
E_D("replace into `dede_area` values('418','�ϴ���','4','0');");
E_D("replace into `dede_area` values('419','������','4','0');");
E_D("replace into `dede_area` values('420','�뽭��','4','0');");
E_D("replace into `dede_area` values('421','������','4','0');");
E_D("replace into `dede_area` values('422','�ٲ���','4','0');");
E_D("replace into `dede_area` values('423','�ɽ��','4','0');");
E_D("replace into `dede_area` values('424','������','4','0');");
E_D("replace into `dede_area` values('425','ͭ����','4','0');");
E_D("replace into `dede_area` values('426','��ƽ��','4','0');");
E_D("replace into `dede_area` values('427','�ǿ���','4','0');");
E_D("replace into `dede_area` values('428','�潭��','4','0');");
E_D("replace into `dede_area` values('429','��¡��','4','0');");
E_D("replace into `dede_area` values('430','�ᶼ��','4','0');");
E_D("replace into `dede_area` values('431','�����','4','0');");
E_D("replace into `dede_area` values('432','����','4','0');");
E_D("replace into `dede_area` values('433','������','4','0');");
E_D("replace into `dede_area` values('434','����','4','0');");
E_D("replace into `dede_area` values('435','��Ϫ��','4','0');");
E_D("replace into `dede_area` values('436','��ɽ��','4','0');");
E_D("replace into `dede_area` values('437','ʯ����','4','0');");
E_D("replace into `dede_area` values('438','��ɽ��','4','0');");
E_D("replace into `dede_area` values('439','������','4','0');");
E_D("replace into `dede_area` values('440','��ˮ��','4','0');");
E_D("replace into `dede_area` values('5','�㶫ʡ','0','0');");
E_D("replace into `dede_area` values('501','������','5','0');");
E_D("replace into `dede_area` values('502','������','5','0');");
E_D("replace into `dede_area` values('503','�麣��','5','0');");
E_D("replace into `dede_area` values('504','��ͷ��','5','0');");
E_D("replace into `dede_area` values('505','�ع���','5','0');");
E_D("replace into `dede_area` values('506','��Դ��','5','0');");
E_D("replace into `dede_area` values('507','÷����','5','0');");
E_D("replace into `dede_area` values('508','������','5','0');");
E_D("replace into `dede_area` values('509','��β��','5','0');");
E_D("replace into `dede_area` values('510','��ݸ��','5','0');");
E_D("replace into `dede_area` values('511','��ɽ��','5','0');");
E_D("replace into `dede_area` values('512','������','5','0');");
E_D("replace into `dede_area` values('513','��ɽ��','5','0');");
E_D("replace into `dede_area` values('514','������','5','0');");
E_D("replace into `dede_area` values('515','տ����','5','0');");
E_D("replace into `dede_area` values('516','ï����','5','0');");
E_D("replace into `dede_area` values('517','������','5','0');");
E_D("replace into `dede_area` values('518','��Զ��','5','0');");
E_D("replace into `dede_area` values('519','������','5','0');");
E_D("replace into `dede_area` values('520','������','5','0');");
E_D("replace into `dede_area` values('521','�Ƹ���','5','0');");
E_D("replace into `dede_area` values('6','����ʡ','0','0');");
E_D("replace into `dede_area` values('601','������','6','0');");
E_D("replace into `dede_area` values('602','������','6','0');");
E_D("replace into `dede_area` values('603','������','6','0');");
E_D("replace into `dede_area` values('604','������','6','0');");
E_D("replace into `dede_area` values('605','Ȫ����','6','0');");
E_D("replace into `dede_area` values('606','������','6','0');");
E_D("replace into `dede_area` values('607','��ƽ��','6','0');");
E_D("replace into `dede_area` values('608','������','6','0');");
E_D("replace into `dede_area` values('609','������','6','0');");
E_D("replace into `dede_area` values('7','�㽭ʡ','0','0');");
E_D("replace into `dede_area` values('701','������','7','0');");
E_D("replace into `dede_area` values('702','������','7','0');");
E_D("replace into `dede_area` values('703','������','7','0');");
E_D("replace into `dede_area` values('704','������','7','0');");
E_D("replace into `dede_area` values('705','������','7','0');");
E_D("replace into `dede_area` values('706','������','7','0');");
E_D("replace into `dede_area` values('707','����','7','0');");
E_D("replace into `dede_area` values('708','������','7','0');");
E_D("replace into `dede_area` values('709','��ɽ��','7','0');");
E_D("replace into `dede_area` values('710','̨����','7','0');");
E_D("replace into `dede_area` values('711','��ˮ��','7','0');");
E_D("replace into `dede_area` values('8','����ʡ','0','0');");
E_D("replace into `dede_area` values('801','�Ͼ���','8','0');");
E_D("replace into `dede_area` values('802','������','8','0');");
E_D("replace into `dede_area` values('803','���Ƹ���','8','0');");
E_D("replace into `dede_area` values('804','������','8','0');");
E_D("replace into `dede_area` values('805','��Ǩ��','8','0');");
E_D("replace into `dede_area` values('806','�γ���','8','0');");
E_D("replace into `dede_area` values('807','������','8','0');");
E_D("replace into `dede_area` values('808','̩����','8','0');");
E_D("replace into `dede_area` values('809','��ͨ��','8','0');");
E_D("replace into `dede_area` values('810','����','8','0');");
E_D("replace into `dede_area` values('811','������','8','0');");
E_D("replace into `dede_area` values('812','������','8','0');");
E_D("replace into `dede_area` values('813','������','8','0');");
E_D("replace into `dede_area` values('9','ɽ��ʡ','0','0');");
E_D("replace into `dede_area` values('901','������','9','0');");
E_D("replace into `dede_area` values('902','�ൺ��','9','0');");
E_D("replace into `dede_area` values('903','�Ͳ���','9','0');");
E_D("replace into `dede_area` values('904','��ׯ��','9','0');");
E_D("replace into `dede_area` values('905','��Ӫ��','9','0');");
E_D("replace into `dede_area` values('906','Ϋ����','9','0');");
E_D("replace into `dede_area` values('907','��̨��','9','0');");
E_D("replace into `dede_area` values('908','������','9','0');");
E_D("replace into `dede_area` values('909','������','9','0');");
E_D("replace into `dede_area` values('910','̩����','9','0');");
E_D("replace into `dede_area` values('911','������','9','0');");
E_D("replace into `dede_area` values('912','������','9','0');");
E_D("replace into `dede_area` values('913','������','9','0');");
E_D("replace into `dede_area` values('914','������','9','0');");
E_D("replace into `dede_area` values('915','�ĳ���','9','0');");
E_D("replace into `dede_area` values('916','������','9','0');");
E_D("replace into `dede_area` values('917','������','9','0');");
E_D("replace into `dede_area` values('10','����ʡ','0','0');");
E_D("replace into `dede_area` values('1001','������','10','0');");
E_D("replace into `dede_area` values('1002','������','10','0');");
E_D("replace into `dede_area` values('1003','��ɽ��','10','0');");
E_D("replace into `dede_area` values('1004','��˳��','10','0');");
E_D("replace into `dede_area` values('1005','��Ϫ��','10','0');");
E_D("replace into `dede_area` values('1006','������','10','0');");
E_D("replace into `dede_area` values('1007','������','10','0');");
E_D("replace into `dede_area` values('1008','��«����','10','0');");
E_D("replace into `dede_area` values('1009','Ӫ����','10','0');");
E_D("replace into `dede_area` values('1010','�̽���','10','0');");
E_D("replace into `dede_area` values('1011','������','10','0');");
E_D("replace into `dede_area` values('1012','������','10','0');");
E_D("replace into `dede_area` values('1013','������','10','0');");
E_D("replace into `dede_area` values('1014','������','10','0');");
E_D("replace into `dede_area` values('11','����ʡ','0','0');");
E_D("replace into `dede_area` values('1101','�ϲ���','11','0');");
E_D("replace into `dede_area` values('1102','��������','11','0');");
E_D("replace into `dede_area` values('1103','Ƽ����','11','0');");
E_D("replace into `dede_area` values('1104','������','11','0');");
E_D("replace into `dede_area` values('1105','�Ž���','11','0');");
E_D("replace into `dede_area` values('1106','ӥ̶��','11','0');");
E_D("replace into `dede_area` values('1107','������','11','0');");
E_D("replace into `dede_area` values('1108','������','11','0');");
E_D("replace into `dede_area` values('1109','�˴���','11','0');");
E_D("replace into `dede_area` values('1110','������','11','0');");
E_D("replace into `dede_area` values('1111','������','11','0');");
E_D("replace into `dede_area` values('12','�Ĵ�ʡ','0','0');");
E_D("replace into `dede_area` values('1201','�ɶ���','12','0');");
E_D("replace into `dede_area` values('1202','�Թ���','12','0');");
E_D("replace into `dede_area` values('1203','��֦����','12','0');");
E_D("replace into `dede_area` values('1204','������','12','0');");
E_D("replace into `dede_area` values('1205','������','12','0');");
E_D("replace into `dede_area` values('1206','������','12','0');");
E_D("replace into `dede_area` values('1207','��Ԫ��','12','0');");
E_D("replace into `dede_area` values('1208','������','12','0');");
E_D("replace into `dede_area` values('1209','�ڽ���','12','0');");
E_D("replace into `dede_area` values('1210','��ɽ��','12','0');");
E_D("replace into `dede_area` values('1211','�ϳ���','12','0');");
E_D("replace into `dede_area` values('1212','�˱���','12','0');");
E_D("replace into `dede_area` values('1213','�㰲��','12','0');");
E_D("replace into `dede_area` values('1214','������','12','0');");
E_D("replace into `dede_area` values('1215','������','12','0');");
E_D("replace into `dede_area` values('1216','�Ű���','12','0');");
E_D("replace into `dede_area` values('1217','üɽ��','12','0');");
E_D("replace into `dede_area` values('1218','������','12','0');");
E_D("replace into `dede_area` values('1219','������','12','0');");
E_D("replace into `dede_area` values('1220','������','12','0');");
E_D("replace into `dede_area` values('1221','��ɽ��','12','0');");
E_D("replace into `dede_area` values('13','����ʡ','0','0');");
E_D("replace into `dede_area` values('3114','������','13','0');");
E_D("replace into `dede_area` values('1302','ͭ����','13','0');");
E_D("replace into `dede_area` values('1303','������','13','0');");
E_D("replace into `dede_area` values('1304','������','13','0');");
E_D("replace into `dede_area` values('1305','μ����','13','0');");
E_D("replace into `dede_area` values('1306','�Ӱ���','13','0');");
E_D("replace into `dede_area` values('1307','������','13','0');");
E_D("replace into `dede_area` values('1308','������','13','0');");
E_D("replace into `dede_area` values('1309','������','13','0');");
E_D("replace into `dede_area` values('1310','�������','13','0');");
E_D("replace into `dede_area` values('14','����ʡ','0','0');");
E_D("replace into `dede_area` values('1401','�人��','14','0');");
E_D("replace into `dede_area` values('1402','��ʯ��','14','0');");
E_D("replace into `dede_area` values('1403','�差��','14','0');");
E_D("replace into `dede_area` values('1404','ʮ����','14','0');");
E_D("replace into `dede_area` values('1405','������','14','0');");
E_D("replace into `dede_area` values('1406','�˲���','14','0');");
E_D("replace into `dede_area` values('1407','������','14','0');");
E_D("replace into `dede_area` values('1408','������','14','0');");
E_D("replace into `dede_area` values('1409','Т����','14','0');");
E_D("replace into `dede_area` values('1410','�Ƹ���','14','0');");
E_D("replace into `dede_area` values('1411','������','14','0');");
E_D("replace into `dede_area` values('1412','������','14','0');");
E_D("replace into `dede_area` values('1413','������','14','0');");
E_D("replace into `dede_area` values('1414','������','14','0');");
E_D("replace into `dede_area` values('1415','Ǳ����','14','0');");
E_D("replace into `dede_area` values('1416','��ũ��','14','0');");
E_D("replace into `dede_area` values('1417','��ʩ��','14','0');");
E_D("replace into `dede_area` values('15','����ʡ','0','0');");
E_D("replace into `dede_area` values('1501','֣����','15','0');");
E_D("replace into `dede_area` values('1502','������','15','0');");
E_D("replace into `dede_area` values('1503','������','15','0');");
E_D("replace into `dede_area` values('1504','ƽ��ɽ��','15','0');");
E_D("replace into `dede_area` values('1505','������','15','0');");
E_D("replace into `dede_area` values('1506','�ױ���','15','0');");
E_D("replace into `dede_area` values('1507','������','15','0');");
E_D("replace into `dede_area` values('1508','������','15','0');");
E_D("replace into `dede_area` values('1509','�����','15','0');");
E_D("replace into `dede_area` values('1510','������','15','0');");
E_D("replace into `dede_area` values('1511','�����','15','0');");
E_D("replace into `dede_area` values('1512','����Ͽ��','15','0');");
E_D("replace into `dede_area` values('1513','������','15','0');");
E_D("replace into `dede_area` values('1514','������','15','0');");
E_D("replace into `dede_area` values('1515','������','15','0');");
E_D("replace into `dede_area` values('1516','�ܿ���','15','0');");
E_D("replace into `dede_area` values('1517','פ������','15','0');");
E_D("replace into `dede_area` values('1518','��Դ��','15','0');");
E_D("replace into `dede_area` values('16','�ӱ�ʡ','0','0');");
E_D("replace into `dede_area` values('1601','ʯ��ׯ��','16','0');");
E_D("replace into `dede_area` values('1602','��ɽ��','16','0');");
E_D("replace into `dede_area` values('1603','�ػʵ���','16','0');");
E_D("replace into `dede_area` values('1604','������','16','0');");
E_D("replace into `dede_area` values('1605','��̨��','16','0');");
E_D("replace into `dede_area` values('1606','������','16','0');");
E_D("replace into `dede_area` values('1607','�żҿ���','16','0');");
E_D("replace into `dede_area` values('1608','�е���','16','0');");
E_D("replace into `dede_area` values('1609','������','16','0');");
E_D("replace into `dede_area` values('1610','�ȷ���','16','0');");
E_D("replace into `dede_area` values('1611','��ˮ��','16','0');");
E_D("replace into `dede_area` values('17','ɽ��ʡ','0','0');");
E_D("replace into `dede_area` values('1701','̫ԭ��','17','0');");
E_D("replace into `dede_area` values('1702','��ͬ��','17','0');");
E_D("replace into `dede_area` values('1703','��Ȫ��','17','0');");
E_D("replace into `dede_area` values('1704','������','17','0');");
E_D("replace into `dede_area` values('1705','������','17','0');");
E_D("replace into `dede_area` values('1706','˷����','17','0');");
E_D("replace into `dede_area` values('1707','������','17','0');");
E_D("replace into `dede_area` values('1708','������','17','0');");
E_D("replace into `dede_area` values('1709','�ٷ���','17','0');");
E_D("replace into `dede_area` values('1710','�˳���','17','0');");
E_D("replace into `dede_area` values('1711','��������','17','0');");
E_D("replace into `dede_area` values('18','���ɹ�','0','0');");
E_D("replace into `dede_area` values('1801','���ͺ���','18','0');");
E_D("replace into `dede_area` values('1802','��ͷ��','18','0');");
E_D("replace into `dede_area` values('1803','�ں���','18','0');");
E_D("replace into `dede_area` values('1804','�����','18','0');");
E_D("replace into `dede_area` values('1805','ͨ����','18','0');");
E_D("replace into `dede_area` values('1806','������˹','18','0');");
E_D("replace into `dede_area` values('1807','�����첼','18','0');");
E_D("replace into `dede_area` values('1808','���ֹ���','18','0');");
E_D("replace into `dede_area` values('1809','���ױ���','18','0');");
E_D("replace into `dede_area` values('1810','�����׶�','18','0');");
E_D("replace into `dede_area` values('1811','��������','18','0');");
E_D("replace into `dede_area` values('1812','�˰���','18','0');");
E_D("replace into `dede_area` values('19','����ʡ','0','0');");
E_D("replace into `dede_area` values('1901','������','19','0');");
E_D("replace into `dede_area` values('1902','������','19','0');");
E_D("replace into `dede_area` values('1903','��ƽ��','19','0');");
E_D("replace into `dede_area` values('1904','��Դ��','19','0');");
E_D("replace into `dede_area` values('1905','ͨ����','19','0');");
E_D("replace into `dede_area` values('1906','��ɽ��','19','0');");
E_D("replace into `dede_area` values('1907','��ԭ��','19','0');");
E_D("replace into `dede_area` values('1908','�׳���','19','0');");
E_D("replace into `dede_area` values('1909','�ӱ���','19','0');");
E_D("replace into `dede_area` values('20','������','0','0');");
E_D("replace into `dede_area` values('2001','��������','20','0');");
E_D("replace into `dede_area` values('2002','�������','20','0');");
E_D("replace into `dede_area` values('2003','�׸���','20','0');");
E_D("replace into `dede_area` values('2004','˫Ѽɽ��','20','0');");
E_D("replace into `dede_area` values('2005','������','20','0');");
E_D("replace into `dede_area` values('2006','������','20','0');");
E_D("replace into `dede_area` values('2007','������','20','0');");
E_D("replace into `dede_area` values('2008','ĵ������','20','0');");
E_D("replace into `dede_area` values('2009','��ľ˹��','20','0');");
E_D("replace into `dede_area` values('2010','��̨����','20','0');");
E_D("replace into `dede_area` values('2011','�ں���','20','0');");
E_D("replace into `dede_area` values('2012','�绯��','20','0');");
E_D("replace into `dede_area` values('2013','���˰���','20','0');");
E_D("replace into `dede_area` values('21','����ʡ','0','0');");
E_D("replace into `dede_area` values('2101','�Ϸ���','21','0');");
E_D("replace into `dede_area` values('2102','�ߺ���','21','0');");
E_D("replace into `dede_area` values('2103','������','21','0');");
E_D("replace into `dede_area` values('2104','������','21','0');");
E_D("replace into `dede_area` values('2105','����ɽ��','21','0');");
E_D("replace into `dede_area` values('2106','������','21','0');");
E_D("replace into `dede_area` values('2107','ͭ����','21','0');");
E_D("replace into `dede_area` values('2108','������','21','0');");
E_D("replace into `dede_area` values('2109','��ɽ��','21','0');");
E_D("replace into `dede_area` values('2110','������','21','0');");
E_D("replace into `dede_area` values('2111','������','21','0');");
E_D("replace into `dede_area` values('2112','������','21','0');");
E_D("replace into `dede_area` values('2113','������','21','0');");
E_D("replace into `dede_area` values('2114','������','21','0');");
E_D("replace into `dede_area` values('2115','������','21','0');");
E_D("replace into `dede_area` values('2116','������','21','0');");
E_D("replace into `dede_area` values('2117','������','21','0');");
E_D("replace into `dede_area` values('22','����ʡ','0','0');");
E_D("replace into `dede_area` values('2201','��ɳ��','22','0');");
E_D("replace into `dede_area` values('2202','������','22','0');");
E_D("replace into `dede_area` values('2203','��̶��','22','0');");
E_D("replace into `dede_area` values('2204','������','22','0');");
E_D("replace into `dede_area` values('2205','������','22','0');");
E_D("replace into `dede_area` values('2206','������','22','0');");
E_D("replace into `dede_area` values('2207','������','22','0');");
E_D("replace into `dede_area` values('2208','�żҽ���','22','0');");
E_D("replace into `dede_area` values('2209','������','22','0');");
E_D("replace into `dede_area` values('2210','������','22','0');");
E_D("replace into `dede_area` values('2211','������','22','0');");
E_D("replace into `dede_area` values('2212','������','22','0');");
E_D("replace into `dede_area` values('2213','¦����','22','0');");
E_D("replace into `dede_area` values('2214','������','22','0');");
E_D("replace into `dede_area` values('23','������','0','0');");
E_D("replace into `dede_area` values('2301','������','23','0');");
E_D("replace into `dede_area` values('2302','������','23','0');");
E_D("replace into `dede_area` values('2303','������','23','0');");
E_D("replace into `dede_area` values('2304','������','23','0');");
E_D("replace into `dede_area` values('2305','������','23','0');");
E_D("replace into `dede_area` values('2306','���Ǹ���','23','0');");
E_D("replace into `dede_area` values('2307','������','23','0');");
E_D("replace into `dede_area` values('2308','�����','23','0');");
E_D("replace into `dede_area` values('2309','������','23','0');");
E_D("replace into `dede_area` values('2310','��������','23','0');");
E_D("replace into `dede_area` values('2311','���ݵ���','23','0');");
E_D("replace into `dede_area` values('2312','���ݵ���','23','0');");
E_D("replace into `dede_area` values('2313','��ɫ����','23','0');");
E_D("replace into `dede_area` values('2314','�ӳص���','23','0');");
E_D("replace into `dede_area` values('24','����ʡ','0','0');");
E_D("replace into `dede_area` values('2401','������','24','0');");
E_D("replace into `dede_area` values('2402','������','24','0');");
E_D("replace into `dede_area` values('2403','��ָɽ��','24','0');");
E_D("replace into `dede_area` values('2404','������','24','0');");
E_D("replace into `dede_area` values('2405','������','24','0');");
E_D("replace into `dede_area` values('2406','��ɽ��','24','0');");
E_D("replace into `dede_area` values('2407','�Ĳ���','24','0');");
E_D("replace into `dede_area` values('2408','������','24','0');");
E_D("replace into `dede_area` values('2409','������','24','0');");
E_D("replace into `dede_area` values('2410','������','24','0');");
E_D("replace into `dede_area` values('2411','������','24','0');");
E_D("replace into `dede_area` values('2412','�Ͳ���','24','0');");
E_D("replace into `dede_area` values('2413','�ٸ���','24','0');");
E_D("replace into `dede_area` values('2414','��ɳ��','24','0');");
E_D("replace into `dede_area` values('2415','������','24','0');");
E_D("replace into `dede_area` values('2416','�ֶ���','24','0');");
E_D("replace into `dede_area` values('2417','��ˮ��','24','0');");
E_D("replace into `dede_area` values('2418','��ͤ��','24','0');");
E_D("replace into `dede_area` values('2419','������','24','0');");
E_D("replace into `dede_area` values('25','����ʡ','0','0');");
E_D("replace into `dede_area` values('2501','������','25','0');");
E_D("replace into `dede_area` values('2502','������','25','0');");
E_D("replace into `dede_area` values('2503','��Ϫ��','25','0');");
E_D("replace into `dede_area` values('2504','��ɽ��','25','0');");
E_D("replace into `dede_area` values('2505','��ͨ��','25','0');");
E_D("replace into `dede_area` values('2506','˼é����','25','0');");
E_D("replace into `dede_area` values('2507','�ٲ׵���','25','0');");
E_D("replace into `dede_area` values('2508','��������','25','0');");
E_D("replace into `dede_area` values('2509','��ɽ��','25','0');");
E_D("replace into `dede_area` values('2510','�����','25','0');");
E_D("replace into `dede_area` values('2511','��˫����','25','0');");
E_D("replace into `dede_area` values('2512','������','25','0');");
E_D("replace into `dede_area` values('2513','������','25','0');");
E_D("replace into `dede_area` values('2514','�º���','25','0');");
E_D("replace into `dede_area` values('2515','ŭ����','25','0');");
E_D("replace into `dede_area` values('2516','������','25','0');");
E_D("replace into `dede_area` values('26','����ʡ','0','0');");
E_D("replace into `dede_area` values('2601','������','26','0');");
E_D("replace into `dede_area` values('2602','����ˮ��','26','0');");
E_D("replace into `dede_area` values('2603','������','26','0');");
E_D("replace into `dede_area` values('2604','��˳��','26','0');");
E_D("replace into `dede_area` values('2605','ͭ�ʵ���','26','0');");
E_D("replace into `dede_area` values('2606','�Ͻڵ���','26','0');");
E_D("replace into `dede_area` values('2607','ǭ������','26','0');");
E_D("replace into `dede_area` values('2608','ǭ������','26','0');");
E_D("replace into `dede_area` values('2609','ǭ����','26','0');");
E_D("replace into `dede_area` values('27','������','0','0');");
E_D("replace into `dede_area` values('2701','������','27','0');");
E_D("replace into `dede_area` values('2702','��������','27','0');");
E_D("replace into `dede_area` values('2703','��������','27','0');");
E_D("replace into `dede_area` values('2704','ɽ�ϵ���','27','0');");
E_D("replace into `dede_area` values('2705','�տ���','27','0');");
E_D("replace into `dede_area` values('2706','�������','27','0');");
E_D("replace into `dede_area` values('2707','��֥����','27','0');");
E_D("replace into `dede_area` values('28','����ʡ','0','0');");
E_D("replace into `dede_area` values('2801','������','28','0');");
E_D("replace into `dede_area` values('2802','�����','28','0');");
E_D("replace into `dede_area` values('2803','������','28','0');");
E_D("replace into `dede_area` values('2804','��ˮ��','28','0');");
E_D("replace into `dede_area` values('2805','��������','28','0');");
E_D("replace into `dede_area` values('2806','������','28','0');");
E_D("replace into `dede_area` values('2807','��������','28','0');");
E_D("replace into `dede_area` values('2808','ƽ������','28','0');");
E_D("replace into `dede_area` values('2809','��������','28','0');");
E_D("replace into `dede_area` values('2810','¤�ϵ���','28','0');");
E_D("replace into `dede_area` values('2811','��Ҵ����','28','0');");
E_D("replace into `dede_area` values('2812','��Ȫ����','28','0');");
E_D("replace into `dede_area` values('2813','������','28','0');");
E_D("replace into `dede_area` values('2814','������','28','0');");
E_D("replace into `dede_area` values('29','������','0','0');");
E_D("replace into `dede_area` values('2901','������','29','0');");
E_D("replace into `dede_area` values('2902','ʯ��ɽ��','29','0');");
E_D("replace into `dede_area` values('2903','������','29','0');");
E_D("replace into `dede_area` values('2904','��ԭ��','29','0');");
E_D("replace into `dede_area` values('30','�ຣʡ','0','0');");
E_D("replace into `dede_area` values('3001','������','30','0');");
E_D("replace into `dede_area` values('3002','��������','30','0');");
E_D("replace into `dede_area` values('3003','������','30','0');");
E_D("replace into `dede_area` values('3004','������','30','0');");
E_D("replace into `dede_area` values('3005','������','30','0');");
E_D("replace into `dede_area` values('3006','������','30','0');");
E_D("replace into `dede_area` values('3007','������','30','0');");
E_D("replace into `dede_area` values('3008','������','30','0');");
E_D("replace into `dede_area` values('31','�½���','0','0');");
E_D("replace into `dede_area` values('3101','��³ľ��','31','0');");
E_D("replace into `dede_area` values('3102','��������','31','0');");
E_D("replace into `dede_area` values('3103','ʯ������','31','0');");
E_D("replace into `dede_area` values('3104','��³��','31','0');");
E_D("replace into `dede_area` values('3105','���ܵ���','31','0');");
E_D("replace into `dede_area` values('3106','�������','31','0');");
E_D("replace into `dede_area` values('3107','������','31','0');");
E_D("replace into `dede_area` values('3108','��ʲ����','31','0');");
E_D("replace into `dede_area` values('3109','��������','31','0');");
E_D("replace into `dede_area` values('3110','��������','31','0');");
E_D("replace into `dede_area` values('3111','������','31','0');");
E_D("replace into `dede_area` values('3112','��������','31','0');");
E_D("replace into `dede_area` values('3113','������','31','0');");
E_D("replace into `dede_area` values('3117','������','1','0');");
E_D("replace into `dede_area` values('32','�����','0','0');");
E_D("replace into `dede_area` values('33','������','0','0');");
E_D("replace into `dede_area` values('35','̨��ʡ','0','0');");

require("../../inc/footer.php");
?>