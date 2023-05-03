<?php
if(isset($_POST['search'])) {
    $query = $_POST['search-box'];
    $result = "<p>Search results for: " . $query . "</p>";
    echo htmlentities($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Box</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.2.7/purify.min.js"></script>
</head>
<body>
    <form method="post">
        <input type="text" name="search-box">
        <button type="submit" name="search">Search</button>
    </form>

    <div id="search-results"></div>

    <script>  
        function search() {
            var query = document.getElementsByName("search-box")[0].value;
            var result = DOMPurify.sanitize("<p>Search results for: " + query + "</p>");
            document.getElementById("search-results").innerHTML = result;
        }
    </script>
</body>
</html>
