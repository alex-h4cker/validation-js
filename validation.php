<!DOCTYPE html>
<html>
<head>
 <title>Search Box</title>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.2.6/purify.min.js"></script>
 <style type="text/css">
  .search-box {
   display: flex;
   align-items: center;
   border: 1px solid #ccc;
   padding: 10px;
   border-radius: 5px;
   width: 300px;
  }

  .search-box input[type="text"] {
   flex-grow: 1;
   border: none;
   margin-right: 10px;
   font-size: 16px;
  }

  .search-box button {
   background-color: #4CAF50; /* Green */
     border: none;
     color: white;
     padding: 10px 20px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     border-radius: 5px;

    }
    
    .search-box button:hover {
      background-color:#3e8e41; /* Dark Green */
    }
    
    p {
      margin-top :20px; 
      font-size :14pt; 
      color :red; 
    }
    
    h1{
      text-align:center; 
      margin-top :50px; 
      color:#4CAF50
    }
    
    
    

</style>
</head>
<body>

<h1>Search Box</h1>

<div class="search-box">
    <input type="text" id="search-input" placeholder="Enter your search query...">
    <button onclick="search()">Search</button>
</div>

<p id="result"></p>

<script type="text/javascript">
 function search() {
  var query = document.getElementById("search-input").value;
  var sanitizedQuery = DOMPurify.sanitize(query);
  document.getElementById("result").innerText = "You searched for: " + sanitizedQuery;
 }
</script>

</body>
</html>

<?php
if(isset($_GET['query'])) {
    $query = $_GET['query'];
    $sanitizedQuery = htmlspecialchars($query, ENT_QUOTES, 'UTF-8');
    echo "<p>You searched for: " . $sanitizedQuery . "</p>";
}
?>
