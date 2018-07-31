<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
    <?php include 'navbar.php'; ?>

      <div class="jumbotron text-center">
          <h1 class="display-3">Json</h1>
          <p class="lead">With CodeIgniter</p>
          <hr class="my-2">
      </div>
      <div class="container">
        <div class="row">
        <?php foreach ($mangkq as $key => $value): ?>
          <div class="col-sm-4">
            <div class="card mb-3">
              <div class="card-body">
                <h4 class="card-title">Ten: <?= $value->ten; ?></h4>
                <p class="card-text">So Dien Thoai: <?= $value->sdt; ?></p>
                <a href="json/xoa_json/<?= $value->sdt ?>" class="btn btn-danger"><i class="fa fa-remove"></i> Xoa</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
        </div>
      </div>
      <div class="container">
        <div class="col-4 mx-auto mb-5 mt-5">
          <div class="card border-primary">
            <div class="card-header text-center bg-primary">
              <h3 class="card-title text-white">Them Moi</h3>
            </div>
            <div class="card-body">
              <form method="post" action="json/do_add">
                <fieldset class="form-group">
                  <input type="text" class="form-control" name="ten" id="ten" placeholder="Ten">
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" class="form-control" name="sdt" id="sdt" placeholder="So Dien Thoai">
                </fieldset>
                <fieldset class="form-group">
                  <input type="submit" class="form-control btn btn-primary"  id="sodienthoai" value="Luu">
                </fieldset>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  
  </body>
</html>