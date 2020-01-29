<?php

namespace Victordrnd\Activitylog\Test\Models;

use Victordrnd\Activitylog\Models\Activity;

class CustomDatabaseConnectionOnActivityModel extends Activity
{
    protected $connection = 'custom_connection_name';
}
