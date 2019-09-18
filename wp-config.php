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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'F]fWB5^J-*PYHyF6{ OqZ]CX s/OVA@(nL>*ZZDGTdF%SWB+J,ned0}}>)K73}B1' );
define( 'SECURE_AUTH_KEY',  'n8$**{<D]D|uI/ZO*6gB9^;vtU}vQ|mgb6%Xmr*ATA- HABG#*~r E<X61Ad4&()' );
define( 'LOGGED_IN_KEY',    'Aw0P7>,P3zIbMG`^DL8LN$Z%34M(a)P3@J{z]MaA2hc,IyS^f)$Ck=k;t{6_,-f.' );
define( 'NONCE_KEY',        '0/@wiS{0Dyw)g~%q}Wzc1q-EewAwvL`h|`W6`T};U86ODDzguiYSfSW(/uNkQh>n' );
define( 'AUTH_SALT',        'AGPc:<gP$d#3U1Rj|rClj]~A 27.uhX=g(P[[H]pb8>eYFE:9aJ0/Lb8: ifkkn<' );
define( 'SECURE_AUTH_SALT', 'a:*8d8vd0b~4uc[G{N4[v*nk3ZmNw*;,VH{9)?-thrl_yh,#)pCv8~6j$+[C4/Q%' );
define( 'LOGGED_IN_SALT',   'BRHU=A1qV~QF~uOj7[dDB;DW6.3_5+ ok*6GA<4Ye=nJ+ZDOQF.{U!`{Fy?ZrO{~' );
define( 'NONCE_SALT',       'r>o#o~Z `_mg(MN(-B2!3En=8#_^0{>WDbz.Y$ux,oBNS9Z;R<^E1JU:aVPp@wZv' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
