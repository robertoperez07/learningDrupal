<?php

namespace Drupal\test\Controller;
use Drupal\Core\Controller\ControllerBase;

class TestController extends ControllerBase {
	public function testing() {
		return array(
			'#title' => 'Test',
			'#markup' => 'This is my first Drupal 8 custom module.' 
		);
	}
}
?>