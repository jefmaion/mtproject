@extends('layouts.main')

@section('page-header')
<div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Fixed Layout</h1>
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
            <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                Start creating your amazing application!

                <div class="alert alert-danger">
                    <i class="fas fa-times alert-icon"></i>
                    asd
                </div>

                <div class="alert alert-warning">
                    <i class="fas fa-times alert-icon"></i>
                    asd
                </div>

                <div class="alert alert-info">
                    <i class="fas fa-times alert-icon"></i>
                    asd
                </div>

                <div class="alert alert-primary">
                    <i class="fas fa-times alert-icon"></i>
                    asd
                </div>

                <div class="alert alert-dark">
                    <i class="fas fa-times alert-icon"></i>
                    asd
                </div>

                <div class="alert alert-purple">
                    <i class="fas fa-times alert-icon"></i>
                    asd
                </div>

                <div class="alert alert-light">
                    <i class="fas fa-times alert-icon"></i>
                    asd
                </div>

                <div class="alert alert-success">
                    <i class="fas fa-times alert-icon"></i>
                    asd
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection