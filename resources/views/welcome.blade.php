<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Note App</title>
  </head>
  <body>
  
    <div class="container-fluid">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">Note App</a>
            </nav>

            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <br/>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Add new note
                    </button>
                    <br/>

                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" action="/">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="description" class="form-control" id="exampleInputPassword1">
                                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save it</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br/>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($o as $o)
                            <tr>
                                <th scope="row">{{$o->id}}</th>
                                <td>{{$o->title}}</td>
                                <td>{{$o->description}}</td>
                                <td>{{$o->created_at}}</td>
                                <td>
                                    <form action="/{{$o->id}}" method="post">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>