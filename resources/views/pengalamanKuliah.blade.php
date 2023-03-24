@extends('layouts.content')

@section('title', 'Kuliah')

@section('content')
<x-laravel2 dashboard="" profile="" hanif="" trisinus="" pengalaman="active" kuliah=""/>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Pengalaman Kuliah</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{Route('dashboard')}}">Home</a></li>
						<li class="breadcrumb-item active">Pengalaman Kuliah</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Kemahasiswaan</h3>

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
				<div class="row">
					<div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
						<div class="row">
							<div class="col-12">
								<div class="post">
									<div class="user-block">
										<img class="img-circle img-bordered-sm" src="{{asset('profile')}}/trisinus.jpeg" alt="user image">
										<span class="username">
											<a href="#">Trisinus Gulo</a>
										</span>
										<span class="description">Shared publicly - 8:56 PM today</span>
									</div>
									<!-- /.user-block -->
									<p>
										Pengalaman Kuliah selama di Polinema :
									</p>
								</div>

								<div class="post clearfix">
									<div class="user-block">
										<img class="img-circle img-bordered-sm" src="{{asset('profile')}}/hanif.jpeg" alt="User Image">
										<span class="username">
											<a href="#">Hanif Naufal Rafandi</a>
										</span>
										<span class="description">Shared publicly - :30 PM today</span>
									</div>
									<!-- /.user-block -->
									<p>
										Pengalaman - pengalaman yang telah dilalui saat kuliah di Polinema : <br>
										1. Mengerjakan project dan tugas besar dengan inovasi yang baik <br>
										2. Mencoba hal baru di luar perkuliahan untuk menambah pengetahuan si bidang teknologi <br>
										3. Berdiskusi dengan teman sejurusan / berbeda jurusan dengan membahas permasalahan yang sama <br>
										4. Mencari informasi baru di dalam maupun di luar kampus untuk mendapatkan informasi yang jarang diketahui banyak mahasiswa <br>
										5. Menyelesaikan permasalahan akademis secara mandiri dan bisa mengetahui penyebab terjadinya error tersebut <br>
									</p>
								</div>

								<div class="post">
									<div class="user-block">
										<img class="img-circle img-bordered-sm" src="{{asset('profile')}}/trisinus.jpeg" alt="user image">
										<span class="username">
											<a href="#">Trisinus Gulo</a>
										</span>
										<span class="description">Shared publicly - 6 days ago</span>
									</div>
									<!-- /.user-block -->
									<p>
										Pengalaman - pengalaman yang telah dilalui saat kuliah di Polinema : <br>
										1.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
						<h3 class="text-primary">Kemahasiswaan Polinema</h3>
						<p class="text-muted">Tempat para menuntut Ilmu dan mencarai pengalaman serta menjadi seorang mandiri ketika kuliah di polinema.
							<h5 class="mt-5 text-muted">Link Github Anggota Kelompok</h5>
							<ul class="list-unstyled">
								<li>
									<a href="https://github.com/HanifRafandi014/" class="btn-link text-secondary"></i> hanif : https://github.com/HanifRafandi014/</a>
								</li>
								<li>
									<a href="https://github.com/Trisinus123" class="btn-link text-secondary"></i> Trisinus : https://github.com/Trisinus123</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
</div>
</div>
@endsection