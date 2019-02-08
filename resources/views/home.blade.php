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
                        @foreach($persons = App\Person::all() as $person)
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
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">
                        <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-wallet"></i></span>Hotel Rooms</div>
                </div>
                <div class="ibox-body">

                    <div class="ibox-fullwidth-block">
                        <table class="table">
                            <thead class="thead-default thead-lg">
                            <tr>
                                <th class="pl-4">Name</th>
                                <th>Capacity</th>
                                <th>States</th>
                                <th class="pr-4">Has A/C</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($rooms=App\Room::all() as $room)
                            <tr>
                                <td class="pl-4">
                                    <div class="flexbox-b">
                                        <div>
                                            <h6 class="mb-1">{{$room->name}}</h6>
                                            <div>
                                               </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h4 class="font-strong text-light mb-0">{{$room->capacity}}</h4>
                                </td>
                                <td>
                                    <h4 class="font-strong text-primary mb-0">{{$room->states}}</h4>
                                </td>
                                <td class="pr-4">
                                    <h4 class="font-strong text-primary mb-0">{{$room->hasac}}</h4>
                                </td>
                                <td>
                                    <div class="text-left">
                                        <a href="edit-room/{{$room->id}}" class="mr-5"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                        <a href="room/{{$room->id}}" onclick="event.preventDefault();
                                                     document.getElementById('delete-room').submit();"><i class="ti-close mr-2"></i>Remove</a>
                                        <form id="delete-room" action="room/{{$room->id}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->
@stop