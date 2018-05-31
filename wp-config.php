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
define('DB_NAME', 'bestremont');

/** Имя пользователя MySQL */
define('DB_USER', 'mainuser');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mainpassword');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hVFWegy2OgtPpkV7c! zsdzONJAZ?(7YGT10ySjfa`WO[A(f(`U5.h-5,%o;+o,{');
define('SECURE_AUTH_KEY',  '%;C::WaOIQWTM7GYQ5b/2I22:F^eG9N?T=n.H|%OV-s0.S./!6>*WVk8gG6*s!oT');
define('LOGGED_IN_KEY',    's&HGYW.|=S?ekV{Eb2PL!h $jxzulbpqUmCYS2sRIsK/c:zl-{Ut&]2P6Jn1L& 3');
define('NONCE_KEY',        'cnBA%Fn;Fe0UK-4ub*pLd-]Wpa~sh~?e8 Q.G!R2FaM=9bLNH,GG${Jde20^.1B/');
define('AUTH_SALT',        '-eoP6}%BfsBaDb?X`2zC%v@P78S,A%z:0/)rhj@e%6!_+vuK@F$8A:]K+kT1wS-6');
define('SECURE_AUTH_SALT', '1rsN@~H3)TGcu$bqw>v~3d9,c3^6 amfeR3/CGbY::3P)#w8-*N#pxfi@^l2e&d0');
define('LOGGED_IN_SALT',   '^C(%/>BvQCPNKYLqr-aXM;u],n5q:`K@L-Yx aaDf$cpJv6N6V*L.@y1iC+f}G?Q');
define('NONCE_SALT',       '(/l>0yRlxcW&@D;GjRSC,zmt-YDPuWsV]V(=pA.Pn%omD,5g?2ty<AU_U]i8FLBY');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'brwp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
