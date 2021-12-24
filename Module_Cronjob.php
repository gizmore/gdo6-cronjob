<?php
namespace GDO\Cronjob;

use GDO\Core\GDO_Module;
use GDO\Date\GDT_Timestamp;
use GDO\Date\Time;

/**
 * Cronjob stuff.
 * 
 * @author gizmore
 * @version 6.11.0
 * @since 6.1.0
 */
class Module_Cronjob extends GDO_Module
{
	##############
	### Config ###
	##############
	public function getConfig()
	{
		return [
			GDT_Timestamp::make('last_run')->initialAgo(60),
		];
	}
	
	public function cfgLastRun()
	{
		return $this->getConfigVar('last_run');
	}
	
	public function setLastRun()
	{
		$this->saveConfigVar('last_run', Time::getDate());
	}
	
	##############
	### Module ###
	##############
	public function getClasses()
    {
        return [
            GDO_Cronjob::class,
        ];
    }
    
	public function onLoadLanguage()
	{
	    return $this->loadLanguage('lang/cronjob');
	}

	public function href_administrate_module()
	{
		return href('Cronjob', 'Cronjob');
	}
	
}
