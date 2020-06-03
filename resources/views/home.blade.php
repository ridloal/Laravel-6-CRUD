@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Application List</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card text-center">
                                <img class="card-img-top" src="https://mancode.id/media/images/Nobita-Nobi.2e16d0ba.fill-1200x800.jpg" height="250px" alt="Nobita">
                                <div class="card-body">
                                    <h4 class="card-title">Nobita CRUD</h4>
                                    <p class="card-text">He who is not courageous enough to take risks will accomplish nothing in life.</p>
                                    <a href="{{ url('nobita') }}" class="btn btn-primary">Open</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center">
                                <img class="card-img-top" src="https://i.pinimg.com/736x/ea/e3/8c/eae38c5b1657d7668e76e8df5c72ede3.jpg" height="250px" alt="Mini HBP">
                                <div class="card-body">
                                    <h4 class="card-title">Mini HBP</h4>
                                    <p class="card-text">Coming Soon</p>
                                    <a href="#" class="btn btn-primary">Open</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection