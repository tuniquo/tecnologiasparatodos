<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:8889' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pd,KnCE<Gaqi|?;&oLicYv4-Mu&!h;j#HBAiW8A*mzxa[;?@E)-Yx*&P eM1O~[M' );
define( 'SECURE_AUTH_KEY',  '&@CwGt;Q!GM =036y#CK_z~kt,QkAs[N_vp~FA7li.psa#m(g)qZ(, 3t&gJ9;3)' );
define( 'LOGGED_IN_KEY',    'VhJ~%REain; RIcwDTtM sIAAxXztTFu$nhaiA-&`s!xEf~A:rkjJGHq{!y0}COj' );
define( 'NONCE_KEY',        'l**ubPxW})z.15qjO3x+Xi<q6W0~HxMPKpq*~b}9[|F5Ru7#u,}e+8/aYYgPqM%t' );
define( 'AUTH_SALT',        ';jD`jiS^#CY#w&f@}8 [^W a6[?C,MmN1T&cfgYTmy_JbW2kcejnlEo[:ck$8-2T' );
define( 'SECURE_AUTH_SALT', 'c1s}8`5A{3]Y;[=L~;L{xZNkYzji}HZ.vwt 3rS~[w`@<&<%)(CV,S9&ott{A{Aq' );
define( 'LOGGED_IN_SALT',   'Lk2~SCCXgY|AOM~$Wh#w=v$ck%4exKGu.dqi-B`A!yrapd0! H5dsIRdwBM73XnL' );
define( 'NONCE_SALT',       'lXw-d|w>-Z0wvo)_NNnku^wIe2-WnPI:M<:sZ/13-`0BY,Q[kjjFeIrO1{v8q)Vn' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
