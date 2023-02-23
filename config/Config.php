<?php 
	
	//define("BASE_URL", "http://localhost/tienda_virtual/");
	const BASE_URL = "http://localhost/rh_exitus";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "rh_exitus";
	const DB_USER = "root"; 
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "Q";

	//Datos envio de correo
	const IMG_EXITUS = "http://localhost/rh_exitus/assets/img/original_exitus.png";
	const NOMBRE_REMITENTE = "Exitus Capital";
	const EMAIL_REMITENTE = "ccruz@exitus.com";
	const NOMBRE_EMPESA = "Exitus Capital";
	const WEB_EMPRESA = "https://exituscapital.com/";
	




	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCANDIDATOS = 3;
	const MVACANTES = 4;
	const MPOSTULACIONES = 5;
	const MDEPARTAMENTOS = 6;
	
	



	


 ?>