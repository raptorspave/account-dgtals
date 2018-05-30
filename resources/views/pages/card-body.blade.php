<div class="table-responsive">
    <div class="dataTables_wrapper no-footer">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Date</th>
                <th>Comment</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($income['transactions'] as $transaction)
            <tr>
                <th scope="row">{{ $transaction->date }}</th>
                <td class="comment">{{ $transaction->comment }}</td>
                <td>{{ $transaction->price }}
                    @if ($access_transactions['edit'])
                    <a data-date="{{ $transaction->modal_date }}" data-price="{{ $transaction->price }}" class="edit-transaction" href="/transaction/{{ $transaction->id }}/edit"><i class="fa fa-edit"></i></a>
                    @endif
                    @if ($access_transactions['delete'])
                    <a class="delete-transaction text-danger" href="/transaction/{{ $transaction->id }}/delete"><i class="fa fa-trash"></i></a>
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $income['transactions']->links('pagination.default') }}
    </div>
</div>