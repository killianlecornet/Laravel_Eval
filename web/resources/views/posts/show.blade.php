@extends('layout')

@section('contenu')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>



    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <center><h2> Show Posts</h2></center>
            </div>
        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <center><p class="font-weight-bold">{{ $post->title }}</p></center>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <center><img src="{{ Storage::url($post->image) }}" height="300" width="300" alt="" /></center>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <center>{{ $post->description }}</center>

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <center><strong>prix:</strong>

                {{ $post->price }}</center>

            </div>
        </div>

            <a class="btn btn-primary btn-lg btn-block" href="http://127.0.0.1:8000/"> Back</a>

    
    </div>
</body>
</html>
@endsection