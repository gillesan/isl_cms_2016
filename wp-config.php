<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'isl_cms_2016');
define('FS_METHOD', 'direct');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DBh?SAM~w1%}/wRVo+en|V@<h,DM9;v0_5N,])QEB.sGhRz#~> w]Pt@5.fkCo4n');
define('SECURE_AUTH_KEY',  'PjF=`Wku*^MnO`x:*%-b.6tPpzz@:b^Fk/0-%#FH9Q4Bh-UjxCNTVrP}|1^7kdL,');
define('LOGGED_IN_KEY',    '&f:%C2b> 6Pv64F<Ov[a]kc#7vMmXBhD,%WX^ttJCI*j~BY`4`}&#g&:x};y-:lz');
define('NONCE_KEY',        ',($Y`~wV8&O[Nl=9k}z$>V!02Xr|(B}zFIh@]n=ns>x%x*[M)eZd#Xke+d.ZEX%z');
define('AUTH_SALT',        'HHD~ZPBG,EQKwScPEr,DKn~37}.:OlwQ~CO&wLZaqNLFAj!.[E^}5w_Q!),?y(E}');
define('SECURE_AUTH_SALT', ')pjXa4N59ltFFu9RT;XR.@FordGYsB3`Z:rZK2MgA*=HH3U|BDh6!`tb/cd!k9u~');
define('LOGGED_IN_SALT',   'JZ5f{::30H0r@}5$dhE[p[6O7$xvQ9YxpOeN5,+Kz0Tu,/=~fK)Ab(.B^`|GH5q4');
define('NONCE_SALT',       '#35N4~}xp7fyk)TkMF~~[>HQ_2j9!!og|NPqhx[!3`c(JBri6j?FT`o,vrzaAT@~');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'isl_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
