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
define( 'DB_NAME', 'kroboro' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'k^zlx*45T52x,Nz/{.bV ,W~@)Yofh5,DQ-4+{yRcE_*o)nK2}+I )Kpt{cWm*Cq' );
define( 'SECURE_AUTH_KEY',  '@Ad?!d3w$@**]8{)UCN55K%{LE;AhrCl$t=tW&,cTF73^kB&vJ2I|JVvgQ:QI.Sg' );
define( 'LOGGED_IN_KEY',    'yP%V%]e_5+WrAn=HP^vjVRb7GUY74aQNkMx5$[#}P9>%W67c-|k!D9s|2PwWS!c4' );
define( 'NONCE_KEY',        '_qIC#9SkAWv{zOM:x Xec9?pGh8LxI_JUM=5g`I8ml8B<(tzdkK,<8W/`?2Hl1G7' );
define( 'AUTH_SALT',        'EC++$SY.P>{{yEZku>--``/^<A`k#5(+yj=97/@#h,EbD&=ZWD(^k`,fA]gE849?' );
define( 'SECURE_AUTH_SALT', 'v#_-upAe!tRKtCe|N<m,x#7?rMY`0XWER/=fXHiZ{g?huvkpyAw?UL{tzCGbJXK0' );
define( 'LOGGED_IN_SALT',   'a7j&+C6BNKiIk?uzr4B_qJe{c,(2HzE;ktlzYyR>?xaM/S|$@3*<4Z>p6~yc}?>K' );
define( 'NONCE_SALT',       '(g:d@7`*extvEH5&9j&P%oQ6H}wn.. %7+7PU8&2WIs4,i1AU@b!T:Y:PjN/`l*j' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
