<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'modelyar' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',G-[KK*!>PL0MtGw+Y4Z^hC#2ETDpQfBQ0^VVn,?T!um_YEXN ?0}u: gr7d[U=/' );
define( 'SECURE_AUTH_KEY',  'pteA`e#C/uEad,:$]V;ya`fS=INlxs97kY E,+an-ygk,T:RjNoP<ymJq>hb+oN)' );
define( 'LOGGED_IN_KEY',    'isvVJ4;#@$g$!dM0V&8Tohbyf)dRE<CaD`VPr6lzV1FzsC)k8/1[Dp+qL539(`$q' );
define( 'NONCE_KEY',        '=(={f>RokAc,?)M-:Qn+;xQm)nKcs!g;o3iGs7O7.Z9Yny~Y#N8e!FzH>U+)-?&9' );
define( 'AUTH_SALT',        'N_&zK!~#1*=h:OM<,^Hq k.04f_d*Ae@11.?!W)A/ GG(fj>xw`+v`fQbP6b# <U' );
define( 'SECURE_AUTH_SALT', 'z4TUsz=$8KKAIY^C^M,va#zV!J,WQK!09|jjofRrc~u~Ru03Sw83$.j* G^RYF|Y' );
define( 'LOGGED_IN_SALT',   'jN|wAlH,AVPaxU[_&w999VNs_]XorqW*Fq}v].GrsBggt=h~@X2r>Q-k$YBHD!6d' );
define( 'NONCE_SALT',       'Ws-I]IqZ!-#][N=qbI;0Sgg>jyno?CCpdAP{^0jK<|j>8{>A:cs3%UVmpiuc{Ve*' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
