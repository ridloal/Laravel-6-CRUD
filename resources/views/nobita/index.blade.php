@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if ($messageSuccess = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$messageSuccess}}</p>        
                    </div>
                @endif

                <h2>Nobita List Data</h2>
                
                <center>
                    <a href="/nobita/create" class="btn btn-primary">Add New Data</a>
                </center>

            </div>

            <div class="col-md-12 mt-3">
                <table class="table table-bordered table-inverse table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Full Name</th>
                            <th>Full Name Kana</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Picture</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @forelse ($nobitas as $nobita)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $nobita->first_name . ' ' . $nobita->last_name }}</td>
                                <td>{{ $nobita->first_name_kana . ' ' . $nobita->last_name_kana }}</td>
                                <td>{{ $nobita->username }}</td>
                                <td>{{ $nobita->email }}</td>
                                <td>
                                    <center>
                                        <img src="{{ asset('storage/' . $nobita->picture) }}" alt="" height="100px">
                                    </center>
                                </td>
                                <td>
                                    <form action="/nobita/{{$nobita->id}}" method="post">
                                        <a href="/nobita/{{$nobita->id}}" class="btn btn-primary btn-sm">Show</a>
                                        <a href="/nobita/{{$nobita->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                    
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" onclick="confirm('Are You Sure ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No data Bro</td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection