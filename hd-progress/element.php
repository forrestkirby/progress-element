<?php

use YOOtheme\Util\Arr;

return [

	'transforms' => [

		'render' => function ($node, array $params) use ($file) {

			/**
			 * @var $app
			 * @var $theme
			 * @var $builder
			 */
			extract($params);

			$app['scripts']->add('builder-hd-progress', "{$file['dirname']}/js/hd-progress.js", [], ['defer' => true]);

		},

	],

	'updates' => [

		//

	],

];