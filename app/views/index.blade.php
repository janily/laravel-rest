<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel Comment Application</title>
  {{HTML::style('css/style.css')}}
</head>
<body>
<header>
  <h1>Comments</h1>
</header>
<div id='container'></div>
<script id="comment-template" type="text/ractive">
<div class='comment-box'>
  <div class='comment-list'>
    @{{#comments}}
      <div class='comment-block'>
        <h4 class='comment-author'>@{{author}}</h4>
        <div class='comment-text'>@{{ text }}</div>
      </div>
    @{{/comments}}
  </div>
  <form name='comment-form' class='comment-form' on-submit='post'>
    <input class='author-input' name="author" value='@{{author}}' placeholder='Your name' required>
    <textarea value='@{{text}}' name="text" placeholder='Say something...' required></textarea>
    <input type='submit' value='Submit comment'>
  </form>
</div>
</script>
<script src="http://cdn.staticfile.org/jquery/2.0.0/jquery.js"></script>
<script src='http://cdn.staticfile.org/ractive.js/0.3.7/ractive.min.js'></script>
<script src="/js/app.js"></script>
</body>
</html>