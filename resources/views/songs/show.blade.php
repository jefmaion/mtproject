@extends('layouts.main')

@section('page-header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Biblioteca</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layout</a></li>
            <li class="breadcrumb-item active">Fixed Layout</li>
        </ol>
    </div>
</div>
@endsection


@section('page-content')
<div class="row">
    <div class="col-12">

        <!-- Default box -->
        <div class="card">

            <div class="card-body">
                <div class="d-flex py-1 align-itsems-center">
                    <span class="avatar avatar-xl mr-2" style="background-image: url({{ asset('template/dist/img/user2-160x160.jpg') }})"> </span>
                    <div class="flex-fill">
                        <h1 class="font-weight-light">{{ $song->name }}</h1>
                        {{ $song->artist }} - {{ $song->album }}
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="ml-4"><span class="text-muted">Tom: </span><strong>{{ $song->key }}</strong></span>
                        <span class="ml-4"><span class="text-muted">BPM: </span><strong>{{ $song->bpm }}</strong></span>
                        <span class="ml-4"><span class="text-muted">Compasso: </span><strong>{{ $song->compass }}</strong></span>
                        
                    </div>
                </div>

               
            </div>



            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <form action="{{ route('song.update', $song) }}" method="post">
            @csrf
            @method('PUT')
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs navs-pills nav-justified" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab-multitracks-tab" data-toggle="pill" href="#tab-multitracks"
                            role="tab" aria-controls="tab-multitracks" aria-selected="true">Multitracks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-lyrics-tab" data-toggle="pill" href="#tab-lyrics" role="tab"
                            aria-controls="tab-lyrics" aria-selected="false">Letra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-chords-tab" data-toggle="pill" href="#tab-chords" role="tab"
                            aria-controls="tab-chords" aria-selected="false">Cifra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-video-tab" data-toggle="pill" href="#tab-video" role="tab"
                            aria-controls="tab-video" aria-selected="false">Vídeo</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active p-0" id="tab-multitracks" role="tabpanel" aria-labelledby="tab-multitracks-tab">

                        
                    </div>
                    <div class="tab-pane p-0" id="tab-lyrics" role="tabpanel" aria-labelledby="tab-lyrics-tab">
                        <textarea class="summernote" name="lyrics">{{ $song->lyrics }}</textarea>
                    </div>
                    <div class="tab-pane fade" id="tab-chords" role="tabpanel" aria-labelledby="tab-chords-tab">
                        <textarea class="summernote" name="chords">{{ $song->chords }}</textarea>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                        aria-labelledby="custom-tabs-four-settings-tab">
                        Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis
                        ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate.
                        Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec
                        interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at
                        consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst.
                        Praesent imperdiet accumsan ex sit amet facilisis.
                    </div>
                    <div class="tab-pane fade" id="tab-video" role="tabpanel"
                        aria-labelledby="tab-video-tab">
                      Youtube
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            <!-- /.card -->
        </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('template') }}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $('.summernote').summernote({
        height: 350
    })
</script>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('template') }}/plugins/summernote/summernote-bs4.min.css">
@endsection