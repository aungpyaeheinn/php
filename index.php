<?php
echo "<pre>" . print_r($_FILES, true) . "</pre>";
echo "<br>";
if (isset($_POST['submitBtn'])) {
    echo $_POST["name"];
    echo "<br>";
    echo $_POST["password"];
    echo "<br>";
    echo $_POST['city'];
    echo "<br>";
    echo $_POST['gender'];
    echo "<br>";
    print_r($_POST['language']);
    echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="px-3">
    <div class="container p-5">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div class="mb-2">
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="mb-2">
                <input type="text" name="password" class="form-control" placeholder="password">
            </div>
            <div class="mb-2">
                <select name="city" class="form-control">
                    <option value="">Select City</option>
                    <option value="Yangon">Yangon</option>
                    <option value="Mandalay">Mandalay</option>
                    <option value="Bago">Bago</option>
                </select>
            </div>
            <div class="mb-2">
                <input type="radio" name="gender" value="Male" id="male"><label for="male">Male</label>
                <input type="radio" name="gender" value="Female" id="female"><label for="female">Female</label>
            </div>
            <div class="mb-2">
                <label for="">Skills</label>
                <br>
                <input type="checkbox" name="language[]" value="PHP" id="PHP">
                <label for="PHP">PHP</label>
                <input type="checkbox" name="language[]" value="Javascript" id="Javascript">
                <label for="Javascript">Javascript</label>
                <input type="checkbox" name="language[]" value="Java" id="Java">
                <label for="Java">Java</label>
            </div>
            <div class="mb-2">
                <input type="file" name="photo" class="form-control">  
            </div>
            <button name="submitBtn" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>