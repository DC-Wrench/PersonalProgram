

DROP TABLE IF EXISTS `cms_article`;

CREATE TABLE `cms_article` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `cid` int unsigned NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `title` varchar(80) NOT NULL DEFAULT '' COMMENT '标题',
  `author` varchar(15) NOT NULL DEFAULT '' COMMENT '作者',
  `image` varchar(255) NOT NULL DEFAULT '' COMMENT '封面图',
  `show` tinyint NOT NULL DEFAULT '0' COMMENT '是否发布',
  `views` int unsigned NOT NULL DEFAULT '0' COMMENT '阅读量',
  `content` text NOT NULL COMMENT '内容',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `cms_article` WRITE;

INSERT INTO `cms_article` VALUES (1,1,'这是第一篇文章','admin','',1,8,'<p>欢迎使用 PHP内容管理系统！</p>\n<p>这是一篇系统自动生成的文章，您可以修改或删除。</p>','2023-05-18 08:49:51'),(2,1,'PHP微信公众平台开发','admin','2019-11/21/ed27a1ba3b93801cde7a4d0\nf2ff26958.png',1,2,'在\"智能手机\"时代，没有人不识微信！','2023-05-18 08:49:51'),(3,1,'要想提高PHP的编程效率，你必须知道的49个要点','admin','',1,3,'','2023-05-18 08:49:51'),(4,1,'想少走弯路，就看这篇文章：PHPer职业发展规划与技能需求！','admin','',1,3,'','2023-05-18 08:49:51'),(5,1,'前端必学框架Bootstrap，3天带你从入门到精通，免费分享！','admin','',1,3,'','2023-05-18 08:49:51'),(6,1,'MySQL手册免费分享','admin','',1,4,'','2023-05-18 08:49:51');

UNLOCK TABLES;


DROP TABLE IF EXISTS `cms_category`;

CREATE TABLE `cms_category` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL COMMENT '名称',
  `sort` int NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `cms_category` WRITE;

INSERT INTO `cms_category` VALUES (1,'生活',0),(2,'资讯',1),(3,'编程',2),(4,'互联网',3),(5,'科技',4);

UNLOCK TABLES;



DROP TABLE IF EXISTS `cms_user`;
CREATE TABLE `cms_user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` char(32) NOT NULL DEFAULT '' COMMENT '密码salt',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `cms_user` WRITE;

INSERT INTO `cms_user` VALUES (1,'admin','feddbf1b144d0ac8b34604db019d5a50','salt');

UNLOCK TABLES;


DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '学生id',
  `name` varchar(10) NOT NULL DEFAULT '' COMMENT '姓名',
  `gender` varchar(10) NOT NULL DEFAULT '' COMMENT '性别',
  `email` varchar(128) NOT NULL DEFAULT '' COMMENT '邮箱',
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '手机号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `student` WRITE;

INSERT INTO `student` VALUES (1,'Allen','男','allen@myframe.test','12300004567'),(2,'James','男','james@myframe.test','12311114567'),(3,'Rose','女','rose@myframe.test','12322224567'),(4,'Mary','女','mary@myframe.test','12333334567'),(19,'张三','男','',''),(21,'save','男','',''),(22,'fill','女','','');

UNLOCK TABLES;
