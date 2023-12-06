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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cotacaobartender' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '4>iwtIAUKy3UBgXi5B 4g:L!V?3@g{P,4UmJV>:bXT=Cr%yy-UW(a:vu?&Y;QQzK' );
define( 'SECURE_AUTH_KEY',  'aY+w4eZ RMM{~Z9:vLrX5&|sPQBQNmSUy_&OE*r,V@ye~y!kM.[COpz@=/Ax}mxN' );
define( 'LOGGED_IN_KEY',    '*Q}Q&>p.0.[oJ}%L&$E;IWX:R:aXK0#&^Q8MPM&&BD{uAr+qKH3kh<~iS]&jhBnu' );
define( 'NONCE_KEY',        'W_fZ7jW7sGv%}3?vQMIuazX3;x-;^?:wD6@Nt(.ID4 ^3N=_$mAAk`d$vXlkp)aa' );
define( 'AUTH_SALT',        '$H#Yd8tsL9L#YH?a~ RR?1bVEtd|$e=kBbhO$?[di.Ig7C57SARcl:%,,ud#IPDP' );
define( 'SECURE_AUTH_SALT', ']wNE>iGbR_M *wgRxp>`v0L4>~A ZB,O/WTX[?Z6I_u6+{juBzPxY~r=S!lW.%s>' );
define( 'LOGGED_IN_SALT',   '=jPT,mkl%_13%V9/Q~.bI@DIZ3Es`b_W8%Y=3CYDr$2{BS2]A+7hHgbg]x]%Xd_j' );
define( 'NONCE_SALT',       'Z6l^]oGZ14^sN)1/m2>(qA,!.TAG AA[pCSd}d8bO* dVe$_W[}uD(JLDyyp<3@<' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
