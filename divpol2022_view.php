<?php
// This script and data application were generated by AppGini 22.14
// Download AppGini for free from https://bigprof.com/appgini/download/

	include_once(__DIR__ . '/lib.php');
	@include_once(__DIR__ . '/hooks/divpol2022.php');
	include_once(__DIR__ . '/divpol2022_dml.php');

	// mm: can the current member access this page?
	$perm = getTablePermissions('divpol2022');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'divpol2022';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`divpol2022`.`PUESTO`" => "PUESTO",
		"`divpol2022`.`dd`" => "dd",
		"`divpol2022`.`mm`" => "mm",
		"`divpol2022`.`zz`" => "zz",
		"`divpol2022`.`pp`" => "pp",
		"`divpol2022`.`departamento`" => "departamento",
		"`divpol2022`.`municipio`" => "municipio",
		"`divpol2022`.`nompue`" => "nompue",
		"`divpol2022`.`direccion`" => "direccion",
		"`divpol2022`.`mujeres`" => "mujeres",
		"`divpol2022`.`hombres`" => "hombres",
		"`divpol2022`.`total`" => "total",
		"`divpol2022`.`mesas`" => "mesas",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => 1,
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10,
		11 => 11,
		12 => 12,
		13 => 13,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`divpol2022`.`PUESTO`" => "PUESTO",
		"`divpol2022`.`dd`" => "dd",
		"`divpol2022`.`mm`" => "mm",
		"`divpol2022`.`zz`" => "zz",
		"`divpol2022`.`pp`" => "pp",
		"`divpol2022`.`departamento`" => "departamento",
		"`divpol2022`.`municipio`" => "municipio",
		"`divpol2022`.`nompue`" => "nompue",
		"`divpol2022`.`direccion`" => "direccion",
		"`divpol2022`.`mujeres`" => "mujeres",
		"`divpol2022`.`hombres`" => "hombres",
		"`divpol2022`.`total`" => "total",
		"`divpol2022`.`mesas`" => "mesas",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`divpol2022`.`PUESTO`" => "PUESTO",
		"`divpol2022`.`dd`" => "Dd",
		"`divpol2022`.`mm`" => "Mm",
		"`divpol2022`.`zz`" => "Zz",
		"`divpol2022`.`pp`" => "Pp",
		"`divpol2022`.`departamento`" => "Departamento",
		"`divpol2022`.`municipio`" => "Municipio",
		"`divpol2022`.`nompue`" => "Nompue",
		"`divpol2022`.`direccion`" => "Direccion",
		"`divpol2022`.`mujeres`" => "Mujeres",
		"`divpol2022`.`hombres`" => "Hombres",
		"`divpol2022`.`total`" => "Total",
		"`divpol2022`.`mesas`" => "Mesas",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`divpol2022`.`PUESTO`" => "PUESTO",
		"`divpol2022`.`dd`" => "dd",
		"`divpol2022`.`mm`" => "mm",
		"`divpol2022`.`zz`" => "zz",
		"`divpol2022`.`pp`" => "pp",
		"`divpol2022`.`departamento`" => "departamento",
		"`divpol2022`.`municipio`" => "municipio",
		"`divpol2022`.`nompue`" => "nompue",
		"`divpol2022`.`direccion`" => "direccion",
		"`divpol2022`.`mujeres`" => "mujeres",
		"`divpol2022`.`hombres`" => "hombres",
		"`divpol2022`.`total`" => "total",
		"`divpol2022`.`mesas`" => "mesas",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = [];

	$x->QueryFrom = "`divpol2022` ";
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
	$x->ScriptFileName = 'divpol2022_view.php';
	$x->TableTitle = 'Divpol2022';
	$x->TableIcon = 'table.gif';
	$x->PrimaryKey = '`divpol2022`.`PUESTO`';

	$x->ColWidth = [150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['PUESTO', 'Dd', 'Mm', 'Zz', 'Pp', 'Departamento', 'Municipio', 'Nompue', 'Direccion', 'Mujeres', 'Hombres', 'Total', 'Mesas', ];
	$x->ColFieldName = ['PUESTO', 'dd', 'mm', 'zz', 'pp', 'departamento', 'municipio', 'nompue', 'direccion', 'mujeres', 'hombres', 'total', 'mesas', ];
	$x->ColNumber  = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/divpol2022_templateTV.html';
	$x->SelectedTemplate = 'templates/divpol2022_templateTVS.html';
	$x->TemplateDV = 'templates/divpol2022_templateDV.html';
	$x->TemplateDVP = 'templates/divpol2022_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HasCalculatedFields = false;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// hook: divpol2022_init
	$render = true;
	if(function_exists('divpol2022_init')) {
		$args = [];
		$render = divpol2022_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: divpol2022_header
	$headerCode = '';
	if(function_exists('divpol2022_header')) {
		$args = [];
		$headerCode = divpol2022_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once(__DIR__ . '/header.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/header.php');
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: divpol2022_footer
	$footerCode = '';
	if(function_exists('divpol2022_footer')) {
		$args = [];
		$footerCode = divpol2022_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once(__DIR__ . '/footer.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/footer.php');
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}
