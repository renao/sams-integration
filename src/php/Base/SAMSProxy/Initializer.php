<?php
namespace SAMSPlugin\Base\SAMSProxy;

class Initializer
{
	public static function init()
	{
		new AssociationsProxy();
	}
}