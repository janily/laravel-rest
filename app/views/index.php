<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Comment Application</title>
	<style>
		h3, h4 {
	font-family: 'Voltaire';
}

h4 {
	margin: 0;
}

.comment-block {
	position: relative;
	padding: 0 0 0 10em;
	margin: 0 0 1em 0;
}

.comment-author {
	position: absolute;
	left: 0;
	top: 0;
	width: 9em;
	background-color: #eee;
	padding: 0.5em;
}

.comment-text {
	position: relative;
	width: 100%;
	height: 100%;
	border-top: 1px solid #eee;
	padding: 0.5em 0.5em 0.5em 1em;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}

.comment-text p:last-child {
	margin: 0;
}

form {
	position: relative;
	padding: 0 0 0 10.5em;
}

.author-input {
	position: absolute;
	left: 0;
	top: 0;
	font-size: inherit;
	font-family: inherit;
	width: 10em;
	padding: 0.5em;
	margin: 0;
	border: 1px solid #eee;
	box-shadow: inset 1px 1px 3px rgba(0,0,0,0.1);
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}

textarea {
	font-size: inherit;
	font-family: inherit;
	width: 100%;
	height: 5em;
	padding: 0.5em;
	border: 1px solid #eee;
	box-shadow: inset 1px 1px 3px rgba(0,0,0,0.1);
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}

input[type="submit"] {
	/*appearance: none;*/
	background-color: #729d34;
	border: none;
	padding: 0.5em;
	font-size: inherit;
	font-family: 'Voltaire';
	color: white;
	opacity: 0.5;
	cursor: pointer;
}

input[type="submit"]:hover, input[type="submit"]:focus {
	opacity: 1;
	outline: none;
}
	</style>
</head>
<body>
<header>
	<h1>Comments</h1>
</header>
<div id='container'></div>
<script id="comment-template" type="text/ractive">
<div class='comment-box'>
  <div class='comment-list'>
    {{#comments}}
      <div class='comment-block'>
        <h4 class='comment-author'>{{author}}</h4>
        <div class='comment-text'>{{ text }}</div>
      </div>
    {{/comments}}
  </div>
  <form name='comment-form' class='comment-form' on-submit='post'>
    <input class='author-input' value='{{author}}' placeholder='Your name' required>
    <textarea value='{{text}}' placeholder='Say something...' required></textarea>
    <input type='submit' value='Submit comment'>
  </form>
</div>
</script>
<script src="http://cdn.staticfile.org/jquery/2.0.0/jquery.js"></script>
<script src='http://cdn.ractivejs.org/latest/ractive.js'></script>
<script src="/js/app.js"></script>
</body>
</html>