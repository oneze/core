<?php
/**
 * ownCloud - App Settings
 * @author Raghu Nayyar
 * @copyright 2013 Raghu Nayyar <raghu.nayyar.007@gmail.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
?>

<ul class="applist">
	<li>
		<a class="app-external" target="_blank" href="http://owncloud.org/dev">
			<?php p($l->t('Add your App'));?> 
		…</a>
	</li>
	<loading></loading>
	<li ng-repeat="app in allapps.data">
		<a ng-click="selectApp(
			app.id,app.name,app.author,
			app.description,app.lisence,
			app.require,app.version)">
			<span class="app-name">{{ app.name }}</span>
			<!--Todo : Change this to display whether app is 3rdParty or not-->
			<span class="shipping">{{ !app.shipped }}</span>
		</a>
	</li>
	<li>
		<a class="app-external" target="_blank" href="http://apps.owncloud.com">
			<?php p($l->t('More Apps'));?>
			 …</a>
	</li>
</ul>