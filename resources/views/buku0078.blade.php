<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    1461900078
  </title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body>

  <div class="bg-white rounded-lg shadow-lg py-6">
    <div class="block overflow-x-auto mx-6">
      <h1>Select</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
            <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Kode_buku</th>
            <th class="px-4 py-3">Kode_kategori</th>
            <th class="px-4 py-3">Kode_penerbit</th>
            <th class="px-4 py-3">Judul</th>
            <th class="px-4 py-3">Jumlah</th>
            <th class="px-4 py-3">Pengarang</th>
            <th class="px-4 py-3">Tahun_terbit</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($buku as $book)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $book->buku_kode_buku }}</td>
            <td class="px-4 py-4">{{ $book->buku_Kode_kategori }}</td>
            <td class="px-4 py-4">{{ $buku_Kode_penerbit }}</td>
            <td class="px-4 py-4">{{ $buku_Judul }}</td>
            <td class="px-4 py-4">{{ $buku_Jumlah }}</td>
            <td class="px-4 py-4">{{ $buku_Pengarang }}</td>
            <td class="px-4 py-4">{{ $buku_Tahun_terbit }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
      </div>
  </div>
</body>
</html>