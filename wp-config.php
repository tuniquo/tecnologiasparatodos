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
define( 'DB_NAME', 'tecnologias' );

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
define( 'AUTH_KEY',         'N;ULO~KTt{>.=;.P@eK4yTm#/15B.C(ufdFm#PQY4oV$c*M!x8;nWtIcq **7%CN' );
define( 'SECURE_AUTH_KEY',  'x^fQnLTybgf9zEy#S(!wHa}]T2-J):nu^CQg~tW_qLZ9>g_y~(<:1]i4)M^$a-kA' );
define( 'LOGGED_IN_KEY',    'q#S-_`n*}Bm81<:j+PUu(9:L(I=IWzwllNv*Aj=ba~dC`|UPSZE`&&P(%y46R<OH' );
define( 'NONCE_KEY',        '8LV1^T#zn}. QQ^%_B9;-MV|0<a5XjM2/.EIdY_p]p{MGTf?dno[+n~Bl{R=)h9_' );
define( 'AUTH_SALT',        'ocXp+|Sy#cNa6vDI!Z/o>[(2HwR(uuo nSFg|YB{2}{^q1ILs3 XzsObN)6v Plm' );
define( 'SECURE_AUTH_SALT', ']{ZB[8]b#>;JC@`-N@csuQAX3lr@(pjI%;pB8m-0#p?T+GTy^=`;5WRb^pm5}|8O' );
define( 'LOGGED_IN_SALT',   '5^T8O@G!FOqWG;y=Hb5FP}lJm:kmlY/gdY%dWl<I7?NW[2k^i[.o@|tS8muO(a1s' );
define( 'NONCE_SALT',       'YE0(4,,l5U5fY:cWz-U-8LMFJwEC8YS)rTPKXl;KF@cZR6)R^6`Ns?l A*gSk%0n' );

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
