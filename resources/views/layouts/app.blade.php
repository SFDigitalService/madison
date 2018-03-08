<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') | {{ config('app.name', 'Madison') }}</title>

    <!-- Social -->
    <meta property="og:site_name" content="{{ config('app.name', 'Madison') }}">
    <meta property="og:title" content="@yield('pageTitle')">
    <meta property="og:url" content="{{ Request::url() }}">
    @stack('meta')

    @if (config('madison.social_analytics.facebook_app_id'))
        <meta property="fb:app_id" content="{{ config('madison.social_analytics.facebook_app_id') }}" />
    @endif

    @if (config('madison.social_analytics.twitter_username'))
        <meta name="twitter:site" content="{{ config('madison.social_analytics.twitter_username') }}">
    @endif

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif|Poppins:400,700" rel="stylesheet">
    <link href="{{ asset(elixir('css/app.css')) }}" rel="stylesheet">
    @stack('styles')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @if (App::environment('production', 'staging') && !empty(config('services.hotjar.site_id')))
        @include('partials/hotjar-script')
    @endif

    @if (App::environment('production', 'staging') && !empty(config('services.rollbar.client_side_access_token')))
        @include('partials/rollbar-script')
    @endif


<style media="all">
@import url("/core/assets/vendor/normalize-css/normalize.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/ajax-progress.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/align.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/autocomplete-loading.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/fieldgroup.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/container-inline.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/clearfix.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/details.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/hidden.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/item-list.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/js.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/nowrap.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/position-container.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/progress.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/reset-appearance.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/resize.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/sticky-header.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/system-status-counter.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/system-status-report-counters.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/system-status-report-general-info.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/tabledrag.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/tablesort.module.css?p4kl2s");
@import url("/core/themes/stable/css/system/components/tree-child.module.css?p4kl2s");
@import url("/core/themes/stable/css/contextual/contextual.module.css?p4kl2s");
@import url("/core/assets/vendor/jquery.ui/themes/base/button.css?p4kl2s");
@import url("/core/assets/vendor/jquery.ui/themes/base/resizable.css?p4kl2s");
@import url("/core/assets/vendor/jquery.ui/themes/base/dialog.css?p4kl2s");
@import url("/core/themes/stable/css/quickedit/quickedit.module.css?p4kl2s");
@import url("/core/themes/stable/css/toolbar/toolbar.module.css?p4kl2s");
</style>
<style media="all">
@import url("/core/themes/stable/css/contextual/contextual.toolbar.css?p4kl2s");
@import url("/core/themes/stable/css/toolbar/toolbar.menu.css?p4kl2s");
@import url("/core/themes/stable/css/contextual/contextual.theme.css?p4kl2s");
@import url("/core/themes/stable/css/contextual/contextual.icons.theme.css?p4kl2s");
@import url("/core/themes/seven/css/components/quickedit.css?p4kl2s");
@import url("/core/themes/stable/css/quickedit/quickedit.theme.css?p4kl2s");
@import url("/core/themes/stable/css/quickedit/quickedit.icons.theme.css?p4kl2s");
@import url("/core/themes/stable/css/toolbar/toolbar.theme.css?p4kl2s");
@import url("/core/themes/stable/css/toolbar/toolbar.icons.theme.css?p4kl2s");
@import url("/core/themes/stable/css/user/user.icons.admin.css?p4kl2s");
@import url("/core/themes/stable/css/shortcut/shortcut.theme.css?p4kl2s");
@import url("/core/themes/stable/css/shortcut/shortcut.icons.theme.css?p4kl2s");
</style>
<style media="all">
@import url("/core/themes/classy/css/components/progress.css?p4kl2s");
@import url("/core/themes/classy/css/components/dialog.css?p4kl2s");
@import url("/core/themes/classy/css/components/action-links.css?p4kl2s");
@import url("/core/themes/classy/css/components/breadcrumb.css?p4kl2s");
@import url("/core/themes/classy/css/components/button.css?p4kl2s");
@import url("/core/themes/classy/css/components/collapse-processed.css?p4kl2s");
@import url("/core/themes/classy/css/components/container-inline.css?p4kl2s");
@import url("/core/themes/classy/css/components/details.css?p4kl2s");
@import url("/core/themes/classy/css/components/exposed-filters.css?p4kl2s");
@import url("/core/themes/classy/css/components/field.css?p4kl2s");
@import url("/core/themes/classy/css/components/form.css?p4kl2s");
@import url("/core/themes/classy/css/components/icons.css?p4kl2s");
@import url("/core/themes/classy/css/components/inline-form.css?p4kl2s");
@import url("/core/themes/classy/css/components/item-list.css?p4kl2s");
@import url("/core/themes/classy/css/components/link.css?p4kl2s");
@import url("/core/themes/classy/css/components/links.css?p4kl2s");
@import url("/core/themes/classy/css/components/menu.css?p4kl2s");
@import url("/core/themes/classy/css/components/more-link.css?p4kl2s");
@import url("/core/themes/classy/css/components/pager.css?p4kl2s");
@import url("/core/themes/classy/css/components/tabledrag.css?p4kl2s");
@import url("/core/themes/classy/css/components/tableselect.css?p4kl2s");
@import url("/core/themes/classy/css/components/tablesort.css?p4kl2s");
@import url("/core/themes/classy/css/components/tabs.css?p4kl2s");
@import url("/core/themes/classy/css/components/textarea.css?p4kl2s");
@import url("/core/themes/classy/css/components/ui-dialog.css?p4kl2s");
@import url("/core/themes/classy/css/components/messages.css?p4kl2s");
@import url("/themes/custom/cannabis/css/toolkit.css?p4kl2s");
@import url("/themes/custom/cannabis/css/cannabis.css?p4kl2s");
</style>

