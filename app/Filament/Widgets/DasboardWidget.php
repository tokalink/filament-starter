<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\Widget;

class DasboardWidget extends Widget
{
    protected static string $view = 'filament.widgets.dasboard-widget';
    protected static ?string $title = 'Dasboard';
    // users
    public $users = 0;

    // mount
    public function mount()
    {
        $this->users = User::count()  ?? 0;
    }
}
