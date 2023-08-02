@extends('layout.app')
@section('title', 'Dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeZone - Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main>
        <section class="hero">
            <div class="container">
                <h1>Welcome to SafeZone</h1>
                <p>Create a safe and secure educational environment for students with SafeZone.</p>
                <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
            </div>
        </section>

        <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <table>
        <tr>
            <td style="display: flex; justify-content: center; align-items: center;">
                <img src="{{ asset('images/logohome.png') }}" alt="logohome" style="max-width: 100%;">
            </td>
            <td style="display: flex; justify-content: center; align-items: center;">
                <img src="{{ asset('images/orang1.png') }}" alt="orang1" style="max-width: 100%;">
            </td>
        </tr>
    </table>
        </div>

        <section class="tab">
        <div class="row row-cols-5">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h1 class="card-title">{{ $userCount }}</h1>
                                <p class="card-text">USER</p>
                                @if(auth()->user()->role == 1 )
                                <a href="{{ route('list') }}" class="btn btn-primary">Check</a>
                                @endif
                            </div>
                        </div>
                    </div> -->
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h1 class="card-title">{{ $diaryCount }}</h1>
                                <p class="card-text">DIARY</p>
                                @if(auth()->user()->role == 1 )
                                <a href="{{ route('diary') }}" class="btn btn-primary">Check</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h1 class="card-title">{{ $reportCount }}</h1>
                                <p class="card-text">REPORT</p>
                                @if(auth()->user()->role == 1 )
                                <a href="{{ route('monitor') }}" class="btn btn-primary">Check</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h1 class="card-title">{{ $konselingCount }}</h1>
                                <p class="card-text">KONSELING</p>
                                @if(auth()->user()->role == 1 )
                                <a href="{{ route('Konseling') }}" class="btn btn-primary">Check</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
<br>
        <div class="container">
                <h1>Welcome to SafeZone</h1>
                <p>Ciptakan lingkungan pendidikan yang aman dan nyaman untuk siswa dan mahasiswa dengan SafeZone. Aplikasi kami dirancang khusus untuk melindungi Anda dari ancaman pembullyan dan keadaan darurat di lingkungan sekolah atau kampus. Dengan fitur-fitur inovatif dan dukungan cepat, kami berkomitmen untuk meningkatkan keselamatan dan kesejahteraan Anda..</p>
                <br>
            </div>

        <section class="features">
            <div class="container">
                <h2>Features</h2>
                <p>Fitur Utama SafeZone:</p>
                <div class="feature">
                    <h3>1.Panic Button</h3>
                    <p>Temukan keamanan dalam genggaman tangan Anda. Tekan tombol darurat untuk memicu alarm darurat dan memberi tahu pihak berwenang tentang situasi darurat yang sedang terjadi. Bantuan akan segera datang!.</p>
                </div>
                <br>
                <div class="feature">
                    <h3>2.Notifikasi Darurat</h3>
                    <p>Terima notifikasi real-time didalam grup yang disediakan ketika ada kejadian penting atau situasi darurat yang memerlukan perhatian Anda. Tetap terinformasi dan siap untuk bertindak.</p>
                </div>
                <div class="feature">
                    <h3>3.Reporting</h3>
                    <p>Laporkan kasus pembullyan atau situasi mencurigakan dengan mudah melalui fitur pelaporan kami. Kami menjaga kerahasiaan dan memberikan Anda saluran untuk berbicara.</p>
                </div>
                <div class="feature">
                    <h3>4. Bimbingan Konseling:</h3>
                    <p>Akses ke bimbingan konseling dan sumber daya kesehatan mental yang dapat membantu Anda mengatasi tantangan emosional dan psikologis. Kami ada di sini untuk mendukung Anda</p>
                </div>
                <div class="feature">
                    <h3>5. Diary Artikel</h3>
                    <p>Temukan wadah untuk menyuarakan perasaan dan pemikiran Anda melalui fitur Diary Artikel kami. Bagikan pengalaman Anda, temukan inspirasi, dan terhubung dengan komunitas mahasiswa yang peduli.</p>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

@endsection
