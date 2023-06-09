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
              <a href="https://www.rimsim.com/"><img src="https://user-images.githubusercontent.com/88181976/244395290-a32c34bb-5f09-467f-a5ce-03db31f69856.png" alt="Rimsim" width="120" height="35"></a>
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
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
