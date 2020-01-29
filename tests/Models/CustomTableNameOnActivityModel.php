<?php

namespace Victordrnd\Activitylog\Test\Models;

use Victordrnd\Activitylog\Models\Activity;

class CustomTableNameOnActivityModel extends Activity
{
    protected $table = 'custom_table_name';
}
