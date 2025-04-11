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
              <!--   {{ dd($langs) }} -->
             <table>
            <thead>
                <tr>
                    <th>Langue</th>
                    <th>Type</th>
                    <th>Version</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($langs as $lang)
                    <tr>
                        <td>{{ $lang['lang'] }}</td>
                        <td>{{ $lang['type'] }}</td>
                        <td>{{ $lang['version'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </main>

@include('partials.footer')