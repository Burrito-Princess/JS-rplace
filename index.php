

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="GET"> 
        <input type="submit" value="Push to database">
    </form>
    <div id="container">
        <div>
            <button class="colour_button" id="white" onclick="color('white')"></button>
            <button class="colour_button" id="oran" onclick="color('orange')"></button>
            <button class="colour_button" id="mag" onclick="color('magenta')"></button>
            <button class="colour_button" id="l_blue" onclick="color('lightblue')"></button>
            <button class="colour_button" id="yellow" onclick="color('yellow')"></button>
            <button class="colour_button" id="lime" onclick="color('lime')"></button>
            <button class="colour_button" id="h_pink" onclick="color('hotpink')"></button>
            <button class="colour_button" id="grey" onclick="color('grey')"></button>
            <button class="colour_button" id="l_grey" onclick="color('lightgrey')"></button>
            <button class="colour_button" id="cyan" onclick="color('cyan')"></button> 
            <button class="colour_button" id="purp" onclick="color('purple')"></button> 
            <button class="colour_button" id="blue" onclick="color('blue')"></button> 
            <button class="colour_button" id="brown" onclick="color('brown')"></button> 
            <button class="colour_button" id="green" onclick="color('green')"></button> 
            <button class="colour_button" id="red" onclick="color('red')"></button> 
            <button class="colour_button" id="black" onclick="color('black')"></button> 
        </div>
    </div>
    
    <?php include 'script.php'; ?>
</body>
</html>