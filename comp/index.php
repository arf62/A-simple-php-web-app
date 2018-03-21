<html>
    <meta name="welcomePage" content="width=device-width, initial-scale=1.0">

</head>
<body style="font-family:Verdana;color:black;">

    <div style="background-color:#1AF5D4;;padding:15px;text-align:center;">
        <h1>Welcome to Compendium !</h1>
    </div>
<body onload="resetFunction()">
    <div>
        <form name="form1" id ="form1" action="View2.php"  onsubmit= "return validateForm()" method="POST">
            Feed Id:<br>
            <input type="text" name="feedId" required> <br>
            Search Terms:<br>
            <input type="text" name="searchTerms"/> <br>
            <input type="submit"  value ="submit" name="submitBtn"/>
        </form>
    </div>
</body>

<script>
    // Reset form on load.
    function resetFunction() {
        document.getElementById("form1").reset();
    }

    // Make sure user enters feed id, since it is mandatory.
    function validateForm() {
        var x = document.forms["form1"]["feedId"].value;
        if (x == "") {
            alert("Feed id must be filled out to proceed.");
            return false;
        }
    }
</script>

</html>