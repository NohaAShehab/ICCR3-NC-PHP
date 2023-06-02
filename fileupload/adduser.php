<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<div class="container">
    <div class="row">
        <h1>Upload file </h1>
        <form action="uploadfile.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label class="form-label">File </label>
                <input class="form-control" type="file" name="file"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Description </label>
                <input class="form-control" type="text" name="description"/>
            </div>
            <input class="btn btn-success" type="submit"/>
        </form>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</html>