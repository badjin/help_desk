<style>
	.navbar {
		font-weight: 300;
		-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.navbar form .md-form input {
		margin: 0 5px 1px 8px
	}

	.navbar .breadcrumb {
		padding: .3rem 0 0 1rem;
		margin: 0;
		font-size: 15px;
		font-weight: 300;
		background-color: inherit
	}

	.navbar .breadcrumb .breadcrumb-item {
		color: #fff
	}

	.navbar .breadcrumb .breadcrumb-item.active {
		color: rgba(255, 255, 255, 0.65)
	}

	.navbar .breadcrumb .breadcrumb-item:before {
		color: rgba(255, 255, 255, 0.65)
	}

	.navbar .navbar-toggler {
		border-width: 0;
		outline: 0
	}

	.navbar .nav-flex-icons {
		-webkit-box-orient: horizontal;
		-webkit-box-direction: normal;
		-ms-flex-direction: row;
		flex-direction: row
	}

	@media (max-width: 992px) {
		.navbar .container {
			width: 100%
		}

		.navbar .container .navbar-toggler-right {
			right: 0
		}
	}

	.navbar .nav-item .nav-link {
		display: block
	}

	.navbar .nav-item .nav-link.disabled:active {
		pointer-events: none
	}

	.navbar .nav-item .nav-link .fas,
	.navbar .nav-item .nav-link .fab,
	.navbar .nav-item .nav-link .far {
		padding-right: 3px;
		padding-left: 3px
	}

	@media (max-width: 992px) {
		.navbar .nav-item .nav-link {
			padding-right: 6px;
			padding-left: 6px
		}
	}

	.navbar .dropdown-menu {
		position: absolute !important;
		margin-top: 0
	}

	.navbar .dropdown-menu a {
		padding: 10px;
		font-size: .9375rem;
		font-weight: 300
	}

	.navbar .dropdown-menu a:not(.active) {
		color: #000
	}

	@media (max-width: 600px) {
		.navbar .dropdown-menu form {
			width: 17rem
		}
	}

	@media (min-width: 600px) {
		.navbar .dropdown-menu form {
			width: 22rem
		}
	}

	.navbar.navbar-light .navbar-nav .nav-item .nav-link.disbled {
		color: rgba(0, 0, 0, 0.3)
	}

	.navbar.navbar-light .navbar-nav .nav-item .nav-link.disbled:hover {
		color: rgba(0, 0, 0, 0.3)
	}

	.navbar.navbar-light .navbar-toggler-icon {
		cursor: pointer;
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E")
	}

	.navbar.navbar-light .breadcrumb .nav-item .nav-link,
	.navbar.navbar-light .navbar-nav .nav-item .nav-link {
		color: #000;
		-webkit-transition: .35s;
		transition: .35s
	}

	.navbar.navbar-light .breadcrumb .nav-item .nav-link:hover,
	.navbar.navbar-light .navbar-nav .nav-item .nav-link:hover {
		color: rgba(181, 69, 57, 0.7)
	}

	.navbar.navbar-light .breadcrumb .nav-item.active>.nav-link,
	.navbar.navbar-light .navbar-nav .nav-item.active>.nav-link {
		background-color: rgba(85, 106, 204, 0.1)
	}

	.navbar.navbar-light .breadcrumb .nav-item.active>.nav-link:hover,
	.navbar.navbar-light .navbar-nav .nav-item.active>.nav-link:hover {
		color: #000
	}

	.navbar.navbar-light .navbar-toggler {
		color: #000
	}

	.navbar.navbar-light form .md-form input {
		border-bottom: 1px solid #000
	}

	.navbar.navbar-light form .md-form input:focus:not([readonly]) {
		border-color: #4285f4
	}

	.navbar.navbar-light form .md-form .form-control {
		color: #000
	}

	.navbar.navbar-light form .md-form .form-control::-webkit-input-placeholder {
		font-weight: 300;
		color: #000
	}

	.navbar.navbar-light form .md-form .form-control::-moz-placeholder {
		font-weight: 300;
		color: #000
	}

	.navbar.navbar-light form .md-form .form-control:-ms-input-placeholder {
		font-weight: 300;
		color: #000
	}

	.navbar.navbar-light form .md-form .form-control::-ms-input-placeholder {
		font-weight: 300;
		color: #000
	}

	.navbar.navbar-light form .md-form .form-control::placeholder {
		font-weight: 300;
		color: #000
	}

	.navbar.navbar-dark .navbar-nav .nav-item .nav-link.disbled {
		color: rgba(255, 255, 255, 0.25)
	}

	.navbar.navbar-dark .navbar-nav .nav-item .nav-link.disbled:hover {
		color: rgba(255, 255, 255, 0.25)
	}

	.navbar.navbar-dark .navbar-toggler-icon {
		cursor: pointer;
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E")
	}

	.navbar.navbar-dark .breadcrumb .nav-item .nav-link,
	.navbar.navbar-dark .navbar-nav .nav-item .nav-link {
		color: #fff;
		-webkit-transition: .35s;
		transition: .35s
	}

	.navbar.navbar-dark .breadcrumb .nav-item .nav-link:hover,
	.navbar.navbar-dark .navbar-nav .nav-item .nav-link:hover {
		color: rgba(255, 255, 255, 0.75)
	}

	.navbar.navbar-dark .breadcrumb .nav-item.active>.nav-link,
	.navbar.navbar-dark .navbar-nav .nav-item.active>.nav-link {
		background-color: rgba(255, 255, 255, 0.1)
	}

	.navbar.navbar-dark .breadcrumb .nav-item.active>.nav-link:hover,
	.navbar.navbar-dark .navbar-nav .nav-item.active>.nav-link:hover {
		color: #fff
	}

	.navbar.navbar-dark .navbar-toggler {
		color: #fff
	}

	.navbar.navbar-dark form .md-form input {
		border-bottom: 1px solid #fff
	}

	.navbar.navbar-dark form .md-form input:focus:not([readonly]) {
		border-color: #4285f4
	}

	.navbar.navbar-dark form .md-form .form-control {
		color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::-webkit-input-placeholder {
		font-weight: 300;
		color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::-moz-placeholder {
		font-weight: 300;
		color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control:-ms-input-placeholder {
		font-weight: 300;
		color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::-ms-input-placeholder {
		font-weight: 300;
		color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::placeholder {
		font-weight: 300;
		color: #fff
	}

	@media (min-width: 600px) {
		.navbar.scrolling-navbar {
			padding-top: 12px;
			padding-bottom: 12px;
			-webkit-transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
			transition: background 0.5s ease-in-out, padding 0.5s ease-in-out
		}

		.navbar.scrolling-navbar .navbar-nav>li {
			-webkit-transition-duration: 1s;
			transition-duration: 1s
		}

		.navbar.scrolling-navbar.top-nav-collapse {
			padding-top: 5px;
			padding-bottom: 5px
		}
	}
</style>
{{--@section('panichd_nav_notices')--}}
{{--	<li class="nav-item {!! $n_notices == 0 ? 'disabled' : ($tools->fullUrlIs(route($setting->grab('main_route').'.notices')) ? 'active' : '') !!}" >--}}
{{--		<a class="nav-link" href="{{ $n_notices == 0 ? '#' : route($setting->grab('main_route').'.notices') }}" title="{{ $n_notices == 0 ? trans('panichd::lang.ticket-notices-empty') : trans('panichd::lang.nav-notices-number-title', ['num' => $n_notices]) }}">{{ trans('panichd::lang.ticket-notices-title') }} <span class="badge">{{ $n_notices }}</span></a>--}}
{{--	</li>--}}
{{--@endsection--}}

<li class="nav-item">
	<a class="nav-link" href="/tickets/userqnas">Q&A</a>
</li>

@section('panichd_nav_newest')
	@if($u->canViewNewTickets())
		<li class="nav-item dropdown {!! $tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\TicketsController@indexNewest')) || $tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\TicketsController@create')) || (isset($ticket) && $ticket->isNew()) ? "active" : "" !!}">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="{{ trans('panichd::lang.nav-new-tickets-title') }}">
				<span>{{ trans('panichd::lang.nav-new-tickets') }}</span>
				<span class="badge" style="cursor: help">
					{{ PanicHD\PanicHD\Models\Ticket::newest()->visible()->count() }}
				</span>
			</a>
			<ul class="dropdown-menu">
				<a class="dropdown-item {!! $tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\TicketsController@indexNewest').'*') ? "active" : "" !!}" href="{{ action('\PanicHD\PanicHD\Controllers\TicketsController@indexNewest') }}" title="{{ trans('panichd::lang.nav-new-dd-list-title') }}">{{ trans('panichd::lang.nav-new-dd-list') }}</a>
				<a class="dropdown-item {!! $tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\TicketsController@create').'*') ? "active" : "" !!}" href="{{ action('\PanicHD\PanicHD\Controllers\TicketsController@create') }}" title="{{ trans('panichd::lang.nav-create-ticket-title') }}">{{ trans('panichd::lang.nav-new-dd-create') }}</a>
			</ul>
		</li>
	@else
		<li class="nav-item {!! $tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\TicketsController@create')) ? "active" : "" !!}">
			<a class="nav-link" href="{{ action('\PanicHD\PanicHD\Controllers\TicketsController@create') }}" title="{{ trans('panichd::lang.nav-create-ticket-title') }}">
			<span>{{ trans('panichd::lang.nav-create-ticket') }}</span>
			</a>
		</li>
	@endif
@endsection

@section('panichd_nav_active')
	<li class="nav-item {!! $tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\TicketsController@indexDirect')) || (isset($ticket) && $ticket->isActive()) ? "active" : "" !!}">
		<a class="nav-link" href="{{ action('\PanicHD\PanicHD\Controllers\TicketsController@indexDirect') }}" title="{{ trans('panichd::lang.nav-active-tickets-title') }}">
			<span>{{ trans('panichd::lang.active-tickets-adjective') }}</span>

			<span class="badge" style="cursor: help">
				{{ PanicHD\PanicHD\Models\Ticket::active()->visible()->count() }}
			</span>
		</a>
	</li>
@endsection

@section('panichd_nav_complete')
	<li class="nav-item {!! $tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\TicketsController@indexComplete')) || (isset($ticket) && $ticket->isComplete()) ? "active" : "" !!}">
		<a class="nav-link" href="{{ action('\PanicHD\PanicHD\Controllers\TicketsController@indexComplete') }}" title="{{ trans('panichd::lang.nav-completed-tickets-title') }}">
			<span>{{ trans('panichd::lang.complete-tickets-adjective') }}</span>

			<span class="badge" style="cursor: help">
				{{ PanicHD\PanicHD\Models\Ticket::visible()->completedOnYear()->count() }}
			</span>
		</a>
	</li>
@endsection

@section('panichd_nav_search')
    @if($u->isAdmin() or $u->isAgent())
        <li id="nav_search_li" class="nav-item {!! request()->route()->getName() == $setting->grab('main_route').'.search' ? "active" : "" !!}">
            <a class="nav-link" href="{{ action('\PanicHD\PanicHD\Controllers\TicketsController@search_form') }}">
                <span>{{ trans('panichd::lang.searchform-nav-text') }}</span>
            </a>
        </li>
    @endif
@endsection

@section('panichd_nav_admin')
	@if($u->isAdmin())

		<li class="nav-item dropdown {!!
			$tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\DashboardController@index').'*') ||
			$tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\QnasController@index').'*') ||
			$tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\StatusesController@index').'*') ||
			$tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\PrioritiesController@index').'*') ||
			$tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\AgentsController@index').'*') ||
			$tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\MembersController@index').'*') ||
			$tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\CategoriesController@index').'*') ||
			$tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\NoticesController@index').'*') ||
			$tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\ConfigurationsController@index').'*') ||
			$tools->fullUrlIs(action('\PanicHD\PanicHD\Controllers\AdministratorsController@index').'*')
			? "active" : "" !!}">

			<a class="nav-link" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="{{ trans('panichd::admin.nav-settings') }}">
				<span>{{ $setting->grab('admin_button_text') }}</span>
			</a>

			@include('panichd::shared.nav_dropdown')
		</li>
	@endif
@endsection

@section('panichd_nav_all')
	@yield('panichd_nav_notices')
	@yield('panichd_nav_newest')
	@yield('panichd_nav_active')
	@yield('panichd_nav_complete')
	@yield('panichd_nav_search')
	@yield('panichd_nav_admin')
@endsection

@if(!isset($panichd_nav_custom))
	@yield('panichd_nav_all')
@endif
