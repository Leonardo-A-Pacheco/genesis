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
define( 'DB_NAME', 'genesis' );

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
define( 'AUTH_KEY',         '{?r.vzwsPy/>g}CyyNU/L 9%b3}$CD.R&&Mw7g}N8/Z9Hsvs?MrP,{+7s`que0pD' );
define( 'SECURE_AUTH_KEY',  '$)xj>NVM*^f)V%+tCZ*/0.hImSfp3A+4Xv?6L!GYrQb1GCLPY-aQp5^12M]l_}@q' );
define( 'LOGGED_IN_KEY',    'D<5uXv l9S|kDwRIkblp#|w>Y1}wY)Ma=LtK?oc!YXD>lN:oZ!+n!W~%q<[<[tGq' );
define( 'NONCE_KEY',        'TxYeV^==kY}mOue^zP*[ls;xX]C.J%Gj/gfXZ);JkX5LZ>_j>@s1$9>t[{5j3Q;V' );
define( 'AUTH_SALT',        ':&FKPa;L$IkHDt+o(lY2:I%gLs,}Z}ys0w#l)94Xn!/s0fF`%a64b iIv{Q/>M~,' );
define( 'SECURE_AUTH_SALT', 'Kc]Cn~piZ?R-.9Kv!sA5;zIFH mdd}Vvn*?4:P iOI?YS2qn-1YO[]J{g<pyN@/e' );
define( 'LOGGED_IN_SALT',   ';W#eAG)6x&Rk%Kx,R|7@1w64h41(.T>WJw94{I33J0@KSTA~hrZgesct.KJ%cRnl' );
define( 'NONCE_SALT',       '~hLvul5vI^V:gBe!x47D_$~Z~HpA&v1kf5uhHL%/<b/1C<:bs<ayO9)Yfz&qencZ' );

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
