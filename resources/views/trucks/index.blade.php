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
        <th width="320px">ID</th>
        <th width="320px">Unit Numbers</th>
        <th width="320px">Year</th>
        <th width="320px">Notes</th>
        <th width="320px">Created At</th>
        <th width="320px">Updated At</th>
        <th width="550px">Action</th>
        </tr>
    @foreach ($truck as $truck)
    <tr>
        <td>{{ ( $truck->id ) ?? ''}}</td>
        <td>{{ ( $truck->Unit_Number ) ?? ''}}</td>
        <td>{{ ( $truck->Year ) ?? '' }}</td>
        <td>{{ ( $truck->Notes ) ?? '' }}</td>
        <td>{{ ( $truck->created_at ?? '') }}</td>
        <td>{{ ( $truck->updated_at ?? '') }}</td>
    <td>
    <form action="{{ route ('delete', $truck->id) }}" method="POST">
        <a class="btn btn-info" href="{{ route('home') }}">Show</a>
        <a class="btn btn-primary" href="{{ route('edit', $truck->id) }}">Edit</a>

        @csrf
        @method("DELETE")

        {{-- <a onclick="event.preventDefault()" class="btn btn-danger" href="{{ route('home') }}">Delete</a> --}}
        <button type="submit" class="btn btn-danger">Delete</button>
    <form>
    </td>
</tr>
@endforeach
</table>
@endsection