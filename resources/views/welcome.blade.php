
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="国际领先主机销售服务商">
    <title>{{ env('APP_NAME') }} - 国际领先主机销售服务商</title>
    <!-- Favicon -->

<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('/assets/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/font-awesome/css/font-awesome.min.css')}}" rel="s')}}tylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{asset('/assets/css/argon.css?v=1.0.1')}}" rel="stylesheet">
    <script src="{{asset('/assets/js/sweetalert2.all.min.js')}}"></script>
</head>

<body>
<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="/">
                <h4 style="color: white">{{ env('APP_NAME') }}</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                    aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="/">
                                <h4 style="color: white">{{ env('APP_NAME') }}</h4>
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="/" class="nav-link" data-toggle="dropdown-item" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text">首页</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{url('/buy/show')}}" class="nav-link" data-toggle="dropdown-item" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text">订购产品</span>
                        </a>
                    </li>

                                            <li class="nav-item dropdown">
                            <a href="{{url('/login')}}" class="nav-link" data-toggle="dropdown-item" role="button">
                                <i class="ni ni-ui-04 d-lg-none"></i>
                                <span class="nav-link-inner--text">登入</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{url('/register')}}" class="nav-link" data-toggle="dropdown-item" role="button">
                                <i class="ni ni-ui-04 d-lg-none"></i>
                                <span class="nav-link-inner--text">注册</span>
                            </a>
                        </li>
                                    </ul>
            </div>
        </div>
    </nav>
