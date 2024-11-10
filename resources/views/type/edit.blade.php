@extends('layouts.app')

@section('breadcrumb')
<div class="jumbotron" data-pages="parallax">
    <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
        <div class="inner" style="transform: translateY(0px); opacity: 1;">
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li>
                    <p><a href="main_page.php">Home</a></p>
                </li>
                <li><a href="{{route('type.index')}}">Parameter Auditee</a></li>
                <li><a href="#" class="active">Parameter Jenis Jabatan</a></li>
            </ul>
            <!-- END BREADCRUMB -->
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid container-fixed-lg">
    <!-- START PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Ubah Jenis Auditee</div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <form method="post" name="f" action="{{ route('type.update', $type->id) }}" class="form-horizontal" role="form"
                        autocomplete="off">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label class="col-sm-2 m-t-10">Nama Jenis Auditee *</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="name" value="{{ $type->name }}" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-sm-2">&nbsp;</label>
                            <div class="col-sm-9">
                                <a href="{{route('type.index')}}">
                                    <button type="button" class="btn btn-default">Kembali</button>
                                </a>
                                <span>&nbsp;&nbsp;&nbsp;</span>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END PANEL -->
</div>
@endsection
