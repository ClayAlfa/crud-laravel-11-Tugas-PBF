<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
            padding: 40px;
            background-color: #ffffff;
        }
        
        .document-header {
            border-bottom: 4px solid #2563eb;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        
        .institution {
            text-align: center;
            margin-bottom: 10px;
        }
        
        .institution h2 {
            font-size: 22px;
            color: #1e40af;
            font-weight: 700;
            margin-bottom: 5px;
            letter-spacing: 0.5px;
        }
        
        .institution p {
            font-size: 11px;
            color: #64748b;
            margin: 2px 0;
        }
        
        .document-title {
            text-align: center;
            margin: 25px 0 20px 0;
            padding: 15px 0;
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            border-radius: 8px;
        }
        
        .document-title h1 {
            font-size: 20px;
            color: #ffffff;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        
        .info-bar {
            display: table;
            width: 100%;
            margin-bottom: 25px;
            font-size: 10px;
            color: #64748b;
        }
        
        .info-item {
            display: table-cell;
            padding: 8px 0;
        }
        
        .info-item.right {
            text-align: right;
        }
        
        .info-label {
            font-weight: 600;
            color: #475569;
        }
        
        .table-container {
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        
        .table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
        }
        
        .table thead {
            background: linear-gradient(135deg, #1e40af 0%, #2563eb 100%);
        }
        
        .table thead th {
            padding: 14px 12px;
            text-align: left;
            font-size: 11px;
            font-weight: 700;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 3px solid #1e3a8a;
        }
        
        .table thead th.center {
            text-align: center;
        }
        
        .table tbody tr {
            border-bottom: 1px solid #e2e8f0;
            transition: background-color 0.2s;
        }
        
        .table tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }
        
        .table tbody tr:hover {
            background-color: #eff6ff;
        }
        
        .table tbody td {
            padding: 12px;
            font-size: 10px;
            color: #334155;
        }
        
        .table tbody td.center {
            text-align: center;
            font-weight: 600;
            color: #64748b;
        }
        
        .table tbody td.nama {
            font-weight: 600;
            color: #1e40af;
        }
        
        .table tbody td.nim {
            font-family: 'Courier New', monospace;
            color: #059669;
            font-weight: 600;
        }
        
        .table tbody td.email {
            color: #64748b;
            font-size: 9px;
        }
        
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #e2e8f0;
            font-size: 9px;
            color: #94a3b8;
        }
        
        .footer-content {
            display: table;
            width: 100%;
        }
        
        .footer-left {
            display: table-cell;
            text-align: left;
        }
        
        .footer-right {
            display: table-cell;
            text-align: right;
        }
        
        .stats-box {
            background: #f8fafc;
            border-left: 4px solid #2563eb;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        
        .stats-box p {
            font-size: 10px;
            color: #475569;
            margin: 3px 0;
        }
        
        .stats-box strong {
            color: #1e40af;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="document-header">
        <div class="institution">
            <h2>LAPORAN DATA MAHASISWA</h2>
            <p>Sekolah Tinggi Teknologi Bontang | Jl. S. Parman No.65, Belimbing, Kec. Bontang Bar., Kota Bontang, Kalimantan Timur 75321</p>
            <p>Telp: (+62) 08Sekian Lima Puluuuuhhhhh | Email: admin@stitek.ac.id</p>
        </div>
    </div>

    <div class="document-title">
        <h1>Daftar Mahasiswa</h1>
    </div>

    <div class="info-bar">
        <div class="info-item">
            <span class="info-label">Tanggal Cetak:</span> {{ date('d F Y') }}
        </div>
        <div class="info-item right">
            <span class="info-label">Total Data:</span> {{ $mahasiswa->count() }} Mahasiswa
        </div>
    </div>

    <div class="stats-box">
        <p><strong>Dokumen:</strong> Laporan Data Mahasiswa Aktif</p>
        <p><strong>Periode:</strong> Tahun Akademik {{ date('Y') }}/{{ date('Y') + 1 }}</p>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th class="center" style="width: 8%;">No</th>
                    <th style="width: 35%;">Nama Lengkap</th>
                    <th style="width: 20%;">NIM</th>
                    <th style="width: 37%;">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $index => $m)
                <tr>
                    <td class="center">{{ $index + 1 }}</td>
                    <td class="nama">{{ $m->nama }}</td>
                    <td class="nim">{{ $m->nim }}</td>
                    <td class="email">{{ $m->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <p>© {{ date('Y') }} Sekolah Tinggi Teknologi Bontang. All rights reserved.</p>
            </div>
            <div class="footer-right">
                <p>Dicetak pada: {{ date('d/m/Y H:i:s') }}</p>
            </div>
        </div>
    </div>
</body>
</html>
