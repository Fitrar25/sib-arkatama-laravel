<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
  <body>

    <div style="padding-left: 15px; padding-right: 20px;">
    <p class="fs-1">Tambahkan Pengguna</p>
    <form action="/edit.php" method="post">
        <input  type="hidden" name="id">
        <div class="mb-3">
          <label class="form-label" >Nama User</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3 row g-3">
            <div class="col-md-6">
                <label for="form-label">Pilih Role</label>
                <select class="form-control form-select-md" name="role">
                    <option value="admin">admin</option>
                    <option value="staff">staff</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                <label class="form-check-label" >Show Password</label>
            </div>
        </div>
        <div class="mb-3 row g-3">
            <div class="col-md-6">
                <label class="form-label" >Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <div class="col-md-6">
                <label class="form-label" >Nomor HP</label>
                <input type="number" class="form-control" id="exampleInput" name="nope">
            </div>

            <div class="mb-3">
                <label class="form-label" >Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Masukkan Avatar (gambar/foto)</label>
                <input class="form-control" type="file" id="formFile" accept="image/png, image/gif, image/jpeg" name="foto">
              </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
      </form>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
