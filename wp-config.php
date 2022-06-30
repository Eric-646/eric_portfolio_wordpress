<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'eric_portfolio_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'toto' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'toto' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v2Y`f!R?8LHs_}dBbqjA6`QT9;@%R#sRs9=;Y|=rzgL-0VhBgah5qgph|~G@yFQs' );
define( 'SECURE_AUTH_KEY',  'p+RU$Q*5Sp]TJou}zTLdZ(hVs`8#y/s.m5Feba26fw3;rfvM0}3K,r4]PR|U#@rr' );
define( 'LOGGED_IN_KEY',    '(}+)/joy6TAkcx|TmK6O{.zKVvYE`x(`tG$?FuURwpx#yp@H6InVwz5p4Gd5{AcW' );
define( 'NONCE_KEY',        '1|z^f=qMJ&B=:swO;]an[s|0vcJM@]om;3T_lYO!C ww=z(zZ8$gTT1E#3qk6.E8' );
define( 'AUTH_SALT',        '9{^Q-<<Uls:GqRE48zc>}%F,7S2fk%s`_{}3k#*=w//O*VxaI.`D1TcljUkD%QRF' );
define( 'SECURE_AUTH_SALT', 'Sutj(#]]H!@bx7b PqkH.Kiv!1B!6fF#3_P#]EP_<lkCkptLuqpI2yPZ3dT|5C[7' );
define( 'LOGGED_IN_SALT',   'A2Wg3w@+^u^MBna=2]f@T.8V,c9r0_Hbtl(be0A=+%J8[;GS=w_g94 |}EWlv2Z;' );
define( 'NONCE_SALT',       '&>}s;:TJ{Uf&!:*yH(Rp0mqwe$A=,*qP_:79xju$j~|9uQNRmPk#Cc/hY94[)teP' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_MEMORY_LIMIT', '256M' );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD', 'direct');