@extends('layouts.app')

@section('breadcrumb')
<!-- Breadcrumb content goes here -->
<div class="jumbotron" data-pages="parallax">
    <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
        <div class="inner" style="transform: translateY(0px); opacity: 1;">
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#" class="active">Home</a></li>
            </ul>
            <!-- END BREADCRUMB -->
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid container-fixed-lg">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="panel-heading">
                <div class="panel-title text-black">
                    <span class="font-montserrat fs-11 all-caps">DATA AUDIT HUTAMA KARYA</span>
                </div>
            </div>
            <div style="width:100%">
                <center>
                    <iframe title="dashboard_spi" width="600" height="373.5"
                        src="https://app.powerbi.com/view?r=eyJrIjoiNTI4ZWFiYzUtMGQ0Ni00YmFhLWJhN2EtYjkwZTg5YTM0MThkIiwidCI6Ijc1ZWFhYzQzLTlhNTUtNGM5Yy1iNGNjLTNjYTg1YjQxMzMxNyIsImMiOjEwfQ%3D%3D&amp;pageName=ReportSection"
                        frameborder="0" allowfullscreen="true"></iframe>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
