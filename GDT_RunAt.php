<?php
namespace GDO\Cronjob;

use GDO\DB\GDT_String;

/**
 * A run-at syntax for cronjob entries.
 * 
 * @since 6.11.1
 */
final class GDT_RunAt extends GDT_String
{
	public $pattern = "#([*/0-9]+\\s*){5}#";
	
}
