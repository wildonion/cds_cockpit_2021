<?php
/**
 * This file is part of the Cockpit project.
 *
 * (c) Artur Heinze - π°πΆπ΄π½ππ΄πΉπΎ, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!COCKPIT_CLI) return;

CLI::writeln('Flushing cockpit/accounts data');


$app->storage->dropCollection('cockpit/accounts');
