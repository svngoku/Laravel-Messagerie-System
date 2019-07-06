<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Messagerie</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  </head>
  <body>
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h4 class="text-white texy-center">Messagerie</h4>
          <span class="text-muted">Systeme de Messagerie </span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
</div>
    <br>
    <div class="container">
        <h2>Liste des Messages</h2>
        @if (!count($messages))
          <span style="text-align: center;">
            <p>Aucun message posté <img src="../images/face.png" width="29" alt="sick"></p>

          </span>

        @else
          <table class="table">
            <thead>
              <tr>
                <th>Date</th>
                <th>Auteur</th>
                <th>Contenu</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($messages as $message)
                <tr>
                  <td> {{ $message->created_at->toDateString() }} </td>
                  <td>{{ $message->author_name }}</td>
                  <td>{{ $message->content }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @endif
        <br>
        <h2> Poster un message</h2>
        <hr>
        <form method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="author_name"> Pseudo: </label>
            <input required placeholder="Pseudo" class="form-control" id="author_name" name="author_name" type="text">
          </div>
          <br>
          <div class="form-group">
            <label for="content">Contenu: </label>
            <textarea required placeholder="Contenu" class="form-control" name="content" id="content"></textarea>
          </div>
          <br>
          <button type="submit"  class="btn btn-primary">Envoyer le message</button>
        </form>
    </div>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

</body>
</html>
