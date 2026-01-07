<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Santri Baru</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6584a4ff;
        }

        .container {
            width: 600px;
            margin: 40px auto;
            background: #967a7aff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(50, 46, 46, 0.1);
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
            border: 1px solid #655151ff;
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

    <form action="{{ url('/daftar-santri') }}" method="POST">
        @csrf

        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>

        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" required>

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" required>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" required>
            <option value="">-- Pilih --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label>Alamat Lengkap</label>
        <textarea name="alamat" rows="3" required></textarea>

        <label>Nama Ayah</label>
        <input type="text" name="nama_ayah" required>

        <label>Nama Ibu</label>
        <input type="text" name="nama_ibu" required>

        <label>No. HP Orang Tua</label>
        <input type="text" name="no_hp" required>

        <label>Asal Sekolah</label>
        <input type="text" name="asal_sekolah" required>

        <label>Program yang Dipilih</label>
        <select name="program" required>
            <option value="">-- Pilih Program --</option>
            <option value="Tahfidz Qur'an">Tahfidz Qur'an</option>
            <option value="Madrasah Diniyah">Madrasah Diniyah</option>
            <option value="Pesantren Salaf">Pesantren Salaf</option>
        </select>

        <button type="submit">Daftar Sekarang</button>
    </form>
</div>

</body>
</html>
