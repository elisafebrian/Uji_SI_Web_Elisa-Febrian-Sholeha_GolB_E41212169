<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <form method="post" action="/tambah" class="container">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Pangan</label>
          <input type="text" name="nama_pakan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Harga</label>
          <input type="number" name="harga" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Suplier</label>
            <input type="text" name="nama_suplier" class="form-control" id="exampleInputPassword1">
          </div>    
        <button type="submit" class="btn btn-primary">Kirim Data</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>