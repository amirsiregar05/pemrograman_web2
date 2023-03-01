<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="contianer">
        <h2>Form Nilai Mahasiswa</h2>

        <form action="form_hasil.php" method="GET">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
            <select id="kuliah" name="kuliah" required="required" class="custom-select">
                <option value="web">Pemrograman Web</option>
                <option value="data">Basis Data</option>
                <option value="fui/ux">UI/UX</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="tugas" class="col-4 col-form-label">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Nilai Tugas</font>
            </font>
            </label> 
            <div class="col-8">
            <input id="tugas" name="tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="uts" class="col-4 col-form-label">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Nilai UTS</font>
            </font>
            </label> 
            <div class="col-8">
            <input id="uts" name="uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-4 col-form-label">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Nilai UAS</font>
            </font>
            </label> 
            <div class="col-8">
            <input id="uas" name="uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>