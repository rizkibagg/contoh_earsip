@extends('layout.master')

@push('scripts')

    <script>
        // Mengambil elemen-elemen yang dibutuhkan
        const captchaImgContainer = document.getElementById('captcha-img-container');
        const reloadButton = document.getElementById('reload');

        // Menambahkan event listener ke tombol "Reload"
        reloadButton.addEventListener('click', function() {
            // Generate URL baru untuk captcha dan gantilah gambar captcha
            const newCaptchaUrl = '/captcha/' + Date.now(); // Tambahkan timestamp untuk URL unik
            captchaImgContainer.innerHTML = '<img src="' + newCaptchaUrl + '" alt="Captcha Image">';
        });
    </script>

@endpush

@section('content')
    <div class="pagetitle">
        <h1>Captcha</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Captcha</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Vertical Form</h5>

                <!-- Vertical Form -->
                <form class="row g-3" method="POST" action="/komentar">
                    @csrf
                    <div class="col-12">
                        <label for="komentar" class="form-label">Komentar</label>
                        <textarea class="form-control" name="komentar" id="komentar" cols="30" rows="5">{{ old('komentar') }}</textarea>
                    </div>
                    <div class="col-4">
                        <label for="nama" class="form-label">Your Name</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="col-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                    </div>
                    <div class="col-4">
                        <label for="nomor_hp" class="form-label">No. Hp</label>
                        <input type="number" class="form-control" id="nomor_hp" name="nomor_hp" value="{{ old('nomor_hp') }}">
                    </div>
                    <div class="col-12">
                        <label for="captcha" class="form-label">Captcha</label>
                        <div class="mt-2 mb-2">
                            <span id="captcha-img-container">{!! captcha_img('inverse') !!}</span>
                            <button class="btn btn-danger reload" type="button" id="reload">&#x21bb;</button>
                        </div>
                        <input type="text" class="form-control" name="captcha" id="captcha">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>
@endsection
