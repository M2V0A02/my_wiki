<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$[,@;RjT8P39o&:rBaHt-ZA}7){;i1iX(?MJXPpmTkDiknHaxXjastqgtJV1;60P' );
define( 'SECURE_AUTH_KEY',  '(/ AAL~@:I^$+;0$t/|JmB?hb{nux/m$E+n(2dQDs`O:nk #Nbv7Put3=UN^(?w[' );
define( 'LOGGED_IN_KEY',    'BumP&Y$)7.DP*}WK>;K1bTT$&/gh,-wYof}ISX-3~5TS*4Io)HYwF*`m<%Gq8T|M' );
define( 'NONCE_KEY',        'P O+[CtAtT7N8.z{N2,B*dnyu7L{*BUk{6Bq3;#G~_=wG]QzsTFP,oG#])B%!&QQ' );
define( 'AUTH_SALT',        '?|RVzO2FwTxCV@9im*.juCc36=2_rPQN5&s*qICN.)r2h?(iM1+U[s76Yhe_ut`k' );
define( 'SECURE_AUTH_SALT', '.sWcq>QvlvH2HpxP{iFz$Hh/8d%j$T,90]SS5x}?MT6Sj2)0|BgnA2piPo8QBk;=' );
define( 'LOGGED_IN_SALT',   ' *H#WtTC=#PC`M<@}.o]rKp:oh2CfYE$WFv ~FM#oF4?k)3s<<1AgbMT6a}-y`j/' );
define( 'NONCE_SALT',       'z6Ui9|zMuFKe-.?1,Meho_kjNq6HI_zlg(B2]<;v1+_,{)f~H]f.MxLdfa7IQod(' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
