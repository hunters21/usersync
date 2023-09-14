<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Adam Kobke <akobke@yahoo.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\UserSync\Tests\Unit\Controller;

use OCA\UserSync\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
