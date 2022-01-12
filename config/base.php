<?php

/**
 * EasyImage2.0 - 简单图床基础配置

 * @author  icret
 * @email   lemonim@qq.com
 * @Github  https://github.com/icret/easyImages2.0
 * QQ Group 623688684
 * @Last    2021-11-17 11:24:35

 * 上传服务器后第一次打开会检查运行环境，请根据提示操作；
 * 检查环境仅会在第一开始开始出现，并在config目录下生成EasyImage.lock文件，如需再次查看请删除此文件。

 * 敬请注意：本程序为开源程序，你可以使用本程序在任何的商业、非商业项目或者网站中。但请你务必保留代码中相关信息（页面logo和页面上必要的链接可以清除）
 * 本人仅为程序开源创作，如非法网站与本人无关，请勿用于非法用途
 * 请为本人博客（www.545141.com）加上网址链接，谢谢支持。作为开发者你可以对相应的后台功能进行扩展（增删改相应代码）,但请保留代码中相关来源信息（例如：本人博客，邮箱等）
 * 如果因安装问题或其他问题可以给我发邮件。

 * 配置分为两大区块 -  1.基础配置 2.图床配置
 */


/*---------------基础配置-------------------*/

// 设置html为utf8
@header('Content-Type:text/html;charset=utf-8');
//将时区设置为中国·上海
@ini_set('date.timezone', 'Asia/Shanghai');
@date_default_timezone_set('Asia/Shanghai');
// 修改内存限制 根据服务器配置选择，低于128M容易出现上传失败，你懂得图片挺占用内存的
@ini_set('memory_limit', '512M');
// 定义根目录
@define('APP_ROOT', str_replace('\\', '/', realpath(dirname(__FILE__) . '/../')));
// 判断当前的系统类型是否为windows
@define('IS_WIN', strstr(PHP_OS, 'WIN') ? 1 : 0);