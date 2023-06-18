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
              	<a href="https://www.rimsim.com/"><img src="https://user-images.githubusercontent.com/88181976/246650195-b81f8419-6696-4c6f-9991-f6ee3dd52a12.png" alt="Rimsim" width="120" height="30"></a>
             	
            </nav>
        </header> 
    
     <article>
                @yield('content')
     </article>     
        <footer>
             <a href="https://www.facebook.com/RimsimIN" target="_blank" rel="noopener noreferrer">Facebook</a>
             &nbsp&nbsp
             <a href="https://www.instagram.com/RimsimIN" target="_blank" rel="noopener noreferrer">Instagram</a>
             &nbsp&nbsp
             <a href="https://twitter.com/RimsimIN" target="_blank" rel="noopener noreferrer">Twitter</a>
             <br>&copy; 2023 Rimsim
        </footer>
  </section>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
