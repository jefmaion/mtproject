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
                    <span class="avatar avatar-xl mr-2"
                        style="background-image: url({{ asset('template/dist/img/user2-160x160.jpg') }})"> </span>
                    <div class="flex-fill">
                        <h1 class="font-weight-light">{{ $song->name }}</h1>
                        {{ $song->artist }} - {{ $song->album }}
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="ml-4"><span class="text-muted">Tom: </span><strong>{{ $song->key }}</strong></span>
                        <span class="ml-4"><span class="text-muted">BPM: </span><strong>{{ $song->bpm }}</strong></span>
                        <span class="ml-4"><span class="text-muted">Compasso: </span><strong>{{ $song->compass
                                }}</strong></span>

                    </div>
                </div>


            </div>



            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        {{-- <form action="{{ route('song.update', $song) }}" method="post">
            @csrf
            @method('PUT') --}}
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs navs-pills nav-jusstified" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-multitracks-tab" data-toggle="pill"
                                href="#tab-multitracks" role="tab" aria-controls="tab-multitracks"
                                aria-selected="true">Multitracks</a>
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
                        <div class="tab-pane fade show active p-0" id="tab-multitracks" role="tabpanel"
                            aria-labelledby="tab-multitracks-tab">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#modelId">
                                Launch
                            </button>

                            <!-- Modal -->
                            <div class="modal" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                                aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    @csrf
                                    <div class="modal-content">
                                        <form action="{{ route('song.upload', $song) }}?media=true" method="post"
                                            enctype="multipart/form-data" id="uploadForm">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Upload de Arquivo de Áudio</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">

                                                <div style="border: 2px dashed "
                                                    class="border-secondary bg-light  mb-3  p-4">
                                                    <input type="file" name="file" id="file" class="d-none">


                                                    <h1 class="display-4 text-center text-muted m-0"><i
                                                            class="fas fa-cloud-upload-alt text-primary"></i>
                                                    </h1>
                                                    <p class="m-0"><button type="button" class="btn btn-primary"
                                                            id="btn-upload">Upload</button></p>

                                                    <div id="progressContainer" style="margin-top: 10px; ">
                                                        <div style="width: 100%; background: #eee;" class="rounded">
                                                            <div id="progressBar" class="bg-primary"
                                                                style="width: 0%; height: 20px;"></div>
                                                        </div>
                                                    </div>
                                                    <span>Processando (<span id="progressText">0%</span>)</span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light border"
                                                    data-dismiss="modal">Fechar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>





                            <form action="{{ route('song.track.update', $song) }}" method="post">
                                @csrf
                                @method('put')
                                @foreach($song->tracks as $track)

                                <div class="card">
                                    <div class="card-body d-flsex aligns-items-center">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <h5 class="card-title">
                                                    <strong>{{ $track->filename }}</strong>
                                                </h5>
                                            </div>

                                            <div class="col-4">
                                                <div id="waveform"></div>
                                            </div>
                                            <div class="col">
                                                <x-select-track-name id="{{$track->id}}" name="tracks[{{ $track->id }}][name]" value="{{$track->name}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>




                        </div>
                        <div class="tab-pane p-0" id="tab-lyrics" role="tabpanel" aria-labelledby="tab-lyrics-tab">

                        </div>
                        <div class="tab-pane fade" id="tab-chords" role="tabpanel" aria-labelledby="tab-chords-tab">

                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                            aria-labelledby="custom-tabs-four-settings-tab">
                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus
                            turpis
                            ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate.
                            Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec
                            interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at
                            consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst.
                            Praesent imperdiet accumsan ex sit amet facilisis.
                        </div>
                        <div class="tab-pane fade" id="tab-video" role="tabpanel" aria-labelledby="tab-video-tab">
                            Youtube
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    
                </div>
                <!-- /.card -->
            </div>
            {{--
        </form> --}}
    </div>
</div>

