@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Nobita Form</div>
                    <div class="card-body">
                        <form action="/nobita/{{$nobita->id}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            
                            @include('nobita.mainForm')

                             <hr>
                                <div class="form-group">
                                    <a href="{{ url('nobita') }}" class="btn btn-success">Back</a>
                                    <button type="reset" class="btn btn-dark">Reset</button>
                                    <button type="submit" class="btn btn-primary float-right">Save</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customScript')
    <script type="text/javascript">
        $(function () {
            $("#otherHobby").click(function () {
                if ($(this).is(":checked")) {
                    $("#hobbyCustom").removeAttr("disabled");
                    $("#hobbyCustom").focus();
                } else {
                    $("#hobbyCustom").attr("disabled", "disabled");
                }
            });
        });
    </script>
@stop