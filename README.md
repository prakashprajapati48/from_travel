Form travel
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School trip</title>
    <link rel="stylesheet" href="strip.css">
    <style>
        .container{
    width: 80%;
    padding: 10px;
    margin: auto;
}

h1,p{
    text-align: center;
}

input, textarea{
    width: 80%;
    padding: 15px;
    margin: 2px auto;
    border: 2px solid black;
    border-radius: 17px;
}

form{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

img{
    width: 100%;
    position: absolute;
    z-index: -2;
}

button{
    color: aliceblue;
    padding: 10px;
    margin: 15px;
    border: 2px solid black;
    border-radius: 15px;
    background-color: blueviolet;
}
    </style>
</head>
<body>
    <img src="sbg.jpeg" alt="sbg">
    <div class="container">
        <h1>Welcome to the traveles</h1>
        <p>You interested in travel so fill the form</p>

        <form action="strip.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter name">
            <input type="text" name="class" id="class" placeholder="Enter class">
            <input type="text" name="age" id="age" placeholder="Enter age">
            <input type="text" name="gender" id="gender" placeholder="Enter gender">
            <input type="email" name="email" id="email" placeholder="Enter email">
            <input type="number" name="phone" id="phone" placeholder="Enter phone">
            <textarea name="des" id="des" cols="30" rows="10"></textarea>
            <button class="btn">Submit</button>
        </form>

    </div>
</body>
</html>
