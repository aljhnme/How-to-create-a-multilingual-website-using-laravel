<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
 
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
       <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ Config::get('languages')[App::getLocale()] }}
        </a>
       
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         @foreach(Config::get('languages') as $leng => $language)
          @if($leng != App::getLocale())
          <a class="dropdown-item" href="{{ route('lang.switch',$leng) }}">{{ $language }}</a>
          @endif
         @endforeach
        </div>
      </li>

      </ul>
    </div>
 </nav>

 <br>
 <div class="container">
   @if ($errors->any())

      @foreach ($errors->all() as $error)
        <div class="alert alert-warning" role="alert">
           {{ $error }}
        </div>
      @endforeach

   @endif
   @if (\Session::has('success'))
    <div class="alert alert-success">
      <li>{!! \Session::get('success') !!}</li> 
    </div>
   @endif  
  <div class="content">
  	<div class="left-side">
  	  <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Berlin</div>
          <div class="text-two">Aachen</div> 	  	
  	  </div>
      <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
      </div> 
      <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
      </div>   	  
  	</div>
  	 <div class="right-side">
        <div class="topic-text">{{ __('messages.topic-text') }}</div>
        <p>{{ __('messages.msg_p') }}</p>
      <form action="{{ url('v_form') }}" method="post">
        {{ csrf_field() }}
        <div class="input-box">
          <input type="text" name="name" placeholder="{{ __('messages.t_input_name') }}">
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="{{ __('messages.t_input_email') }}">
        </div>
        <div class="input-box message-box">
          <textarea name="t_textm" placeholder="{{ __('messages.t_input_textera') }}"></textarea>
        </div>
        <div class="button">
          <button type="submit" class="btn btn-primary">{{ __('messages.t_input_submit') }}</button>
        </div>
      </form>
    </div>
  </div>
 </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</html>
