<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>

        <h2>Blog putri</h2>
        <nav>
            <a href="/home">HOME</a>
            |
            <a href="/kontak">KONTAK</a>
            |
            <a href="/tentang">TENTANG</a>
        </nav>
    </header>
    <hr/>
    <br/>
    <br/>

    <h3>@yield('judul_halaman')</h3>

    @yield('konten')

    <br/>
    <br/>
    <br/>
    <footer>
        <p>&copy; <a href="#"></a>.2021-2022</p>
    </footer>
</body>
</html>
