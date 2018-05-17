<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<header style=" border-bottom: 1px solid #9E9E9E; margin-bottom: 10px; ">
    <div    class="container">
    <nav style=" /*border-bottom: 1px solid #9E9E9E;*/ width:100%; min-height: 100px;" class="navbar navbar-expand-lg navbar-light ">

            <a class="navbar-brand" href="#">Буквоеб</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active p-4">
                        <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item p-4">
                        <a class="nav-link" href="#">Скрытая литература</a>
                    </li> <li class="nav-item p-4">
                        <a class="nav-link" href="#">Скорое поступление</a>
                    </li> <li class="nav-item p-4">
                        <a class="nav-link" href="#">О нас</a>
                    </li> <li class="nav-item p-4">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                </ul>

            </div>

    </nav>
    </div>
</header>

<div class="container">
    <div class="row">





        <!--<div class="col-lg-12">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div></div>-->
        <div class="col-lg-12 ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                   <!-- <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>-->
                </ol>
            </nav>


        </div>
        <div class="col-lg-12  ">
        <div style="border-radius: 25px !important;" class="jumbotron p-3 p-md-3 text-white rounded bg-dark">
            <div style="text-align: right" class="col-md-6 px-0 ">
                <h1 style="text-align: left" class="display-4 font-italic">Буквоеб...</h1>
                <p style="    margin: 0 !important;" class="lead my-3">Никогда еще саморазвитие не было таким простым.</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>
    </div>
        <div class="col-lg-12 mb-4 ">

            <span class="  p-3 section badge badge-primary">Философия</span>
            <span class="  p-3 section badge   badge-info">Медицина</span>

            <span class=" p-3 section badge badge-info">Научпоп</span>

        </div>
        <?php for($i=0;$i<13;$i++){?>
        <div  class=" col-lg-4 ">
            <div class="card item mb-4">
            <div class="header card-header flex ">
            <img  src="/img/60979b44430b12d2f7062d2165dc4460.jpg">
            </div>
            <div class="footer card-body ">
                <p class="p-1 name card-text">  <b>Название:</b> Жизнь взаймы</p>
                <p class="p-1 author card-title "> <b>Автор:</b> Remark</p>
                <p class="p-1 price"> <b>Цена:</b> 150р.</p>
                <button type="button" class="btn btn-lg btn-block btn-primary zakaz">Заказать</button>
            </div>
        </div>
        </div>
        <?php }?>
    </div>

</div>






<div class="container">

<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">© 2017-2018</small>
        </div>
        <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Cool stuff</a></li>
                <li><a class="text-muted" href="#">Random feature</a></li>
                <li><a class="text-muted" href="#">Team feature</a></li>
                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                <li><a class="text-muted" href="#">Another one</a></li>
                <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Resource</a></li>
                <li><a class="text-muted" href="#">Resource name</a></li>
                <li><a class="text-muted" href="#">Another resource</a></li>
                <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>



<?php /* FORM */?>
   <div class="bd-example " id="form" style="display: none;" data-example-id="">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"></div>
        <div class="form-group">
            <label for="exampleSelect1">Example select</label>
            <select class="form-control" id="exampleSelect1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></div>
        <div class="form-group">
            <label for="exampleSelect2">Example multiple select</label>
            <select multiple="" class="form-control" id="exampleSelect2"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></div>
        <div class="form-group">
            <label for="exampleTextarea">Example textarea</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea></div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"><small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <fieldset class="form-group"><legend>Radio buttons</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                    Option one is this and that—be sure to include why it's great
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                    Option two can be something else and selecting it will deselect option one
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                    Option three is disabled
                </label>
            </div>
        </fieldset><div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script>
    $( document ).ready(function() {
        $('.zakaz').click(function () {
            $('#form').css('display','block');
        });



    });



</script>
</body>
</html>