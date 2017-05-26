@extends('master')

@section('title')

@section('content')
    <!-- Styles -->
    <style>
        body {
            background-color: #fff;
        }
        .row {
            margin: 0 auto;
        }
        .sidebar {
            background-color: red;
        }
        .posts {
            width: 50%;
            text-align: center;
        }
        #posts input, textarea {
            margin: 0.5% auto;
        }
        textarea { resize: none; }
    </style>
    <!-- End Styles -->

        <div class="row">
            <div class="col-md-3 col-md-offset-1 sidebar">
                <h2>Welcome, {{ \Auth::user()->firstname }}</h2>
            </div>
            <div class="col-md-6 col-md-offset-1 posts">
                <h2>Posts</h2>
                  {!! Form::open(array('route' => 'home', "id" => "posts")) !!}
                   {{ csrf_field() }}
                    {{ Form::text('title', null, array("class" => "form-control", "placeholder" => "Post Title" ))}}

                    {{ Form::textarea('body', null, array("class" => "form-control", "placeholder" => "What's On Your Mind?") )}}

                    {{ Form::submit("Submit Post", array("class" => "btn btn-default signup")) }}
                {!! Form::close() !!}
            </div>
        </div>
@endsection
