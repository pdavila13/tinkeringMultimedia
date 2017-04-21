@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">

                <video class="video-js" id="video" preload="auto" controls data-setup="{}">
					<source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type='video/mp4'>
					<p class="vjs-no-js">Su navegador no soporta el reproductor de vídeo.</p>
                </video>

			</div>
		</div>
	</div>
@endsection
