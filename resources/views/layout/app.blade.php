<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Bagian Meta --}}
    @include('include.meta')
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ url('template/img/icons/icon-48x48.png') }}" />
	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />
	<title>Dashboard</title>
    {{-- Bagian style CSS --}}
    @include('include.style')
</head>
<body>
	<div class="wrapper">
        {{-- Bagian SideBar --}}
        @include('include.sidebar')
		<div class="main">
            {{-- Bagian menu profile --}}
            @include('include.navbar_profile')
           	<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"> Dashboard</h1>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div>
								<div class="card-body">
                                    {{-- Bagian Isi Konten --}}
                                    @yield('content')
                                    <h1>Hello world</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
            {{-- Bagian Footer  --}}
            @include('include.footer')
		</div>
	</div>
    {{-- Bagian JS --}}
    @include('include.script')
</body>
</html>
