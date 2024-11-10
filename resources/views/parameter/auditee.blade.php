@extends('layouts.app')

@section('breadcrumb')
<div class="jumbotron" data-pages="parallax">
    <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
        <div class="inner" style="transform: translateY(0px); opacity: 1;">
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><p><a href="main_page.php">Home</a></p></li>
        <li><a href="#" class="active">Parameter Auditor</a></li>		</ul>
        <!-- END BREADCRUMB -->
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-6">
	<!-- START PANEL -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">List Parameter Auditan</div>
		</div>
		<div class="panel-body">
            <a href="{{ route('type.index') }}" style="display: block; margin-bottom: 5px;">
                <button class="btn btn-block btn-info" type="button">
                    <span class="bold">Jenis Auditee</span>
                </button>
            </a>
			<button class="btn btn-block btn-info" type="button">
				<span class="bold">Slide</span>
			</button>
		</div>
	</div>
<!-- END PANEL -->
</div>
@endsection