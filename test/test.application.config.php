<?php
return array(
	'modules' => array(
		'MelisCore',
		'MelisFront',
		'MelisEngine',
		'MelisCms',
		'MelisCalendar',
		'MelisCmsNews',
		'MelisCmsPageHistoric',
		'MelisCmsProspects',
		'MelisCmsSlider',

	),
	'module_listener_options' => array(
		'module_paths' => array(
			'/module',
			'/module/MelisSites',
		),
		'config_glob_paths' => array(
			'config/autoload/global.php',
			'config/autoload/platforms/development.php',
		)
	),
);
