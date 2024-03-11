
  <article @php(post_class())>
      <h3 class="article__entry-title mb-0">
        <a href="{{ get_permalink() }}">
          {!! $title !!}
        </a>
      </h3>
      @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
  
    <div class="entry-summary">
      @php(the_excerpt())
    </div>
  </article>

