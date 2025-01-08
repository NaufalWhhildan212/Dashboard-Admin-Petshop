<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Stok Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h3 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        #customers {
            width: 100%;
            border-collapse: collapse;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
            font-size: 14px;
        }

        #customers th {
            background-color: #1d528a;
            color: white;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        #customers tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        #customers tr:hover {
            background-color: #e0f7fa;
        }

        .table-header {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        /* Styling for small screens */
        @media (max-width: 768px) {
            #customers td, #customers th {
                font-size: 12px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Laporan Stok Produk</h3>
    <table id="customers">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Stok</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Nama Supplier</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dtCetakStok as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->Nama }}</td>
                <td>{{ $item->Kategori }}</td>
                <td>{{ number_format($item->Harga, 0, ',', '.') }}</td>
                <td>{{ $item->Supplier }}</td>
                <td>{{ $item->Stok }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
