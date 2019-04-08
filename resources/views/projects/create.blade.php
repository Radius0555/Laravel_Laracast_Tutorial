<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Create Projects</h1>

<form method="POST" action="/projects">

{{ csrf_field() }}

<div>
<input type="text" name="title" placeholder="Project titie">
</div>

<div>
<textarea name="description" placeholder="Project description"></textarea>
</div>

<div>
<button type="submit">Create Project</button>
</div>

</form>

</body>
</html>
