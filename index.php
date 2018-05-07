<?php

return [

	// Module name
	'name' => 'yootheme/progress',

	// How this element is referenced inside the builder
	'builder' => 'progress',

	// Render this element on the website
	'render' => function ($element) {
		return $this->app->view->render("{$this->path}/template.php", ['element' => $element]);
	},

	'events' => [

		'theme.admin' => function () {
			// Load the JavaScript that creates the elements settings in the builder
			$this->app->scripts->add('builder-progress', "{$this->path}/progress.js", 'customizer-builder');
	}

	],

	'config' => [

		'element' => true

	]

];
