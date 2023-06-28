@extends('trucks.layout')
@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
  <div class="pull-left">

    <h2>Create</h2>

  </div>

  <div class="pull-right">

    <a class="btn btn-primary" href="{{ route('home') }}" method="POST">Back</a>

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

<form action="{{ route('store') }}" method="GET">
    @csrf

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Unit Number</strong>
            <input type="text" name="unitnum" class="form-controll" placeholder="Unit Number">
        </div>
    </div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Year</strong>
        <input type="date" name="year" class="form-controll" placeholder="Year">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Notes</strong>
        <input type="text" name="notes" class="form-controll" placeholder="Notes">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

</form>
@endsection