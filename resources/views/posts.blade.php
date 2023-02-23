@include('partials.header')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="d-flex flex-column justify-content-center align-items-center gap-3">
      <div class="border col-6 p-4">

       <?php foreach ($posts as $post) : ?>

        <a href="/posts/<?=$post->slug;?>">
            <?= $post->title; ?>
        </a>

        <p class="post-content">
            <?= $post->body; ?>
        </p>

       <?php endforeach; ?>

    </div>
  </div>
</div>


@include('partials.footer')