</head>
<body style="background-color:#1C3650;">

	<div class="site-container">
		<section ui-view="version" class="ng-scope"><div class="version-bar bar bg-charcoal ng-scope"><div class="row"><div class="medium-12 columns"><p class="text-right t-small c-white no-margin">This site is new. <a target="_blank" class="a-white lined" href="https://docs.google.com/forms/d/e/1FAIpQLSdwgsS1jkPH4dWq-63GDj94ugjhJw79u3xE_kF9e0MkLhMCgw/viewform"><strong>Let us know how to make it better</strong></a>.</p></div></div></div></section>

		<section ui-view="navigation" class="ng-scope">
			<nav class="top-bar ng-isolate-scope" ng-transclude="" id="nav-top-bar" role="navigation" top-bar="" style="height: 75px;">

				<div class="row ng-scope" id="nav-top-bar-row">
					<ul class="title-area">
						<li class="name">
							<h1 class="name-logo t-alt-sans">
								<a class="topfocus" title="San Francisco Office of Cannabis" href="https://officeofcannabis.sfgov.org/">San Francisco Office of Cannabis</a>
							</h1>
						</li>

						<li class="toggle-topbar menu-icon">
							<button aria-label="Open Menu" class="button-link t-caps open-nav-mobile">Menu
							<span class="ui-icon ui-static ui-large i-primary">
							<svg>
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#i-menu">#shadow-root (closed)
									<svg id="i-menu" viewBox="0 0 32 32" width="100%" height="100%">
										<title>menu</title>
										<path d="M26.24 14.4h-20.48c-0.883 0-0.96 0.715-0.96 1.6s0.077 1.6 0.96 1.6h20.48c0.883 0 0.96-0.715 0.96-1.6s-0.077-1.6-0.96-1.6zM26.24 20.8h-20.48c-0.883 0-0.96 0.715-0.96 1.6s0.077 1.6 0.96 1.6h20.48c0.883 0 0.96-0.715 0.96-1.6s-0.077-1.6-0.96-1.6zM5.76 11.2h20.48c0.883 0 0.96-0.715 0.96-1.6s-0.077-1.6-0.96-1.6h-20.48c-0.883 0-0.96 0.715-0.96 1.6s0.077 1.6 0.96 1.6z"></path>
									</svg>
								</use>
							</svg>
							</span>
							</button>
						</li>
					</ul>

			<section class="top-bar-section">
				<ul class="nav-menu right ng-scope" ng-include="'shared/templates/nav/_nav_items.html'">
<!--
					<li class="ng-scope"><a href="https://officeofcannabis.sfgov.org">Home</a></li>
					<li class="ng-scope"><a href="https://officeofcannabis.sfgov.org/regulation/documents">Documents</a></li>
