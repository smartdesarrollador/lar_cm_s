<!-- Estilo - Carousel -->    
  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
       
        margin: auto;
    }
    </style>
  <!-- /Estilo - Carousel -->    
    
  <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">

<?php $val=0;  ?>

  @foreach(Componente::bannermodel() as $banner)
      
        

    @if($banner->id==Componente::bannermodel()->first()->id)
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      @endif
         
      @if($banner->id>Componente::bannermodel()->first()->id)
       <?php $val=$val+1; ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $val; ?>"></li>
       @endif
        
       
  @endforeach  
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
  @foreach (Componente::bannermodel() as $banner)
      @if($banner->id==Componente::bannermodel()->first()->id)
         <div class="item active">
          <img src="{!!asset('uploads/'.$banner->imagen.'')!!}" alt="Chania" width="1200" height="345">
          <div class="carousel-caption">
            <h3>{{$banner->titulo}}</h3>
            <p>{{$banner->descripcion}}</p>
          </div>
        </div>
      @endif

      @if($banner->id>Componente::bannermodel()->first()->id)
        <div class="item">
          <img src="{!!asset('uploads/'.$banner->imagen.'')!!}" alt="Chania" width="1200" height="345">
          <div class="carousel-caption">
            <h3>{{$banner->titulo}}</h3>
            <p>{{$banner->descripcion}}</p>
          </div>
        </div>
       @endif
		

  @endforeach  
        
    
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- /Carousel -->

     