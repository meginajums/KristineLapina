@extends('layouts.main')

@section('content')

<h1>Ideju inkubators</h1>

<div class="container">


<form action="/submitform" method="get">

        <div class="form-group">
            <label for="exampleInputPassword1">Vārds</label>
            <input name="yourname" type="text" class="form-control">
          </div>

        <div class="form-group">
          <label for="exampleInputEmail1">E-pasta adrese</label>
          <input name="youremail" type="email" class="form-control">
        </div>        
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Tava ziņa</label>

            <textarea name="yourmessage" class="form-control" rows="3"></textarea>
          </div>

        <button type="submit" class="btn btn-primary">Nosūtīt</button>

      </form>

        {{-- @if ($formSuccess)
        <h1> Pāāāāāāāaldies! <h1>
        @else
        <h1> Pāāāāāāāaldies! <h1>
        @endif --}}
   </div>
        <h1>Why people love ME</h1>

        <div class="container">  
        <h2>Kristīne Lapiņa</h2>
    
        {{-- <div class="container"> --}}
          <div class="row"></div>
        <p>Dzīvoju divās vietās: Ozolu ielā 5, Rīgā un Suntažos Ogres novadā. Patīk viss, kas saistīts ar procesu efektivizāciju, jēgpilnām datubāzēm un datiem, to ieguvi, apstrādi, vizualizāciju, analīzi. Tagad ir iepaticies arī programmēt. Brīvajos brīžos eksperimentēju ar viedo un ilgtspējīgo saimniekošanu/atpūšanos laukos. Esmu <a href="http://www.permakultura.lv/">Latvijas Permakultūras biedrības</a> biedre. Audzēju arī puķes, tomātus un daudz ko citu, kas aug no zemes. Interesē arī bioloģiskās daudzveidības saglabāšana apkārt esošajās pļavās un mežā. Tā kā man ļoti garšo tomāti un avokado, tad bieži domāju, ka varētu dzīvot daudz tuvāk vietai, kur dabai un cilvēkam draudzīgā veidā tiek audzēti avokado un tomāti, kas tiešām garšo pēc tomātiem, visa gada garumā.<p>
          </div>
        </div>

      </div>

        <div class="container-fluid px-0">
          <div class="row mx-0">
            <div class="col mx-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17427.055409305107!2d24.940526749999997!3d56.90798254999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slv!4v1558430563297!5m2!1sen!2slv" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  
                <!-- <a href="https://goo.gl/maps/UTpwj6eT1xMcoTs37">Karte</a> ar šo pievieno tikai saiti -->
              </div>
            </div>
      </div>  

      @include('partials.footer')

    {{-- <h1>This is Contacts page</h1> --}}

@endsection


@section('sidebar')
<h1>This is sidebar of contacts page</h1>
@endsection