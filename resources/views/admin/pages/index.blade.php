@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Registrar</h5>
                <h6 class="card-subtitle mb-2 text-muted">Pending Registrations</h6>
                @if(count($users)>0)
                    <div id="table_container" style="overflow-x:auto;">
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                                <th>Name</th>
                                <th>Registration Date</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i')}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <input type="button" class=" btn btn-success" value="✔" />
                                                <input type="button" class=" btn btn-danger" value="×" />
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Financial</h5>
                <h6 class="card-subtitle mb-2 text-muted">Pending Payments</h6>
                 @if(count($users)>0)
                    <div id="table_container" style="overflow-x:auto;">
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                                <th>Name</th>
                                <th>Registration Date</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i')}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <input type="button" class=" btn btn-info" value="Prepay" />
                                                <input type="button" class=" btn btn-success" value="Checkout" />
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ManU</h5>
                <h6 class="card-subtitle mb-2 text-muted">No Description</h6>
                body
            </div>
        </div>
    </div>
</div>

@endsection