@extends('trucks.layout')
@section('content')
 

<div class="row">
    <div class="col-lg-12 margin-tb"></div>

    <div class="pull-left">
        <h2>Edit</h2>
    </div>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home')}}">Back</a>
    </div>
</div>
</div>

@if($errors->any())

<div class="alert alert-danger">
    <strong>Where is an problems with inputs</strong>
<ul>

@foreach ($errors->all() as $error)

    <li>{{ $error }} </li>

@endforeach

</ul>
</div>
@endif

<form action="{{ route('update ', $truck) }}" method="POST">
    @csrf
@method('PUT')


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Unit Number</strong>
        <input type="text" name="unitnum" value="{{ $truck->unitnum}}" class="form-control" placeholder="Unit Number">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Year</strong>
        <input type="date" name="year" value="{{ $truck->year}}" class="form-control" placeholder="Year">
        </div>
    </div>

    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Notes</strong>
        <input type="text" name="notes" value="{{ $truck->notes}}" class="form-control" placeholder="Notes">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection