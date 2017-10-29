<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ma-z システムズ</title>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! Html::style('assets/css/styles-merged.css') !!}
    {!! Html::style('css/app.css') !!}
    {!! Html::style('assets/fonts/icomoon/style.css') !!}

    {!! Html::script('assets/js/vendor/html5shiv.min.js') !!}
    {!! Html::script('assets/js/vendor/respond.min.js') !!}


</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="text-transform: none">Ma-z システムズ</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#" data-nav-section="home">ホーム</a></li>
                <li><a href="#" data-nav-section="features">メリット</a></li>
                <li><a href="#" data-nav-section="contact">問い合わせ</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="probootstrap-hero prohttp://localhost/probootstrap/frame/#featuresbootstrap-slant" style="background-image: url(/img/programming-583923.jpg);" data-section="home" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row intro-text">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1 class="probootstrap-heading probootstrap-animate">
                    要件定義からシステム設計・開発まで
                    <br>
                    すべて一括して請け負います。
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="probootstrap-service-item probootstrap-animate" data-animate-effect="fadeIn">
                    <span class="icon icon-database"></span>
                    <h2>サーバーサイド</h2>
                    <p>CentOSやUbuntu、AWSのサーバーから、Mysqlやnginx等ミドルウェアの知識</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-service-item probootstrap-animate" data-animate-effect="fadeIn">
                    <span class="icon icon-hammer"></span>
                    <h2>バックエンド</h2>
                    <p>PHP(Laravel)を利用した開発</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-service-item probootstrap-animate" data-animate-effect="fadeIn">
                    <span class="icon icon-newspaper"></span>
                    <h2>フロントエンド</h2>
                    <p>HTML,CSSはもちろん、Vueを利用したSPAなどユーザビリティーの高い画面構築</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="probootstrap-section probootstrap-bg-light" id="features" data-section="features">
    <div class="container">
        <div class="row text-center mb100">
            <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
                <h2 class="mb30 text-black probootstrap-heading">メリット</h2>
                <p>サーバーサイドからフロントエンドまで通して1人で出来ることで、提供できる強み</p>
            </div>
        </div>
        <!-- END row -->
        <div class="row mb100">
            <div class="col-md-8 col-md-pull-2 probootstrap-animate">
                <p>
                    <img src="/img/office-1209640_1920.jpg" alt="Free Template by ProBootstrap.com" class="img-responsive probootstrap-shadow">
                </p>
            </div>
            <div class="col-md-4 col-md-pull-1 probootstrap-section-heading">
                <h3 class="text-primary probootstrap-heading-2">コミュニケーションコストが最小</h3>
                <p>
                <p>複数人雇う必要がなく、一括して任せれるためやり取りをするのが1人で済みます。</p>
                <p>コミュニケーションミスも少なくなり、そこにかかるコストを最小限にできます。</p>
                </p>
            </div>
        </div>
        <!-- END row -->
        <div class="row mb100">
            <!-- <div class="col-md-8 col-md-pull-2"> -->
            <div class="col-md-8 col-md-push-5 probootstrap-animate">
                <p>
                    <img src="/img/pexels-photo-356043.jpeg" alt="Free Template by ProBootstrap.com" class="img-responsive probootstrap-shadow">
                </p>
            </div>
            <!-- <div class="col-md-4 col-md-pull-1"> -->
            <div class="col-md-4 col-md-pull-8 probootstrap-section-heading">
                <h3 class="text-primary probootstrap-heading-2">一貫して出来ることで出来る提案</h3>
                <p>
                <p>サーバーサイドから、お客様の目に入るフロントエンドまでわかることで出来る提案があります。</p>
                </p>
                <p>例えば</p>
                <ul class="probootstrap-list">
                    <li class="probootstrap-check">リアルタイムで利用者へメッセージを送り画面に表示したい</li>
                    <li class="probootstrap-check">スマートフォンからPCまで広く利用できるアプリを早く安く構築したい</li>
                    <li class="probootstrap-check">ユーザーが操作しやすい今時の使い勝手でサービスを作りたい</li>
                </ul>
            </div>
        </div>
        <!-- END row -->

    </div>
</section>
<!-- END section -->

@include('alert')

<section class="probootstrap-section probootstrap-bg-light" data-section="contact" id="contactForm">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {{ Form::open(['route' => ['send.contact'], 'class' => 'probootstrap-form']) }}
                <h2 class="text-black mt0">Get In Touch</h2>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="お名前" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="メールアドレス" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="contact_message" cols="30" rows="10" placeholder="問い合わせ内容" required></textarea>
                </div>

                <div class="form-group">
                    {!! app('captcha')->display()!!}
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="送信">
                </div>
                {{ Form::close() }}
            </div>
            <div class="col-md-3 col-md-push-1">
                <ul class="probootstrap-contact-details">
                    <li>
                        <span class="text-uppercase">Email</span>
                        info@ma-z-systems.jp
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<footer class="probootstrap-footer">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <p class="probootstrap-social">
                    <a href="https://github.com/agiy" target="_blank"><i class="icon-github"></i></a>
                    <a href="https://bitbucket.org/agiy/" target="_blank"><i class="icon-git"></i></a>
                    <a href="https://www.facebook.com/musashi.miyamori" target="_blank"><i class="icon-facebook2"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                &copy; 2017 <a href="https://ma-z-systems.jp/">Ma-z Systems</a>
            </div>
        </div>
    </div>
</footer>


{!! Html::script('assets/js/scripts.min.js') !!}
{!! Html::script('assets/js/custom.js') !!}

</body>
</html>