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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'agencia_carros' );

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
define( 'AUTH_KEY',         '<Im1TuDY3)b9A,!~Pk29GSx~!*O%RNFsQ<]HG.O=tfcZy?9+1{VDTyD~{292 u:Q' );
define( 'SECURE_AUTH_KEY',  'Z0kC#L;H/(f3,a#F|*:P}H* UX/a=j,%J+*21C]jpm:Ry{M~Mu6.>h <`5/3PEHE' );
define( 'LOGGED_IN_KEY',    'vRI[zA*XiM9tt*A<Q/tIrS]=uNQR3 rIFG-t5%%f${Ri:ev,?/0^YxA%X^Ai,.d8' );
define( 'NONCE_KEY',        'rKK]8AKpI%QOftVY|t~T9<h^R<g=yzCpJQyp,3Z>oH3db7<H `(@KQ/he+$v7vVT' );
define( 'AUTH_SALT',        'K4KGZ+#?q2`cebzY1.$3/{p1%$RH=4M3rJ~<0,_CZl__{_?Rh4EDZ.dbeTy6_>p#' );
define( 'SECURE_AUTH_SALT', 'yq,R:~2Uk7lpmPGZGHsQsh<!x?d1aM@@ud#ags&Vaw<<z*<gN/B5T>QR,2).-G`J' );
define( 'LOGGED_IN_SALT',   'y)[Yvwj(LE_xOK(&9lH8}yTLHfV;0-r7?Pe=Q^OwD3) USzmFSe(_pa4dG*fzt|k' );
define( 'NONCE_SALT',       'S:]Jti@cFH>Np#mM7pNO/f+5VA-}A2TK0+$5]SAXdrY`/E2OzhCZg8AZ^[/-?n$5' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
