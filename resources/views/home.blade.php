@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Goman</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
    

                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    
<a href="/posts/create"><button type="button" class="btn btn-primary btn-lg">Create a New post</button></a>
<a href="/tags/create"><button type="button" class="btn btn-success btn-lg">Create a New Tag</button></a>
<a href="/categories/create"><button type="button" class="btn btn-danger btn-lg">Create a New Category</button></a>
<a href="/tags/create"><button type="button" class="btn btn-dark btn-lg">Create a New user</button></a>

</div>

@endsection
