@extends('layouts.account')

@section('container')
@if (is_array($incomes))
    @foreach ($incomes as $key => $income)
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4>{{ $income['name'] }} total income</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ $income['name'] }}</th>
                                        <th>USD</th>
                                        <th>Period</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">{{ $income['day']['crypto'] }}</th>
                                        <td>{{ $income['day']['usd'] }}</td>
                                        <td><span class="badge badge-primary">1 day</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ $income['week']['crypto'] }}</th>
                                        <td>{{ $income['week']['usd'] }}</td>
                                        <td><span class="badge badge-success">1 week</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ $income['month']['crypto'] }}</th>
                                        <td>{{ $income['month']['usd'] }}</td>
                                        <td><span class="badge badge-danger">1 month</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ $income['months']['crypto'] }}</th>
                                        <td>{{ $income['months']['usd'] }}</td>
                                        <td><span class="badge badge-warning">3 month</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ $income['halfyear']['crypto'] }}</th>
                                        <td>{{ $income['halfyear']['usd'] }}</td>
                                        <td><span class="badge badge-info">6 month</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ $income['year']['crypto'] }}</th>
                                        <td>{{ $income['year']['usd'] }}</td>
                                        <td><span class="badge badge-dark">1 year</span></td>
                                    </tr>
									<tr>
                                        <th scope="row">{{ $income['total']['crypto'] }}</th>
                                        <td>{{ $income['total']['usd'] }}</td>
                                        <td><span class="badge badge-pink">Total</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4>{{ $income['name'] }} transactions </h4>
                            @if ($access_transactions['add'])
                            <button data-currency="{{ $key }}" data-action="/transaction/{{ $farm_id }}/add" type="button" class="add-transaction btn btn-info btn-xs m-l-5 right-float"><i class="ti-plus"></i> Add</button>
                            <div class="right-float sweetalert m-t-15">
                            </div>
                            @endif
                        </div>
                        <div class="card-body">
                            @include('pages.card-body')
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    @endforeach
@else
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <h4>Транзакций не найдено!</h4>
                        <div class="card-title">
                            <button data-currency="1" data-action="/transaction/{{ $farm_id }}/add" type="button" class="add-transaction btn btn-info btn-xs m-l-5 right-float"><i class="ti-plus"></i> Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif
@endsection

@section('modal')
    @if ($access_transactions['add'])
	@include('parts.add-modal')
    @endif
    @if ($access_transactions['edit'])
	@include('parts.edit-modal')
    @endif
    @if ($access_transactions['delete'])
    @include('parts.delete-modal')
    @endif
@endsection