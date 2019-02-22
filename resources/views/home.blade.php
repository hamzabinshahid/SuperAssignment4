@extends('layouts.layout')
@section('title','Home')
@section('content')
<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">



    @if(session('success'))
        <div class="alert alert-primary alert-dismissable fade show has-icon"><i class="la la-check alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>{{session('success')}}</div>
    @endif
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">Persons</div>
                </div>
                <div class="ibox-body">
                    <ul class="media-list media-list-divider scroller mr-2" data-height="470px">
                        @foreach($persons as $person)
                        <li class="media">
                            <div class="media-body d-flex">
                                <div class="flex-1">
                                    <h5 class="media-heading">
                                        <a href="javascript:;">{{$person->name}}</a>
                                    </h5>
                                    <p class="font-13 text-light mb-1">Phone: {{$person->phone}} ; CNIC: {{$person->cnic}}</p>
                                    <p class="font-13 text-light mb-1">D.O.B: {{$person->dob}} ; Institute: {{$person->institute}}</p>
                                    <div class="d-flex align-items-center font-13">
                                        <a class="mr-2 text-success" href="javascript:;">Room: {{$person->room->name}}</a>
                                        <span class="text-muted">City: {{$person->city}}</span>
                                    </div>
                                </div>
                                <div class="text-right" style="width:100px;">
                                    <a href="edit-person/{{$person->id}}"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a href="person/{{$person->id}}" onclick="event.preventDefault();
                                                     document.getElementById('delete-person').submit();"><i class="ti-close mr-2"></i>Remove</a>
                                    <form id="delete-person" action="person/{{$person->id}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                    </form>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->
@stop