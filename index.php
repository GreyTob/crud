<?php include 'foo.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#create"><i class="fa fa-plus"></i></button>
          <table class="table table-striped table-hover mt-2">
            <thead class="table-dark">
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </thead>
            <tbody>
              <?php foreach($results as $res) { ?>
              <tr>
                <td><?php echo $res->id; ?></td>
                <td><?php echo $res->name; ?></td>
                <td><?php echo $res->email; ?></td>
                <td>
                  <a href="?id=<?php echo $res->id; ?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit<?php echo $res->id; ?>"><i class='fa fa-edit'></i></a>
                  <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $res->id; ?>"><i class='fa fa-trash-alt'></i></a>
                </td>
              </tr>
                 <!-- Modal edit -->
                <div class="modal fade" id="edit<?php echo $res->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Изменить запись</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="?id=<?php echo $res->id; ?>" method="POST">
                          <div class="form-group">
                            <small>Name</small>
                            <input type="text" class="form-control" name="name" value="<?php echo $res->name; ?>">
                          </div>
                          <div class="form-group">
                            <small>Email</small>
                            <input type="text" class="form-control" name="email" value="<?php echo $res->email; ?>">
                          </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary" name='edit'>Сохранить</button>
                        
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal edit -->
                   <!-- Modal delete -->
                   <div class="modal fade" id="delete<?php echo $res->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?php echo $res->id; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                        <form action="?id=<?php echo $res->id; ?>" method="POST">
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                          <button type="submit" class="btn btn-primary" name='delete'>Удалить</button>
                        
                        </form>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- Modal delete -->
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Modal create -->
    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Добавить запись</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
              <div class="form-group">
                <small>Name</small>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="form-group">
                <small>Email</small>
                <input type="text" class="form-control" name="email">
              </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary" name='add'>Сохранить</button>
            
          </form>
          </div>
        </div>
      </div>
    </div>
     <!-- Modal create -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>