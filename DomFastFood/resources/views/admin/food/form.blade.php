@extends('admin.food.layouts.app')

@section('content')

<div class="row no-gutters" style="width: 100%; height: 100vh;">
    <div class="col-md-12">
        <div class="col-md-12" style="position: relative; left: 50%; top: 50%; transform: translateY(-50%) translateX(-50%); text-align: center;">
            <div>
                <div><h3>{{ __('Register Food') }}</h3></div>
                <br><br>
                <div>
                    <form method="POST" action="{{ route('food.store') }}">
                        @csrf
                        <div class="row mb-4">
                        <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control form-control-lg" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter name food" autofocus>
                            </div>
                        </div>
                        <div class="row mb-4">
                        <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <textarea class="form-control form-control-lg" placeholder="Enter a description food" name="description" rows="3"></textarea>                        
                            </div>
                        </div>
                        <div class="row mb-4">
                        <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input class="input-group date form-control form-control-lg" type="date" name="expiration_date">                       
                            </div>
                        </div>
                        <div class="row mb-4">
                        <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input type="file" class="form-control-file form-control-lg" name="image">
                            </div>
                        </div>
                        <div class="row mb-4">
                         <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input type="text" class="form-control form-control-lg" placeholder="Enter price food" name="price">
                            </div>
                        </div>
                    <div class="row mb-4">
                            <div class="col-md-12">
                                <button type="submit" class="col-4 btn btn-lg btn-primary">
                                    {{ __('Register Food') }}
                                </button>
                            </div>
                            
                    </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
