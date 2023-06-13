<?php

define( 'ITSEC_ENCRYPTION_KEY', 'dS4kNzB0MFgjYDU4MFdscj0xPkcqQkdpN3BdOEVban00JHBISWNucyw3MyUsQlJSXnNGa0lYVSteMUReSHcvVA==' );

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'f6KA@2,9Em[vbDF;~dP/VjrqFaUD' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define('AUTH_KEY',         '<KQY![B#VeeFLh?<Z>+)/UH|~D]be5/9|zPKf&4J_:AZ&|&hmh/nOr4DeO+lk~KB');
define('SECURE_AUTH_KEY',  ']//4({SY5arZ@unUhnK{B{T?Tbk&0;,-vOYyy~[LQdFRnWb;g;_2,HK|Uk|m9VN)');
define('LOGGED_IN_KEY',    'Ujx,nFwm>,Cwt;!!&S)@?^f+} Fp-SQQY[YxK5p)E#Ka-T,,s!|Wqd1bl:!bStWq');
define('NONCE_KEY',        'a.1i~+V*U],f5M^Ms<i#[)oZ`s+1]F*a_,tOZnS>]]]TAlI@U;-}Ro|,Fu};KRlh');
define('AUTH_SALT',        '(b_PHxS+K~]Yetf XJpW6pu=lz}|(|8y-8^1_S{S;uJQnl|&IZ|4U3`^t5MGn~%7');
define('SECURE_AUTH_SALT', '{kAzoEB:y.j-0Z{lg(?v 8oJ*V.u$I4BI(Eb5 IrRWW7-+<-clV[{/u67RNFNR]a');
define('LOGGED_IN_SALT',   '}9.0QKWZ;IO1YK-Eot7cw7,)a-(q,ZqIHB~C;qi/s5SLZW45Pi*lVt^FM|-A8sXp');
define('NONCE_SALT',       'Z@~.Am=&:FnF;PT>W8$.@x7W~DB>Ky/;Yy5$ed!^O(=,&&JU+xY}yy,:^&C/FLtY');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wmk_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');


