<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'shop' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', '' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B2TLsv_9- M-6_;z,9;YkRc:YUQuU9+D.6bV`3:z*B} q9L`Rg&gh1zDMdZ!*fh2' );
define( 'SECURE_AUTH_KEY',  'V/AWexTJQMyE6P>r%;c[7cp[6B#@?E5p]BVHCTh_(FU`j6w%6Y&& ne<^CIP7L{[' );
define( 'LOGGED_IN_KEY',    'K  _Y[KI2lCH(AVvpo9yS.G)|b>HecH>`vp[7qC~QNr/R@3<xSQ?)!:oplYvgY28' );
define( 'NONCE_KEY',        'qFT3&Eo?z=R`._DFZ3jz#K~jf-fQz@Sg)nD Vlux $ (j@Ht9LKLC.X$W+q[N/ZA' );
define( 'AUTH_SALT',        '2#Kf22ULL`qV%^0)y4}J2LwiHdbK>q>jyNOv7@eUAH<.3gFVokop+PzSzz$$6WIu' );
define( 'SECURE_AUTH_SALT', 'NH%D42b[3*ENF5+(xTL<=SvvWP~}pLKn@A#K<h x?Z6dnve8histw9hAIGMt|?O6' );
define( 'LOGGED_IN_SALT',   '|fZDmfKN&jMib~~l#.o_N3!-Ap~t;sp[VSC,Tf`F9s@%l)]9cMlAJHve|q{E:ZF!' );
define( 'NONCE_SALT',       '0%:`GxbsxaVqDuo&-CTi;=[{zr%$<W:Fjumx|%Iq-70/Y4w)tDr#:b&bKXrohfY4' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');