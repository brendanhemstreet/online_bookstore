//webpage where manager enters data for adding a new book

<html>


<body background="bg.jpg">

<div align="center">
<br>
<br>
<br>
<form action="add_book_success.php" method="POST">
	<input type="text" name="book" placeholder="bookID">
	<br>
	<input type="text" name="title" placeholder="title">
	<br>
	<input type="text" name="pub" placeholder="publisher">
	<br>
	<input type="text" name="lang" placeholder="language key">
	<br>
	<input type="text" name="date" placeholder="date">
	<br>
	<input type="text" name="num" placeholder="number of pages">
	<br>
	<input type="text" name="stock" placeholder="stock">
	<br>
	<input type="text" name="price" placeholder="price">
	<br>
	<input type="text" name="ibsn" placeholder="ibsn">
	<br>
	<input type="submit" value="add book">

</form>
</div>


</html>
