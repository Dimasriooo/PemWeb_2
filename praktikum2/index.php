<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>




<form menthod = "get" Action="index2.php">
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">nama lengkap</label> 
      <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="select" class="col-4 col-form-label">mata kuliah</label> 
      <div class="col-8">
        <select id="select" name="matkul" class="custom-select">
          <option value="DDP">DDP</option>
          <option value="basdat">Basis Data</option>
          <option value="pw">PW</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="Uts" class="col-4 col-form-label">Nilai UTS</label> 
      <div class="col-8">
        <input id="Uts" name="Uts" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="uas" class="col-4 col-form-label">Nilai Uas</label> 
      <div class="col-8">
        <input id="uas" name="uas" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
      <div class="col-8">
        <input id="tugas" name="tugas" type="text" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>

</body>
</html>