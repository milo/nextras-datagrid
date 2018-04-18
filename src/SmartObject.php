<?php

namespace Nextras\Datagrid;

use Nette;

if (trait_exists('Nette\SmartObject')) {
	abstract class SmartObject
	{
		use Nette\SmartObject;
	}
} else {
	abstract class SmartObject extends Nette\Object
	{
	}
}
