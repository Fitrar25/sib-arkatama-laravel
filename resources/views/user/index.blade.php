<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USERS TABLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body>
    <p class="fs-1">Data Pengguna</p>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Aksi</th>
            <th scope="col">Avatar</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><a href="#"><button type="button" class="btn btn-primary" ><span class="material-symbols-outlined">
                info
              </span></button></a>
              <a href="edit.blade.php"><button type="button" class="btn btn-warning"><span class="material-symbols-outlined">
                border_color
                </span>
              </button></a> <a href="#"><button type="button" class="btn btn-danger"><span class="material-symbols-outlined">
                delete
                </span></button></a></td>
            <td>
                <ion-avatar>
                    <img alt="Silhouette of a person's head" src="https://ionicframework.com/docs/img/demos/avatar.svg" style="width: 5%;"/>
                  </ion-avatar>
              </td>
            <td>Fitra Ramadhan</td>
            <td>fitraramadhan2521@gmail.com</td>
            <td>admin</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td><a href="#"><button type="button" class="btn btn-primary" ><span class="material-symbols-outlined">
                info
              </span></button></a>
              <a href="edit.blade.php"><button type="button" class="btn btn-warning"><span class="material-symbols-outlined">
                border_color
                </span>
              </button></a> <a href="#"><button type="button" class="btn btn-danger"><span class="material-symbols-outlined">
                delete
                </span></button></a></td>
            <td><ion-avatar>
                <img alt="Silhouette of a person's head" src="https://ionicframework.com/docs/img/demos/avatar.svg" style="width: 5%;"/>
              </ion-avatar></td>
            <td>Pandau</td>
            <td>fitrar@gmail.com</td>
            <td>admin</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td><a href="#"><button type="button" class="btn btn-primary" ><span class="material-symbols-outlined">
                info
              </span></button></a>
              <a href="edit.blade.php"><button type="button" class="btn btn-warning"><span class="material-symbols-outlined">
                border_color
                </span>
              </button></a> <a href="#"><button type="button" class="btn btn-danger"><span class="material-symbols-outlined">
                delete
                </span></button></a></td>
                <td><ion-avatar>
                    <img alt="Silhouette of a person's head" src="https://ionicframework.com/docs/img/demos/avatar.svg" style="width: 5%;"/>
                  </ion-avatar></td>
                  <td>Permai</td>
                  <td>fitrar2521@gmail.com</td>
                  <td>admin</td>
          </tr>
        </tbody>
      </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
