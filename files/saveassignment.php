 <?php
            $file=$_FILES['filefield'];
            $title=$_POST['title'];
             $sub=$_POST['subcode'];
              $no=$_POST['no'];
              $usn=$_GET['usn'];
              $sem=$_GET['sem'];
             $sec=$_GET['sec'];
             

             $subcode=$sec.$sub;
            $upload_directory='uploads/';
            $ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
            $allowed_extensions=explode(',',$ext_str);
            $max_file_size = 10485760;//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */
            $ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character
            if (!in_array($ext, $allowed_extensions) ) {
            echo "only".$ext_str." files allowed to upload"; // exit the script by warning

            } /* check file size of the file if it exceeds the specified size warn user */

            if($file['size']>=$max_file_size){

 echo "<script>
            alert('Only the file less than ".$max_file_size."mb  allowed to upload! ');
              window.location.href='sample.php?usn=$usn';
             </script>";
            }

            //if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

            $path=$usn.'-'.$sub.'-'.$no.'.'.$ext;

            if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){

            include('db_connection.php');

            echo"Your File Successfully Uploaded";
            $sql="INSERT INTO assignments VALUES ('', '$path','$usn',$sem,$sec,'$subcode','$title',$no,0 ,NOW())";

            $objlist = mysqli_query($dbHandle,$sql);

            if(!$objlist)
     {
         echo "<script>
            alert('Oops! Something went wrong! ');
              window.location.href='sample.php?usn=$usn';
             </script>";
     }
     else
     {
           echo "<script>
            alert('Assignment submitted!');
                window.location.href='sample.php?usn=$usn';
             </script>";
     }
            }
            
            /*

            Hurrey we uploaded a file to server successfully.

            */
?>