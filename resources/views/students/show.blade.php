@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nim :</strong>
                                {{ $student->nim }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama :</strong>
                                {{ $student->name }}
                            </div>
                        </div>
                        <div class="card-header">{{ $student->nim }}</div>
                            <div class="card-body">
                                Name : {{ $student->name }} <br>
                                Class : {{ $student->kelas->class_name }} <br>
                                Department : {{ $student->department }} <br>
                                Phone Number : {{ $student->phone_number }} <br>
                                Created at : {{ $student->created_at }} <br>
                                Updated at : {{ $student->updated_at }} <br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Departemen :</strong>
                                {{ $student->department }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nomor HP :</strong>
                                {{ $student->phone_number}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection