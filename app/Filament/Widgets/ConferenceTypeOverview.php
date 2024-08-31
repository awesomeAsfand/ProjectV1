<?php

namespace App\Filament\Widgets;

use App\Models\Conference;
use App\Models\Speaker;
use App\Models\Talk;
use App\Models\Venue;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ConferenceTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Conferences',Conference::query()->count()),
            Stat::make('Total Speakers',Speaker::query()->count()),
            Stat::make('Total Venues',Venue::query()->count()),
            Stat::make('Total Talks',Talk::query()->count()),
        ];
    }
}

