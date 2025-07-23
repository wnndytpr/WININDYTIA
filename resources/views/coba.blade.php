<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Winindytia</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom right, #c6e2ff, #f0f7ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #ffffffea;
            border-radius: 20px;
            padding: 30px;
            width: 360px;
            box-shadow:
                0 0 10px rgba(198, 226, 255, 0.6),
                0 0 40px rgba(174, 200, 255, 0.3),
                0 0 60px rgba(174, 200, 255, 0.15);
        }

        .top {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .cover {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            margin-right: 15px;
            object-fit: cover;
        }

        .info {
            line-height: 1.3;
        }

        .info .judul {
            font-weight: bold;
            font-size: 16px;
        }

        .biodata {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
            line-height: 1.6;
        }

        .spotify {
            margin-top: 30px;
            font-size: 14px;
            color: #000;
            display: flex;
            align-items: center;
        }

        .spotify img {
            width: 18px;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="top">
            <img class="cover" src="/img/me.jpg" alt="Foto Winindytia">
            <div class="info">
                <div class="judul">Winindytia Puteri Revi</div>
                <div>Biodata</div>
            </div>
        </div>
        <div class="biodata">
            Kelas : XII RPL<br>
            Hobi  : Memasak, Berenang,<br>
            Netflix and Chill
        </div>
        <div class="spotify">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="Spotify">
            Spotify
        </div>
    </div>
</body>
</html>
