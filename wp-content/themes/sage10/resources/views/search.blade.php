@extends('layouts.app')

@section('content')

  <section class="section-search-content py-20">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          @include('partials.page-header')
          @if (! have_posts())
          <div class="text-center">
            <x-alert type="warning" class="mb-3">
              {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>
            {!! get_search_form(false) !!}
          </div>
          @endif
          @while(have_posts()) @php(the_post())
            @include('partials.content-search')
          @endwhile
          {!! get_the_posts_navigation() !!}
        </div>
      </div>
    </div>
  </section>

@endsection
