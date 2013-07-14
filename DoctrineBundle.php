<?php
/**
 * Class DoctrineBundle
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 13.07.13
 */
namespace Flame\CMS\DoctrineBundle;

use Flame\Bundles\Bundle;
use Kdyby\Console\DI\ConsoleExtension;
use Kdyby\Doctrine\DI\OrmExtension;
use Kdyby\Events\DI\EventsExtension;

class DoctrineBundle extends Bundle
{

	/**
	 * @return array
	 */
	public function getConfigFiles()
	{
		return array(
			$this->getCurrentPath() . '/config/config.neon'
		);
	}

	protected function beforeSetUp()
	{
		ConsoleExtension::register($this->getConfigurator());
		OrmExtension::register($this->getConfigurator());
		EventsExtension::register($this->getConfigurator());
	}
}