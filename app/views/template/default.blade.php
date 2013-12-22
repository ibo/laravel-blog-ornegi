<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Basit Blog Uygulaması</title>
        
        <!-- Include Twitter Bootstrap -->
        {{ HTML::style('assets/bootstrap/css/bootstrap.css') }}
        {{ HTML::script('assets/bootstrap/js/bootstrap.js') }}
        
    </head>
    
    <body style="padding: 20px 0px;">
        
        <div class="container">
            
      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          {{ HTML::link('/', 'Basit Blog Uygulaması', array('class' => 'navbar-brand')) }}
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>{{ HTML::link(URL::route('home'), 'Anasayfa') }}</li>
            <li>{{ HTML::link(URL::route('articles'), 'Blog') }}</li>
            <li>{{ HTML::link(URL::route('newArticle'), 'Makale Ekle') }}</li>
            
            @if (Auth::check())
            <li class="active">{{ HTML::link(URL::route('logout'), 'Çıkış Yap (' . Auth::user()->fullname . ')') }}</li>
            @else
            <li class="active">{{ HTML::link(URL::route('login'), 'Giriş Yap') }}</li>
            @endif

          </ul>
        </div><!--/.nav-collapse -->
      </div>
            
        @yield('content')
      
        <hr />

        <footer class='container'>
            <p class='text-center'>  
                Bu Uygulama {{ HTML::link('http://www.ibrahimhizlioglu.com/', 'İbrahim Hızlıoğlu', array('target' => '_blank')) }} tarafından Laravel Workshop etkinliğinin atölye çalışmasında kodlanmıştır. <br />
                Laravel hakkında soru ve önerilerinizi {{ HTML::link('http://www.facebook.com/groups/laravelturkiye', 'Laravel Türkiye ', array('target' => '_blank')) }} Facebook Grubuna gönderebilirsiniz.
            </p>
        </footer>

        </div> <!-- /container -->    
            
    </body>
</html>