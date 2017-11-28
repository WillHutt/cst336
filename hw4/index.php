<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    
    <body>
        
        <nav>
            <a href="index.php">Home</a>
        </nav>
        
        <header>
            <h1>Which Penguin Are You?</h1>
        </header>
        
        <form id="Form" name="myForm">
            <div>
                <p id="ftitle">First Name: </p>
                <input type="text" name="firstname" id="fname"/>
                <br/>
                <p id="ltitle">Last Name:</p>
                <input type ="text" name ="lastname" id="lname"/>
                <br/>
                <input type ="radio" name="gender" value="Male" id="male"/>
                <p id="mtitle">Male</p>
                <input type="radio" name="gender" value="Female" id="female"/>
                <p id="fetitle">Female</p><br/>
                <p id="selector">Choose a Number</p>
                <select name="numbers" id="num">
                    <option value=""> </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <br/>
                <!--<input type="submit" value="Submit" id="submit"/>-->
                <button id ="submit" name="submits">Submit</button>
            </div>
        </form>
        
        <div id="penguins"></div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src=penguins.js></script>
        
        
        <footer>
            <hr>
            CST336 Hutt &copy;2017 
        </footer>
        
    </body>
    
</html>