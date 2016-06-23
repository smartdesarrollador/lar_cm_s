

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav">
@foreach(Componente::menumodel() as $menu)
     @if($menu->id==Componente::menu_primero()->first()->id)

        @if( $menu->orden_submenu==0)
        <li class="active">{!! Html::link(url('pagina',$param=[$menu->id]), $menu->titulo) !!}</li>
        @endif
            
        @if($menu->orden_submenu!=0)
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ $menu->titulo }}<span class="caret"></span></a>
                 <ul class="dropdown-menu">

                   @foreach(Componente::menumodel() as $submenu)
                      @if($submenu->orden_submenu!=0)
                      <li><a href="#">{{ $submenu->url }}</a></li>
                      @endif
                    @endforeach
          </ul>
            </li>
        @endif
      @endif

      @if($menu->id>Componente::menu_primero()->first()->id and $menu->orden_submenu==0 )
        
         <li>{!! Html::link(url('pagina',$param=[$menu->id]), $menu->titulo) !!}</li>
       @endif
            
        @if($menu->id>Componente::menu_primero()->first()->id and $menu->orden_submenu!=0 and Componente::submenu_mostrar($menu->orden_menu))
          <li class="dropdown">
          @if($menu->orden_submenu==1)
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ $menu->titulo }}<span class="caret"></span></a>
            

          @endif
  <ul class="dropdown-menu">
                 
         
                     @foreach(Componente::menumodel() as $submenu)
                       @if($menu->orden_menu==$submenu->orden_menu and $submenu->orden_submenu>1)
                      <li>{!! Html::link(url('pagina',$param=[$submenu->id]), $submenu->titulo) !!}</li>
                      @endif
                      @endforeach
                  
          
  

              </ul>
            </li>
      
      @endif



@endforeach



     <!--  
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
       -->

         </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  



