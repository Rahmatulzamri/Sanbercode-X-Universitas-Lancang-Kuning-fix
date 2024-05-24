<!DOCTYPE html>
<html>
<head>
    <title>Buat Account Baru</title>
</head>
<body>
    <h1> Buat Account Baru! </h1>
    <p> <b>Sign Up Form</b> </p>

    <form action="/welcome" method="POST">
        @csrf
        <label>First Name:</label><br>
        <input type="text" name="first_name"><br><br>
        
        <label>Last Name:</label><br>
        <input type="text" name="last_name"><br><br>
        
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="perempuan"> Perempuan<br>
        <input type="radio" name="gender" value="laki_laki"> Laki-Laki<br>
        <input type="radio" name="gender" value="laki_laki"> Other<br>
        
        <label>Nationality:</label><br>
        <select name="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="Singapura">Singapura</option>
            <option value="Malaysia">Malaysia</option>
        </select><br><br>
        
        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language" value="Bahasa_Inggris"> indonesia<br>
        <input type="checkbox" name="language" value="English"> English<br>
        <input type="checkbox" name="language" value="Arabic"> Arabic<br>
        <input type="checkbox" name="language" value="lainnya"> Other<br><br>
        
        <label>Bio:</label><br>
        <textarea name="message" rows="10" cols="30"></textarea><br><br>
        
        <input type="submit" value="Sign Up"> 
    </form>
</body>
</html>