@extends('main-layout.master')
@section('title')
  Shashank.Space
@endsection
@section('content')
  <section id="login">
    <div class="container">
     <div class="row">
         <div class="col-md-6">
             <div class="login-panel panel panel-default">
                 <div class="panel-heading">
                     <h3 class="panel-title">Please Sign Up</h3>
                 </div>
                 <div class="panel-body">
                     <form role="form" method="post" action="{{ route('signup') }}">
                         <fieldset>
                           <div class="form-group">
                               <label class="label label-default">Name</label>
                               <input class="form-control" placeholder="Name" name="name" type="text" autofocus>
                           </div>
                           <div class="form-group">
                               <label class="label label-default">Email</label>
                               <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                           </div>
                           <div class="form-group">
                               <label class="label label-default">Contact Number</label>
                               <input class="form-control" placeholder="Contact Number" name="contact" type="text" autofocus>
                           </div>

                           <div class="form-group">
                               <label class="label label-default">Password</label>
                               <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                             <!-- Change this to a button or input when using this as a form -->
                             <button class="btn btn-lg btn-info" type="Submit">Sign Up</button>
                             <input type="hidden" name="_token" value="{{ Session::token() }}"
                         </fieldset>
                     </form>
                 </div>
             </div>
         </div>
         <div class="col-md-6">
             <div class="login-panel panel panel-default">
                 <div class="panel-heading">
                     <h3 class="panel-title">Please Sign In</h3>
                 </div>
                 <div class="panel-body">
                     <form role="form">
                         <fieldset>
                             <div class="form-group">
                                 <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                             </div>
                             <div class="form-group">
                                 <input class="form-control" placeholder="Password" name="password" type="password" value="">
                             </div>
                             <div class="checkbox">
                                 <label>
                                     <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                 </label>
                             </div>
                             <!-- Change this to a button or input when using this as a form -->
                             <a href="index.html" class="btn btn-lg btn-success">Sign In</a>
                         </fieldset>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
  </section>
@endsection
