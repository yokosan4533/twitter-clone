    <html>
        <head>
        <title>@yield('title')</title>
           {{-- 一通り終わったらリファクタリングの勉強も兼ねてyieldの確認.あとrailsで言うところのappricationファイルの代わりを探す。 --}}
            <style>
                body {font-size:16pt;color:#999;}
                h1 { font-size:100pt; text-align:right; color:#eee;margin:-40px 0px -50px 0px;}
            </style>
        </head>
           <body>
             <h1>home</h1>
                 <p>
                   This is the home page for the
                   <a href="https://railstutorial.jp/">Ruby on Rails Tutorial</a>
                   sample application.
                 </p>
           </body>
    </html>
