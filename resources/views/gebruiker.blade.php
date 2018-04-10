@extends ('layouts.adminheader')

@section('content')

    <main class="py-4 px-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        @if (session('status'))
                            <div class="card-header">
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            </div>
                        @endif
                    <table class="table">
                        <thead>
                        <th scope="col">ID:</th>
                        <th scope="cole">Naam:</th>
                        <th scope="col">Email</th>
                        </thead>
                            @foreach ($gebruikers as $gebruiker)
                            <tbody>
                            <td>{{$gebruiker->id}}</td>
                            <td>{{$gebruiker->name}}</td>
                            <td>{{$gebruiker->email}}</td>
                            <td><a class="btn btn-info" href="{{ route('gebruiker.edit',$gebruiker->id) }}">edit</a>
                            </td>
                            <form action="{{url('/gebruiker/' . $gebruiker->id . '/delete')}}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}

                                <td>
                                    <button type="submit" id="delete-gebruiker-{{ $gebruiker->id }}"
                                            class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </td>
                            </form>
                            </tbody>
                        @endforeach

                    </table>
                    <table class="table">
                        <tbody>
                        <th>Create user</th>
                        <td>
                            <a class="btn btn-info" href="{{ url('gebruiker/add') }}">add</a>
                        </td>
                        </tbody>
                        </form>
                        <div class="text-center">
                            {{ $gebruikers->links() }}
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

