<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon.ico">
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title>MFI | Mega Flash Info</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700" rel="stylesheet">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- Main CSS -->
	<link href="../assets/css/main.css" rel="stylesheet"/>
    <style>
        *{margin: 0;padding: 0;box-sizing: border-box;}
        input:focus,textarea:focus,select:focus{box-shadow: none!important;border-color: #ced4da!important;outline: none;}
        button:focus{box-shadow: none!important;}
    </style>
</head>
<body>
<div class="container">
    <h1>Creer un nouveau post</h1>
    <div class="container">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger close">{{ $error }}</div>
        @endforeach
    </div>
    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset>
            {{-- <legend>Creer un nouveau post</legend> --}}
            <div class="form-group"> 
                <label for="title">Titre du Post</label> 
                <input type="text" class="form-control" id="title" name="post_title" placeholder=""> 
            </div>
            <div class="form-group"> 
                <label for="source">Source du Post</label> 
                <input type="text" class="form-control" id="source" name="post_source" placeholder=""> 
            </div>
            <div class="form-group"> 
                <label for="image">Image du Post</label> 
                <input type="file" class="form-control" id="image" name="post_image" placeholder=""> 
            </div>
            <div class="form-group"> 
                <label for="categorie">Categorie du Post</label> 
                <select id="categorie" name="post_categorie" class="form-control">
                    <option value="0">Liste de choix...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                    @endforeach
                </select> 
            </div>
            <div class="form-group"> 
                <label for="content">Contenu du Post</label> 
                <textarea class="form-control" id="content" name="post_content" style="max-width: 100%; min-width: 100%;"></textarea> 
            </div>
        </fieldset>
        <div class="form-group">
            <button class="form-control btn-primary" type="submit">Enregistrer</button>
        </div>
    </form>
</div>
	<!--------------------------------------
	JAVASCRIPTS
	--------------------------------------->
	<script src="../assets/js/vendor/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/vendor/popper.min.js" type="text/javascript"></script>
	<script src="../assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/functions.js" type="text/javascript"></script>
</body>
</html>