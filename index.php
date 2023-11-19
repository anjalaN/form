<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>contact page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>L'incription Acitvities</h1>

    <form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text" name="user_name" >
    </div>
    <br>
   <div>
      <label  for="prenom">Prénom:</label>
        <input  type="text"  id="prenom"  name="user_prenom">
    </div>
    <br>
    <div>
      <label  for="email">Email:</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <br>
    <div>
      <label for="telephone">Téléphone:</label>
      <input type="text" name="user_telephone">
    </div>
    <br>

    <div>
      <label for="subject">Subject:</label>
      <select id="subject" name="user_subject">
        <option value="tabletenis">Tabletenis</option>
        <option value="basketball">Basketball</option>
        <option value="piano">Piano</option>
      </select>
    </div>
    <div>
      <label for="message">Message:</label>
      <input type="textarea" name="user_message" row="10" cols="440">
    </div>

     <br>
    
      <input type="submit" name="submit" value="Submit">
    
  </form>
</body>
</html>


