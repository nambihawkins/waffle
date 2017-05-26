<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Waffle</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada:700" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Styles -->
        <style>
            body {
                font: 16px / 1.0 'Merriweather Sans', sans-serif;
                background-color: #D87E1B;
                color: #fff;
            }
            .navbar {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
            }
            .navbar-brand {
                font: 2em 'Montserrat Subrayada', sans-serif;
                line-height: 50%;
            }
            .navbar-default.transparent {
                background-color: transparent;
            }
            .full-screen {
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            .carousel-indicators {
                display: none;
            }
            #target {
                width: auto;
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                margin: 0 auto;
                text-align: center;
            }
            .center p {
                font-size: 2.5em;
            }
            .alert {
              text-align:center;
              margin: 0 auto;
            }
            .alert ul {
              text-align: center;
              list-style-type: none;
            }
            .alert li {
              color: #ff0000;
              font-size: 1.25em;
              text-align:center;
            }

            .signup {
                width: auto;
                padding: 1% 5%;
                background-color: #F3D08F;
                font-size: 1em;
                color: #fff;
                border: none;
            }
            .span3 {
                width: 30%;
                margin: 0 auto;
                height: 50%;
            }
            #result {
                width: 50%;
                display: none;
                position:absolute;
                top: 35%;
                left: 0;
                right: 0;
                margin: 0 auto;
                text-align: center;
            }
            #result input {
                width: 50%;
                margin: 0.5% auto;
            }

            /* Set the fixed height of the footer here */
            footer {
                position: absolute;
                bottom: 0;
            }



            /* Custom page CSS
            -------------------------------------------------- */
            footer ul {
                padding: 0 125px;
            }
            footer li {
                padding: 0 10px;
                display: inline;
            }
            footer a:link, a:visited {
                color: #fff;
                text-decoration: none;
            }
            footer a:hover, .navbar-brand a:hover {
                color: #F3D08F;
                text-decoration: none;
            }
            footer a:active, .navbar-brand a:active {
                color: #D87E1B;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
      <!--navigation bar-->
      <div class="navbar navbar-default transparent navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><font color="white">Waffle</font></a> <!-- onmouseover  = "this.style.color = '#F3D08F'" onmouseout  = "this.style.color = '#fff'" is not working!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
          </div>
            <center>
              <div class="navbar-collapse collapse" id="navbar-main">
                {!! Form::open(array('route' => 'handleLogin', "class" => "navbar-form navbar-right")) !!}
                  {{ csrf_field() }}
                  <div class="form-group">
                    {{ Form::text('email', null, array("class" => "form-control", "placeholder" => "Email Address" ))}}
                  </div>
                  <div class="form-group">
                    {{ Form::text('password', null, array("class" => "form-control", "placeholder" => "Password") )}}
                  </div>
                  {!! Form::token() !!}
                  {{ Form::submit("Log In", array("class" => "btn btn-default")) }}
               {!! Form::close() !!}

               <!-- Errors -->
               @if(count($errors))
               <div class="alert">
                 <ul>
                   @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
                   @endforeach
                 </ul>
               </div>
              @endif

                 <!-- End Errors-->
               </div>
             </div>
           </div>
       </center>
     </div>
     <!--end nav bar-->


        <!--start background image carousel-->
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mycarousel" data-slide-to="0"></li>
                <li data-target="#mycarousel" data-slide-to="1"></li>
                <li data-target="#mycarousel" data-slide-to="2"></li>
                <li data-target="#mycarousel" data-slide-to="3"></li>
                <li data-target="#mycarousel" data-slide-to="4"></li>
                <li data-target="#mycarousel" data-slide-to="5"></li>
                <li data-target="#mycarousel" data-slide-to="6"></li>
                <li data-target="#mycarousel" data-slide-to="7"></li>
                <li data-target="#mycarousel" data-slide-to="8"></li>
                <li data-target="#mycarousel" data-slide-to="9"></li>
                <li data-target="#mycarousel" data-slide-to="10"></li>
                <li data-target="#mycarousel" data-slide-to="11"></li>
                <li data-target="#mycarousel" data-slide-to="12"></li>
                <li data-target="#mycarousel" data-slide-to="13"></li>
                <li data-target="#mycarousel" data-slide-to="14"></li>
                <li data-target="#mycarousel" data-slide-to="15"></li>
                <li data-target="#mycarousel" data-slide-to="16"></li>
                <li data-target="#mycarousel" data-slide-to="17"></li>
                <li data-target="#mycarousel" data-slide-to="18"></li>
                <li data-target="#mycarousel" data-slide-to="19"></li>
                <li data-target="#mycarousel" data-slide-to="20"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <img src="/images/waffle2.jpg" alt="Waffle2">
                </div>
                <div class="item">
                    <img src="/images/waffle3.jpg" alt="Waffle3">
                </div>
                <div class="item">
                    <img src="/images/waffle4.jpg" alt="Waffle4">
                </div>
                <div class="item">
                    <img src="/images/waffle5.jpg" alt="Waffle5">
                </div>
                <div class="item">
                    <img src="/images/waffle6.jpg" alt="Waffle6">
                </div>
                <div class="item">
                    <img src="/images/waffle7.jpg" alt="Waffle7">
                </div>
                <div class="item">
                    <img src="/images/waffle8.jpg" alt="Waffle8">
                </div>
                <div class="item">
                    <img src="/images/waffle9.jpg" alt="Waffle9">
                </div>
                <div class="item">
                    <img src="/images/waffle10.jpg" alt="Waffle10">
                </div>
                <div class="item">
                    <img src="/images/waffle11.jpg" alt="Waffle11">
                </div>
                <div class="item">
                    <img src="/images/waffle12.jpg" alt="Waffle12">
                </div>
                <div class="item">
                    <img src="/images/waffle13.jpg" alt="Waffle13">
                </div>
                <div class="item">
                    <img src="/images/waffle14.jpg" alt="Waffle14">
                </div>
                <div class="item">
                    <img src="/images/waffle15.jpg" alt="Waffle15">
                </div>
                <div class="item">
                    <img src="/images/waffle16.jpg" alt="Waffle16">
                </div>
                <div class="item">
                    <img src="/images/waffle17.jpg" alt="Waffle17">
                </div>
                <div class="item">
                    <img src="/images/waffle18.jpg" alt="Waffle18">
                </div>
                <div class="item">
                    <img src="/images/waffle19.jpg" alt="Waffle19">
                </div>
                <div class="item">
                    <img src="/images/waffle20.jpg" alt="Waffle20">
                </div>
            </div>
        </div>
        <!--end background image carousel-->

        <!--content in middle of page-->
        <div class="center">
            <div id="target">
                <p>A blog made by you,<br>Just for you.</p>
                <button type="submit" class="btn btn-default signup">Join Waffle</button>
            </div>

            <div class="span3">
              {!! Form::open(array('route' => 'users.store', 'id' => 'result')) !!}
                <p>A blog made by you,<br>Just for you.</p>
                <div class="form-group">
                  {{ Form::text('firstname', null, array("class" => "form-control", "placeholder" => "First Name", "required" ))}}
                </div>
                <div class="form-group">
                  {{ Form::text('lastname', null, array("class" => "form-control", "placeholder" => "Last Name", "required" ))}}
                </div>
                <div class="form-group">
                  {{ Form::text('email', null, array("class" => "form-control", "placeholder" => "Email Address", "required" ))}}
                </div>
                <div class="form-group">
                  {{ Form::text('username', null, array("class" => "form-control", "placeholder" => "Username", "required" ))}}
                </div>
                <div class="form-group">
                  {{ Form::text('password', null, array("class" => "form-control", "placeholder" => "Password", "required" ))}}
                </div>
                {!! Form::token() !!}
                {{ Form::submit("Join Waffle", array("class" => "btn btn-default signup")) }}
                <div class="clearfix"></div>
              {!! Form::close() !!}
            </div>
        </div>
        <!--end content in middle of page-->
        @include("_footer")


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $('.carousel').carousel({
            interval: 3000,
            pause: "false"
        });
        var $item = $('.carousel .item');
        var $wHeight = $(window).height();

        $item.height($wHeight);
        $item.addClass('full-screen');

        $('.carousel img').each(function() {
            var $src = $(this).attr('src');
            var $color = $(this).attr('data-color');
            $(this).parent().css({
                'background-image' : 'url(' + $src + ')',
                'background-color' : $color
            });
            $(this).remove();
        });
        $(window).on('resize', function (){
            $wHeight = $(window).height();
            $item.height($wHeight);
        });
        var $numberofSlides = $('.item').length;
        var $currentSlide = Math.floor((Math.random() * $numberofSlides));
        $('.carousel-indicators li').each(function(){
            var $slideValue = $(this).attr('data-slide-to');
            if($currentSlide == $slideValue) {
                $(this).addClass('active');
                $item.eq($slideValue).addClass('active');
            } else {
                $(this).removeClass('active');
                $item.eq($slideValue).removeClass('active');
            }
        });
        $( "#target" ).click(function() {
            $(this).css('display', 'none');
            $('form').fadeIn(1000)
        });
    </script>
    <script language=Javascript>
        var form = document.getElementById('result'); // form has to have ID: <form id="result">
        form.noValidate = true;
        form.addEventListener('submit', function(event) { // listen for form submitting
            if (!event.target.checkValidity()) {
                event.preventDefault(); // dismiss the default functionality
                alert('You must complete the sign up before continuing.'); // error message
            }
        }, false);
        </script>
    </body>
</html>
