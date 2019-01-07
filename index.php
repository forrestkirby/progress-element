<?php

return [

	// Module name
	'name' => 'forrestkirby/progress',

	// How this element is referenced inside the builder
	'builder' => 'progress',

	// Render this element on the website
	'render' => function ($element) {
		return $this->app->view->render("{$this->path}/template.php", ['element' => $element]);
	},

	'events' => [

		'builder.init' => function ($elements, $builder) {
			$elements->set('progress', json_decode(file_get_contents("{$this->path}/element.json"), true));
		}

	],

	'config' => [

		'element' => true

	]

];
