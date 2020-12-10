<!doctype html>
<html lang="{{ app()->getLocale() }}" itemscope itemtype="http://schema.org/WebPage">
    <head prefix="og: http://ogp.me/ns#">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-language" content="fr" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="keywords" content="photo, photo.arthaud.dev, gallerie, arthaud, sepo, proust, arthaud proust, marcel, nathalie, florence, le bouscat, bordeaux, bruges, aquitaine, lycéen, proust arthaud, projet, developpeur, informatique, my eco idea, my eco-idea, arthaud.dev, arthaudproust, etudiant, html, css, web, front-end, back-end" />
        <meta name="description" content="Je ne dirai pas que je suis passionné par la photo, seulement que j'aime en prendre pour retranscrire mon point de vue. Voici une gallerie photo qui retranscrit ma vision d'adolescent du monde." />
        <meta name="author" content="Arthaud PROUST" />
        <meta name="reply-to" content="contact@arthaud.dev" />
        <meta name='subject' content="developpement" />
        <meta name='language' content='FR' />
        <meta name='owner' content='Arthaud PROUST' />
        <meta name='url' content='https://photo.arthaud.dev' />
        <meta name='identifier-URL' content='https://photo.arthaud.dev' />
        <meta name='target' content='all' />
        <meta name="robots" content="all" />

            <!-- Open graph Meta -->
        <meta property="og:title" content="Ma gallerie photo" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="Je ne dirai pas que je suis passionné par la photo, seulement que j'aime en prendre pour retranscrire mon point de vue. Voici une gallerie photo qui retranscrit ma vision d'adolescent du monde." />
        <meta property="og:site_name" content="photo.arthaud.dev" />
        <meta property="og:url" content="https://photo.arthaud.dev" />
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:image" content=""/>

           <!-- Twitter Meta Card -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Ma gallerie photo" />
        <meta name="twitter:site" content="photo.arthaud.dev" />
        <meta name="twitter:description" content="Je ne dirai pas que je suis passionné par la photo, seulement que j'aime en prendre pour retranscrire mon point de vue. Voici une gallerie photo qui retranscrit ma vision d'adolescent du monde." />
        <meta name="twitter:image" content="" />
        <meta name="twitter:image:alt" content="Photo"/>


        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" /> -->
        <meta name="apple-mobile-web-app-title" content="Arthaud Proust" />
        <link type="text/plain" href="https://photo.arthaud.dev/humans.txt" rel="author" />
        <link rel="canonical" href="https://photo.arthaud.dev/" />


        <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Gallerie",
            "author" : "Arthaud Proust",
            "url" : "https://photo.arthaud.dev",
            "sameAs" : [
            "https://www.facebook.com/arthaud.dev/",
            "https://www.instagram.com/arthau.d/?hl=fr"
            "https://www.linkedin.com/in/arthaud-proust"
            ],
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "none",
            "addressRegion": "none",
            "postalCode": "33000",
            "addressCountry": "FR"
            }
        }
        </script>

        <title>@yield('title')</title>

        <link rel="apple-touch-icon" sizes="57x57" href="/res/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/res/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/res/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/res/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/res/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/res/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/res/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/res/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/res/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/res/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/res/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/res/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/res/favicon-16x16.png">
        <link rel="manifest" href="/res/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

        <link rel="preload" href="/css/app.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link href="/css/app.min.css" rel="stylesheet"></noscript>
        
        @if(View::hasSection('style'))
        <link href="/css/@yield('style').css" rel="stylesheet">
        @else
        <link href="/css/master.css" rel="stylesheet">
        @endif

        <script src="/js/main.js" defer></script>

        <!-- <script src="/js/jquery.min.js"></script> -->
        <!-- <script src="/js/jquery.imageloader.js" defer></script> -->
    </head>
    <body>
        @if (Auth::check())
            @if(View::hasSection('header'))
                @yield('header')
            @else
            @endif
        @endif
        
        @yield('view')

        @if(!View::hasSection('nofooter'))
            @include('layouts.footer')
        @endif
         
            <!-- <script src="/js/bootstrap.bundle.min.js"></script> -->
    </body>
</html>

