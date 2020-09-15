<?php	
	
	/** O nome do banco de dados*/	
	define('DB_NAME', 'id10939726_wda_crud');	
	/** Usuário do banco de dados MySQL */	
	define('DB_USER', 'id10939726_webmaster');
	/** Senha do banco de dados MySQL */
	define('DB_PASSWORD', '00048577');		
	/** nome do host do MySQL */
	define('DB_HOST', 'localhost');	
	/** caminho absoluto para a pasta do sistema **/
	if ( !defined('ABSPATH') )	
	define('ABSPATH', dirname(__FILE__) . '/');	
	/** caminho no server para o sistema **/
	if ( !defined('BASEURL') )		
	define('BASEURL', '/');	
	/** caminho do arquivo de banco de dados **/
	if ( !defined('DBAPI') )	
	define('DBAPI', ABSPATH . 'inc/database.php');
	define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');	
	define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');