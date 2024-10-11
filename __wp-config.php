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
define( 'AUTH_KEY',         'qvH5Q ||x@:|)m3(4viU/PK}*jR2;=^7;1}/Q$j Og;gE?agq%qrnUs&)_8;k=i$' );
define( 'SECURE_AUTH_KEY',  'A<0OQ9p+No7#ETbS1:V62V/#h|F!)UO*}h: /ra2{:Y,.q8f(z1uU-;x<Uo7P;7K' );
define( 'LOGGED_IN_KEY',    '<ThPRHB[w|&t.fyh&C<=)RKi4v?as!1lywm,PTJ&v/!MHFwaqG~s:7@jm%}Pn@+c' );
define( 'NONCE_KEY',        'JtyV1c.-8Y[c!U[(v#jw]Z|-z1Fe|e|@`-*+jicmZn(aT[M.KuUavF+.mMA2.`}x' );
define( 'AUTH_SALT',        '`SQH3XgY6;57U9kIR^nqIn:CU6qCzc!uDysr02F1h}w_$ot ;*=}Kl97U3qVW/(/' );
define( 'SECURE_AUTH_SALT', '~&Dm{/e6UbOc2yS>DkkSU%wOsMIC6&v`1./lynXT%)3uj@8m.`XIH1py)=Q8sq/v' );
define( 'LOGGED_IN_SALT',   '5|GEJ2EsF;$HZDN4Z;v?=J!sDvG}ZF.iiv/L!1O]o)U:A}iUZSiuX[$QJRd^Ltp/' );
define( 'NONCE_SALT',       '&Fzm|axkwycD.,QPirHX0cg7BK*[$`bkNv:r$7O|nYiu)4D2WUDBE41Osv?=~_96' );

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
