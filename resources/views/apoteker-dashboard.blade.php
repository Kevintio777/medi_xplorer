@extends('voyager::master')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-dashboard"></i>
            MediXplorer Dashboard
        </h1>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route("voyager.pasien.index") }}" class="text-decoration-none text-dark">
                    <div class="panel widget center bgimage" style="background-image:url('storage/{{ Voyager::setting('admin.dashboard_pasien_card') }}'); background-size: cover;">
                        <div class="dimmer"></div>
                        <div class="panel-content">
                            <i class="{{ setting('admin.dashboard_pasien_icon') }}"></i>
                            <h2 class="card-title text-decoration-none">Pasien</h2>
                            <p class="card-text">Total: {{ $pasienCount }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('voyager.riwayat-obat.index') }}" class="text-decoration-none text-dark">
                    <div class="panel widget center bgimage" style="background-image:url('storage/{{ Voyager::setting('admin.dashboard_obat_card') }}'); background-size: cover;">
                        <div class="dimmer"></div>
                        <div class="panel-content">
                            <i class="{{ setting('admin.dashboard_obat_icon') }}"></i>
                            <h2 class="card-title">Riwayat Obat</h2>
                            <p class="card-text">Total: {{ $obatCount }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('voyager.riwayat-alergi.index') }}" class="text-decoration-none text-dark">
                    <div class="panel widget center bgimage" style="background-image:url('storage/{{ Voyager::setting('admin.dashboard_alergi_card') }}'); background-size: cover;">
                        <div class="dimmer"></div>
                        <div class="panel-content">
                            <i class="{{ setting('admin.dashboard_alergi_icon') }}"></i>
                            <h2 class="card-title">Riwayat Alergi</h2>
                            <p class="card-text">Total: {{ $alergiCount }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('voyager.riwayat-penyakit.index') }}" class="text-decoration-none text-dark">
                    <div class="panel widget center bgimage" style="background-image:url('storage/{{ Voyager::setting('admin.dashboard_penyakit_card') }}'); background-size: cover;">
                        <div class="dimmer"></div>
                        <div class="panel-content">
                            <i class="{{ setting('admin.dashboard_penyakit_icon') }}"></i>
                            <h2 class="card-title">Riwayat Penyakit</h2>
                            <p class="card-text">Total: {{ $penyakitCount }}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
