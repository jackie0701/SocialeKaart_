@extends ('layouts.adminheader')

@section('content')

    <main class="py-4">
        @yield('content')
        <div class="container-fluid">
            <div class="row justify-content-center">
                <form action="{{ route('gebruiker.update',$gebruiker->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method ('PUT')
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                     <input type="text" name="name" value="{{$gebruiker->name}}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" class="form-control" name="email" placeholder="Detail" value="{{$gebruiker->email}}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                </form>
            </div>
    </main>
@endsection