<?php
namespace GDO\Cronjob;

use GDO\Core\GDO;
use GDO\DB\GDT_AutoInc;
use GDO\DB\GDT_String;
use GDO\DB\GDT_Checkbox;
use GDO\DB\GDT_CreatedAt;

/**
 * This table holds info about the cronjob runnings.
 * Scheduled entries are added on each run.
 * 
 * @author gizmore
 * @version 6.11.0
 * @since 6.10.4
 */
final class GDO_Cronjob extends GDO
{
    public function gdoColumns()
    {
        return [
            GDT_AutoInc::make('cron_id'),
            GDT_String::make('cron_method')->ascii()->caseS()->notNull(),
        	GDT_CreatedAt::make('cron_started'),
        	GDT_Checkbox::make('cron_success'),
        ];
    }
    
}
