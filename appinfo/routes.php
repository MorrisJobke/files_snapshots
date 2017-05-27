<?php
/**
 * @copyright Copyright (c) 2017 Robin Appelman <robin@icewind.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Files_Snapshots\AppInfo;

$application = new Application();
$application->registerRoutes($this, [
	'routes' => [
		[
			'name' => 'Admin#testSettings',
			'url' => '/settings/test',
			'verb' => 'POST',
		],
		[
			'name' => 'Admin#save',
			'url' => '/settings/save',
			'verb' => 'POST',
		],
		[
			'name' => 'Version#get',
			'url' => '/versions',
			'verb' => 'GET',
		],
		[
			'name' => 'Version#download',
			'url' => '/download',
			'verb' => 'GET',
		],
	],
]);