//-->
				</ul>
			</section></div></nav>
		</section>
	</div>





    <div id="app" class="{{ isset($useDarkContentBg) ? 'dark-content' : '' }}">
       <nav id="main-nav" class="navbar navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li>
                            {{ Form::open(['route' => 'documents.index', 'method' => 'get', 'class' => 'navbar-form']) }}
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <input class="form-control" placeholder="{{ trans('messages.search.placeholder') }}" name="q" type="text">
                                </div>
                            {{ Form::close() }}
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('documents.index') }}">
                                @lang('messages.document.list')
                            </a>
                        </li>

                        @foreach ($headerPages as $page)
                            <li><a href="{{ $page->getUrl() }}">{{ $page->nav_title }}</a></li>
                        @endforeach

                        <li>
                            <span class="separator hidden-xs" role="separator"></span>
                            <hr class="visible-xs">
                        </li>

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            @if (Route::currentRouteName() === 'login' || Route::currentRouteName() === 'register')
                                @php($redirect = request()->input('redirect'))
                            @else
                                @php($redirect = Request::path())
                            @endif
                            <li>{{ Html::linkRoute('login', trans('messages.login'), ['redirect' => $redirect]) }}</li>
                            <li>{{ Html::linkRoute('register', trans('messages.register'), ['redirect' => $redirect]) }}</li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ trans('messages.user_greeting', ['name' => Auth::user()->fname]) }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('users.settings.edit', Auth::user()->id) }}">@lang('messages.settings')</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('users.sponsors.index', Auth::user()) }}">@lang('messages.sponsor.list')</a>
                                    </li>
                                    @if (Auth::user()->isAdmin())
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="{{ route('admin.site.index') }}">@lang('messages.administrator')</a>
                                        </li>
                                    @endif

                                    <li role="separator" class="divider"></li>

                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            @lang('messages.logout')
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div id="content">
            <div class="container">
                <div class="alert alert-warning alert-important browser-support hidden" role="alert">
                    @lang('messages.browser_support_banner')
                </div>

                @if (Auth::check() && Auth::user()->token)
                    <div class="alert alert-info alert-important" role="alert">
                        @php ($resendLink = route('users.resend_email_verification', Auth::user()))
                        @lang('messages.email_verification.banner', [
                        'resendLinkOpen' => '<a href="'.$resendLink.'" onclick="event.preventDefault(); document.getElementById(\'resend-email-verification-form\').submit();">',
                        'resendLinkClose' => '</a>',
                        ])

                        <form id="resend-email-verification-form" action="{{ $resendLink }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                @endif

                @include('flash::message')
            </div>

            @yield('full-width-content')

            <div class="container">
                @yield('content')
            </div>
        </div>

<!--
        <div id="main-footer">
            <footer class="container">
                <div class="logo">
                    <a href="https://opengovfoundation.org" title="OpenGov Foundation"><img src="{{ asset('img/logo.svg') }}"></a>
                </div>

                <ul>
                    @foreach ($footerPages as $page)
                        <li><a href="{{ $page->getUrl() }}" class="alt-link">{{ $page->nav_title }}</a></li>
                    @endforeach
                </ul>
            </footer>
        </div>
//-->

    </div>


<div class="footer-section"><div class="loading-overlay">
  <section ui-view="footer" class="ng-scope">
  <footer class="bg-tuatara padding-top--2x ng-scope">

    <div class="row text-center padding-bottom--2x">
      <div class="medium-12 columns">
        <img alt="City &amp; County of San Francisco Logo" class="city-logo margin-bottom--2x" src="/themes/custom/cannabis/images/logo-city.png">
      </div>
      <div class="medium-8 medium-centered columns">
        <p class="c-iron"><a class="a-white" href="http://officeofcannabis.sfgov.org">San Francisco Office of Cannabis</a><br>
          <span class="t-small c-iron divider">1 Dr Carlton B Goodlett Pl # 18, San Francisco, CA 94102</span>
          <span class="t-small c-iron padding">415-554-4420</span><br>
          <span class="t-small c-iron"><a class="c-white" href="mailto:officeofcannabis@sfgov.org">officeofcannabis@sfgov.org</a></span>
        </p>
      </div>
    </div>

    <section class="footer-sock bg-ebony padding-top--2x padding-bottom">
      <div class="row">
        <div class="medium-3 large-4 columns small-only-text-center">
          <span class="c-aluminum">© City &amp; County of San Francisco</span></div><div class="medium-9 large-8 columns small-only-text-center">
          <ul class="inline-list">
            <li><a class="a-aluminum" href="https://docs.google.com/forms/d/e/1FAIpQLSdwgsS1jkPH4dWq-63GDj94ugjhJw79u3xE_kF9e0MkLhMCgw/viewform">Give Feedback</a></li>
            <li><a class="a-aluminum" href="/disclaimer">Disclaimer</a></li>
          </ul>
        </div>
      </div>
    </section>

  </footer>
  </section>
  </div></div>


    @if (config('madison.google_analytics_property_id'))
        <!-- Google Analytics -->
        <script>
            window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
            ga('create', '{{ config('madison.google_analytics_property_id') }}', 'auto');
            ga('send', 'pageview');
        </script>
        <script async src='https://www.google-analytics.com/analytics.js'></script>
        <!-- End Google Analytics -->
     @endif

    <!-- Scripts -->
    <script src="{{ asset(elixir('js/vendor.js')) }}"></script>
    <script src="{{ asset(elixir('js/app.js')) }}"></script>
    @stack('scripts')
</body>
</html>
