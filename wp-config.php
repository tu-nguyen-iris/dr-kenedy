<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'dr-kenedy' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C!Zm(~:*zq?L5{~j-fJ<f#+_/cP};dhM?H_uQu5WL s8B6J85&GO4=QyDz)iG+~:' );
define( 'SECURE_AUTH_KEY',  'iIs6p}#yz=%ck0~*iLB83$z<YZw}^gAa?VIrp$3tLm$L0yY_v`8%cYWQd318G$=*' );
define( 'LOGGED_IN_KEY',    'ps1@1d.b1^&qN#Oc*vgC|=EFiV%wZ)#;C0Cj#8m5E37h%Xs0^$6BgSdz1u25Cf%Q' );
define( 'NONCE_KEY',        '-74Whm!RlzI6bFtJZE,%T>I]e%Ku{0^i`x?GwnR)1,k=;S]=GwC`-O]7Yavq,W0-' );
define( 'AUTH_SALT',        '%@YXF2I cf2:)q{q7}Ff^4wnc#y^N]B,dSt1@Uv`h(/C=I@TK?U{u}sR_8w7i9#K' );
define( 'SECURE_AUTH_SALT', 'vs3[l!D9RlYC,;m#dQSa5y RT/>e&w=4>lGZE 0`(S^;X9eyIK&W:f;;m7s[6k4k' );
define( 'LOGGED_IN_SALT',   '!eKvXT<BR67/v DAg}3m3)`[sSxpngG{hB1rVBj`}7HL!0*p8{80Qa`G/KQ&j2rM' );
define( 'NONCE_SALT',       '%tFvp6tcxYR5J(!/sCppK6-sK@!eo`r]~C/2**ZCo5Tsa g=3CdyX!5qt#)80Z-*' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
