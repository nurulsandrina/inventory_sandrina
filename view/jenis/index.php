<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-there="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">jenis</a>
        </li>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container"> 
<h1> DATA JENIS </h1>
    <a href="view_tambah.php" class="btn btn-primary"> TAMBAH DATA JENIS BARU </a>
    <table class="table table-striped table-bordered">
    <thead> 
        <tr> 
            <th scope="col">id_jenis</th>
            <th scope="col">nama_jenis</th>
            
        </tr>
    </thead>
    <tbody> 
        <tr>
        <td >22</td>
        <td>sendal</td>
        <td></td>
        <td>
        <a href=""class="btn-warning">edit</a>
        <a href=""class="btn-warning">hapus</a>
        <tr>
        </td>
        </tr>
        <tr>
        <td>25</td>
        <td>sepatu</td>
        <td></td>
        <td>
        <a href=""class="btn-warning">edit</a>
        <a href=""class="btn-warning">hapus</a>
        <tr>
        </td>
        </tr>
        
        <tr>
        <td>50</td>
        <td>baju</td>
        <td></td>
        <td>
        <a href=""class="btn-warning">edit</a>
        <a href=""class="btn-warning">hapus</a>
        <tr>
        </td>
        </tr>
        
        <tr>
        <td>75</td>
        <td>kerudung</td>
        <td></td>
        <td>
        <a href=""class="btn-warning">edit</a>
        <a href=""class="btn-warning">hapus</a>
        <tr>
        </td>

        </tr>

        
        </tr>
        
        <tr>
        <td>77</td>
        <td>seragam</td>
        <td></td>
        <td>
        <a href=""class="btn-warning">edit</a>
        <a href=""class="btn-warning">hapus</a>
        <tr>
        </td>

        </tr>


            

        </td>
        </table>
    </tbody>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

