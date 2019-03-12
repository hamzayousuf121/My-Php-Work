<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <script src="assets/annyang.min.js"></script>
</head>
<body>
    <form action="">
        <label for="name">Name:</label>
        <input type="text"name="name"id="name">
        <label for="name">Email:</label>
        <input type="email"name="email"id="email">
        <input type="submit"id="submit">
		<h1>HAmza</h1>
    </form>
<script>
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    ' h': function() {
      $('#submit').click();
    }
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
</script>
</script>
</body>
</html>