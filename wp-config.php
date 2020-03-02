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
define( 'DB_NAME', 'amz_db' );

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
define( 'AUTH_KEY',         'T=1wGC,6+m|f*|n,4~lkUJ1m#-ibW:]`/HdWja2<+wRVY`q7Pje$vrr>.,cP<Rl;' );
define( 'SECURE_AUTH_KEY',  'x]fWV5z6WedN_L~-Drpw)ZE8;V{cB9[a1s&iY?XL6}ehhec+jgJ<L/gwQ;cZ8 JL' );
define( 'LOGGED_IN_KEY',    'mU6>bbN(u+1lvv)~ CTURNCW]/BT`}=xB$hNH|^@of!hq}0C+<tO#%F.kJw@Eq8X' );
define( 'NONCE_KEY',        'NlTO6?P8Nf=#j5guQ<0G[fMh_ocaTFhIN9n[Jl#Jh?^5b{S)8]bAD> Vx{7E}$rD' );
define( 'AUTH_SALT',        ':.0<&OBc)(#r3O[##4/$]8]jyzf%gfj%Cb*V9ii`O5,bwGp,4@9jMN6)@R> 9;t~' );
define( 'SECURE_AUTH_SALT', ')JQ;x!=}yd^o{YN5:#M<@Re;9L/V3aZN}BM$C!&4^Yzra/X5SDo];jx7,ttNkq0j' );
define( 'LOGGED_IN_SALT',   '*6s2x$srB@jO54lNX rq-{Q^1`*1| {OB.]DA%?#kF6@FV@dkOtA<PcYM#p{8;9T' );
define( 'NONCE_SALT',       'og,|isbkV8=zXxK(j%67.V~rE--pL?J5/AI$jn+(m+YEkY)9D5#W}e+*qc]mt>)z' );

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
