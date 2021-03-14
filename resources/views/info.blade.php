@extends('base')

@section('content')



        <header class="shadow p-3 mb-5 bg-body rounded">
            <div class=" d-flex justify-content-between">
                <div>

                <h1>InfoUser</h1>
                <h6 class="text-muted">hasMany</h6>

                </div>

            </div>

        </header>

<div>

{{-- {{ $users->links() }} --}}

    </div>

    {{-- <div class="container-fluid"> --}}
        <div class="row mb-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 text-center ">
                                <img class="btn-md" src="{{ asset('images/fotoFront.jpg')  }}" alt="" style="height: 180px;    border-radius: 16px;">
                            </div>
                            <div class="col-md-8 col-sm-8">

                                <h2 class="card-title">Name: {{ $users->name }}</h2>
                                <p class="card-text"><strong>Profile: </strong> Web Developer </p>

                                    <p class="card-text"><b>Companies: </b>
                                      @if ( $users->company->isEmpty() )
                                         N/A
                                      @else
                                        @foreach ($users->company as $company)
                                            <span class="badge bg-info">{{ $company->company }}</span>
                                        @endforeach
                                      @endif
                                    </p>

                                <p class="card-text"><b>Email: </b> {{ $users->email }} </p>
                                <p><b>Skills: </b>
                                <span class="badge bg-primary">WordPress</span>
                                <span class="badge bg-info">Weebly</span>
                                <span class="badge bg-warning">Bootstrap</span>
                                <span class="badge bg-success">Wix</span>
                                </p>

                            </div>
                            </div>



                    </div>
                </div>
            </div>
        </div>



    @if ( $users->post->isEmpty() )
        <div class="alert alert-primary" role="alert">
            Usurio sin <b>Post...</b>
                {{-- <a href="{{ route('create') }}" type="button"  class="btn btn-primary mt-2">Crear</a> --}}

        </div>
    @else


        <div class="row mt-5 mb-4">
            <div class="col-md-4 text-center">
                <h3>  <b>Cantidad de Posts:</b> <b>{{ $users->post->count() }}</b></h3>
            </div>

        </div>

        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($users->post as $post)

                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ asset('images/fotoFront.jpg')  }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                        <a href="#" class="btn btn-primary">Ver mas...</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    @endif



@endsection







