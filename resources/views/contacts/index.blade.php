@extends('layouts.main')

@section('content')
<div class="container">
  @if(count($errors)>=1)
  <div class="alert alert-danger text-center">
    @foreach($errors->all() as $error)
  {{ $error }}<br>
  @endforeach
</div>
  @endif
<form id="loginform" class="form-horizontal" role="form" method="POST" action="{{route('contact.store')}}">
    @csrf
    <div class="row">
            <div class="col-sm-6">                               
                <div style="margin-bottom: 25px" class="input-group">
                 
                    <input id="login-username" type="text" class="form-control" name="building" value="" placeholder="Building / Location">                                        
                </div>
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="login-password" type="text" class="form-control" name="box" placeholder="P.o Box Number ">
                </div>          
            </div>
            <div class="col-sm-6">                               
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input id="login-username" type="text" class="form-control" name="phone" value="" placeholder="Phone Numbers">                                        
                </div>
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input  type="email" class="form-control" name="email" placeholder="contact Email">
                </div>          
            </div>
    </div>
    <div class="text-center">
       <button type="submit" class="btn btn-success">Add Contact</button>
    </div>
</form> 
</div>
@stop