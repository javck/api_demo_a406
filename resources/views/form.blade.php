<form action="form/submit" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<input type="text" name="title">
<input type="file" name="pic">
<input type="submit">
</form>
