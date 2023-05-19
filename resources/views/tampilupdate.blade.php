<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>input mahasiswa</title>
</head>
<body>
    
    <form action="/update/{{ $data->id }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Pangan</label>
            <input type="text" name="nama_pakan" class="form-control"value="{{ $data->nama_pakan }}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control"value="{{ $data->harga }}" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Stok</label>
              <input type="number" name="stok" class="form-control" id="exampleInputEmail1"value="{{ $data->stok }}" aria-describedby="emailHelp">
  
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nama Suplier</label>
              <input type="text" name="nama_suplier" class="form-control" value="{{ $data->nama_suplier }}"id="exampleInputPassword1">
            </div>    
          <button type="submit" class="btn btn-primary">Kirim Data</button>
       
    </form>
</body>
</html>