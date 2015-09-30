<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'garabedd_wordpress791');

/** MySQL database username */
define('DB_USER', 'garabedd_word791');

/** MySQL database password */
define('DB_PASSWORD', 'V0357MObag7B');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'fARgkfFfIMEb&EbN=ss=c[tt^BfGvoN|AHlTMeK+&)MaV}Or?}qFUe|N]}WxBKd[/oZUq%)T^bU;)L&y*$cULp-/O;H*KNFrwN^oQF?LB/Pn%ABBEcO>Txia>_zzQ>gJ');
define('SECURE_AUTH_KEY', 'PABRMJQ$(K%e;wdBw>b]FmJS$sLIBYnFp-%dzz?^n}RqHcmlxDlJzbCFbFZg/|Z|hf)QM][vryqe=d*=&qx/)xc$^^WxJDE&hNl]JMau!_Q@YLN<YCAPY;EDChq)$Kn}');
define('LOGGED_IN_KEY', 'oJ=hwJ/+XK^zGKk?IcixYtMLMYQ-&trNF%%/r/IqU]%QFXBkAI_A&NZ|TqWi<|?eTqD)UO&>&zfHLxvcmQHTkw{Z<_*%n/isJj;]Ar!=JqJSa*%_RLMHg%YTc>EKE{)T');
define('NONCE_KEY', 'I)XC^?O)$w;/Jzi-AksN&piU]v-vnw?xBnTl>r%Z/ejCJe%W?xxSoliG&RBzX<Gg/A[R%He-/wgqO@rn&-Ym&Dq$oVWl^n;k/cJZ;kpLb(J[y*n!_&)J&vjFvQrBvUKd');
define('AUTH_SALT', 'pzd[HmFIPk-l|A@|cNF(=GEQlbj=>V*PGFshJ]|*XgXS]u[dhM_VU*kF(p$r-V_%aLWb-;;oQmUay*SHuUR+sYbB!Y}&|/AtK!{KI?HgJz<;@s-BXk&jBrZX^}wohjqk');
define('SECURE_AUTH_SALT', 'lV{w=Qv=JvMah*id[=!$^<fG;{AcBuSBPV__jTPXsb^RhLnN?(XdeSblJO%?Qt(E{NXDvNbmbDO?v}KDP%u%z_)bZElZaAMXOxi*HMHTM;[nCzYQic+qK(FUaScKOITF');
define('LOGGED_IN_SALT', 'UpkZiUd>c?wO@JeU>cgJLoCpxCQ(]g)@TRivfdyWpb[$BXj}yKa^)XS_!jPPTPUj-|LoH@d{^a%Tvc?)avF{=IgyNs_UWycRwGn_$-y]jMQzlKT]LUa?YClX(k-=<A[!');
define('NONCE_SALT', 'r>yTR}iloqk/LBO[TgyCV(k+w<v=z|Pvo$Wao^XQ]w|FEYX*FP!DuNRyYxi{HoNTF={M__s|>Rx<yj%qsnS(&zYNuaxWML]x^<NoVW!c[]P!vpgC!jb!Xh^gUQZkJeYQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_vldi_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
