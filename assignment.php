<html>
<head>
<title>PHP Pdf file Upload script : Example</title>
</head>

<body>

    
<div style="padding: 20px; border: 1px solid #999">


<h2>Upload PDF File :</h2>
<form enctype="multipart/form-data"
	action="<?php print $_SERVER['PHP_SELF']?>" method="post" >
<p><input type="hidden" name="MAX_FILE_SIZE" value="200000" /> <input
	type="file" name="filefield" /><br />
<br />
<input type="submit" value="upload!" /></p>
</form>

</div>
</body>
</html>
<?php

if(isset($_FILES['filefield'])){
$file=$_FILES['filefield'];
$upload_directory='uploads/';
$ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
$allowed_extensions=explode(',',$ext_str);
$max_file_size = 10485760;//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */
$ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character
if (!in_array($ext, $allowed_extensions) ) {
echo "only".$ext_str." files allowed to upload"; // exit the script by warning

} /* check file size of the file if it exceeds the specified size warn user */

if($file['size']>=$max_file_size){

echo "only the file less than ".$max_file_size."mb  allowed to upload"; // exit the script by warning

}

//if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

$path=md5(microtime()).'.'.$ext;

if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){

include('db_connection.php');

echo"Your File Successfully Uploaded";
$sql="INSERT INTO gravator VALUES ('', '$path')";

$objlist = mysqli_query($dbHandle,$sql);




if ($objlist)
{

echo "The file is moved to target directory."; //file can't moved with unknown reasons likr cleaning of server temperory files cleaning

}
}
}
/*

Hurrey we uploaded a file to server successfully.

*/

?>