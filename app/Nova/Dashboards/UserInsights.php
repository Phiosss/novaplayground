<?php

namespace App\Nova\Dashboards;

use Laravel\Nova\Dashboard;
use App\Nova\Metrics\TotalUsers;
use App\Nova\Metrics\UsersPerMinutes;
use app\Nova\Metrics\CoursesPerType;
use Acme\Analytics\Analytics;
class UserInsights extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            (new Analytics)->currentVisitors(),
            new TotalUsers,
            new UsersPerMinutes,
            new CoursesPerType,
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'user-insights';
    }
}
