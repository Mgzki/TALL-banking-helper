<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Illuminate\Routing\Route;
use Illuminate\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public $selectedAccount;
    public $transactions;
    public $tableHeaders = [
        'Date',
        'Descriptor',
        'Amount',
        'Currency'
    ];

    public function render(): View
    {
        return view('livewire.dashboard', [
            'accounts' => Account::query()
                ->where('user_id', auth()->user()->id)
                ->with(['bank:id,name'])
                ->get(),
        ])
            ->extends('layouts.app')
            ->section('content');
    }

    public function selectAccount($accountId): void
    {
        if (!empty($account = auth()->user()->accounts->find($accountId))) {
            $this->selectedAccount = $accountId;
            $this->transactions = $account->transactions;
        };
    }

    public function updatedSelectedAccount(): void
    {
        $this->message = 'WOW';
    }
}
