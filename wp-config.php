<?php
/**

 * As configurações básicas do WordPress

 *

 * O script de criação wp-config.php usa esse arquivo durante a instalação.

 * Você não precisa user o site, você pode copiar este arquivo

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



// ** Configurações do MySQL - Você pode pegar estas informações

// com o serviço de hospedagem ** //

/** O nome do banco de dados do WordPress */

define('DB_NAME', "rpc");





/** Usuário do banco de dados MySQL */

define('DB_USER', "rpc");





/** Senha do banco de dados MySQL */

define('DB_PASSWORD', "riopoker123");





/** Nome do host do MySQL */

define('DB_HOST', "mysql669.umbler.com");





/** Charset do banco de dados a ser usado na criação das tabelas. */

define('DB_CHARSET', 'utf8mb4');





/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */

define('DB_COLLATE', '');







/**#@+

 * Chaves únicas de autenticação e salts.

 *

 * Altere cada chave para um frase única!

 * Você pode gerá-las

 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org

 * secret-key service}

 * Você pode alterá-las a qualquer momento para desvalidar quaisquer

 * cookies existentes. Isto irá forçar todos os

 * usuários a fazerem login novamente.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         '0CM45TVA6x$WhP,mX,BE}<{})=M7wj%8Ovcm@sS[TPPq!!aomLx+1=N6G1bc`Wm`');



define('SECURE_AUTH_KEY',  'obPTSo+%)8!zJ_&(/03F Npu_@B*G#~JWnU~~=;CA-XojO|aeJO`[heQ8[(*O,Q)');



define('LOGGED_IN_KEY',    '|:96:DBoq7!,jR}{V9C:R@htP/^z|g?BVJo/cz;>[^@F>}j/|,CXHF,4ZiqFl2/G');



define('NONCE_KEY',        '#B6&zYH}KSn5]gyB@eCz-Ww.b`LV1A3b$(,{O=<f9mJNgZ1FBw Q&#)SpBUblx*)');



define('AUTH_SALT',        '73kov8sOKML{plJTY`%tCq|~#$TGtG2udPJyz;iw<:m:}31bBpwEY{i7IC^AC|^T');



define('SECURE_AUTH_SALT', '+V_OWwU#%6^MZ24Mz*jV6N}&jFa;)XU-X6AHvG~vvd]?Dt8IFs=NdqRH,A,f .dM');



define('LOGGED_IN_SALT',   'lH:))FG6P6ozLqgF`-rA]S5?.!Y#Oe9FU&l/D?2T9by,oDE0^FVk}@=WDU`U{?,O');



define('NONCE_SALT',       'DmT,/|4(/k93Zju!.hC:AjaT23$4p7UwyGH0J+FOpY8N91_GJB+MMSmN?Kl-E]4T');




/**#@-*/



/**

 * Prefixo da tabela do banco de dados do WordPress.

 *

 * Você pode ter várias instalações em um único banco de dados se você der

 * para cada um um único prefixo. Somente números, letras e sublinhados!

 */

$table_prefix  = 'wp_';





/**

 * Para desenvolvedores: Modo debugging WordPress.

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



define( 'FORCE_SSL_ADMIN', true );



/* Isto é tudo, pode parar de editar! :) */



/** Caminho absoluto para o diretório WordPress. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Configura as variáveis e arquivos do WordPress. */

require_once(ABSPATH . 'wp-settings.php');

