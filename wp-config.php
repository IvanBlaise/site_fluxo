<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'fluxosolutions');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!5H>p`ORz}GD&&-3G& +H6hn! ^mH6U7O_=Z6+gdr4<ivjO8#<l:zmN<5 :t7Q^Y');
define('SECURE_AUTH_KEY',  'J#Cw5Y~7=mWu)j`%)&7(p8c@Q7VP$WrA-WDZ:GLI]k=W05*|V-UXMzLhr`2l}-lj');
define('LOGGED_IN_KEY',    '$64~j|gvB/PLD=6#`B7AE97K!ZolsSDgsr1ZFE/gf|!E[hY4?dQiROhiTuvFk 3_');
define('NONCE_KEY',        'i|inalP_G0>2zf0wN%9`G&XIy3V_X<5}/9WasYI;s,0XaUZv+fOR/9BGTphe0zCM');
define('AUTH_SALT',        'G<T$Sh`D7DwR~~,w2!$f<2+@fv 7/ymN0@B{xVYgF5^%]+n@7MaAQuK U@,~tLd<');
define('SECURE_AUTH_SALT', 'N?sqZ0Ld]/6rA6w,Umbl^FjoPe}Xo)Gma$OJKxsZt&;E&LR_8F r-lU;NV};SW%0');
define('LOGGED_IN_SALT',   '$:2e1RB,DkZ8iXB#O^ff~Tp3X{1bg-oSV1~ga2Uk%wV+8K$bkJCj-Wa{*n8EK`,3');
define('NONCE_SALT',       'M!cXOnDbQ&y8OC17B+v5wjs$Dmf(&32yl*i,4`+Ld3|1G;w[m+xf|:W*%- So?Iy');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_fo_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
