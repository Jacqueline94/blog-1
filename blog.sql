/*
Navicat MySQL Data Transfer

Source Server         : fuck
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-02-24 19:50:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('5', '杜泽萱', '这是一条比较官方的评论');
INSERT INTO `comment` VALUES ('6', '蒋明洲', '这是一条比较傻逼的评论');
INSERT INTO `comment` VALUES ('7', '唐佳妮', '这是一条更傻逼的评论');
INSERT INTO `comment` VALUES ('8', '万俊廷', '这是一头猪的评论');
INSERT INTO `comment` VALUES ('9', '杜泽萱', '今天完成了留言板和新闻部分，很开心。');
INSERT INTO `comment` VALUES ('10', '杜泽萱', 'php真的很好玩');

-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sendername` varchar(255) CHARACTER SET utf8 NOT NULL,
  `getername` varchar(255) CHARACTER SET utf8 NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', '唐佳妮', '陆雷雷', '你是瓜娃子你家人知道吗');
INSERT INTO `message` VALUES ('2', '唐佳妮', '燕阳', '你是蠢b你家人知道吗');
INSERT INTO `message` VALUES ('3', '唐佳妮', '万俊廷', '你是gay你家人知道吗');
INSERT INTO `message` VALUES ('4', '唐佳妮', '杨雷', '你也是gay 你家人知道吗');
INSERT INTO `message` VALUES ('5', '唐佳妮', '杜泽萱', '你是聪明蛋你家人知道吗');
INSERT INTO `message` VALUES ('6', '唐佳妮', '蒋明洲', '你是sb你家人知道吗');
INSERT INTO `message` VALUES ('7', '杜泽萱', 'getername', 'message');
INSERT INTO `message` VALUES ('8', '杜泽萱', '杜泽萱', '你是聪明蛋');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `top` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '春晚明星服饰网店热销', '羊年春晚上，由贾玲、沙溢、李菁、瞿颖演出的《喜乐街》是2015年中央电视台春节联欢晚会小品类节目之一。节目中，贾玲和瞿颖的“女神女汉子”将成春晚流行语，引起了观众的热议。很快，贾玲以及瞿颖所穿的衣服便在网店上出现了同款商品，并且接受大量预订。记者在网上看到，贾玲所穿的紫色上衣配碎花衬衫被打上了“春晚同款”的标签，价钱从几十元到几百元不等。在一家店内，这一套衣服标价599元。“现在接受预订，大小号只要标注就行。”店主称在年后衣服就可以发货。“保证和贾玲的一模一样。”记者看到，该店的预订量已经有20余件。');
INSERT INTO `news` VALUES ('2', '吉祥物阳阳也现山寨品', '　记者发现，不仅春晚服饰同款热销，就连春晚的吉祥物阳阳的同款也在网上热销。记者在网上输入“春晚阳阳”关键字，立刻出现上万条结果，价格在10元到上百元不等，个别店家甚至已经出售上百笔。“我们这个是1:1的高仿款，跟正版的一模一样，分大小号，给多大的孩子都行。”店家称，阳阳的毛绒玩具一上架就已经有人下单，仅仅一晚成交量就已经上百了。“销量比我们预期的还要好。”店主说。');
INSERT INTO `news` VALUES ('3', '网店可能涉嫌侵权', '对于网上明星同款走红的情况，北京康普律师事务所主任律师吴立宏律师告诉记者，在不清楚明星衣着品牌的情况下，网店主使用印有明星肖像的图片存在涉嫌侵权的情况。他介绍，依据《民法通则》第100条的规定，侵犯肖像权需满足两个条件，一是未征得肖像权人同意，二是以营利为目的。从上述事实来看，这两个条件都是满足的，因而在事实上已经构成了对当事人肖像权的侵害。');
INSERT INTO `news` VALUES ('4', '春晚结束当晚明星服饰网店热销 吉祥物现山寨品', '昨天凌晨，羊年春晚刚一结束，演员同款服装以及晚会吉祥物阳阳的“山寨”产品便在多家网店上销售。消费者笑称希望能够购买当红“羊年单品”增加年味。《喜乐街》小品中演员们的服饰最为热销，单价最高已经卖到了上千元。');

-- ----------------------------
-- Table structure for `photo`
-- ----------------------------
DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `iamge` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of photo
-- ----------------------------
INSERT INTO `photo` VALUES ('2', '杜泽萱', 'image/2531170_102410628038_2.jpg');
INSERT INTO `photo` VALUES ('3', '杜泽萱', 'image/photo.JPG');
INSERT INTO `photo` VALUES ('4', '陆雷雷', 'image/u=1739178120,1574105585&fm=21&gp=0.jpg');
INSERT INTO `photo` VALUES ('5', '陆雷雷', 'image/u=3220835460,2605352028&fm=21&gp=0.jpg');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '444@qq.com', '1234', '杜泽萱');
INSERT INTO `user` VALUES ('4', '222@qq.com', '12', '杨雷');
INSERT INTO `user` VALUES ('5', '333@qq.com', '123', '陆雷雷');
INSERT INTO `user` VALUES ('6', '555@qq.com', '12345', '燕阳');
INSERT INTO `user` VALUES ('8', '666@qq.com', '123456', '万俊廷');
INSERT INTO `user` VALUES ('9', '3@qq.com', '3132', 'addada');
INSERT INTO `user` VALUES ('10', '33333333@qq.com', '321321', 'dsadsa');
INSERT INTO `user` VALUES ('11', '111@qq.com', '1', '蒋明洲');
