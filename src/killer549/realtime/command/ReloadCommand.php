<?php

/* Copyright (C) 2018-2020
 *
 *  ____  _____    _    _   _____ ___ __  __ _____
 * |  _ \| ____|  / \  | | |_   _|_ _|  \/  | ____|
 * | |_) |  _|   / _ \ | |   | |  | || |\/| |  _|
 * |  _ <| |___ / ___ \| |___| |  | || |  | | |___
 * |_| \_\_____/_/   \_\_____|_| |___|_|  |_|_____|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * link: https://github.com/photoncodes/RealTime
*/

declare(strict_types=1);

namespace killer549\realtime\command;

use pocketmine\command\CommandSender;

class ReloadCommand extends RealtimeCommands{
	public function __construct(){
		$this->setPermission("realtime.command.reload");
		$this->setDescription("Updates the settings to correspond to the files");
	}

	public function do(CommandSender $sender, array $args): void{
		RealtimeCommands::broadcastCommandMessage($sender, "Reloading realtime settings...");
		$this->getCore()->getSettings()->reload();
	}
}