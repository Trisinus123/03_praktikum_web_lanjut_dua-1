@extends('layouts.content')

@section('title', 'Contact')

@section('content')
<x-laravel2 dashboard="" profile="" hanif="" trisinus="" pengalaman="" kuliah=""/>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Contact</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Contact</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="card card-solid">
			<div class="card-body pb-0">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
						<div class="card bg-light d-flex flex-fill">
							<div class="card-header text-muted border-bottom-0">
								Anggota Kelompok 3
							</div>
							<div class="card-body pt-0">
								<div class="row">
									<div class="col-7">
										<h2 class="lead"><b>Hanif Naufal Rafandi</b></h2>
										<p class="text-muted text-sm"><b>About: </b> Mahasiswa Jurusan TI</p>
										<ul class="ml-4 mb-0 fa-ul text-muted">
											<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Perumahan Pondok Delta RT 01 RW 07 Kel. Kaweron Kec. Talun Kab. Blitar Jawa Timur</li>
											<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : +6281235485829</li>
										</ul>
									</div>
									<div class="col-5 text-center">
										<img src="{{asset('AdminLTE-3.0.0')}}/dist/img/hanif.jpeg" alt="user-avatar" class="img-circle img-fluid">
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="text-right">
									<a href="#" class="btn btn-sm bg-teal">
										<i class="fas fa-comments"></i>
									</a>
									<a href="{{Route('profile', ['nim'=>'hanif'])}}" class="btn btn-sm btn-primary">
										<i class="fas fa-user"></i> View Profile
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
						<div class="card bg-light d-flex flex-fill">
							<div class="card-header text-muted border-bottom-0">
								Anggota Kelompok 3
							</div>
							<div class="card-body pt-0">
								<div class="row">
									<div class="col-7">
										<h2 class="lead"><b>Trisinus Gulo</b></h2>
										<p class="text-muted text-sm"><b>About: </b> Mahasiswa Jurusan TI</p>
										<ul class="ml-4 mb-0 fa-ul text-muted">
											<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Ds. Zuzundrao, Kec. Mandrehe, Kab. Nias Barat Sumatera Utara</li>
											<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : +6281235487842</li>
										</ul>
									</div>
									<div class="col-5 text-center">
										<img src="{{asset('AdminLTE-3.0.0')}}/dist/img/trisinus.jpeg" alt="user-avatar" class="img-circle img-fluid">
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="text-right">
									<a href="#" class="btn btn-sm bg-teal">
										<i class="fas fa-comments"></i>
									</a>
									<a href="{{Route('profile', ['nim'=>'trisinus'])}}" class="btn btn-sm btn-primary">
										<i class="fas fa-user"></i> View Profile
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</section>
</div>

@endsection