
<!doctype html>
<head>
    <title>Index</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('build/assets/app-l0sNRNKZ.js') }}" rel="stylesheet" type="text/css">
</head>
<body style="padding:10px;">
    <h1>Hello/Index</h1>
    <p>{{$msg}}</p>

    <div id="app">
        <example-component></example-component>
    </div>
    
    <!-- Vue ライブラリを CDN で読み込む -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- Vue コンポーネントを含む JavaScript ファイルを読み込む -->
    <script src="{{ asset('build/assets/app-B8PlJpre.js') }}"></script>
</body>
</html>

