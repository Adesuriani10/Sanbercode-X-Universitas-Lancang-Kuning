<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method= "GET">
        @csrf
        <label>First name:</label> <br/>
        <input type="text" name="full_name"/> <br/>
        <br/>

        <label>Last name:</label> <br/>
        <input type="text" name="last_name"/> <br/>
        <br/>

        <label>Gender:</label><br/>
        <input type="radio" value="1" name="gender" />Male <br/>
        <input type="radio" value="2" name="gender" />Female <br/>
        <input type="radio" value="3" name="gender" />Other <br/>
        <br/>

        <label>Nationality:</label> <br>
        <select name="nationality">
            <option value="1">Indonesia</option>
            <option value="2">Amerika Serikat</option>
            <option value="3">Jepang </option>
            <option value="4">Jerman</option>
            <option value="5">Prancis</option>
        </select>
        <br/><br/>

        <label> Language Spoken:</label> <br>
        <input type="checkbox" value="1" name="language Spoken" /> Bahasa Indonesia <br/>
        <input type="checkbox" value="1" name="language Spoken" /> English <br/>
        <input type="checkbox" value="1" name="language Spoken" /> Other <br/>
        <br/>
        <label>Bio:</label> <br/>
        <textarea name="bio" cols="30" rows="10"></textarea><br/>
        <br/>

        <input type="submit" value="Sing Up" />
    </form>
</body>
</html>