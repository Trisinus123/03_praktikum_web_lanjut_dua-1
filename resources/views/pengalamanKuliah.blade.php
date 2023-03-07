@extends('layouts.content')

@section('title', 'Kuliah')

@section('content')
<x-laravel2 dashboard="" profile="" hanif="" trisinus="" pengalaman="active" />
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
		<!-- Custom tabs (Charts with tabs)-->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">
					<i class="fas fa-chart-pie mr-1"></i>
					Pengalaman Selama di Kuliahan
				</h3>
				<div class="card-tools">
					<ul class="nav nav-pills ml-auto">
						<li class="nav-item">
							<a class="nav-link active" href="#revenue-chart" data-toggle="tab"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#sales-chart" data-toggle="tab"></a>
						</li>
					</ul>
				</div>
			</div><!-- /.card-header -->
			<div class="card-body">
				<!-- Conversations are loaded here -->
				<div class="direct-chat-messages">
					<!-- Message. Default to the left -->
					<div class="direct-chat-msg">
						<div class="direct-chat-infos clearfix">
							<span class="direct-chat-name float-left">Hanif Naufal Rafandi</span>
							<span class="direct-chat-timestamp float-right">hdjjjab</span>
						</div>
						<!-- /.direct-chat-infos -->
						<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
						<!-- /.direct-chat-img -->
						<div class="direct-chat-text">
							gvhuhhgfatwf
						</div>
						<!-- /.direct-chat-text -->
					</div>
					<!-- /.direct-chat-msg -->

					<!-- Message to the right -->
					<div class="direct-chat-msg right">
						<div class="direct-chat-infos clearfix">
							<span class="direct-chat-name float-right">Sarah Bullock</span>
							<span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
						</div>
						<!-- /.direct-chat-infos -->
						<img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
						<!-- /.direct-chat-img -->
						<div class="direct-chat-text">
							You better believe it!
						</div>
						<!-- /.direct-chat-text -->
					</div>
					<!-- /.direct-chat-msg -->

					<!-- Message. Default to the left -->
					<div class="direct-chat-msg">
						<div class="direct-chat-infos clearfix">
							<span class="direct-chat-name float-left">Alexander Pierce</span>
							<span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
						</div>
						<!-- /.direct-chat-infos -->
						<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
						<!-- /.direct-chat-img -->
						<div class="direct-chat-text">
							Working with AdminLTE on a great new app! Wanna join?
						</div>
						<!-- /.direct-chat-text -->
					</div>
				</div>
			</div><!-- /.card-body -->
		</div>
		<!-- /.card -->
	</section>
</div>

@endsection