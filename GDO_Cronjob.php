<?php
namespace GDO\Cronjob;

use GDO\Core\GDO;
use GDO\DB\GDT_Name;
use GDO\DB\GDT_AutoInc;
use GDO\Date\GDT_DateTime;
use GDO\DB\GDT_Checkbox;

/**
 * This table holds info about the cronjob runnings.
 * @author gizmore
 * @version 6.10.6
 * @since 6.10.4
 */
final class GDO_Cronjob extends GDO
{
    public function gdoColumns()
    {
        return [
            GDT_AutoInc::make('cron_id'),
            GDT_Name::make('cron_method')->notNull(),
            GDT_DateTime::make('cron_scheduled'),
        	GDT_DateTime::make('cron_started'),
        	GDT_DateTime::make('cron_finished'),
        	GDT_Checkbox::make('cron_success'),
        ];
    }
    
}