<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
     <header>
            <nav>
              	<a href="https://www.rimsim.com/"><img src="https://user-images.githubusercontent.com/88181976/245722473-7369f9e1-dc96-4a2a-8aa2-07e968c075de.png" alt="Rimsim" width="90" height="25"></a>
          	<br>	Save Money! Get Best Deals ⭐
            </nav>
        </header> 
        
     <article>

                @yield('content')

       </article>
       

           
        <footer>
             

             
                
             <a href="https://www.facebook.com/rimsimshopping" target="_blank" rel="noopener noreferrer">Facebook</a>

             &nbsp&nbsp

             <a href="https://www.instagram.com/rimsimshopping" target="_blank" rel="noopener noreferrer">Instagram</a>

             &nbsp&nbsp

             
             <a href="https://twitter.com/rimsimshopping" target="_blank" rel="noopener noreferrer">Twitter</a>

               <br>
            &copy; 2023 Rimsim
         
        </footer>
    </section>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
