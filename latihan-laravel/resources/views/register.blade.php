<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Form</title>
  </head>
  <body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>

    <form action="/signup" method="post">
        @csrf
      <label for="firstname">First name:</label><br /><br />
      <input type="text" name="firstname" id="firstname" /><br /><br />
      <label for="lastname">Last name:</label> <br /><br />
      <input type="text" name="lastname" id="lastname" /><br /><br />

      <label for="gender">Gender:</label><br /><br />
      <input type="radio" name="gender" value="Male" />Male<br />
      <input type="radio" name="gender" value="Female" />Female <br />
      <input type="radio" name="gender" value="Other" />Other<br /><br />

      <label> Nationality:</label><br /><br />
      <select name="nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="Iraq">Iraq</option>
        <option value="Palestine">Palestine</option>
        <option value="Jepang">Jepang</option></select
      ><br /><br />

      <label>Language Spoken</label><br /><br />
      <input type="checkbox" name="bahasa" value="Indonesia" />Bahasa Indonesia<br />
      <input type="checkbox" name="bahasa" value="English" />English<br />
      <input type="checkbox" name="bahasa" value="Other" />Other<br /><br />

      <label>Bio:</label><br /><br />
      <textarea name="bio" id="" cols="30" rows="10"></textarea><br /><br />

      <button type="submit">Sign Up</button>
    </form>
  </body>
</html>
