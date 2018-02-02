{{"This is student's index"}}

<form method="post" action="upload" enctype="multipart/form-data">
Name:<br/>
<input type="text" name="name"/><br/>
User Address:<br/>
<input type="text" name="user_address"/><br/>
Grade:<br/>
<input type="text" name="grade"/><br/>
<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
<input type="submit" name="submit" value="submit"/>
</form>