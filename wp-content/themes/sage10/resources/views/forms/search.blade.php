
<div class="site-search">
    <form role="search" method="get" class="search-form position-relative overflow-hidden d-flex justify-content-center align-items-center" action="{{ home_url('/') }}">
        <label class="d-block w-100">
            <span class="sr-only">
                {{ _x('Search for:', 'label', 'sage') }}
            </span>
            <input type="search" class="form-control w-100" placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}" value="{{ get_search_query() }}" name="s">
        </label>
        <button class="btn-submit bg-secondary">
            {{ _x('Search', 'submit button', 'sage') }}
        </button>
    </form>
</div>