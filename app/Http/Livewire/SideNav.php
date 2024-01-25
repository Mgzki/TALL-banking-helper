<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class SideNav extends Component
{
    public bool $isExpanded = true;
    public string $currentRoute;
    public array $routes;

    public function mount()
    {
        $this->routes = ['Home', 'Banks', 'Accounts'];
        $this->currentRoute = 'Home';
    }

    protected $listeners = [
        'toggleSideNav'
    ];

    public function toggleSideNav(): void
    {
        $this->isExpanded = !$this->isExpanded;
    }

    public function toggleNavigation(): void
    {
        $this->isExpanded = !$this->isExpanded;
        $this->emit('toggleSideNav');
    }

    public function render(): View
    {
        return view('livewire.side-nav');
    }
}
