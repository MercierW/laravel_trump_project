@include('partials.head')

<body class="antialiased">
        <header>
                @include('partials.nav')
                <h1>
                    {{ $title }}
                </h1>
        </header>
        <main>
            <div role="region" aria-labelledby="image">
                <img src="./asset/img_01.jpg" alt="">
            </div>
        </main>

@include('partials.footer')