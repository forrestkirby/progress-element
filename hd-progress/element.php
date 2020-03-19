<?php

namespace YOOtheme;

return [

	'transforms' => [

		'render' => function ($node) {

			/**
			 * @var Metadata $metadata
			 */
			$metadata = app(Metadata::class);

			$metadata->set('script:builder-hd-progress', ['src' => Path::get('./js/hd-progress.js')]);

		},

	],

	'updates' => [

		//

	],

];
