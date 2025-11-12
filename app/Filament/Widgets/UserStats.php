<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStats extends BaseWidget
{
    protected function getCards(): array
    {
        $totalUsers = User::count();

        // Example: users active in last 7 days
        $activeUsers = User::where('last_login_at', '>=', now()->subDays(7))->count();

        return [
            Stat::make('Total Users', $totalUsers)
                ->description('All registered users')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('success'),

            Stat::make('Active Users (7 days)', $activeUsers)
                ->description('Users who logged in recently')
                ->descriptionIcon('heroicon-o-bolt')
                ->color('primary'),
        ];
    }
}
