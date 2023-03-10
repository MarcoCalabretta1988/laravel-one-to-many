@extends('layouts.app')

@section('title','Projects')

@section('content')

<section id="projects" >
   <header class="d-flex justify-content-between align-items-center py-3">
    <h1 class="text-white">Types:</h1>
    <a href="{{ route('admin.types.create')}}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add</a>
   </header>
   

    <table class="table table-dark table-striped ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Label</th>
            <th scope="col">Color</th>
            <th scope="col">Create At</th>
            <th scope="col">Update At</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($typess as $type)
            <tr>    
            <th scope="row">{{$type->id}}</th>
            <td>{{$type->label}}</td>
            <td>{{$type->color}}</td>
          </tr>
            @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-end align-items-center">
    
        @if($projects->hasPages())
        {{ $projects->links()}}
        @endif
      </div>
</section>
@endsection