@extends('layout.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{date('y/m/d' , strtotime($student->created_at))}}</td>
          </tr>
        @endforeach
     
    </tbody>
  </table>
@endsection