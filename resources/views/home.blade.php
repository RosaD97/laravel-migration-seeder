<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body class="container">
        <div class="container">
            <h1>Trains</h1>
        </div>

        <div class="d-flex flex-wrap gap-4">

                <table class="table table-borderless">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Azienda</th>
                          <th scope="col">Stazione di Partenza</th>
                          <th scope="col">Stazione di Arrivo</th>
                          <th scope="col">Orario di partenza</th>
                          <th scope="col">Orario di arrivo</th>
                          <th scope="col">Codice</th>
                          <th scope="col">In orario</th>
                          <th scope="col">Cancellato</th>
                        </tr>
                      </thead>
                      @foreach ($trains as $train)
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>{{ $train->azienda }}</td>
                          <td>{{ $train->stazione_di_partenza }}</td>
                          <td>{{ $train->stazione_di_arrivo }}</td>
                          <td>{{ $train->orario_di_partenza }}</td>
                          <td>{{ $train->orario_di_arrivo }}</td>
                          <td>{{ $train->codice_treno }}</td>
                          <td>{{ $train->in_orario }}</td>
                          <td>{{ $train->cancellato }}</td>
                        </tr>
                      </tbody>
                      @endforeach
                  </table>
                              
        </div>
    </body>
</html>
