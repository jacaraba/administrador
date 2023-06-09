<?php
// This script and data application were generated by AppGini 23.11
// Download AppGini for free from https://bigprof.com/appgini/download/

	include_once(__DIR__ . '/lib.php');
	@include_once(__DIR__ . '/hooks/amigos.php');
	include_once(__DIR__ . '/amigos_dml.php');

	// mm: can the current member access this page?
	$perm = getTablePermissions('amigos');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'amigos';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`amigos`.`LLAVE`" => "LLAVE",
		"`amigos`.`ESLIDER`" => "ESLIDER",
		"IF(    CHAR_LENGTH(`lideres1`.`CEDULA`) || CHAR_LENGTH(`lideres1`.`NOMBRE`), CONCAT_WS('',   `lideres1`.`CEDULA`, ' - ', `lideres1`.`NOMBRE`), '') /* LIDER */" => "LIDER",
		"`amigos`.`CEDULA`" => "CEDULA",
		"`amigos`.`NOMBRE`" => "NOMBRE",
		"IF(    CHAR_LENGTH(`divpol20221`.`PUESTO`) || CHAR_LENGTH(`divpol20221`.`nompue`), CONCAT_WS('',   `divpol20221`.`PUESTO`, ' - ', `divpol20221`.`nompue`), '') /* PUESTO */" => "PUESTO",
		"`amigos`.`NOMPUESTO`" => "NOMPUESTO",
		"`amigos`.`MESA`" => "MESA",
		"`amigos`.`CELULAR`" => "CELULAR",
		"`amigos`.`DIRECCION`" => "DIRECCION",
		"`amigos`.`CORREO`" => "CORREO",
		"`amigos`.`OBSERVACIONES`" => "OBSERVACIONES",
		"`amigos`.`ESTADO`" => "ESTADO",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`amigos`.`LLAVE`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
		7 => 7,
		8 => '`amigos`.`MESA`',
		9 => '`amigos`.`CELULAR`',
		10 => 10,
		11 => 11,
		12 => 12,
		13 => 13,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`amigos`.`LLAVE`" => "LLAVE",
		"`amigos`.`ESLIDER`" => "ESLIDER",
		"IF(    CHAR_LENGTH(`lideres1`.`CEDULA`) || CHAR_LENGTH(`lideres1`.`NOMBRE`), CONCAT_WS('',   `lideres1`.`CEDULA`, ' - ', `lideres1`.`NOMBRE`), '') /* LIDER */" => "LIDER",
		"`amigos`.`CEDULA`" => "CEDULA",
		"`amigos`.`NOMBRE`" => "NOMBRE",
		"IF(    CHAR_LENGTH(`divpol20221`.`PUESTO`) || CHAR_LENGTH(`divpol20221`.`nompue`), CONCAT_WS('',   `divpol20221`.`PUESTO`, ' - ', `divpol20221`.`nompue`), '') /* PUESTO */" => "PUESTO",
		"`amigos`.`NOMPUESTO`" => "NOMPUESTO",
		"`amigos`.`MESA`" => "MESA",
		"`amigos`.`CELULAR`" => "CELULAR",
		"`amigos`.`DIRECCION`" => "DIRECCION",
		"`amigos`.`CORREO`" => "CORREO",
		"`amigos`.`OBSERVACIONES`" => "OBSERVACIONES",
		"`amigos`.`ESTADO`" => "ESTADO",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`amigos`.`LLAVE`" => "LLAVE",
		"`amigos`.`ESLIDER`" => "ES LIDER:",
		"IF(    CHAR_LENGTH(`lideres1`.`CEDULA`) || CHAR_LENGTH(`lideres1`.`NOMBRE`), CONCAT_WS('',   `lideres1`.`CEDULA`, ' - ', `lideres1`.`NOMBRE`), '') /* LIDER */" => "LIDER",
		"`amigos`.`CEDULA`" => "CEDULA",
		"`amigos`.`NOMBRE`" => "NOMBRE",
		"IF(    CHAR_LENGTH(`divpol20221`.`PUESTO`) || CHAR_LENGTH(`divpol20221`.`nompue`), CONCAT_WS('',   `divpol20221`.`PUESTO`, ' - ', `divpol20221`.`nompue`), '') /* PUESTO */" => "PUESTO",
		"`amigos`.`NOMPUESTO`" => "NOMBRE DEL PUESTO",
		"`amigos`.`MESA`" => "MESA",
		"`amigos`.`CELULAR`" => "CELULAR",
		"`amigos`.`DIRECCION`" => "DIRECCION",
		"`amigos`.`CORREO`" => "CORREO",
		"`amigos`.`OBSERVACIONES`" => "OBSERVACIONES",
		"`amigos`.`ESTADO`" => "ESTADO",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`amigos`.`LLAVE`" => "LLAVE",
		"`amigos`.`ESLIDER`" => "ESLIDER",
		"IF(    CHAR_LENGTH(`lideres1`.`CEDULA`) || CHAR_LENGTH(`lideres1`.`NOMBRE`), CONCAT_WS('',   `lideres1`.`CEDULA`, ' - ', `lideres1`.`NOMBRE`), '') /* LIDER */" => "LIDER",
		"`amigos`.`CEDULA`" => "CEDULA",
		"`amigos`.`NOMBRE`" => "NOMBRE",
		"IF(    CHAR_LENGTH(`divpol20221`.`PUESTO`) || CHAR_LENGTH(`divpol20221`.`nompue`), CONCAT_WS('',   `divpol20221`.`PUESTO`, ' - ', `divpol20221`.`nompue`), '') /* PUESTO */" => "PUESTO",
		"`amigos`.`NOMPUESTO`" => "NOMPUESTO",
		"`amigos`.`MESA`" => "MESA",
		"`amigos`.`CELULAR`" => "CELULAR",
		"`amigos`.`DIRECCION`" => "DIRECCION",
		"`amigos`.`CORREO`" => "CORREO",
		"`amigos`.`OBSERVACIONES`" => "OBSERVACIONES",
		"`amigos`.`ESTADO`" => "ESTADO",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = ['LIDER' => 'LIDER', 'PUESTO' => 'PUESTO', ];

	$x->QueryFrom = "`amigos` LEFT JOIN `lideres` as lideres1 ON `lideres1`.`CEDULA`=`amigos`.`LIDER` LEFT JOIN `divpol2022` as divpol20221 ON `divpol20221`.`PUESTO`=`amigos`.`PUESTO` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm['view'] == 0 ? 1 : 0);
	$x->AllowDelete = $perm['delete'];
	$x->AllowMassDelete = (getLoggedAdmin() !== false);
	$x->AllowInsert = $perm['insert'];
	$x->AllowUpdate = $perm['edit'];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = (getLoggedAdmin() !== false);
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowPrintingDV = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation['quick search'];
	$x->ScriptFileName = 'amigos_view.php';
	$x->RedirectAfterInsert = 'https://wsp.registraduria.gov.co/censo/consultar';
	$x->TableTitle = 'Amigos';
	$x->TableIcon = 'table.gif';
	$x->PrimaryKey = '`amigos`.`LLAVE`';

	$x->ColWidth = [150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['LLAVE', 'ES LIDER:', 'LIDER', 'CEDULA', 'NOMBRE', 'PUESTO', 'NOMBRE DEL PUESTO', 'MESA', 'CELULAR', 'DIRECCION', 'ESTADO', ];
	$x->ColFieldName = ['LLAVE', 'ESLIDER', 'LIDER', 'CEDULA', 'NOMBRE', 'PUESTO', 'NOMPUESTO', 'MESA', 'CELULAR', 'DIRECCION', 'ESTADO', ];
	$x->ColNumber  = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 13, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/amigos_templateTV.html';
	$x->SelectedTemplate = 'templates/amigos_templateTVS.html';
	$x->TemplateDV = 'templates/amigos_templateDV.html';
	$x->TemplateDVP = 'templates/amigos_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HasCalculatedFields = false;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// hook: amigos_init
	$render = true;
	if(function_exists('amigos_init')) {
		$args = [];
		$render = amigos_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: amigos_header
	$headerCode = '';
	if(function_exists('amigos_header')) {
		$args = [];
		$headerCode = amigos_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once(__DIR__ . '/header.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/header.php');
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: amigos_footer
	$footerCode = '';
	if(function_exists('amigos_footer')) {
		$args = [];
		$footerCode = amigos_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once(__DIR__ . '/footer.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/footer.php');
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}