</header>
    <main>
        <div class="position-relative">
            <!-- shape Hero -->
            <section class="section section-lg section-shaped pb-250">
                <div class="shape shape-style-1 shape-default">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="container py-lg-md d-flex">
                    <div class="col px-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="display-3  text-white">{{ env('APP_NAME') }}
                                    <span>为你提供最专业的基础云服务</span>
                                </h1>
                                <p class="lead  text-white">{{ env('APP_NAME') }}
                                    提供全球最大的网络，无论您或您的客户身在何处，您都可以轻松扩展并轻松扩展低延迟基础架构解决方案！

                                </p>
                                <div class="btn-wrapper">
                                    <a href="{{url('/buy/show')}}" class="btn btn-warning btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="fa fa-shopping-cart"></i></span>
                                        <span class="btn-inner--text">订购产品</span>
                                    </a>
                                    <a href="#server" class="btn btn-white btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"></span>
                                        <span class="btn-inner--text">了解更多</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SVG separator -->
                <div class="separator separator-bottom separator-skew">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                         xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </section>
            <!-- 1st Hero Variation -->
        </div>
        <section class="section section-lg pt-lg-0 mt--200">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row row-grid">
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                                            <i class="ni ni-check-bold"></i>
                                        </div>
                                        <h6 class="text-primary text-uppercase">在几秒钟内激活</h6>
                                        <p class="description mt-3">一旦您单击部署，{{ env('APP_NAME') }}云业务流程就会接管并在您想要的数据中心中订购您的实例 -
                                            通常在60秒内。.</p>
                                        <div>
                                            <span class="badge badge-pill badge-primary">24*7</span>
                                            <span class="badge badge-pill badge-primary">服务好</span>
                                        </div>
                                        <a href="{{url('/buy/show')}}" class="btn btn-primary mt-4">订购产品</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                            <i class="ni ni-istanbul"></i>
                                        </div>
                                        <h6 class="text-success text-uppercase">功能丰富的控制面板</h6>
                                        <p class="description mt-3">只需单击即可使用许多功能：重新启动，重新启动，重新安装，更改操作系统，视图控制台等等！</p>
                                        <div>
                                            <span class="badge badge-pill badge-success">功能强大</span>
                                            <span class="badge badge-pill badge-success">迅速响应</span>
                                        </div>
                                        <a href="{{url('/buy/show')}}" class="btn btn-success mt-4">订购产品</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                                            <i class="ni ni-planet"></i>
                                        </div>
                                        <h6 class="text-warning text-uppercase">在本地开发，全球部署</h6>
                                        <p class="description mt-3">{{ env('APP_NAME') }}
                                            提供全球最大的网络，无论您或您的客户身在何处，您都可以轻松扩展并轻松扩展低延迟基础架构解决方案！</p>
                                        <div>
                                            <span class="badge badge-pill badge-warning">网速快</span>
                                            <span class="badge badge-pill badge-warning">轻松扩展</span>
                                        </div>
                                        <a href="{{url('/buy/show')}}" class="btn btn-warning mt-4">订购产品</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-md-6 order-md-2">
                        <img src="{{asset('assets/img/theme/promo-1.png')}}" class="img-fluid floating">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="pr-md-5">
                            <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                                <i class="ni ni-settings-gear-65"></i>
                            </div>
                            <h3>使用{{ env('APP_NAME') }}加速您的应用程序！</h3>
                            <p>{{ env('APP_NAME') }}计算具有100％SSD和Intel CPU。
                            </p>
                            <ul class="list-unstyled mt-5">
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-settings-gear-65"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">可定制性</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-html5"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">站点安全</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">7*24小时</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-secondary" id="server">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-md-6">
                        <div class="card bg-default shadow border-0">
                            <img src="/assets/img/theme/img-1-1200x1000.jpg"
                                 class="card-img-top">
                            <blockquote class="card-blockquote">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                     class="svg-bg">
                                    <polygon points="0,52 583,95 0,95" class="fill-default"/>
                                    <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default"/>
                                </svg>
                                <h4 class="display-3 font-weight-bold text-white">无限的OS组合</h4>
                                <p class="lead text-italic text-white">
                                    部署CentOS，Debian，Ubuntu，Arch（以及更多！）。</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pl-md-5">
                            <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5">
                                <i class="ni ni-settings"></i>
                            </div>
                            <h3>专用资源</h3>
                            <p class="lead">使用{{ env('APP_NAME') }}，您可以租用25％，50％，75％或整个专用服务器，
                                {{ env('APP_NAME') }}平台的优势，包括多周期计费和快速配置！{{ env('APP_NAME') }}目前在洛杉矶，香港，纽约和日本（以及更多！）有售。</p>
                            <a href="{{url('/buy/show')}}" class="font-weight-bold text-warning mt-5">订购产品</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pb-0 bg-gradient-warning">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-md-6 order-lg-2 ml-lg-auto">
                        <div class="position-relative pl-md-5">
                            <img src="{{asset('/assets/img/ill/ill-2.svg')}}" class="img-center img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="d-flex px-3">
                            <div>
                                <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                                    <i class="ni ni-building text-primary"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h4 class="display-3 text-white">无缝地从部署到扩展。</h4>
                                <p class="text-white">{{ env('APP_NAME') }}优化了配置流程，以便在运行和扩展分布式应用程序，AI和机器学习工作负载，托管服务，客户端网站或CI
                                    /
                                    CD环境时节省团队时间。.</p>
                            </div>
                        </div>
                        <div class="card shadow shadow-lg--hover mt-5">
                            <div class="card-body">
                                <div class="d-flex px-3">
                                    <div>
                                        <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                                            <i class="ni ni-satisfied"></i>
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <h5 class="title text-success">集群部署</h5>
                                        <p>在我们的控制面板内或通过终端中的API，在几秒钟内配置多个虚拟机。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow shadow-lg--hover mt-5">
                            <div class="card-body">
                                <div class="d-flex px-3">
                                    <div>
                                        <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                            <i class="ni ni-active-40"></i>
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <h5 class="title text-warning">云防火墙</h5>
                                        <p>轻松保护您的基础架构，并立即定义所有虚拟机上可见的服务。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section section-lg">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-md-6 order-md-2">
                        <img src="{{asset('/assets/img/theme/promo-1.png')}}" class="img-fluid floating">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="pr-md-5">
                            <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5">
                                <i class="ni ni-settings-gear-65"></i>
                            </div>
                            <h3>从基础架构到大型开发团队都喜欢的业务</h3>
                            <p>从轻松的管理工具到强大的计算，存储和网络服务，我们提供了一体化云，帮助团队将更多时间用于为客户构建更好的软件。
                            </p>
                            <ul class="list-unstyled mt-5">
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-warning mr-3">
                                                <i class="ni ni-settings-gear-65"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">更快地构建更好的应用</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-warning mr-3">
                                                <i class="ni ni-html5"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">可预测的定价</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-warning mr-3">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">安全可靠</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-gradient-default">
            <div class="container pt-lg pb-300">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="display-3 text-white">云中的裸金属！</h2>
                        <p class="lead text-white">使用{{ env('APP_NAME') }}自动化管理专用服务器资源比以往更容易。在几分钟内在全球部署自定义物理服务器</p>
                    </div>
                </div>
                <div class="row row-grid mt-5">
                    <div class="col-lg-4">
                        <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                            <i class="ni ni-settings text-primary"></i>
                        </div>
                        <h5 class="text-white mt-3">跟吵闹的邻居说再见</h5>
                        <p class="text-white mt-3">服务器硬件全部为100％ -
                            零噪声邻居，零共享资源，无需担心计量CPU和IOPS资源限制。真正的单租户环境，没有传统专用服务器的管理开销。</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                            <i class="ni ni-ruler-pencil text-primary"></i>
                        </div>
                        <h5 class="text-white mt-3">直接访问硬件</h5>
                        <p class="text-white mt-3">您可以直接访问所有服务器资源，而无需任何虚拟化层。非常适合加速需要非虚拟化环境的资源密集型应用程序或工作负载！</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                            <i class="ni ni-atom text-primary"></i>
                        </div>
                        <h5 class="text-white mt-3">1Gb连接</h5>
                        <p class="text-white mt-3">每个专用服务器实例都包含一个可突发的1Gb网络连接。使低延迟和高速吞吐量更接近您的最终用户 </p>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section section-lg">
            <div class="container">
                <div class="row row-grid justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="display-3">看看客户是怎么评价我们的
                            <span class="text-success">我们不喜欢谈论自己</span>
                        </h2>
                        <p class="lead">不得不说，{{ env('APP_NAME') }}真的很棒 从开通到现在没有一次故障！希望一直好好做下去！</p>
                        <div class="btn-wrapper">
                            <a href="{{url('/buy/show')}}"
                               class="btn btn-primary mb-3 mb-sm-0">订购产品</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


<footer class="footer has-cards">
    <div class="container">
        <div class="row row-grid align-items-center my-md">
            <div class="col-lg-6">
                <h3 class="text-primary font-weight-light mb-2">心动不如行动!</h3>
                <h4 class="mb-0 font-weight-light">一个虚拟主机,圆你一个站长梦立即订购吧~.</h4>
            </div>
        </div>
        <hr>
        <div class="row align-items-center justify-content-md-between">
            <div class="col-md-6">
                <div class="copyright">
                    Entities collision Technology LLC
                    <a href="/" target="_blank"> {{ env('APP_NAME') }}</a>.
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-footer justify-content-end">
                    <li class="nav-item">
                        <a href="/" class="nav-link" target="_blank">客服帮助</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" target="_blank">服务协议</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" target="_blank">隐私协议</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Core -->
<script src="{{asset('assets/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/popper/popper.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/headroom/headroom.min.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('assets/js/argon.js?v=1.0.1')}}"></script>
</script>
</body>
</html>
