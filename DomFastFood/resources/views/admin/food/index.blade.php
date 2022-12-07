@extends('admin.food.layouts.app')


@section('content')

<div class="row no-gutters" style="width: 100%; height: 100vh;">
<div class="col-md-12">
    <div class="col-md-12" style="position: relative; left: 50%; top: 50%; transform: translateY(-50%) translateX(-50%); text-align: center;">
        <div>
            <div><h3>{{ __('List Foods') }}</h3></div>
            <br><br>
            <div>
            
            <!-- <div class="box-body">
            <form action="/produtos/pesquisa" method="GET">
                <div class="form-group">
                <div class="col-md-1"></div>
                    <div class="col-md-4 d-flex">
                        <input type="text" class="form-control" name="name" value="{{'name'}}" id="name" placeholder="Inform name food">
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                    </div>
                    <div class="col-md-4">
                                            
                    </div>
                </div>
            </form>
        </div> -->
            <div class="row mb-4">
                <div class="col-md-1"></div>
                    <div class="col-md-10">

                    <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Nº</th>
                                <th scope="col">Name</th>
                                <th scope="col">Desciption</th>
                                <th scope="col">Expiration Date</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Outhers Services</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                                @foreach ($list as $item)
                                    <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->expiration_date}}</td>
                                    <td>{{$item->image}}</td>
                                    <td>{{$item->price}}</td>
                                    <td style="display: flex; justify-content: center;">
                                        <form action="{{route('food.destroy',$item)}}" method="post">
                                            @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger btn-sm" style="font-size: 0px;position:relative; right: 10px;">
                                                <i class="material-icons">delete</i>
                                                </button>
                                        </form>

                                        <form action="{{route('food.edit',$item)}}" method="get">
                                            @csrf
                                                @method("PUT")
                                                <button type="submit" class="btn btn-warning btn-sm" style="font-size: 0px;">
                                                <i class="material-icons">edit</i>
                                                </button>
                                        </form>
                                        
                                        <form action="{{route('food.create')}}" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-sm" style="font-size: 0px;position: relative; left: 10px;">
                                            <i class="material-icons">add</i>
                                            </button>
                                        </form>


                                    </tr>
                                @endforeach
                                {{ $list->links() }}
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
