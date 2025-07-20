<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\News;
use App\Models\Service;
use App\Models\SupplyChain;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class GeneralWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $lastWeek = Carbon::today()->subDays(7);

        return [
            Stat::make('Articles', Article::count())
                ->description(Article::where('created_at', '>=', $lastWeek)->count() . ' Was added last week')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success')
                ->chart([2, 5, 4, 6, 7, 8, 6]),

            Stat::make('News', News::count())
                ->description(News::where('created_at', '>=', $lastWeek)->count() . ' Was added last week')
                ->descriptionIcon('heroicon-m-rectangle-group')
                ->color('info')
                ->chart([1, 2, 2, 3, 2, 4, 3]),

            Stat::make('Services', Service::count())
                ->description(Service::where('created_at', '>=', $lastWeek)->count() . ' Was added last week')
                ->descriptionIcon('heroicon-m-bolt')
                ->color('warning')
                ->chart([4, 3, 5, 2, 6, 7, 8]),

            Stat::make('Supply Chain', SupplyChain::count())
                ->description(SupplyChain::where('created_at', '>=', $lastWeek)->count() . ' Was added last week')
                ->descriptionIcon('heroicon-m-clipboard-document-check')
                ->color('danger')
                ->chart([3, 2, 4, 5, 6, 4, 3]),
        ];
    }
}
