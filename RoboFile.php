<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks {

	/**
	 * Run all needed build tasks.
	 */
	public function build() {
		$this->say( 'Building theme...' );
	}
}
