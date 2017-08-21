<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'chenxiao');

/** MySQL数据库用户名 */
define('DB_USER', 'chenxiao_f');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'chenxiao');

/** MySQL主机 */
define('DB_HOST', '59.188.76.160');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K m]?^LLYfl5w^q30RpS*%6uw&Ya0G<uHL=/5vlCZ+pZB0BaXnE6|%Y-L#sf^=X3');
define('SECURE_AUTH_KEY',  '@|ORI8-&^o-JU?UjhWl{h~y/&^IxhtX7QKxQ&N~%f(l[5m$&:cV4[N}_U+3RC?!c');
define('LOGGED_IN_KEY',    'Mxu6,N9ydQL4Ue[!mV:><6U=W7wT]Dz#Q6>gWKn!d6Z0{S@w8e2)U;Pz+4K>tSHw');
define('NONCE_KEY',        '}v{d-73S UooMt{mk%%t,=);y{%<%b8:_{VyVd,(Gb<dk#$hhAxX8~A}ZWg({WIS');
define('AUTH_SALT',        '(xe^`Y}F[P)O*^cQ.<YB8^<~y|(2,X,y51JHRo-h%j?|+/;eZ{(`%|x~YU+HfFC*');
define('SECURE_AUTH_SALT', ':Ndbw`vJS7Ae5@^z~Eh1Wh_:W*-MF8~8qVGtdR:;%hO>8*{XkD( t5W~/`K^8br2');
define('LOGGED_IN_SALT',   'N.S/!!/Bau7Sco*_g05dcCJK2TkHO#[`d>tpLWW8l[KY^snO-Z70#;/k>]B6F|w|');
define('NONCE_SALT',       '8iI]l0#cN1 ;?bh;esr*GVXLi0X05-9*FW/ApzWccz2B/RMJ728)? $C3$uxo!#!');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
