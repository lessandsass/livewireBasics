<div class="media mb-3">
    <img src="{{ $post->user->avatar() }}" class="mr-3 rounded-circle" style="width: 50px;" alt="avatar">

    <div class="media-body">
        <h5 class="mt-0">{{ $post->user->name }}</h5>
        {{ $post->body }}
    </div>
</div>
