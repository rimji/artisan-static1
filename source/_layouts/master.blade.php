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
              <a href="https://www.rimsim.com/"><img src="https://user-images.githubusercontent.com/88181976/243361332-f3d7d09c-0499-4913-a73d-b1aff99d4d77.png" alt="Rimsim" width="110" height="30"></a>
            </nav>
        </header> 
        
     <article>

                @yield('content')

       </article>
       

           
        <footer>
        
             <a href="https://www.facebook.com/rimsimofficial">Facebook</a>

             &nbsp&nbsp

             <a href="https://www.instagram.com/rimsimofficial">Instagram</a>

             &nbsp&nbsp

             

      

             <a href="https://www.rimsim.com/contact/">Contact us</a>
             <br>
            &copy; 2023 Rimsim
         
        </footer>
    </section>

    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
