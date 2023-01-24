<html>
    <head>
        <title>Import</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <form action="{{ route('import.store') }}" method="POST" enctype="multipart/form-data" class="col-12">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" name="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label"></label>
                        <button class="btn btn-primary">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>