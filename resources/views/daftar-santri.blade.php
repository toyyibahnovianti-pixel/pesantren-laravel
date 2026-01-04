<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Santri Baru</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }

        .container {
            width: 600px;
            margin: 40px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #0d6efd;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Formulir Pendaftaran Santri Baru</h1>

    <form>
        <form action="{{ url('/daftar-santri') }}" method="POST">
         @csrf
        <!-- Data Santri -->
        <label>Nama Lengkap</label>
        <input type="text" placeholder="Masukkan nama lengkap">

        <label>Tempat Lahir</label>
        <input type="text" placeholder="Contoh: Sumenep">

        <label>Tanggal Lahir</label>
        <input type="date">

        <label>Jenis Kelamin</label>
        <select>
            <option>-- Pilih --</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>

        <label>Alamat Lengkap</label>
        <textarea rows="3" placeholder="Alamat lengkap"></textarea>

        <!-- Data Orang Tua -->
        <label>Nama Ayah</label>
        <input type="text">

        <label>Nama Ibu</label>
        <input type="text">

        <label>No. HP Orang Tua</label>
        <input type="text" placeholder="08xxxxxxxxxx">

        <!-- Pendidikan -->
        <label>Asal Sekolah</label>
        <input type="text">

        <label>Program yang Dipilih</label>
        <select>
            <option>-- Pilih Program --</option>
            <option>Tahfidz Qur'an</option>
            <option>Madrasah Diniyah</option>
            <option>Pesantren Salaf</option>
        </select>

        <button type="submit">Daftar Sekarang</button>
    </form>
</div>

</body>
</html>
