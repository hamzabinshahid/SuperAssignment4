@extends('layouts.layout')
@section('title','Room')
@section('content')
    <!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">



    @if(session('success'))
        <div class="alert alert-primary alert-dismissable fade show has-icon"><i class="la la-check alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>{{session('success')}}</div>
    @endif

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
                        @foreach ($rooms as $room)
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