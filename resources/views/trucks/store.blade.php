@extends('trucks.layout')

@section('content')
<div class="pull-left">
    <h1>Task</h1>
</div>

<div class="row">
    <div class="col-lg-12-margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('create')}}">Create a Truck</a>
        </div>
    </div>
</div>

@if ($message = Session::get('successs'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
        <tr>
        <th width="320px">Unit Numbers</th>
        <th width="320px">Year</th>
        <th width="320px">Notes</th>
        <th width="320px">Action</th>
        </tr>
    @foreach ($trucks as $truck)
    <tr>
        <td>{{ ( $truck->id ) ?? ''}}</td>
        <td>{{ ( $truck->UnitNumber ) ?? ''}}</td>
        <td>{{ ( $truck->Year ) ?? '' }}</td>
        <td>{{ ( $truck->Notes ) ?? '' }}</td>
    </tr>
    <form action="{{ route ('delete', $truck) }}" method="POST">
        <a class="btn btn-info" href="{{ route('show', $truck) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('edit', $truck) }}">Edit</a>

        @csrf
        @method("DELETE")

        <button type="submit" class="btn btn-danger">Delete</button>
    <form>
    </td>
</tr>
@endforeach
</table>
@endsection