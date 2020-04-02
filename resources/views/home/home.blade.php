@extends ('template')
@section ('title', 'Page Home Examples')

@section ('intro-header')


  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">

      @if(\Session::has('alert-success'))
          <div class="alert alert-success">
            <div>{{ Session::get('alert-success') }}, Please <a href="{{ url('/login') }}">LOGIN</a></div>
          </div>
      @endif

        <h1 class="mx-auto my-0 text-uppercase">TONGQ</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Let's Found & Booking Your HangOut Place</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a>
      </div>
    </div>
  </header>

  

@endsection


@section ('home')

	

@endsection







