<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource\Widgets\StatsOverview;
use App\Filament\Resources\PostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
