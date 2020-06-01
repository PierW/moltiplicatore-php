<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$title}}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <header>
      <h1>{{$titleForm}}</h1>
    </header>

    <main>
      <div class="container">
        <form class="calculator_form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
          <div class="row calculator_data">
            <div class="col-5">
              <input type="number" name="num1" placeholder="Primo numero" required>
            </div>
            <div class="col-2 container_operators">
              <select class="calculator_select" name="oper">
                <option value="somm">+</option>
                <option value="sott">-</option>
                <option value="div">/</option>
                <option value="molt">X</option>
              </select>
            </div>
            <div class="col-5">
              <input type="number" name="num2" placeholder="Secondo numero" required>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <input class="anim" type="submit" name="submit" value="CALCOLA">
            </div>
          </div>
        </form>

        @if($result)
          <p>Il risultato è : <strong>{{$result . '&euro;'}}</strong></p>
        @endif

        @if($sconto)
          <p>Hai uno sconto dal valore di: <strong>{{$sconto . '&euro;'}}</strong></p>
          <p><strong>Netto:</strong> {{($result - $sconto) . '&euro;'}}</p>
        @endif
      </div>
    </main>

    <footer>
      <div class="row">
        <div class="copyright col-12">
          <small>&copy; PW</small>
        </div>
      </div>
    </footer>


  </body>
</html>
