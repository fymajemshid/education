@extends('layouts.includes.app')
@section('content') 
    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/index">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact block -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Get In Touch</p>
                <h3 class="title-style">Contact Us</h3>
            </div>

            <div class="row contact-block">
                <div class="col-md-12 contact-right">
                    {{-- <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form"> --}}
                       
                         
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
    <!-- map -->
 
    <!-- //contact block -->

   @endsection