<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Buku, Genre & Author</title>
    <style>
        :root {
            --bg: #f2f8ff;
            --card: #ffffff;
            --text: #1d2939;
            --muted: #64748b;
            --border: #dbeafe;
            --primary: #2563eb;
            --primary-soft: #dbeafe;
            --shadow: 0 18px 50px rgba(15, 23, 42, 0.08);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Inter, system-ui, sans-serif;
            color: var(--text);
            background: linear-gradient(180deg, #eef6ff 0%, #f9fbff 100%);
        }

        .page { padding: 32px 24px; }
        .container { max-width: 980px; margin: 0 auto; }

        .hero {
            padding: 28px 32px;
            background: var(--card);
            border: 1px solid rgba(96, 165, 250, 0.25);
            border-radius: 24px;
            box-shadow: var(--shadow);
            margin-bottom: 32px;
        }

        .hero h1 { margin: 0 0 12px; font-size: clamp(2rem, 2.5vw, 2.75rem); letter-spacing: -0.03em; }
        .hero p { margin: 0; color: var(--muted); line-height: 1.75; }

        .grid { display: grid; gap: 24px; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); }

        .card { background: var(--card); border: 1px solid var(--border); border-radius: 24px; box-shadow: var(--shadow); overflow: hidden; }
        .card-header { padding: 20px 24px; color: white; }
        .card-body { padding: 20px 24px; }

        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { padding: 14px 16px; text-align: left; }
        th { font-size: 0.85rem; color: var(--muted); text-transform: uppercase; letter-spacing: 0.06em; border-bottom: 1px solid #e2e8f0; }
        td { border-bottom: 1px solid #f1f5f9; color: #334155; }

        .badge {
            display: inline-flex;
            padding: 0.35rem 0.85rem;
            border-radius: 9999px;
            background: var(--primary-soft);
            color: var(--primary);
            font-weight: 600;
            font-size: 0.87rem;
        }
    </style>
</head>
<body>
    <main class="page">
        <div class="container">
            <section class="hero">
                <h1>Katalog Buku & Author</h1>
                <p>Data dikelola menggunakan Migration, Seeder, dan ditampilkan via Eloquent ORM.</p>
            </section>

            <div class="grid">
                <!-- Tabel Buku -->
                <article class="card" style="grid-column: 1 / -1;">
                    <div class="card-header" style="background: linear-gradient(90deg, #10b981 0%, #34d399 100%);">
                        <h2>Daftar Buku</h2>
                    </div>
                    <div class="card-body">
                        <p class="badge">Total: {{ count($books) }} Buku</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Tahun</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td style="font-weight:600">{{ $book->title }}</td>
                                        <td>{{ $book->author->name }}</td>
                                        <td>{{ $book->year }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </article>

                <!-- Tabel Genre -->
                <article class="card">
                    <div class="card-header" style="background: linear-gradient(90deg, #3b82f6 0%, #60a5fa 100%);">
                        <h2>Genre (Static)</h2>
                    </div>
                    <div class="card-body">
                        <table>
                            @foreach ($genres as $genre)
                                <tr>
                                    <td>{{ $genre['id'] }}</td>
                                    <td>{{ $genre['nama'] }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </article>

                <!-- Tabel Author -->
                <article class="card">
                    <div class="card-header" style="background: linear-gradient(90deg, #6366f1 0%, #818cf8 100%);">
                        <h2>Daftar Author</h2>
                    </div>
                    <div class="card-body">
                        <table>
                            @foreach ($authors as $author)
                                <tr>
                                    <td>{{ $author->id }}</td>
                                    <td>{{ $author->name }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </article>
            </div>
        </div>
    </main>
</body>
</html>