<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'mdmx');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'hd1412');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y0P^(+DFP+0RK7wC)S+x+{&`#{|RB$73H6zN<n1^aI]!%*P|w:<C:H_x1W+.LzbE');
define('SECURE_AUTH_KEY',  '1q2YmL6L>#7L)|o4BPJIey=usVf|B`c+clOKR[/Hq.|S4i{M,#gZz5TX10yVh ,$');
define('LOGGED_IN_KEY',    'GGGS(:]m5,X2|_q/TT>Rra(7z;K8=<;:y!EJ0R}1:+6Jeb4ugx2+S24&sYZUplM&');
define('NONCE_KEY',        'bs;bj(X@R)%-T*pO`PB$do*`XLIpKz}t_zxf8.F*?0y6,i_VO{M,xr1l-12TGA9v');
define('AUTH_SALT',        'X6p.Nr5D#8utU>8uAz:6aKA]:uP:HkJgEMu=-:W#+dl[[$?-~Fv@e<[+o*)|y3[2');
define('SECURE_AUTH_SALT', ':!fHPWt*mhD2:mTj#RK|}+/y3H E^m8kIr_+-E34_Yu7Aa ^f<<Cup!P|Cg(tN!z');
define('LOGGED_IN_SALT',   '6@5]C;WMOEH/8|?NMo6Rj$hP(X%wA[i2&oYGg,yuk_k]lf1wjsp8c-3fmtz|Pc]O');
define('NONCE_SALT',       '<Ih,ZZMf[6hsPfSH[<ycq.NS*[6Hm`-ImwFP2b9eDJYxd]4=X-.oQJ/0D>+|6JB}');


/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'md_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

