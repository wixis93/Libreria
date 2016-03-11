<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Librería</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<nav>
  <div class="nav-wrapper">
    <a href="" class="brand-logo">Libreria</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href=""><i class="material-icons left">add_shopping_cart</i>Carrito</a></li>
      <li><a href=""><i class="material-icons left">person</i>Mi Cuenta</a></li> 
      
    </ul>
  </div>
</nav>
<div class="row card-panel blue-grey lighten-4">
    <div class="col s4 card-panel green accent-1"><br/>
       <form action="/form" method="POST">
       		<i class="material-icons">account_box</i>
			<label>Nombre:</label>
			<input type="text" name="nombre"/><br/>

			<i class="material-icons">tag_faces</i>
			<label>Nick:</label>
			<input type="text" name="nick"/><br/>

			<label>Email:</label>
			<input type="email" name="email"/><br/>

			<i class="material-icons">lock</i>
			<label>Password:</label>
			<input type="password" name="password"/><br/>

			<i class="material-icons">contact_phone</i>
			<label>Telefono:</label>
			<input type="tel" name="telefono"/><br/>

			<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    		<i class="material-icons right">send</i>
 	 		</button>
	   </form><br/>
    </div>

      <div class="col s8 blue-grey lighten-2">
<table class="striped">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Item Name</th>
              <th data-field="price">Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>

        </tbody>
      </table>
       <br/><br/>
          <br/>

      </div>

    </div>
     
</body>
</html>
