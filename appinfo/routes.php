<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Hunter Sanchez <hsanc053@fiu.edu>
// SPDX-License-Identifier: AGPL-3.0-or-later

return [
	'resources' => [
		'note' => ['url' => '/notes'],
		'note_api' => ['url' => '/api/0.1/notes']
	],
	'routes' => [
		['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
		['name' => 'note_api#preflighted_cors', 'url' => '/api/0.1/{path}',
			'verb' => 'OPTIONS', 'requirements' => ['path' => '.+']],
		['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
    		['name' => 'csv#getCSVContents', 'url' => '/getcsv', 'verb' => 'POST'],
	]
	
];
