<!DOCTYPE html>
<html>

<body>
    <h1> File Upload Functionality</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>Select image to upload:</p>
        <input type="file" name="fileToUpload" id="fileToUpload" style="border: 1px solid grey; border-radius: 5px;">
        <hr>
        <input type="submit" value="Upload Image" name="submit">
    </form>

</body>

</html>