@extends('layouts.includes.app')
@section('content')
<section id="main-content">
  
	<section class="wrapper">

		<div class="table-agile-info">
    <div class="container mt-3">                   
  <ul class="breadcrumb">
  {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Contact</a></li>
    <li class="breadcrumb-item active">contact list</li> --}}
  </ul>
</div>
 <div class="panel panel-default">
    <div class="panel-heading">
     contact list
    </div>
    <div>
   
    {{-- <button><a href="/contact">Create Contact  </a></button> --}}
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">id</th>
            
            <th>Name</th>
            <th data-breakpoints="xs">Email</th>
            <th data-breakpoints="xs">subject</th>
            <th data-breakpoints="xs">Message</th>
            <th data-breakpoints="xs">Phone</th>
           

          </tr>
        </thead>
        <tbody>
            @foreach($abc as $contact1)
          <!-- <tr data-expanded="true"> -->
           
          <tr>
            <td>{{$contact1->id}}</td>
            <td>{{$contact1->name}}</td>
            <td>{{$contact1->email}}</td>
            <td>{{$contact1->phone}}</td>
            <td>{{$contact1->message}}</td>
            
            <td><button><a href="/edit_contact/{{$contact1->id}}"><i class='fa fa-edit' aria-hidden='true' style='font-size:20px;color:green' ></i></a></button>
            <button><a href="/delete_contact/{{$contact1->id}}"><i class='fa fa-trash' aria-hidden='true' style='font-size:20px;color:red' ></i></a></button></td>
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
  </section>
</section>

   
    @endsection







