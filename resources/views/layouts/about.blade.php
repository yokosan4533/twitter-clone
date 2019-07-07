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
             <h1>about</h1>
             <p>
               <a href="https://railstutorial.jp/">Ruby on Rails Tutorial</a>
               is a <a href="https://railstutorial.jp/#ebook">book</a> and
               <a href="https://railstutorial.jp/#screencast">screencast</a>
               to teach web development with
               <a href="http://rubyonrails.org/">Ruby on Rails</a>.
               This is the sample application for the tutorial.
             </p>
           </body>
    </html>
