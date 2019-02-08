@extends('layouts.layout')
@section('title','Add Persons')
@section('content')

    <div class="page-content fade-in-up">
        <div class="ibox">
            <form action="/add-person" method="post">
                @csrf
                <div class="ibox-head">
                    <div class="ibox-title">Add Persons</div>
                </div>
                <div class="ibox-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label>Full Name</label>
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Enter Full Name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label>Phone number</label>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">+92<i class="fa fa-angle-down ml-1"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:;">+92</a>
                                            <a class="dropdown-item" href="javascript:;">+61</a>
                                            <a class="dropdown-item" href="javascript:;">+1</a>
                                            <a class="dropdown-item" href="javascript:;">+7</a>
                                        </div>
                                    </div>
                                    <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" type="number" name="phone" placeholder="Enter Phone">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Date of Birth</label>
                                <input class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" type="date" name="dob" placeholder="Enter Date of Birth">
                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label>CNIC Number</label>
                                <div class="input-group-icon input-group-icon-left">
                                    <span class="input-icon input-icon-left"><i class="ti-lock"></i></span>
                                    <input class="form-control{{ $errors->has('cnic') ? ' is-invalid' : '' }}" type="text" name="cnic" placeholder="Enter CNIC Number">
                                    @if ($errors->has('cnic'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cnic') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Location: City</label>
                                <div class="input-group-icon input-group-icon-left">
                                    <span class="input-icon input-icon-left"><i class="ti-location-pin font-16"></i></span>
                                    <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" name="city" placeholder="Enter City">
                                    @if($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Institute</label>
                                <div class="input-group-icon input-group-icon-left">
                                    <span class="input-icon input-icon-left"><i class="ti-home font-16"></i></span>
                                    <input class="form-control{{ $errors->has('institute') ? ' is-invalid' : '' }}" type="text" name="institute" placeholder="Enter Institute">
                                    @if($errors->has('institute'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('institute') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>


                            <div class="form-group mb-0">
                                <label>Room</label>
                                <div class="btn-group bootstrap-select form-control">
                                   <select class="selectpicker form-control" name="room_id" tabindex="-98">
                                       @foreach($roomlists=App\Room::all() as $roomlist)
                                       <option value="{{$roomlist->id}}">{{$roomlist->name}} ( {{$roomlist->states}}; A\C: {{$roomlist->hasac}})</option>
                                       @endforeach
                                    </select></div>

                            </div>


                </div>
                <div class="ibox-footer">
                    <button class="btn btn-primary mr-2" type="submit">Submit</button>
                    <button class="btn btn-outline-secondary" type="reset">Cancel</button>
                </div>
            </form>
        </div>

    </div>

@stop