<div style="width: 600px; height: 10px; background: #ddd; position: relative; margin-bottom: 20px;" id="track">
    <div id="needle" style="
        width: 2px;
        height: 100%;
        background: red;
        position: absolute;
        left: 0;
        top: 0;
        transition: none;
    "></div>
</div>

<script>
    const durationInSeconds = 180; // 3 minutos de música
    const track = document.getElementById("track");
    const needle = document.getElementById("needle");
    const trackWidth = track.offsetWidth;
    const pxPerSecond = trackWidth / durationInSeconds;

    let animationFrame;
    let startTime;
    let pausedAt = 0;

    function updateNeedle(timestamp) {
        if (!startTime) startTime = timestamp - pausedAt;
        const elapsed = (timestamp - startTime) / 1000;
        const position = Math.min(elapsed * pxPerSecond, trackWidth);
        needle.style.left = position + "px";

        if (position < trackWidth) {
            animationFrame = requestAnimationFrame(updateNeedle);
        }
    }

    function playNeedle() {
        cancelAnimationFrame(animationFrame);
        animationFrame = requestAnimationFrame(updateNeedle);
    }

    function pauseNeedle() {
        cancelAnimationFrame(animationFrame);
        pausedAt = performance.now() - startTime;
    }

    function resetNeedle() {
        cancelAnimationFrame(animationFrame);
        needle.style.left = "0px";
        startTime = null;
        pausedAt = 0;
    }
</script>


@endsection

@section('scripts')

<script src="https://unpkg.com/wavesurfer-multitrack/dist/multitrack.min.js"></script>
<script>


    $('#file').change(function (e) { 
        e.preventDefault();
        $('#uploadForm').submit();
    });

    $('#btn-upload').click(function (e) { 
        e.preventDefault();
        $('#file').click();
    });

    $('#uploadForm').on('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);
    $('#progressContainer').show();

    $.ajax({
        xhr: function() {
            let xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    let percent = Math.round((evt.loaded / evt.total) * 100);
                    $('#progressBar').css('width', percent + '%');
                    $('#progressText').text(percent + '%');
                }
            }, false);
            return xhr;
        },
        url: '{{ route('song.upload', $song) }}',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {

            console.log(response)
            alert('Upload concluído!');
        },
        error: function() {
            alert('Erro no upload.');
        }
    });
});


$('.track-name').change(function (e) { 
    e.preventDefault();
    var name = $(this).val();
    var id = $(this).data('id')
    $.ajax({
        type: "POST",
        url: "{{ route('song.track.update', $song) }}",
        data: {
            _token: '{{ csrf_token() }}',
            _method: 'PUT',
            name: name,
            id:id
        },
        success: function (response) {
            
        }
    });
});

</script>

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
{{-- <script>
    // Note that the name "myDropzone" is the camelized
  // id of the form.
  var uploadedDocumentMap = {}
  Dropzone.options.documentDropzone = {
    previewTemplate: document.getElementById('template-container').innerHTML,
    url: '{{ route('song.upload', $song) }}',
    maxFilesize: 1000, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    dictDefaultMessage: "Arraste seu arquivo aqui ou clique para selecionar",
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
      uploadedDocumentMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocumentMap[file.name]
      }
      $('form').find('input[name="document[]"][value="' + name + '"]').remove()
    },
    totaluploadprogress: function(progress) {
        var progress_el = document.getElementsByClassName("progress-bar")[0];
        progress_el.style.width = progress + "%";
        progress_el.querySelector(".progress-text").textContent = progress + "%";
    },
    init: function () {
        this.hiddenFileInput.removeAttribute('multiple');
      @if(isset($project) && $project->document)
        var files =
          {!! json_encode($project->document) !!}
        for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
        }
      @endif
    }
  };
</script> --}}


<script src="{{ asset('template') }}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $('.summernote').summernote({
        height: 350
    })
</script>
@endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<link rel="stylesheet" href="{{ asset('template') }}/plugins/summernote/summernote-bs4.min.css">
@endsection