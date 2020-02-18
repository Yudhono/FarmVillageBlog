<!-- SIDEBAR -->
<div class="col-lg-4 slideanim">
  <h4>Search</h4>
  <div class="hline"></div>
  <form action="#" method="post">
    <div class="input-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Here" required/>
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  <div class="spacing"></div>
  <h4>Categories</h4>
  <div class="hline"></div>
  @foreach($categories as $category)
    <p class="blog-p4"><a href="{{ url('blogo/'.$category->id) }}"><i class="fa fa-angle-right"></i>{{ $category->name }}</a></p>
  @endforeach
  <div class="spacing"></div>
  <h4>Recent Posts</h4>
  <div class="hline"></div>
  <ul class="popular-posts">
    @foreach($blogs as $blog)
    <li>
      <a href="{{ url('blog/'.$blog->slug) }}">
        <img src="{{asset('/images/' . $blog->image)}}" class="img-responsive" height="100" width="100" />
      </a>
      <p class="blog-p5"><a href="{{ url('blog/'.$blog->slug) }}">{{ substr(strip_tags($blog->body), 0, 60) }}{{ strlen(strip_tags($blog->body)) > 60 ? "..." : "" }}</a></p>
      <em>Posted on {{ date('M j, Y', strtotime($blog->created_at)) }}</em>
    </li>
    @endforeach
  </ul>
  <div class="spacing"></div>
  <h4>Popular Tags</h4>
  <div class="hline"></div>
  <p class="blog-p6">
  @foreach($tags as $tag)
    <a class="btn btn-theme" href="{{ url('blogos/'.$tag->id) }}" role="button">{{ $tag->name }}</a>
  @endforeach
  </p>
</div>
