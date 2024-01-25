<div class="mt-14 min-h-[calc(100vh-56px)] items-center bg-gray-100 flex flex-col w-full">
    <div class="flex flex-col self-start px-8 mt-8 w-full">
        <span class="font-bold text-lg pl-8">
            Accounts:
        </span>
        @if($accounts)
        @foreach($accounts as $account)
            <div wire:click="selectAccount({{ json_encode($account->id) }})" class="mt-4 ml-2 px-2 py-4 bg-white border-2 rounded-lg w-72 overflow-none capitalize grid grid-cols-3 cursor-pointer hover:shadow-md">
                <span>Bank</span>
                <span class="col-span-2">:{{$account->bank->name}}</span>
                <span>Account</span>
                <span class="col-span-2">:{{$account->account_number}}</span>
                <span>Type</span>
                <span class="col-span-2">:{{$account->account_type}}</span>
            </div>
        @endforeach
            @if($selectedAccount && $transactions)
                <table class="w-full mt-8">
                    @foreach($tableHeaders as $header)
                        <th class="bg-white border-b-2 border-gray-200">{{$header}}</th>
                    @endforeach
                    <tbody>
                        @foreach($transactions as $transaction)
                            <tr class="text-center ml-0 bg-gray-50">
                                <td>{{$transaction->date}}</td>
                                <td>{{$transaction->descriptor_one}}</td>
                                <td>${{$transaction->amount}}</td>
                                <td>{{$transaction->currency}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        @else
            <div>
                No Accounts To Show...
            </div>
        @endif
    </div>
</div>
