<div class="row">
    <div class="card">
        <div class="card-block">
            <form action="/posts/{{ $post->id }}/comments" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for ="description">Add Comment</label>
                    <textarea  class="form-control" id="description" placeholder="Enter Your Message" style="height:100px" name="body"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i> Add comment </button>
                </div>
            </form>
        </div>
    </div>
</div>