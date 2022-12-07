@extends('admin.food.layouts.app')

@section('content')

<div class="row no-gutters" style="width: 100%; height: 100vh;">
    <div class="col-md-12">
        <div class="col-md-12" style="position: relative; left: 50%; top: 50%; transform: translateY(-50%) translateX(-50%); text-align: center;">
            <div>
                <div><h3>{{ __('Update Food') }}</h3></div>
                <br><br>
                <div>
                    <form method="POST" action="{{ route('food.update',$data) }}">
                        @csrf
                        @method("PUT")
                        <div class="row mb-4">
                        <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name" placeholder="Enter name food" autofocus value="{{ old('name', $data->name) }}">
                            </div>
                        </div>
                        <div class="row mb-4">
                        <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <textarea class="form-control form-control-lg  @error('description') is-invalid @enderror" name="description" id="description"  placeholder="Enter a description food" rows="3">{{$data->description}}</textarea>                        
                            </div>
                        </div>
                        <div class="row mb-4">
                        <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input class="input-group date form-control form-control-lg  @error('data') is-invalid @enderror" type="date" name="expiration_date" value="{{ old('expiration_date', $data->expiration_date->format('Y-m-d')) }}">                       
                            </div>
                        </div>
                        <div class="row mb-4">
                        <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input type="file" id="image" class="form-control-file form-control-lg  @error('image') is-invalid @enderror" name="image" value="{{ old('image')}}" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                         <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input type="text" class="form-control form-control-lg  @error('price') is-invalid @enderror" placeholder="Enter price food" name="price" value="{{ old('price', $data->price) }}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <input id="number_one" type="number" class="form-control form-control-lg" name="number_one" value="{{ old('number_one', $data->number_one) }}" required placeholder="Enter a number">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <input id="number_two" type="number" class="form-control form-control-lg" name="number_two" value="{{ old('number_two', $data->number_two) }}" required placeholder="Enter an outher number">
                                    </div>
                                </div>
                    <div class="row mb-4">
                            <div class="col-md-12">
                                <button type="submit" class="col-4 btn btn-lg btn-primary">
                                    {{ __('Update Food') }}
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
