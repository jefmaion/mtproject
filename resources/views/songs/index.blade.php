@extends('layouts.main')
@section('page-header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Biblioteca</h1>
    </div>
    <div class="col-sm-6">
        <a class="btn bg-success" data-toggle="modal" data-target="#modelId">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Adicionar
                    </a>
    </div>
</div>
@endsection


@section('page-content')
<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">


            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <form method="post" action="{{ route('song.store') }}">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><strong>
                                        <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Música
                                    </strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body  p-4">

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputAddress">Nome da Música</label>
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputAddress">Artista</label>
                                        <input type="text" class="form-control" name="artist" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputAddress">Album</label>
                                        <input type="text" class="form-control" name="album" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputAddress">Gênero/Estilo</label>
                                        <input type="text" class="form-control" name="gender" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputAddress">Tom</label>
                                        <input type="text" class="form-control" name="key" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputAddress">Tempo (bpm)</label>
                                        <input type="text" class="form-control" name="bpm" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputAddress">Compasso</label>
                                        <input type="text" class="form-control" name="compass" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="card-body">
                <table class="table table-striped table-hover datatable tsable-sm text-sm" id="">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Album</th>
                        <th>Artista</th>
                        <th>BPM</th>
                        <th>Conteúdo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($songs as $song)
                    <tr>
                        <td>
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar mr-2" style="background-image: url({{ asset('template/dist/img/user2-160x160.jpg') }})"> </span>
                              <div class="flex-fill">
                                <div class="font-weight-medium"><strong>{{ $song->name }}</strong></div>
                             
                              </div>
                            </div>
                        </td>
                        <td> {{ $song->album }}</td>
                        <td> {{ $song->artist }}</td>
                        <td> {{ $song->bpm }}</td>
                        <td>
                            @if($song->hasTracks())
                            <x-icons.multitracks />
                            @endif
                            <x-icons.chords />
                            

                            <a class="text-dark" href="#" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <x-icons.menu />
                                 </a>
                                <div class="dropdown-menu" aria-labelledby="triggerId">
                                    <a class="dropdown-item py-2" href="{{ route('song.show', $song) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i> Ver
                                    </a>
                                    <a class="dropdown-item py-2" href="#">
                                        <i class="fas fa-edit    "></i> Editar
                                    </a>
                                    <a class="dropdown-item py-2" href="#">
                                        <i class="fas fa-trash-alt    "></i> Excluir
                                    </a>
                                </div>

                        </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('template') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script>
    $(".datatable").DataTable();
    
</script>
@endsection