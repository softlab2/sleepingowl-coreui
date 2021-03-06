<mobile-sidebar-toggler v-if="hasSidebar"></mobile-sidebar-toggler>
<a class="navbar-brand" href="{{ url(config('sleeping_owl.url_prefix')) }}"></a>
<sidebar-toggler v-if="hasSidebar"></sidebar-toggler>

@hasStack('navbar')
    <b-nav is-nav-bar class="d-md-down-none">
        @stack('navbar')
    </b-nav>
@endif
<div class="ml-auto">
    @hasStack('navbar.right')
        <b-nav is-nav-bar>
            @stack('navbar.right')
        </b-nav>
    @endif
    <aside-toggler v-if="hasAside"></aside-toggler>
</div>
