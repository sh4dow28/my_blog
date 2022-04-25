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
</head>
<body>
<div class="container">
    <h1>Creer un nouveau post</h1>
    <form>
        <fieldset>
            {{-- <legend>Creer un nouveau post</legend> --}}
            <div class="form-group"> 
                <label for="nom">Titre du Post</label> 
                <input type="text" class="form-control" id="nom" placeholder="Pierre GIRAUD"> 
            </div>
            <div class="form-group"> 
                <label for="email">Source du Post</label> 
                <input type="email" class="form-control" id="email" placeholder="pierre.giraud@edhec.com"> 
            </div>
            <div class="form-group"> 
                <label for="email">Image du Post</label> 
                <input type="email" class="form-control" id="email" placeholder="pierre.giraud@edhec.com"> 
            </div>
            <div class="form-group"> 
                <label for="selection">Categorie du Post</label> 
                <select id="selection"
                    class="form-control">
                    <option value="">Liste de choix...</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select> 
            </div>
            <div class="form-group"> <label for="bio">COntenu du Post</label> 
                <textarea class="form-control" id="bio" style="max-width: 100%; min-width: 100%;"></textarea> 
            </div>
        </fieldset>
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